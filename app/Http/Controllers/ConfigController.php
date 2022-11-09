<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Pregunta;
use App\Models\UserConfigs;
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

        $switch_email = DB::table('user_configs')->where('user_id', '=', $id_auth)->where('notificacion_email', '=', 1)->orderByDesc('notificacion_email')->limit(1);
        $switch_music = DB::table('user_configs')->where('user_id', '=', $id_auth)->where('musica_fondo', '=', 1)->orderByDesc('musica_fondo')->limit(1);
        $cache_time = DB::table('user_configs')->where('user_id', '=', $id_auth)->where('tiempo_cache', '<>', '')->orderByDesc('tiempo_cache')->limit(1);
        $url_cache = DB::table('user_configs')->where('user_id', '=', $id_auth)->where('url_cache','<>','')->orderByDesc('url_cache')->limit(1)->get();
        $url_cache_equipo = DB::table('user_configs')->where('user_id', '=', $id_auth)->where('url_cache_equipo', '<>', "")->orderByDesc('url_cache_equipo')->limit(1);

        return view('configuracion.configuracion', compact('punteo','punto','pregunta','aprobado','switch_email','switch_music','cache_time','url_cache','url_cache_equipo'));
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
        $config = new UserConfigs;
        if($request->user_id !="" || $request->user_id !=null){
            $config->user_id = $request->user_id;
        }

        if($request->switch_email !="" || $request->switch_email !=null){
            
            $config->notificacion_email = true;
        }

        if($request->switch_music !="" || $request->switch_music !=null){
            $config->musica_fondo = true;
        }

        if($request->cache_time !="" || $request->cache_time !=null){
            $config->tiempo_cache = $request->cache_time;
        }

        if($request->url_cache !="" || $request->url_cache !=null){
            $config->url_cache = $request->url_cache;
        }

        if($request->url_cache_equipo !="" || $request->url_cache_equipo !=null){
            $config->url_cache_equipo = $request->url_cache_equipo;
        }
        //dd($config);
        $config->save();
        $id_auth = Auth::id();
        /* $switch_email = DB::table('user_configs')->where('user_id', '=', $id_auth)->where('notificacion_email', '=', 1)->orderByDesc('notificacion_email')->limit(1);
        $switch_music = DB::table('user_configs')->where('user_id', '=', $id_auth)->where('musica_fondo', '=', 1)->orderByDesc('musica_fondo')->limit(1);
        $cache_time = DB::table('user_configs')->where('user_id', '=', $id_auth)->where('tiempo_cache', '!=', "")->orderByDesc('tiempo_cache')->limit(1);
        $url_cache = DB::table('user_configs')->where('user_id', '=', $id_auth)->where('url_cache', '!=', "")->orderByDesc('url_cache')->limit(1);
        $url_cache_equipo = DB::table('user_configs')->where('user_id', '=', $id_auth)->where('url_cache_equipo', '!=', "")->orderByDesc('url_cache_equipo')->limit(1); */



        //dd($configs);
        return redirect('configuracion.configuracion');
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
    public function update(Request $request)
    {
        return $request;
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
