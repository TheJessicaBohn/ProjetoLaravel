<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request\FilmeRequest;
use App\Models\Diretores;
use App\Models\Filmes;

class FilmesController extends Controller
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
        return view('filmes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diretores=$this->objDiretores->all();
        return view('createFilmes',compact('diretores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmeRequest $request)
    {
        $cad= [
            'title'=>request('title'),
            'id_diretor'=>request('id_diretor'),
            'duracao'=>request('duracao'),
            'origem'=>request('origem'),
            'ano'=>request('ano'),
            ];
         
            Filmes::create($cad);
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
        $filme=$this->objFilmes->find($id);
        return view('filmes',compact('filme'));
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
    public function update(FilmeRequest $request, $id)
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
