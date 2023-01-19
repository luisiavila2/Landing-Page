<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::all();
        return $articles;
    }

    
    public function store(Request $request)
    {
        //
        $articles = new Article(); 
        $articles->img= $request->img;
        $articles->nameProduct= $request->nameProduct;
        $articles->description= $request->description;
        $articles->price= $request->price;
        $articles->quantity= $request->quantity;

        $articles->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
       $id= $request->id;
       $article = Article::find($id);
       return $article;
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $article = Article::findOrFail($request->id);

        $article->product = $request->product;
        $article->description = $request->description;
        $article->price = $request->price;

        $article->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $article = Article::destroy($request->id);
        return $article;
    }
}
