<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function regisadmin(){
        return view('desktop-6');
    }
    public function iniciosesionAdmin(){
        return view('desktop-7');
    }
    public function solicitudes (){
        return view('desktop-8');
    }
    public function versoli (){
        return view('desktop-11');
    }
    public function crud (){
        return view('crud');
    }
    public function index()
    {
        $equipos = Equipo::paginate();

        return view('index', compact('equipos'))
            ->with('i', (request()->input('page', 1) - 1) * $equipos->perPage());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipo = new Equipo();
        return view('equipo.create', compact('equipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
   
}
