@extends('layouts.master')

@section('menus')
                    <ul>
                        <li><a href="{{ url('/')}}/#one">{{ trans('general.about') }}</a></li>
                        <li><a href="{{ url('/')}}/#two">{{ trans('general.skill') }}</a></li>
                        <li><a href="{{ url('/')}}/#three">{{ trans('general.contact') }}</a></li>
                        <li><a href="#four" class="active">A Few Accomplishments</a></li>
                    </ul>
@stop

@section('content')
  <!-- Four -->
                            <section id="four">
                                <div class="container @if(session('locale') == 'fa') {{ 'right2left' }} @endif">
                                    <h3>A Few Accomplishments</h3>
                                    <p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
                                    <div class="features">
                                    	@foreach ($news as $key => $news_item)
                                        <article>
                                            <a href="#" class="image"><img src="{{$news_item->visual_url}}" alt="{{$news_item->title}}" /></a>
                                            <div class="inner">
                                                <h4>{{$news_item->title}}</h4>
                                                <p>{{str_limit($news_item->content, 255)}}</p>
                                            </div>
                                            <h6><i class="fa fa-link"></i> <a target="_blank" href="{{$news_item->originId}}">Resource</a>        <i class="fa fa-calendar-o"></i> {{$news_item->published}}</h6>
                                        </article>
                                    	@endforeach
                                    </div>
                                </div>
                            </section>
@stop