<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
/*        $news = News::where('language', '=', app()->getLocale() )
                    ->orderby('published','desc')
                    ->get(['items_id',
                        'keywords',
                        'originId',
                        'title',
                        'published',
                        'content',
                        'visual_url',
                        'direction',
                        'language']);*/

        $news = News::where('language', '=', app()->getLocale() )
                    ->orderby('published','desc')
                    ->select(['items_id',
                        'keywords',
                        'originId',
                        'title',
                        'published',
                        'content',
                        'visual_url',
                        'direction',
                        'language'])
                    ->paginate(3);


        return view('favorites', compact('news'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $news = News::where('language', '=', app()->getLocale() )
                    ->select(['items_id',
                        'keywords',
                        'originId',
                        'title',
                        'published',
                        'content',
                        'visual_url',
                        'direction',
                        'language'])
                    ->first(3);
        // $news = 'test';

        return view('favorite', compact('news'));
    }

}
