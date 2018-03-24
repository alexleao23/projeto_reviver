<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Responsavel;

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
        return redirect('/admin');
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
}
