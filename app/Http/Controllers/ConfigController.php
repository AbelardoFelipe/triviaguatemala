<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pregunta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id_auth = Auth::id();
        $punteoArray = Pregunta::all();
        $punteo = json_decode($punteoArray);    
        $punto = DB::table('puntos')->where('user_id', '=', $id_auth)->where('punto', '=', 5)->sum('punto');
        $pregunta = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->max('numero_pregunta');
        $aprobado = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->count();

        return view('configuracion.configuracion', compact('punteo','punto','pregunta','aprobado'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
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
