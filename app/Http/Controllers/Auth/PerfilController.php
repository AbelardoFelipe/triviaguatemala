<?php

namespace App\Http\Controllers\Auth;

use App\Models\update;
use App\Models\Pregunta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    // Editar perfil del usuario
    public function editPerfil () {
        $user = update::all();

        $id_auth = Auth::id();
        $punteoArray = Pregunta::all();
        $punteo = json_decode($punteoArray);    
        $punto = DB::table('puntos')->where('user_id', '=', $id_auth)->where('punto', '=', 5)->sum('punto');
        $pregunta = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->max('numero_pregunta');
        $aprobado = DB::table('puntos')->where('user_id', '=', $id_auth)->where('aprobado', '=', 1)->count();

        return view('auth.perfil', compact('user','punteo','punto','pregunta','aprobado'));
    }

    public function updatePerfil (Request $request) {
        $user = update::find($request->id);
        $user->name = $request->name;
        $user->apellido = $request->apellido;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->password = Hash::make($request->password);
        $user->avatar = $request->avatar;
        $user->rol = $request->rol;

        $user->save();

        return redirect('/home');
    }
}
