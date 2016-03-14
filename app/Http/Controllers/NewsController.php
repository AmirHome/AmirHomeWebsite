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

        $news = News::where('language', '=', app()->getLocale())
            ->orderby('published', 'desc')
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
        $news = News::where('language', '=', app()->getLocale())
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
        $separator = '-';
        $string    = 'استراتژی احمدی‌نژاد برای بازگشت به قدرت/ واکنش هاشمی به کوفی خواندن تهرانی‌ها/ بهترین هدیه دوران ریاست جمهوری روحانی/ اتفاق بزرگ مجلس دهم؟';
        $string .= '3123123٤٥٦/;,';
        $string .= 'عربي ';
        $string .= 'زمینه‌ها ';
        $string .= ' başlık ülçü';
        $string .= ' Yazılım geliştiricilere en yüksek maaşı veren 20 ‘unicorn’ Glassdoor’un Kasım 2015’te yayınladığı rapora ';


        $str = persian_normalizer($string);
        $str = extra_slug($str);


        return view('favorite', compact('news'));
    }

}
