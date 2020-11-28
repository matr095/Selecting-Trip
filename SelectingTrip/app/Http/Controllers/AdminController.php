<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Show a list of all of the application's trips.
     *
     * @return Response
     */
    public function index()
    {
        $routes = $this->getRoutesList();
        return view('admin', ['routes' => $routes]);
    }

    public function postNewTrip(Request $request) {
        $idRoute = $request->input('route');
        $type = $request->input('type');
        $transportNumber = $request->input('transportNumber');
        $departureTime = $request->input('departureTime');
        $arrivalTime = $request->input('arrivalTime');
        DB::insert('insert into travel (idRoute, type, transportNumber, departureTime, arrivalTime) values (?, ?, ?, ?, ?)', [$idRoute, $type, $transportNumber, $departureTime, $arrivalTime]);
        $routes = $this->getRoutesList();
        return view('admin', ['routes' => $routes]);
    }

    public function getRoutesList() {
        $routes = DB::select('SELECT * from routes');
        return $routes;
    }
}