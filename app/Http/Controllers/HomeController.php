<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

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
    {
       // $categorias = Categoria::sum('cantidad')->groupBy('categoria')->get();
        $punteoArray = Pregunta::all();
        $punteo = json_decode($punteoArray);
        /* $punto = DB::table('puntos')->sum('punto'); */
        $punto = DB::table('puntos')->where('punto', '=', 5)->sum('punto');
       //dd($punto);
        return view('home', compact('punteo','punto'));
    }
}
