<?php

namespace App\Http\Controllers;

use App\Models\update;
use App\Models\Pregunta;
use App\Models\UserConfigs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
        $apiArray = DB::table('user_configs')->where('url_cache', '<>', "")->orderBy('id', 'DESC')->limit(1)->get(['tiempo_cache','url_cache','url_cache_equipo']);
        $apiCache = json_decode($apiArray);
        //dd($apiCache);
        if($apiCache == "" || $apiCache == null || $apiCache[0]->url_cache ==""){
            $time_cache = 20;
            $api_path = explode("=","http://ec2-44-203-35-246.compute-1.amazonaws.com/preguntas.php?nivel=1&grupo=",2);
            $api_new_path = $api_path[0];
            $api_team = 4;
            $expiresAt = Carbon::now()->addMinutes($time_cache);
        }else{
            $time_cache = $apiCache[0]->tiempo_cache;
            $api_path = explode("=",$apiCache[0]->url_cache,2);
            $api_new_path = $api_path[0];
        
            $api_team = $apiCache[0]->url_cache_equipo;
            $expiresAt = Carbon::now()->addMinutes($time_cache);
        }
        //dd($apiCache[0]->url_cache);

        if(($nivel-9 ) <= $nivel ){       
            if(Cache::has($nivel)){
                for($x=1; $x<=$nivel; $x++){
                    $preguntasArray = Cache::get($x);
                }                        
            }else{
                for($i=1; $i<=$nivel; $i++){
                    $preguntas = Http::get($api_new_path."=".$i."&grupo=".$api_team);
                    $preguntasArray = $preguntas->json();
                    Cache::put($i,$preguntasArray, $expiresAt);
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
