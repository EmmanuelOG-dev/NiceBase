<?php

namespace App\Http\Controllers;

use App\Models\Origin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OriginRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OriginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $origins = Origin::paginate();

        return view('origin.index', compact('origins'))
            ->with('i', ($request->input('page', 1) - 1) * $origins->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $origin = new Origin();

        return view('origin.create', compact('origin'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OriginRequest $request): RedirectResponse
    {
        Origin::create($request->validated());

        return Redirect::route('origins.index')
            ->with('success', 'Origin created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $origin = Origin::find($id);

        return view('origin.show', compact('origin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $origin = Origin::find($id);

        return view('origin.edit', compact('origin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OriginRequest $request, Origin $origin): RedirectResponse
    {
        $origin->update($request->validated());

        return Redirect::route('origins.index')
            ->with('success', 'Origin updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Origin::find($id)->delete();

        return Redirect::route('origins.index')
            ->with('success', 'Origin deleted successfully');
    }
}
