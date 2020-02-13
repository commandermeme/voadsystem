<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Vehicle;
use App\Record;

class DashboardController extends Controller
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
        $clients = Client::all()->count();
        $vehicles = Vehicle::all()->count();
        $violations = Record::all()->count();
        
        return view('dashboard')->with('clients', $clients)->with('vehicles', $vehicles)->with('violations', $violations);
    }
}
