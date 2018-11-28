<?php

namespace App\Http\Controllers;

use App\House;
use App\PointsChange;
use App\PointsToday;
use DateTime;
use DateTimeZone;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PointController extends Controller
{
    public function add(House $house){
        return view('points.add', compact('house'));
    }

    public function store(Request $request, House $house){
        $validatedData = $request->validate([
            'value' => 'required_without:customValue|nullable|integer',
            'customValue' => 'required_without:value|nullable|integer|min:-1000000000|max:1000000000',
        ]);

        $value = (!empty(request('value'))) ? request('value') : request('customValue');
        $points_change = new PointsChange();
        $points_change->change = $value;
        $points_change->is_positive = ($value >= 0 ? true : false);

        $d = PointsToday::whereDate('created_at', Carbon::today())->where('house_id', '=', $house->id)->first();
        if ($d === null) {
            $points_today = new PointsToday();
            $points_today->score = 0;
            $points_today->house_id = $house->id;
            $points_today->save();
			$d = PointsToday::find($points_today->id);
        }
		if($d->score + $value >= 0){
			$d->score += $value;
			$d->save();
		}else{
			$d->score = 0;
			$d->save();
		}

        $points_change->points_today_id = $d->id;
        $points_change->save();
		return redirect('houses');
    }
    public function index(){
        return view('points.index');
    }

    public function getScore(){
        $houses = House::all();
        return view('points.score', compact('houses'));
    }
}
