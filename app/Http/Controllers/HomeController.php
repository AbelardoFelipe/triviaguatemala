<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   // Get the currently authenticated user's ID...
        $id_auth = Auth::id();
        //---------------------------------------------
        $punteoArray = Pregunta::all();
        $punteo = json_decode($punteoArray);    
        $punto = DB::table('puntos')->where('user_id', '=', $id_auth)->where('punto', '=', 5)->sum('punto');
        $pregunta = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->max('numero_pregunta');
        $aprobado = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->count();

        return view('home', compact('punteo','punto','pregunta','aprobado'));
    }

    public function refresh(Request $request)
    {
        // Get the currently authenticated user's ID...
        $id_auth = Auth::id();
        //---------------------------------------------
        //Refresca el punteo en tiempo real
        $punto = DB::table('puntos')->where('user_id', '=', $id_auth)->where('punto', '=', 5)->sum('punto');
        $aprobado = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->count();        
        $puntos = [$punto,$aprobado];
        return $puntos;
    }
}
