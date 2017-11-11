<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use App\Repositories\GameRepoInterface;
use Illuminate\Support\Facades\Session;

class GamesController extends Controller
{
    private $game;

    public function __construct(GameRepoInterface $game )
    {
        $this->game = $game;
    }

    public function create()
    {
        return view('startgame');
    }

    public function store(Request $request)
    {
        $game = Session::get('newgame');
        $this->game->store();
        return redirect()->route('gameround.create', $game->id);
    }

    public function play(Request $request, $id)
    {
        $game = $this->game->getbyId($id);
        $player1option = $this->game->getoptions();
        $player2option = $this->game->getoptions();
        $player1 = $this->game->getUser1();
        $player2 = $this->game->getUser2();
        if ($game->rounds->count() > 2) {
            Session::put('game', $game);
            return $this->winner();
        }
        if ($player1option->id == $player2option->id) {
            return 'Draw!, refresh the page to play next round';
        }
        // To do in case of more possible option weaker than - method //
        if ($player1option->stronger->contains('stronger_id', $player2option->id)) {
            $this->game->roundCreate($game->id, $player1->id);
            return 'Player1: '.$player1option->name .', Player2: '. $player2option->name .', Player1 wins! refresh the page to play next round' ;
        } else {
            $this->game->roundCreate($game->id, $player2->id);
            return 'Player1: '.$player1option->name .', Player2: '. $player2option->name .', Player2 wins! refresh the page to play next round' ;
        }
    }

    public function winner() {
        $game = Session::get('game');
        $player1 = $this->game->getUser1();
        $player2 = $this->game->getUser2();
        $player1wonrounds = $game->rounds->where('winner_id', $player1->id);
        $player2wonrounds = $game->rounds->where('winner_id', $player2->id);

        if ($player1wonrounds->count() > $player2wonrounds->count()) {
            return 'Game over - ' .$player1->name. ' wins!';
        } else {
            return 'Game over - ' .$player2->name. ' wins!';
        }
    }
}