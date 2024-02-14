<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //inRandomOrder pega aleatorios, orderBy pega de tanela e a ordem asc(Crescente) ou desc(Decrescente)
        return view("blog/home", ["articles" => Articles::orderBy("id", "desc")->limit(3)->get()]);
    }
}
