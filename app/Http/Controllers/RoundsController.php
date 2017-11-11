<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Game;
use App\Option;
use App\Round;
use App\User;

class RoundsController extends Controller
{
    public function create(Request $request, $id)
    {
        $game = Game::find($id);
        return view('gamerounds',compact('game'));
    }
}
