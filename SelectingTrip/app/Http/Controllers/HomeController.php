<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show a list of all of the application's trips.
     *
     * @return Response
     */
    public function index()
    {
        $departures = DB::select('SELECT distinct routes.departure from travel JOIN routes ON routes.id = travel.idRoute');
        $arrivals = DB::select('SELECT distinct routes.arrival from travel JOIN routes ON routes.id = travel.idRoute');
        return view('welcome', ['departures' => $departures, 'arrivals' => $arrivals]);
    }

}