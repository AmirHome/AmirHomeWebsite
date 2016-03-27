<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::where('language', '=', app()->getLocale())
            ->orderby('published', 'desc')
            ->select(['items_id',
                'keywords',
                'originId',
                'title',
                'slug',
                'published',
                'content',
                'visual_url',
                'direction',
                'language'])
            ->paginate(8);

        return view('favorites', compact('news'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $news = News::where('slug', '=', $slug)
            ->select(['items_id',
                'keywords',
                'originId',
                'title',
                'published',
                'content',
                'visual_url',
                'direction',
                'language'])
            ->first();

        return view('favorite', compact('news'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bulid_slugs()
    {
        $news = News::select(['id','title','keywords','content','language'])
                ->get();

        foreach ($news as $news_item) {
            $news_record = News::find($news_item->id);

           if ('fa' == $news_item->language) {
                $news_record->title = persian_normalizer($news_item->title);
                $news_record->keywords = persian_normalizer($news_item->keywords);
                $news_record->content = persian_normalizer($news_item->content);
                
                $news_record->slug = persian_slug($news_item->title);

            } elseif ('tr' == $news_item->language) {
                $news_record->slug = turkish_slug($news_item->title);

            } else{
                $news_record->slug = str_slug($news_item->title);
            }

            $news_record->save();
        }

        return 'Done bulid slugs';
    }
}
