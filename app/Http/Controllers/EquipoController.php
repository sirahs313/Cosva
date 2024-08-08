<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Mensaje;
use App\Models\Rechazada;
use Illuminate\Http\Request;

/**
 * Class EquipoController
 * @package App\Http\Controllers
 */
class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::paginate(10); // Mostrar 10 registros por página

    return view('equipo.index', compact('equipos'))
        ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    public function cat1()
    {
        $equipos1 = Equipo::where('categoria_id', 1)->paginate();

        return view('equipo.cat1', compact('equipos1'))
            ->with('i', (request()->input('page', 1) - 1) * $equipos1->perPage());
    }
    public function cat2()
    {
        $equipos2 = Equipo::where('categoria_id', 2)->paginate();

        return view('equipo.cat2', compact('equipos2'))
            ->with('i', (request()->input('page', 1) - 1) * $equipos2->perPage());
    }
    public function cat3()
    {
        $equipos3 = Equipo::where('categoria_id', 3)->paginate();

        return view('equipo.cat3', compact('equipos3'))
            ->with('i', (request()->input('page', 1) - 1) * $equipos3->perPage());
    }
    public function cat4()
    {
        $equipos4 = Equipo::where('categoria_id', 4)->paginate();

        return view('equipo.cat4', compact('equipos4'))
            ->with('i', (request()->input('page', 1) - 1) * $equipos4->perPage());
    }
    public function cat5()
    {
        $equipos5 = Equipo::where('categoria_id', 5)->paginate();

        return view('equipo.cat5', compact('equipos5'))
            ->with('i', (request()->input('page', 1) - 1) * $equipos5->perPage());
    }
    public function cat6()
    {
        $equipos6 = Equipo::where('categoria_id', 6)->paginate();

        return view('equipo.cat6', compact('equipos6'))
            ->with('i', (request()->input('page', 1) - 1) * $equipos6->perPage());
    }
    public function solicitudes()
    {
        $mensajes = Mensaje::paginate();

        return view('equipo.solicitudes', compact('mensajes'))
            ->with('i', (request()->input('page', 1) - 1) * $mensajes->perPage());
    }
    
    public function rechazadas()
    {
        $rechazadas = Rechazada::paginate();

        return view('equipo.rechazadas', compact('rechazadas'))
            ->with('i', (request()->input('page', 1) - 1) * $rechazadas->perPage());
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
    public function store(Request $request)
    {
        request()->validate(Equipo::$rules);

        $equipo = Equipo::create($request->all());

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo Registrado con Exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipo = Equipo::find($id);

        return view('equipo.show', compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);

        return view('equipo.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Equipo $equipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipo)
    {
        request()->validate(Equipo::$rules);

        $equipo->update($request->all());

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo Moficado con Exito!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $equipo = Equipo::find($id)->delete();

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo Eliminado Exitosamente');
    }
}
