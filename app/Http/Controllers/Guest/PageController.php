<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\movies;
use Illuminate\Http\Request;

class PageController extends Controller
{
		public function index(){

				$movie = movies::All();
				
				return view('welcome', compact('movie'));
        }
}
