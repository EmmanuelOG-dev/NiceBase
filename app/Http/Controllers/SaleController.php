<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Motorcycle;
use App\Models\Costumer;
use App\Models\Seller;
use App\Models\Status;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SaleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Barryvdh\DomPDF\PDF as PDF;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $sales = Sale::paginate();

        return view('sale.index', compact('sales'))
            ->with('i', ($request->input('page', 1) - 1) * $sales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $sale = new Sale();
        $motorcycles = Motorcycle::all();
        $costumers = Costumer::all();
        $sellers = Seller::all();
        $statuses = Status::all();

        return view('sale.create', compact('sale', 'motorcycles', 'costumers', 'sellers', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaleRequest $request): RedirectResponse
    {
        Sale::create($request->validated());

        return Redirect::route('sales.index')
            ->with('success', 'Sale created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $sale = Sale::find($id);

        return view('sale.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $sale = Sale::find($id);
        $motorcycles = Motorcycle::all();
        $costumers = Costumer::all();
        $sellers = Seller::all();
        $statuses = Status::all();

        return view('sale.edit', compact('sale', 'motorcycles', 'costumers', 'sellers', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaleRequest $request, Sale $sale): RedirectResponse
    {
        $sale->update($request->validated());

        return Redirect::route('sales.index')
            ->with('success', 'Sale updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Sale::find($id)->delete();

        return Redirect::route('sales.index')
            ->with('success', 'Sale deleted successfully');
    }

    public function report(PDF $pdf): Response
    {
        $sales = Sale::all();

        $data = [
            'date' => date('d/m/Y'),
            'sales' => $sales,
        ];

        $pdf = $pdf->loadView('sale.report', $data);
        return $pdf->stream();
    }
}