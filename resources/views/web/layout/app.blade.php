<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reurbon</title>

    @vite(['resources/css/app.css', 'resources/js/web/app.js', 'resources/scss/web/app.scss'])
</head>

<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">
    <main id="body-inner">
        @include('web.layout.preloader')
        @include('web.layout.cursor')

        <div id="scroll-container">
            @include('web.layout.header')

            <div id="content-wrap">
                @include('web.layout.sliding-sidebar')

                <div id="swup">
                    @yield('content')
                </div>

                @include('web.layout.footer')
            </div>
        </div>
    </main>
    <!-- 基础JS库 -->
    <script src="js/imagesLoaded.pkgd.min.js"></script>
    <script src="js/pixi.min.js"></script>
    <script src="js/TweenMax.min.js"></script>

    <!-- 使用data属性标记需要重载的脚本 -->
    <script src="js/pixi-filters.min.js" data-swup-reload-script></script>
    <script src="js/rgbKineticSlider.js" data-swup-reload-script></script>
    @stack('scripts')
</body>

</html>
