<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    /**
     * Show a list of all of the application's trips.
     *
     * @return Response
     */
    public function index($trips)
    {
        return view('trip');
    }

    public function getList(Request $request) {
        /*$validatedData = $request->validate([
            'type' => 'required',
            'departure' => 'required|max:255',
            'arrival' => 'required|max:255',
        ]);*/
        $type = $request->input('type');
        $departure = $request->input('departure');
        $arrival = $request->input('arrival');
        if($departure == $arrival) {
            return view('trip', ['trips' => []]);
        }
        $trips = DB::select('SELECT * from travel, routes WHERE travel.idRoute = routes.id AND ( routes.departure = ? OR routes.arrival = ?) order by departure DESC, arrival DESC', [$departure, $arrival]);
        $trips = json_decode(json_encode($trips), true);
        //get the step of the connecting flight if necessary
        foreach($trips as $kk=>$vv) {
            if(in_array($departure, $vv) && in_array($arrival, $vv)) {
                $trips[$kk]['step'] = 1; // the only step if no connecting flight
            }
            else if(in_array($departure, $vv) && !in_array($arrival, $vv)) {
                $trips[$kk]['step'] = 1;
            }
            else if(!in_array($departure, $vv) && in_array($arrival, $vv)) {
                $trips[$kk]['step'] = 2;
            }
        }

        return view('trip', ['trips' => $trips]);
    }
}