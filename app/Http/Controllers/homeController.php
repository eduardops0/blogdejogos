<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;

class homeController extends Controller
{
    public function home()
    {
        $games = Games::all();
        return view('home', compact('games'));
    }

    public function info($title)
    {
        $game = Games::where('url', $title)->get();
        return view('info', compact('game'));
    }

    public function search(Request $request)
    {
        $title = $request->input('search');
        $games = Games::where('title', 'LIKE', '%' . $title . '%')->get();
        return view('search', compact('games'));
    }
    
}
