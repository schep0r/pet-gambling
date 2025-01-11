<?php

namespace App\Http\Controllers;

use App\VO\SlotSettings;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return view("game/index");
    }

    public function view()
    {
        $settings = new SlotSettings();
        return view(
            "game/view",
            ['settings' => $settings]
        );
    }

    public function spin()
    {

    }
}
