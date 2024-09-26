<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Status;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $statuses = Status::all();
        $data['totalSales'] = Sale::count();
        $data['openSales'] = Sale::whereHas('status', function ($query) {
            $query->where('status', '!=', 'Venta Cerrada');
            })->count();
        $data['closedSales'] = Sale::whereHas('status', function ($query) {
            $query->where('status', '=', 'Venta Cerrada');
            })->count();

        

        return view('home', $data);
    }
}
