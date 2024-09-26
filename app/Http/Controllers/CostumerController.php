<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use App\Models\Origin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CostumerRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $costumers = Costumer::paginate();

        return view('costumer.index', compact('costumers'))
            ->with('i', ($request->input('page', 1) - 1) * $costumers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $costumer = new Costumer();
        $origins = Origin::all();

        return view('costumer.create', compact('costumer', 'origins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CostumerRequest $request): RedirectResponse
    {
        Costumer::create($request->validated());

        return Redirect::route('costumers.index')
            ->with('success', 'Costumer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $costumer = Costumer::find($id);

        return view('costumer.show', compact('costumer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $costumer = Costumer::find($id);
        $origins = Origin::all();

        return view('costumer.edit', compact('costumer', 'origins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CostumerRequest $request, Costumer $costumer): RedirectResponse
    {
        $costumer->update($request->validated());

        return Redirect::route('costumers.index')
            ->with('success', 'Costumer updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Costumer::find($id)->delete();

        return Redirect::route('costumers.index')
            ->with('success', 'Costumer deleted successfully');
    }
}
