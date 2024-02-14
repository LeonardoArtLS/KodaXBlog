<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        return view("blog/articles", [
            "articles" => Articles::paginate(10)
        ]);
    }

    public function detail($id){
        $article = Articles::where("id", $id)->firstOrFail();
        $others = Articles::WhereNot("id", $id)->orderBy("id", "DESC")->limit(4)->get();
        //primeira parte da view é oque ela vai abri e a segunda parte é oque ela vai passar pra dentro da view
        return view("blog/article", [
        "article" => $article,
        "others" => $others]);
    }
}
