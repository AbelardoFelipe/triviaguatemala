<?php

namespace App\Http\Controllers\Auth;

use App\Models\update;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    // Editar perfil del usuario
    public function editPerfil () {
        $user = update::all();
        return view('auth.perfil', compact('user'));
    }

    public function updatePerfil (Request $request) {
        $user = update::find($request->id);
        $user->name = $request->name;
        $user->apellido = $request->apellido;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->password = Hash::make($request->password);
        $user->avatar = $request->avatar;

        $user->save();

        return redirect('/home');
    }
}
