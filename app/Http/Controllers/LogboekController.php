<?php

namespace App\Http\Controllers;

use App\vc;
use Illuminate\Http\Request;

class LogboekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('logboek.index');
    }

}
