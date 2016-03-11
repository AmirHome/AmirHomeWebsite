@extends('layouts.master')

@section('menus')
                    <ul>
                        <li><a href="#one" class="active">{{ trans('general.about') }}</a></li>
                        <li><a href="#two">{{ trans('general.skill') }}</a></li>
                        <li><a href="#three">{{ trans('general.contact') }}</a></li>
                        <li><a href="{{ url('/favorites')}}">{{ trans('general.favorite') }}</a></li>
                    </ul>
@stop

@section('content')
                        <!-- One -->
                            <section id="one">
                                <div class="container">
                                    <header class="major">
                                        <h2>Read Only</h2>
                                        <p>Just an incredibly simple responsive site<br />
                                        template freebie by <a href="http://html5up.net">HTML5 UP</a>.</p>
                                    </header>
                                    <p>Faucibus sed lobortis aliquam lorem blandit. Lorem eu nunc metus col. Commodo id in arcu ante lorem ipsum sed accumsan erat praesent faucibus commodo ac mi lacus. Adipiscing mi ac commodo. Vis aliquet tortor ultricies non ante erat nunc integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum.</p>
                                </div>
                            </section>

                        <!-- Two -->
                            <section id="two">
                                <div class="container">
                                    <h3>Things I Can Do</h3>
                                    <p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer lorem ipsum dolor sit amet.</p>
                                    <ul class="feature-icons">
                                        <li class="fa-code">Write all the code</li>
                                        <li class="fa-cubes">Stack small boxes</li>
                                        <li class="fa-book">Read books and stuff</li>
                                        <li class="fa-coffee">Drink much coffee</li>
                                        <li class="fa-bolt">Lightning bolt</li>
                                        <li class="fa-users">Shadow clone technique</li>
                                    </ul>
                                </div>
                            </section>

                        <!-- Three -->
                            <section id="three">
                                <div class="container">
                                    <h3>Contact Me</h3>
                                    <p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
                                    <form method="post" action="#">
                                        <div class="row uniform">
                                            <div class="6u 12u(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
                                            <div class="6u 12u(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
                                        </div>
                                        <div class="row uniform">
                                            <div class="12u"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
                                        </div>
                                        <div class="row uniform">
                                            <div class="12u"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
                                        </div>
                                        <div class="row uniform">
                                            <div class="12u">
                                                <ul class="actions">
                                                    <li><input type="submit" class="special" value="Send Message" /></li>
                                                    <li><input type="reset" value="Reset Form" /></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section>
@stop