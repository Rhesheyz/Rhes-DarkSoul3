<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
		$player =	DB::table('players')->get();
    	$video = DB::table('videos')->get();
		$beritas = DB::table('beritas')->get();
		$games = DB::table('games')->get();
 
    	// mengirim data ke view
    	return view('welcome',['video' => $video,'beritas' => $beritas , 'games' => $games,'players' => $player]);
 
    }
}

