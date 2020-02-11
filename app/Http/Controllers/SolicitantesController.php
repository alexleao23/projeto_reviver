<?php

namespace App\Http\Controllers;

use App\Models\Solicitante;
use Illuminate\Http\Request;

class SolicitantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $solicitante;

    public function __construct(Solicitante $solicitante)
    {
        $this->solicitante = $solicitante;
    }

    public function index()
    {
        $solicitantes = $this->solicitante->select()->where('status', 'Em Espera')->orderBy('id', 'desc')->paginate(10);
        return view('solicitantes.index', compact('solicitantes'));
    }

    public function aceito()
    {
        $solicitantes = $this->solicitante->select()->where('status', 'Aceito')->orderBy('id', 'desc')->paginate(10);
        return view('solicitantes.index', compact('solicitantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitante = $this->solicitante;
        return view('cadastro', compact('solicitante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Solicitante::create($request->all());
        dd($request->all());
        return view('sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $validator = \Validator::make(
            ['id' => $id],
            ['id' => 'required|integer|exists:solicitantes,id']

        )->validate();

        $solicitante = $this->solicitante->find($id);
        return view('solicitantes.show', compact('solicitante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitante $solicitante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $solicitante = $this->solicitante->find($id);
        $solicitante->status = 'Aceito';
        $solicitante->save();
        return redirect('/admin/solicitantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solicitante = $this->solicitante->find($id);
        $solicitante->delete();
        return redirect('/admin/solicitantes');
    }
}
