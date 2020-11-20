<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\DB;
use Illuminate\Http\Request;
use App\genre;
use App\movies;
use App\episodes;
class MainController extends Controller
{
    // public function home()
    // {
    //     $genre =DB::table('genre')->get();
    //     $movies = DB::table('movies')
    //         ->join('genre', 'genre.id', '=', 'movies.genre_id')
    //         ->select('genre.name', 'movies.title','movies.photo', 'movies.id')
    //         ->get();
    //         return view('home',['movies'=>$movies,'genre'=>$genre]);
    // }
    public function homes(){
      $movies=movies::get();
      $genre=genre::get();
      return view('home',['movies'=>$movies],['genre'=>$genre]);
   }
}
