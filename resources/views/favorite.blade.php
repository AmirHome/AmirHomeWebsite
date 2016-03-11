@extends('layouts.master')

@section('head_extra')
        <!-- <link rel="stylesheet" type="text/css" href="{{ url('resources/assets/') }}/css/default.css" /> -->
        <link rel="stylesheet" type="text/css" href="{{ url('resources/assets/') }}/css/component.css" />

        <link rel="stylesheet" type="text/css" href="{{ url('resources/assets/') }}/FullscreenOverlayStyles/css/normalize.css" />
        <!-- <link rel="stylesheet" type="text/css" href="{{ url('resources/assets/') }}/FullscreenOverlayStyles/css/demo.css" /> -->
        <link rel="stylesheet" type="text/css" href="{{ url('resources/assets/') }}/FullscreenOverlayStyles/css/style7.css" />
@stop

@section('javascripts_extra')
            <script src="{{ url('resources/assets/') }}/js/jquery.infinitescroll.min.js"></script>

            <!-- <script src="{{ url('resources/assets/') }}/js/jquery.jscroll.min.js"></script> -->

            <!-- <script src="{{ url('resources/assets/') }}/js/modernizr.custom.js"></script> -->
            <!-- <script src="{{ url('resources/assets/') }}/js/grid.js"></script> -->
        
        <script src="{{ url('resources/assets/') }}/FullscreenOverlayStyles/js/modernizr.custom.js"></script>
        <script src="{{ url('resources/assets/') }}/FullscreenOverlayStyles/js/classie.js"></script>
        <script src="{{ url('resources/assets/') }}/FullscreenOverlayStyles/js/demo7.js"></script>

            <script src="{{ url('resources/assets/') }}/js/news.js"></script>
@stop

@section('menus')
                    <ul>
                        <li><a href="{{ url('/')}}/#one">{{ trans('general.about') }}</a></li>
                        <li><a href="{{ url('/')}}/#two">{{ trans('general.skill') }}</a></li>
                        <li><a href="{{ url('/')}}/#three">{{ trans('general.contact') }}</a></li>
                        <li><a href="{{ url('/favorites')}}">{{ trans('general.favorite') }}</a></li>
                    </ul>
@stop

@section('content')
                    <section id="five">
                        <div class="container @if(app()->getLocale() == 'fa') {{ 'right2left' }} @endif">
                            <section>
                                <h5>{{ $news->title }}</h5>
                                        <p>
                                        <span class="image left">
                                        <img src="{{ $news->image }}" alt="{{ $news->title }}" />
                                        </span>
                                        {{ $news->content }}
                                        </p>
                            </section>
                        </div>
                    </section>

@stop
