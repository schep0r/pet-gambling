<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        return view("game/index");
    }

    public function view()
    {
        return view("game/view");
    }

    public function spin()
    {

    }
}
