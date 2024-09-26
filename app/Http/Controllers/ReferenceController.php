<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ReferenceRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $references = Reference::paginate();

        return view('reference.index', compact('references'))
            ->with('i', ($request->input('page', 1) - 1) * $references->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $reference = new Reference();
        $brands = Brand::all();
        $categories = Category::all();

        return view('reference.create', compact('reference', 'brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReferenceRequest $request): RedirectResponse
    {
        Reference::create($request->validated());

        return Redirect::route('references.index')
            ->with('success', 'Reference created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $reference = Reference::find($id);

        return view('reference.show', compact('reference'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $reference = Reference::find($id);
        $brands = Brand::all();
        $categories = Category::all();

        return view('reference.edit', compact('reference', 'brands', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReferenceRequest $request, Reference $reference): RedirectResponse
    {
        $reference->update($request->validated());

        return Redirect::route('references.index')
            ->with('success', 'Reference updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Reference::find($id)->delete();

        return Redirect::route('references.index')
            ->with('success', 'Reference deleted successfully');
    }
}
