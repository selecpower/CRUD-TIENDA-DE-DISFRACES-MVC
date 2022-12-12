<?php

namespace App\Http\Controllers;

use App\Models\Animador;
use Illuminate\Http\Request;

/**
 * Class AnimadorController
 * @package App\Http\Controllers
 */
class AnimadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animadors = Animador::paginate();

        return view('animador.index', compact('animadors'))
            ->with('i', (request()->input('page', 1) - 1) * $animadors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animador = new Animador();
        return view('animador.create', compact('animador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Animador::$rules);

        $animador = Animador::create($request->all());

        return redirect()->route('animadors.index')
            ->with('success', 'Animador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animador = Animador::find($id);

        return view('animador.show', compact('animador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animador = Animador::find($id);

        return view('animador.edit', compact('animador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Animador $animador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animador $animador)
    {
        request()->validate(Animador::$rules);

        $animador->update($request->all());

        return redirect()->route('animadors.index')
            ->with('success', 'Animador updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $animador = Animador::find($id)->delete();

        return redirect()->route('animadors.index')
            ->with('success', 'Animador deleted successfully');
    }
}
