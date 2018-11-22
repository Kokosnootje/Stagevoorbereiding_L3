<?php

namespace App\Http\Controllers;

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
}
