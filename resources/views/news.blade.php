@extends('layouts.master')

@section('head_extra')
        <!-- <link rel="stylesheet" type="text/css" href="{{ url('resources/assets/') }}/css/default.css" /> -->
        <link rel="stylesheet" type="text/css" href="{{ url('resources/assets/') }}/css/component.css" />
@stop

@section('javascripts_extra')
            <script src="{{ url('resources/assets/') }}/js/jquery.infinitescroll.min.js"></script>

            <!-- <script src="{{ url('resources/assets/') }}/js/jquery.jscroll.min.js"></script> -->
            <script src="{{ url('resources/assets/') }}/js/news.js"></script>

            <!-- <script src="{{ url('resources/assets/') }}/js/modernizr.custom.js"></script> -->
            <!-- <script src="{{ url('resources/assets/') }}/js/grid.js"></script> -->
       <!--  <script>
           $(function() {
               Grid.init();
           });
       </script> -->
@stop

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
                                <div class="container @if(app()->getLocale() == 'fa') {{ 'right2left' }} @endif">
                                    <h3>A Few Accomplishments</h3>
                                    <p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
<!--                 <div id="og-gridx" class="og-grid" >
                    <article>
                        <a href="#" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </article>
                                <div  >
                                    <article>
                                        <a href="#" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                                            <img src="images/thumbs/1.jpg" alt="img01"/>
                                        </a>
                                    </article>
                                </div>
                </div> -->
                                    <div class="features" id="scroll">
                                        @foreach ($news as $key => $news_item)
                                        <article>
                                        
                                            <a href="#" class="image" data-largesrc="{{ $image = ('null' == (strtolower($news_item->visual_url)) || 'none' == (strtolower($news_item->visual_url))) ? url('resources/images/stock').'/'.rand(0,19). '.jpg' : $news_item->visual_url }}" data-title="{{$news_item->title}}" data-description="{{$news_item->content}}">
                                            <img src="{{$image}}" alt="{{$news_item->title}}" />
                                            </a>
                                            <div class="inner">
                                                <h4>{{$news_item->title}}</h4>
                                                <p>{{str_limit($news_item->content, 255)}}</p>
                                            </div>
                                        </article>
                                        @endforeach
                                    </div>
                                    <!-- These are all the links that can be loaded. -->
                                    {!! $news->render() !!}

                                </div>
                            </section>
@stop
