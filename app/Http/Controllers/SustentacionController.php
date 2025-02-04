<?php

namespace App\Http\Controllers;

use App\Models\Sustentacion;
use App\Models\Proyecto;
use Illuminate\Http\Request;

/**
 * Class SustentacionController
 * @package App\Http\Controllers
 */
class SustentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sustentacions = Sustentacion::paginate();

        return view('sustentacion.index', compact('sustentacions'))
            ->with('i', (request()->input('page', 1) - 1) * $sustentacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sustentacion = new Sustentacion();
        $proyectos = Proyecto::pluck('titulo', 'id');
        return view('sustentacion.create', compact('sustentacion', 'proyectos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sustentacion::$rules);

        $sustentacion = Sustentacion::create($request->all());

        return redirect()->route('sustentacions.index')
            ->with('success', 'Sustentacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sustentacion = Sustentacion::find($id);
        
        return view('sustentacion.show', compact('sustentacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sustentacion = Sustentacion::find($id);
        //variable para mostrar el titulo de proyectos en sustentacion
        $proyectos = Proyecto::pluck('titulo', 'id');
        return view('sustentacion.edit', compact('sustentacion', 'proyectos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sustentacion $sustentacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sustentacion $sustentacion)
    {
        request()->validate(Sustentacion::$rules);

        $sustentacion->update($request->all());

        return redirect()->route('sustentacions.index')
            ->with('success', 'Sustentacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sustentacion = Sustentacion::find($id)->delete();

        return redirect()->route('sustentacions.index')
            ->with('success', 'Sustentacion deleted successfully');
    }
}
