<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ArticleController extends Controller
{
    public function article(){

        return view('article.article');
    }

    public function article_submit(Request $request){

    $article = Article::create([

        'name'=>$request-> name,
        'price'=>$request-> price,
        'seller'=>$request-> seller,
        ]);     

        return redirect(route('welcome'))->with('message', 'Articolo caricato correttamente!');

    }
}
