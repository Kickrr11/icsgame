<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\User;
use App\Game;
use App\Option;
use App\Round;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use App\Repositories\GameRepoInterface;
use Illuminate\Support\Facades\Session;

class GameRepository implements GameRepoInterface {
    public function getbyId($id = null) 
    {
        return Game::find($id);
    }

    public function create()
    {

    }

    public function store()
    {
        $newgame = new Game();
        $newgame->save();

        Session::put('newgame', $newgame);
    }

    public function getOptions() {
        return Option::inRandomOrder()->first();
    }
    
    public function getUser1()
    {
        return User::find(1);
    }
    
    public function getUser2()
    {
        return User::find(2);
    }

    public function roundCreate($game, $user)
    {
        $round = new Round();
        $round->game()->associate($game);
        $round->user()->associate($user);
        $round->save();
    }
}
