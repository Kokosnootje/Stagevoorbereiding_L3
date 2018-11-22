<?php

namespace App\Http\Controllers;

use App\House;
use App\PointsChange;
use App\PointsToday;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class PointController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
        return view('points.index');
	}
	
    public function add(House $house){
        return view('points.add', compact('house'));
    }

    public function store(House $house){
        $validatedData = request()->validate([
            'value' => '',
            'customValue' => '',
        ]);

        $value = (!empty(request('value'))) ? request('value') : request('customValue');
        $points_change = new PointsChange();
        $points_change->change = $value;
        $points_change->is_positive = true;

        $dt = new DateTime("now", new DateTimeZone('Europe/Amsterdam'));

        $d = PointsToday::where('created_at', '=', $dt)->where('house_id', '=', $house->id)->first();
        if ($d === null) {
            // time does not exist for house
            $points_today = new PointsToday();
            $points_today->score = 0;
            $points_today->house_id = $house->id;
            $points_today->save();
        }
        $points_change->points_today_id = $d;
        $points_change->save();
    }
}
