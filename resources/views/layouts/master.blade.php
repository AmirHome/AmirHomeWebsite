<!DOCTYPE HTML>
<!--
    Read Only by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        @include('partials.head')
        @yield('head_extra')
    </head>
    <body>

        <!-- Header -->
            <section id="header">
                @include('partials.sidebar')
            </section>

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Main -->
                    <div id="main">
                    @yield('content')
                    </div>

                <!-- Footer -->
                    <section id="footer">
                        <div class="container">
                            <ul class="copyright">
                                <li>&copy; Untitled. All rights reserved.</li>
                                <li>Develope: <a href="http://html5up.net">HTML5 UP</a></li>
                            </ul>
                        </div>
                    </section>

            </div>

        <!-- Scripts -->
        @include('partials.javascripts')
        @yield('javascripts_extra')

    </body>
</html>
