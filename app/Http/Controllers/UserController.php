<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('desktop-1');
    }
    public function contacto(){
        return view('desktop-5');
    } 
    public function pruebavista(){
        return view('desktop-9');
    }
    public function emergentesesion(){
        return view('desktop-26');
    }
    public function regisclien(){
        return view('desktop-27');
    }
    public function Registro(){
        return view('desktop-4');
    }
    public function catalogo(){
        return view('desktop-12');
    }
    public function sesion(){
        return view('desktop-13');
    }
    public function buscar(){
        return view('desktop-22');
    }
    public function confirmacionregistro(){
        return view('desktop-25');
    }
    public function micuenta(){
        return view('desktop-10');
    }
    public function micuentamod(){
        return view('desktop-14');
    }
    public function confirmacionguardado(){
        return view('desktop-16');
    }
}
