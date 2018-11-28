<?php

namespace App\Http\Controllers;


use App\PointsChange;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $points = PointsChange::All();

        return view('logbook.index', compact('points') );
    }

}
