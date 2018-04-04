<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsavel;

class ResponsaveisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Responsavel $responsavel)
    {
        $this->responsavel = $responsavel;
    }
    public function index(Request $request)
    {
     $responsavels = $this->responsavel->orderBy('id', 'desc')->paginate(10);
         return view('responsaveis.index', compact('responsavels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsavel = $this->responsavel;
        return view('responsaveis.create', compact('responsavel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Responsavel::create($request->all());
        return view('responsaveis.index');
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
            ['id' => 'required|integer|exists:responsavels,id']

        )->validate();

        $responsavel = $this->responsavel->find($id);
        return view('responsaveis.show', compact('responsavel'));
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

        $responsavel = $this->responsavel->find($id);

        return view('responsaveis.edit', compact('responsavel'));
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
        $responsavel = $this->responsavel->find($id);

        $responsavel->fill($request->all());



        return view('responsaveis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $responsavel = $this->responsavel->find($id);
    //     $responsavel->delete();
    //     return redirect('/admin/responsaveis');
    // }
}
