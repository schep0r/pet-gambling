<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Services\GameProvider;
use Illuminate\Http\Request;

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
            ['reels' => $provider->getScreen($game->reels, 9)]
        );
    }

    public function spin(GameProvider $provider, Request $request): array
    {
        return [];
    }
}
