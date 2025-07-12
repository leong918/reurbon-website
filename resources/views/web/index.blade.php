@extends('web.layout.app')

@section('content')
    <div id="home">
        <section class="section-banner">
            <div class="aspect-[21/10] overflow-hidden">
                <div id="rgbKineticSlider" class="rgb-kinetic-slider"></div>
            </div>
        </section>
    
        <div id="page-header" class="ph-full ph-cap-lg ph-ghost-scroll ph-image-cropped ph-content-parallax bg-[#ebebeb]">
            <div class="page-header-inner tt-wrap">
                <div class="ph-caption">
                    <h1 class="ph-caption-title">
                        <p class="text-[46px] mb-0 font-[500] text-theme">
                            One stop service of creative brand-tech agency with branding design, IT software development and
                            marketing services. We drive B2B and SMEs to a new generation of creative and strategic.
                        </p>
                    </h1>
                    <div class="ph-caption-title-ghost">
                        <div
                            class="ph-appear text-[300px] text-theme font-[500] font-(family-name:--font-anybody-ultracondensed)">
                            WE ARE REURBON
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <section class="tt-section bg-red-mesh">
            <div class="container mx-auto px-4">
                <div class="text-white md:px-20">
                    <div class="max-w-5xl mx-auto space-y-10">
                        <!-- Header Section -->
                        <div>
                            <p class="text-sm uppercase tracking-wide font-(family:--font-anybody-ultracondensed) text-white/80">
                                Look Over! Why your business challenge today
                            </p>
                            <h2 class="text-3xl md:text-4xl font-semibold leading-tight mt-2">
                                Most creative & marketing <br />
                                <span class="italic font-light">agency are failing you behind.</span>
                            </h2>
                        </div>
            
                        <!-- Problem Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-10">
                            <!-- Item 1 -->
                            <div>
                                <div class="text-4xl mb-4">
                                    <!-- Placeholder icon -->
                                    <div class="w-8 h-8 bg-white/50 rounded-sm"></div>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Lack of a Marketing Strategy</h3>
                                <p class="text-sm text-white/90">
                                    Designers make good-looking designs but without purpose, it amplify the current poor messaging to
                                    build your brands.
                                </p>
                            </div>
            
                            <!-- Item 2 -->
                            <div>
                                <div class="text-4xl mb-4">
                                    <!-- Placeholder icon -->
                                    <div class="w-8 h-8 bg-white/50 rounded-full"></div>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Poorly brand identity</h3>
                                <p class="text-sm text-white/90">
                                    Straightforward start and overlook brand identity development, make it difficult to attract the
                                    right target audiences.
                                </p>
                            </div>
            
                            <!-- Item 3 -->
                            <div>
                                <div class="text-4xl mb-4">
                                    <!-- Placeholder icon -->
                                    <div class="w-8 h-8 bg-white/50 rounded"></div>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Disconnected Digital Systems</h3>
                                <p class="text-sm text-white/90">
                                    Most providers lack an integrated digital systems approach, creating data silos, inconsistent user
                                    experiences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <div class="tt-section">
            <div class="tt-section-inner">
                <div id="portfolio-grid" class="pgi-hover">
                    <div class="tt-grid ttgr-layout-creative-2 ttgr-gap-4">
                        <div class="tt-grid-items-wrap isotope-items-wrap">
                            <div class="tt-grid-item isotope-item people">
                                <div class="ttgr-item-inner">
                                    <div class="portfolio-grid-item">
                                        <a href="single-project-1.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                            <div class="pgi-image-holder">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-image ttgr-height">
                                                        <img src="{{ asset('/template/img/portfolio/1200/portfolio-1.jpg') }}"
                                                            alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">
                                                    <a href="single-project-1.html">Elegant Women</a>
                                                </h2>
                                                <div class="pgi-categories-wrap">
                                                    <div class="pgi-category">People</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-grid-item isotope-item creative">
                                <div class="ttgr-item-inner">
                                    <div class="portfolio-grid-item">
                                        <a href="single-project-2.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                            <div class="pgi-image-holder">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-image ttgr-height">
                                                        <img src="{{ asset('/template/img/portfolio/1200/portfolio-2.jpg') }}"
                                                            alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">
                                                    <a href="single-project-2.html">The Chase</a>
                                                </h2>
                                                <div class="pgi-categories-wrap">
                                                    <div class="pgi-category">Creative</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-grid-item isotope-item people">
                                <div class="ttgr-item-inner">
                                    <div class="portfolio-grid-item">
                                        <a href="single-project-3.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                            <div class="pgi-image-holder">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-video-wrap ttgr-height">
                                                        <video class="pgi-video" loop muted preload="metadata"
                                                            poster="{{ asset('/template/vids/fashion-shoot.jpg') }}">
                                                            <source src="{{ asset('/template/vids/fashion-shoot.mp4') }}"
                                                                type="video/mp4">
                                                            <source src="{{ asset('/template/vids/fashion-shoot.webm') }}"
                                                                type="video/webm">
                                                        </video>
                                                    </figure>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">
                                                    <a href="single-project-3.html">Fashion Shoot</a>
                                                </h2>
                                                <div class="pgi-categories-wrap">
                                                    <div class="pgi-category">People</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tt-grid-item isotope-item nature">
                                <div class="ttgr-item-inner">
                                    <div class="portfolio-grid-item">
                                        <a href="single-project-4.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                            <div class="pgi-image-holder">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-image ttgr-height">
                                                        <img src="{{ asset('/template/img/portfolio/1200/portfolio-3.jpg') }}"
                                                            alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">
                                                    <a href="single-project-4.html">Enchanting Nature</a>
                                                </h2>
                                                <div class="pgi-categories-wrap">
                                                    <div class="pgi-category">Nature</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center anim-fadeinup">
                    <a href="portfolio-grid-creative.html" class="tt-scrolling-btn all-works-btn" data-cursor="All<br>Works">
                        <div class="scr-btn-inner ph-appear">
                            <div class="scr-btn-icon"><i class="fas fa-arrow-right"></i></div>
                            <div class="scr-btn-spinner">
                                <svg viewBox="0 0 500 500">
                                    <defs>
                                        <path
                                            d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                                            id="textcircle"></path>
                                    </defs>
                                    <text dy="30" class="scr-btn-text">
                                        <textPath xlink:href="#textcircle">See All Works - See All Works -</textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- ... -->
        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">
                <ul class="tt-logo-wall anim-fadeinup">
                    <li>
                        <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                            <img src="{{ asset('/template/img/clients/client-1-light.png') }}" class="lv-client-light"
                                alt="Client">
                            <img src="{{ asset('/template/img/clients/client-1-dark.png') }}" class="lv-client-dark"
                                alt="Client">
                        </a>
                    </li>
                    <li>
                        <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                            <img src="{{ asset('/template/img/clients/client-2-light.png') }}" class="lv-client-light"
                                alt="Client">
                            <img src="{{ asset('/template/img/clients/client-2-dark.png') }}" class="lv-client-dark"
                                alt="Client">
                        </a>
                    </li>
                    <li>
                        <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                            <img src="{{ asset('/template/img/clients/client-3-light.png') }}" class="lv-client-light"
                                alt="Client">
                            <img src="{{ asset('/template/img/clients/client-3-dark.png') }}" class="lv-client-dark"
                                alt="Client">
                        </a>
                    </li>
                    <li>
                        <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                            <img src="{{ asset('/template/img/clients/client-4-light.png') }}" class="lv-client-light"
                                alt="Client">
                            <img src="{{ asset('/template/img/clients/client-4-dark.png') }}" class="lv-client-dark"
                                alt="Client">
                        </a>
                    </li>
                    <li>
                        <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                            <img src="{{ asset('/template/img/clients/client-5-light.png') }}" class="lv-client-light"
                                alt="Client">
                            <img src="{{ asset('/template/img/clients/client-5-dark.png') }}" class="lv-client-dark"
                                alt="Client">
                        </a>
                    </li>
                    <li>
                        <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                            <img src="{{ asset('/template/img/clients/client-6-light.png') }}" class="lv-client-light"
                                alt="Client">
                            <img src="{{ asset('/template/img/clients/client-6-dark.png') }}" class="lv-client-dark"
                                alt="Client">
                        </a>
                    </li>
                    <li>
                        <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                            <img src="{{ asset('/template/img/clients/client-7-light.png') }}" class="lv-client-light"
                                alt="Client">
                            <img src="{{ asset('/template/img/clients/client-7-dark.png') }}" class="lv-client-dark"
                                alt="Client">
                        </a>
                    </li>
                    <li>
                        <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                            <img src="{{ asset('/template/img/clients/client-8-light.png') }}" class="lv-client-light"
                                alt="Client">
                            <img src="{{ asset('/template/img/clients/client-8-dark.png') }}" class="lv-client-dark"
                                alt="Client">
                        </a>
                    </li>
                    <li>
                        <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                            <img src="{{ asset('/template/img/clients/client-9-light.png') }}" class="lv-client-light"
                                alt="Client">
                            <img src="{{ asset('/template/img/clients/client-9-dark.png') }}" class="lv-client-dark"
                                alt="Client">
                        </a>
                    </li>
                    <li>
                        <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                            <img src="{{ asset('/template/img/clients/client-10-light.png') }}" class="lv-client-light"
                                alt="Client">
                            <img src="{{ asset('/template/img/clients/client-10-dark.png') }}" class="lv-client-dark"
                                alt="Client">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ... -->
        <div class="tt-blog-carousel anim-fadeinup" data-speed="800" data-simulate-touch="true"
            data-pagination-type="bullets">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tt-blog-carousel-item">
                            <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                <figure class="tt-bci-image">
                                    <img class="swiper-lazy" src="{{ asset('/template/img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('/template/img/blog/carousel/blog-carousel-1.jpg') }}"
                                        alt="Image">
                                </figure>
                            </a>
                            <div class="tt-bci-info">
                                <div class="tt-bci-categories">
                                    <a href="blog-archive.html">Lifestyle</a>
                                </div>
                                <h2 class="tt-bci-title"><a href="blog-post.html">5 Surprising Techniques to Improve Your
                                        Creativity</a></h2>
                                <div class="tt-bci-meta">
                                    <span class="published">May 26, 2022</span>
                                    <span class="posted-by">- by <a href="blog-archive.html"
                                            title="View all posts by John Doe">John Doe</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tt-blog-carousel-item">
                            <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                <figure class="tt-bci-image">
                                    <img class="swiper-lazy" src="{{ asset('/template/img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('/template/img/blog/carousel/blog-carousel-2.jpg') }}"
                                        alt="Image">
                                </figure>
                            </a>
                            <div class="tt-bci-info">
                                <div class="tt-bci-categories">
                                    <a href="blog-archive.html">Tutorials</a>
                                </div>
                                <h2 class="tt-bci-title"><a href="blog-post.html">Avoid the Top 10 Mistakes Made by
                                        Beginners</a></h2>
                                <div class="tt-bci-meta">
                                    <span class="published">May 24, 2022</span>
                                    <span class="posted-by">- by <a href="blog-archive.html"
                                            title="View all posts by John Doe">John Doe</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tt-blog-carousel-item">
                            <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                <figure class="tt-bci-image">
                                    <img class="swiper-lazy" src="{{ asset('/template/img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('/template/img/blog/carousel/blog-carousel-3.jpg') }}"
                                        alt="Image">
                                </figure>
                            </a>
                            <div class="tt-bci-info">
                                <div class="tt-bci-categories">
                                    <a href="blog-archive.html">Lifestyle</a>
                                </div>
                                <h2 class="tt-bci-title"><a href="blog-post.html">Why Some People Save Money With This
                                        Method</a></h2>
                                <div class="tt-bci-meta">
                                    <span class="published">May 23, 2022</span>
                                    <span class="posted-by">- by <a href="blog-archive.html"
                                            title="View all posts by John Doe">John Doe</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tt-blog-carousel-item">
                            <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                <figure class="tt-bci-image">
                                    <img class="swiper-lazy" src="{{ asset('/template/img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('/template/img/blog/carousel/blog-carousel-4.jpg') }}"
                                        alt="Image">
                                </figure>
                            </a>
                            <div class="tt-bci-info">
                                <div class="tt-bci-categories">
                                    <a href="blog-archive.html">Inspiration</a>
                                </div>
                                <h2 class="tt-bci-title"><a href="blog-post.html">Want to Step Up Your Skills? You Need to
                                        Read This First</a></h2>
                                <div class="tt-bci-meta">
                                    <span class="published">May 21, 2022</span>
                                    <span class="posted-by">- by <a href="blog-archive.html"
                                            title="View all posts by John Doe">John Doe</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tt-blog-carousel-item">
                            <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                <figure class="tt-bci-image">
                                    <img class="swiper-lazy" src="{{ asset('/template/img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('/template/img/blog/carousel/blog-carousel-5.jpg') }}"
                                        alt="Image">
                                </figure>
                            </a>
                            <div class="tt-bci-info">
                                <div class="tt-bci-categories">
                                    <a href="blog-archive.html">Tutorials</a>
                                </div>
                                <h2 class="tt-bci-title"><a href="blog-post.html">Secrets to Getting Your Project to Complete
                                        Quickly</a></h2>
                                <div class="tt-bci-meta">
                                    <span class="published">May 19, 2022</span>
                                    <span class="posted-by">- by <a href="blog-archive.html"
                                            title="View all posts by John Doe">John Doe</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tt-blc-nav-prev">
                <div class="tt-blc-nav-arrow magnetic-item"><i class="tt-arrow-left"></i></div>
            </div>
            <div class="tt-blc-nav-next">
                <div class="tt-blc-nav-arrow magnetic-item"><i class="tt-arrow-right"></i></div>
            </div>
            <div class="tt-blc-pagination hide-cursor"></div>
        </div>
    </div>

    <!-- ... -->
@endsection

{{-- @push('scripts')
    <script src="{{ asset('js/lib/pixi.min.js') }}"></script>
    <script src="{{ asset('js/lib/pixi-filters.min.js') }}"></script>
    <script src="{{ asset('js/lib/rgbKineticSlider.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof rgbKineticSlider !== 'undefined') {
                new rgbKineticSlider({
                    slideImages: [
                        "{{ asset('images/home/banner.jpg') }}",
                    ],
                    itemsTitles: [
                        ['Creative', 'Branding'],
                    ],
                    cursorImgEffect: true,
                    cursorTextEffect: false,
                    swipe: true,
                    swipeDistance: window.innerWidth * 0.4,
                    swipeScale: 2,
                    slideTransitionDuration: 1.2,
                    transitionScaleIntensity: 40,
                    transitionScaleAmplitude: 160,
                    nav: true,
                    navElement: '.tt-scroll-down',
                    imagesRgbEffect: true,
                    imagesRgbIntensity: 0.9,
                    navImagesRgbIntensity: 80,
                    textsDisplay: true,
                    textsSubTitleDisplay: false,
                    textsTiltEffect: true,
                    googleFonts: ['Montserrat:700', 'Roboto:400'],
                    buttonMode: false,
                    textsRgbEffect: true,
                    textsRgbIntensity: 0.03,
                    navTextsRgbIntensity: 15,
                    textsDuration: 1,
                    textsAnimationIntensity: 4,
                    textsAnimationDelay: 0.1,
                    imagesAnimationDuration: 1.1,
                    imagesAnimationIntensity: 23,
                    navImagesAnimationIntensity: 80,
                    navTextsAnimationIntensity: 15,
                    navTextsAnimationDuration: 1
                });
            }
        });
    </script>
@endpush --}}
