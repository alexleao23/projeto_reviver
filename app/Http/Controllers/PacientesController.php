<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Responsavel;
use App\Models\QuestionarioNutricao;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Paciente $paciente)
    {
        $this->paciente = $paciente;
    }

    public function index(Request $request)
    {
        $pacientes = $this->paciente;
        $query = $this->paciente->newQuery();    
        if($request->has('search')){
            $query->orWhere('nome', 'ilike', "%{$request->get('search')}%");
            $pacientes = $query->paginate(10);
        } else {
            $pacientes = $this->paciente->orderBy('id', 'desc')->paginate(10);
        }
         return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = $this->paciente;
        $responsaveis = Responsavel::all();
        return view('pacientes.create', compact('paciente', 'responsaveis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Paciente::create($request->all());
        return redirect('/admin/pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $validator = \Validator::make(
            ['id' => $id],
            ['id' => 'required|integer|exists:pacientes,id']
        )->validate();

        $paciente = $this->paciente->find($id);
        return view('pacientes.show', compact('paciente'));
     
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $validator = \Validator::make(
            ['id' => $id],
            ['id' => 'required|integer|exists:pacientes,id']
        )->validate();

        $paciente = $this->paciente->find($id);
        $responsavel = Responsavel::all();

        return view('pacientes.edit', compact('paciente', 'responsavel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente = $this->paciente->find($id);

        $paciente->fill($request->all());

        // if($paciente->save()){
        //     Session::flash('mensage_sucesso','Cadastro atualizado com sucesso!');
        // }
        return redirect('/admin/pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = $this->paciente->find($id);
        $paciente->delete();
        return redirect('/admin/pacientes');
    }

    public function questionarioNutricaoCreate($id)
    {
        $paciente = Paciente::find($id);
        return view('questionarios_nutricao.create', compact('paciente'));
    }

    public function questionarioNutricaoStore(Request $request)
    {
        $requestall = $request->all();
        // Cálculo IMC início
            $requestall['imc'] = $imc = $requestall['peso']/pow($requestall['altura'], 2);
            if ($imc < 19) {
                $requestall['pontuacao_imc'] = 0;
            }
            else if($imc >= 19 || $imc < 21){
                $requestall['pontuacao_imc'] = 1;
            }
            else if($imc >= 21 || $imc < 23){
                $requestall['pontuacao_imc'] = 2;
            }
            else{
                $requestall['pontuacao_imc'] = 3;
            }
        // Cálculo IMC fim
        // Cálculo Triagem início
            $requestall['pontuacao_triagem'] = $pontuacao_triagem = 
                $requestall['diminu_ingesta_alimentar'] +
                $requestall['perda_peso'] +
                $requestall['mobilidade'] +
                $requestall['stress_doenca'] +
                $requestall['problemas_neuropsicologicos'] +
                $requestall['pontuacao_imc'];
        // Cálculo Triagem fim
        // Cálculo Doente Consome início
            $arraydoenteCon = [$requestall['uma_porcao_diaria_leite'], $requestall['duas_porcoes_semanais_legumes'], $requestall['carne_peixe_aves']];
            $arraydoenteConCount = count(array_filter($arraydoenteCon));
            if($arraydoenteConCount < 2){
                $requestall['pontuacao_doente_consome'] = 0.0;
            }
            else if($arraydoenteConCount == 2){
                $requestall['pontuacao_doente_consome'] = 0.5;
            }
            else{
                $requestall['pontuacao_doente_consome'] = 1.0;
            }
        // Cálculo Doente Consome fim
        // Cálculo Global início
            $requestall['pontuacao_global'] = $pontuacao_global = 
                $requestall['vive_emcasa'] +
                $requestall['utiliza_muito_medicamentos'] +
                $requestall['lesoes_pele'] +
                $requestall['refeicoes_dia'] +
                $requestall['pontuacao_doente_consome'] +
                $requestall['duas_porcoes_diarias_frutas'] +
                $requestall['liquido_doente_consome_dia'] +
                $requestall['modo_alimentar'] +
                $requestall['doente_sua_saude'] +
                $requestall['pb'] +
                $requestall['pp'];
        // Cálculo Global fim
        // Cálculo Total início
            $requestall['pontuacao_total'] = $pontuacao_total = $pontuacao_triagem + $pontuacao_global;
        // Cálculo Total fim
        // Verificação do estado de saúde
            if ($pontuacao_total >= 24 && $pontuacao_total <= 30) {
                $requestall['estado_nutricional'] = "Normal";
            }
            else if($pontuacao_total >= 17 && $pontuacao_total <= 23.5){
                $requestall['estado_nutricional'] = "Risco de Desnutrição";
            }
            else if($pontuacao_total < 17){
                $requestall['estado_nutricional'] = "Desnutrido";
            }
        QuestionarioNutricao::create($requestall);
        return redirect('/admin/pacientes');
    }
}
