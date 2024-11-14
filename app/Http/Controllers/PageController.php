<?php

namespace App\Http\Controllers;

use App\Services\DataService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $users = DataService::prepareData();

        return view('home.index', ['users' => $users]);
    }
}
