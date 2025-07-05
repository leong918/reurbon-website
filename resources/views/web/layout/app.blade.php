<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/web/app.js', 'resources/scss/web/app.scss'])
</head>

<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">
    <main id="body-inner">
        <div id="page-transition">
            @include('web.layout.preloader')
            @include('web.layout.cursor')

            <div id="scroll-container">
                @include('web.layout.header')

                <div id="content-wrap">

                    <div id="page-content">
                        <div id="swup">
                            @yield('content')
                        </div>
                    </div>

                    @include('web.layout.footer')
                </div>
            </div>
        </div>
    </main>
</body>

</html>
