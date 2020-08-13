<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request\DiretorRequest;
use App\Models\Diretores;
use App\Models\Filmes;

class DiretoresController extends Controller
{
    private $objDiretores;
    private $objFilmes;
    public function __construct()
    {
        $this->objDiretores= new Diretores();
        $this->objFilmes= new Filmes();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('diretores');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diretores=$this->objDiretores->all();
        return view('createDiretores',compact('diretores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiretorRequest $request)
    {
        $cad= [
        'name'=>request('name'),
        'pais'=>request('pais'),
        'ano'=>request('ano'),
        ];
        //dd($cad);
        Diretores::create($cad);
    if ($cad) {
        return redirect('/');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diretor=$this->objDiretores->find($id);
        return view('diretores',compact('diretor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiretorRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
