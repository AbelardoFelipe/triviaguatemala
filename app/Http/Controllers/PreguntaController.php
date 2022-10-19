<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PreguntaController extends Controller
{

    protected $preguntas;

    public function __construct(Pregunta $preguntas){
        $this->alumnos = $alumnos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $preguntas = Http::get('http://ec2-44-203-35-246.compute-1.amazonaws.com/preguntas.php?nivel=1&grupo=4');
        $preguntasArray = $preguntas->json();
        $contador = 1;
        //dd($preguntasArray);
        return view('preguntas.pregunta', compact('preguntasArray', 'contador'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $pregunta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(Pregunta $pregunta)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

        if($id <= 10){
            //echo $id;
        $preguntas = Http::get('http://ec2-44-203-35-246.compute-1.amazonaws.com/preguntas.php?nivel='.$id.'&grupo=4');
        $preguntasArray = $preguntas->json();
        $contador = $id;
        //dd($preguntasArray);
        return view('preguntas.pregunta', compact('preguntasArray', 'contador'));
        }else{
        $id = 1;  
        $preguntas = Http::get('http://ec2-44-203-35-246.compute-1.amazonaws.com/preguntas.php?nivel='.$id.'&grupo=4');
        $preguntasArray = $preguntas->json();
        $contador = $id;
        //dd($preguntasArray);
        return view('preguntas.pregunta', compact('preguntasArray', 'contador'));
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pregunta $pregunta)
    {
        //
    }
}
