<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use Illuminate\Http\Request;


class CRUDController extends Controller
{
    public function show($id)
    {
        $equipo = Equipo::find($id);

        return view('equipo.show', compact('equipo'));
    }
}
