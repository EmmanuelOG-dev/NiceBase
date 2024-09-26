<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SellerRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $sellers = Seller::paginate();

        return view('seller.index', compact('sellers'))
            ->with('i', ($request->input('page', 1) - 1) * $sellers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $seller = new Seller();

        return view('seller.create', compact('seller'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SellerRequest $request): RedirectResponse
    {
        Seller::create($request->validated());

        return Redirect::route('sellers.index')
            ->with('success', 'Seller created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $seller = Seller::find($id);

        return view('seller.show', compact('seller'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $seller = Seller::find($id);

        return view('seller.edit', compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SellerRequest $request, Seller $seller): RedirectResponse
    {
        $seller->update($request->validated());

        return Redirect::route('sellers.index')
            ->with('success', 'Seller updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Seller::find($id)->delete();

        return Redirect::route('sellers.index')
            ->with('success', 'Seller deleted successfully');
    }
}
