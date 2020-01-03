<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Vehicle;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $vehicles = Vehicle::all();
        $clients = Client::all();
        return view('vehicles.index')->with('vehicles', $vehicles)->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $vehicle = new Vehicle;
        $vehicle->client_id = $request->client_id;
        $vehicle->type = $request->type;
        $vehicle->plate_no = $request->plate_no;
        $vehicle->system_id = $request->system_id;
        $vehicle->save();

        return redirect('vehicles/'. $request->client_id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        $vehicles = Vehicle::where('client_id', $client->id)->get();

        return view('vehicles.show')->with('client', $client)->with('vehicles', $vehicles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.edit')->with('vehicle', $vehicle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->type = $request->type;
        $vehicle->plate_no = $request->plate_no;
        $vehicle->system_id = $request->system_id;
        $vehicle->save();

        return redirect('vehicles/'. $vehicle->client_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        
        return redirect('vehicles/'. $vehicle->client_id);
    }
}
