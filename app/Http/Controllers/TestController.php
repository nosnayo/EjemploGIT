<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;                    //especifica que quiere utilizar la clase article

class TestController extends Controller
{
    public function view($id)
    {
        //dd($id);
        $article = Article::find($id);
        
        //ver http://localhost:8090/laravel/c1/public/articles/view/3
        $article->category;
        $article->user;
        $article->tags;
        //dd($article);     imprimir
        //return view('test.index2', [ 'prueba' => $article]);  //puede ser en ver nombre prueba poner article
        return view('test.index2', [ 'article' => $article]);  //ejemplo 2
        //ahora queremo renderizar los datos hacia la vista hay 2 formas
        //1: pasar como 2do parametro a view
        //2: 
    }
}
