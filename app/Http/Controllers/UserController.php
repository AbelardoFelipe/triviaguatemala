<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = User::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" class="boton-ver-datatable">Ver</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('user');      
    }
}
