<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use App\Models\Reference;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MotorcycleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $motorcycles = Motorcycle::paginate();

        return view('motorcycle.index', compact('motorcycles'))
            ->with('i', ($request->input('page', 1) - 1) * $motorcycles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $motorcycle = new Motorcycle();
        $references = Reference::all();

        return view('motorcycle.create', compact('motorcycle', 'references'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MotorcycleRequest $request): RedirectResponse
    {
        Motorcycle::create($request->validated());

        return Redirect::route('motorcycles.index')
            ->with('success', 'Motorcycle created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $motorcycle = Motorcycle::find($id);

        return view('motorcycle.show', compact('motorcycle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $motorcycle = Motorcycle::find($id);
        $references = Reference::all();

        return view('motorcycle.edit', compact('motorcycle', 'references'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MotorcycleRequest $request, Motorcycle $motorcycle): RedirectResponse
    {
        $motorcycle->update($request->validated());

        return Redirect::route('motorcycles.index')
            ->with('success', 'Motorcycle updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Motorcycle::find($id)->delete();

        return Redirect::route('motorcycles.index')
            ->with('success', 'Motorcycle deleted successfully');
    }
}
