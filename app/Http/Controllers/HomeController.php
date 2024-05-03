<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    function index()
    {
        $ingfo_sakkarepmu = 'ini cuma info';

        return view('home', ['ingfo_sakkarepmu' => $ingfo_sakkarepmu]);
    }
}
