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

class PreguntaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        // Get the currently authenticated user's ID...
        $id_auth = Auth::id();
        //---------------------------------------------
        $configsMusic = DB::table('user_configs')->where('user_id', '=', $id_auth)->orderBy('id', 'DESC')->limit(1)->get('musica_fondo');
        $userMusic = json_decode($configsMusic);

        dd($userMusic);
        $apiArray = DB::table('user_configs')->where('url_cache', '<>', "")->orderBy('id', 'DESC')->limit(1)->get(['tiempo_cache','url_cache','url_cache_equipo']);
        $apiCache = json_decode($apiArray);

        $time_cache = $apiCache[0]->tiempo_cache;
        $api_path = $apiCache[0]->url_cache;
        $api_team = $apiCache[0]->url_cache_equipo;
        $expiresAt = Carbon::now()->addMinutes($time_cache);

        if(Cache::has('preguntasArray')){
            $preguntasArray = Cache::get('preguntasArray');
        }else{
            $preguntas = Http::get($api_path."&grupo=".$api_team);
            $preguntasArray = $preguntas->json();
            Cache::put('preguntasArray',$preguntasArray,$expiresAt ?? null);
        }

        $punto = DB::table('puntos')->where('user_id', '=', $id_auth)->where('punto', '=', 5)->sum('punto');
        $pregunta = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->max('numero_pregunta'); 
        $aprobado = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->count();    
        $contador = 1;
        //dd($punteo);
        return view('preguntas.pregunta', compact('preguntasArray', 'contador','punto','pregunta','aprobado','userMusic'));        
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
        $pregunta = new Pregunta;
        $pregunta->user_id = $request->user_id;
        $pregunta->numero_pregunta = $request->numero_pregunta;
        $pregunta->nivel = $request->nivel;
        $pregunta->intento = $request->intento;
        $pregunta->punto = $request->punto;
        $pregunta->aprobado = $request->aprobado;        
        $pregunta->save();        
        return true;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $pregunta)
    {
        
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
        // Get the currently authenticated user's ID...
        $id_auth = Auth::id();
        //---------------------------------------------
        $configsMusic = DB::table('user_configs')->where('user_id', '=', $id_auth)->orderBy('id', 'DESC')->limit(1)->get('musica_fondo');
        $userMusic = json_decode($configsMusic);

        //dd($userMusic);

        $apiArray = DB::table('user_configs')->where('url_cache', '<>', "")->orderBy('id', 'DESC')->limit(1)->get(['tiempo_cache','url_cache','url_cache_equipo']);
        $apiCache = json_decode($apiArray);

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

        if($id <= 10){           
            if(Cache::has($id)){
                $preguntasArray = Cache::get($id);
            }else{
                $preguntas = Http::get($api_new_path."=".$id."&grupo=".$api_team);
                //$preguntas = Http::get('http://ec2-44-203-35-246.compute-1.amazonaws.com/preguntas.php?nivel='.$id.'&grupo=4');
                $preguntasArray = $preguntas->json();
                Cache::put($id,$preguntasArray,$expiresAt);
            }

            $contador = $id;
            $punto = DB::table('puntos')->where('user_id', '=', $id_auth)->where('punto', '=', 5)->sum('punto');
            $pregunta = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->max('numero_pregunta');
            $aprobado = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->count();       
            return view('preguntas.pregunta', compact('preguntasArray', 'contador','punto','pregunta','aprobado','userMusic'));
        }else{
            $id = 1;             
            if(Cache::has($id)){
                $preguntasArray = Cache::get($id);
            }else{
                $preguntas = Http::get('http://ec2-44-203-35-246.compute-1.amazonaws.com/preguntas.php?nivel='.$id.'&grupo=4');
                $preguntasArray = $preguntas->json();
                Cache::put($id,$preguntasArray);
            }
            $contador = $id;
            $punto = DB::table('puntos')->where('user_id', '=', $id_auth)->where('punto', '=', 5)->sum('punto');
            $pregunta = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->max('numero_pregunta');
            $aprobado = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->count();
            return view('preguntas.pregunta', compact('preguntasArray', 'contador','punto','pregunta','aprobado','userMusic'));
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
