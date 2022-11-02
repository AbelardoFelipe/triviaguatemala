<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
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
        $nivel = 10;
        $cache_time = 1440;
        $expiresAt = Carbon::now()->addMinutes($cache_time);

        if(($nivel-9 ) <= $nivel ){       
            if(Cache::has($nivel)){
                for($x=1; $x<=$nivel; $x++){
                    $preguntasArray = Cache::get($x);
                }                        
            }else{
                for($i=1; $i<=$nivel; $i++){
                    $preguntas = Http::get('http://ec2-44-203-35-246.compute-1.amazonaws.com/preguntas.php?nivel='.$i.'&grupo=4');
                    $preguntasArray = $preguntas->json();
                    Cache::put($i,$preguntasArray, $expiresAt ?? null);
                }               
            }
        }    

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
