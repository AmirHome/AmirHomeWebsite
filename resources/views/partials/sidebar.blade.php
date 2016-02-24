                <header>
                    <span class="image avatar">
                    <img src="http://www.gravatar.com/avatar/{{md5( 'amir.email@gmail.com' )}}?rating=PG&amp;size=300';" alt="Avatar  {{trans('general.name') }}">
                    </span>
                    <h1 id="logo"><a href="#">{{ trans('general.name') }}</a></h1>
                    <p>{!! trans('general.avatar_comment') !!}</p>
                    <ul class="list-inline">
                        <li><a href="language/en">{{ trans('general.en-language') }}</a></li>
                        <li><a href="language/tr">{{ trans('general.tr-language') }}</a></li>
                        <li><a href="language/fa">{{ trans('general.fa-language') }}</a></li>
                    </ul>
                </header>
                <nav id="nav">
                    @yield('menus')
                </nav>
                <footer>
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                        <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                    </ul>
                </footer>
