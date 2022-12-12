<?php

namespace App\Http\Controllers;

use App\Models\Atuendo;
use Illuminate\Http\Request;

/**
 * Class AtuendoController
 * @package App\Http\Controllers
 */
class AtuendoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atuendos = Atuendo::paginate();

        return view('atuendo.index', compact('atuendos'))
            ->with('i', (request()->input('page', 1) - 1) * $atuendos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $atuendo = new Atuendo();
        return view('atuendo.create', compact('atuendo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Atuendo::$rules);

        $atuendo = Atuendo::create($request->all());

        return redirect()->route('atuendos.index')
            ->with('success', 'Atuendo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atuendo = Atuendo::find($id);

        return view('atuendo.show', compact('atuendo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atuendo = Atuendo::find($id);

        return view('atuendo.edit', compact('atuendo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Atuendo $atuendo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atuendo $atuendo)
    {
        request()->validate(Atuendo::$rules);

        $atuendo->update($request->all());

        return redirect()->route('atuendos.index')
            ->with('success', 'Atuendo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $atuendo = Atuendo::find($id)->delete();

        return redirect()->route('atuendos.index')
            ->with('success', 'Atuendo deleted successfully');
    }
}
