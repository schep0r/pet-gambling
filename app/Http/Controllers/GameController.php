<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Services\GameProvider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class GameController extends Controller
{
    public function index()
    {
        return view("game/index");
    }

    public function view(Game $game, GameProvider $provider)
    {
        return view(
            "game/view",
            [
                'game' => $game,
                'reels' => $provider->getScreen($game->reels, 9)
            ]
        );
    }

    public function spin(Game $game, GameProvider $provider): View
    {
        return view(
            "game/view",
            [
                'game' => $game,
                'reels' => $provider->spin($game->reels, 9)
            ]
        );
    }
}
