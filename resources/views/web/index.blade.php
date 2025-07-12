@extends('web.layout.app')

@section('content')
    <section class="section-banner">
        <div class="aspect-[21/10] overflow-hidden">
            <div id="rgbKineticSlider" class="rgb-kinetic-slider"></div>
        </div>
    </section>

    <div id="page-header" class="ph-full ph-cap-lg ph-ghost-scroll ph-image-cropped ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <!-- Begin page header image
                            ============================= -->
            <!-- <div class="ph-image">
                                <div class="ph-image-inner">
                                    <img src="assets/img/page-header/ph-1.jpg" alt="Image">
                                </div>
                            </div> -->
            <!-- End page header image -->

            <!-- Begin page header caption
                            ===============================
                            Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
                            -->
            <div class="ph-caption">
                <!-- <div class="ph-caption-subtitle">
                                    <div class="ph-appear">Subtitle</div>
                                </div> -->
                <h1 class="ph-caption-title">
                    <div class="ph-appear">Creative branding,<br> design <span class="hide-from-sm">→</span> <em
                            class="text-stroke-light">focused</em><br> digital solutions</div>
                    <!-- You can use <br> to break a text line if needed -->
                </h1>
                <div class="ph-caption-title-ghost">
                    <div class="ph-appear">Creative</div>
                </div>
            </div>
            <!-- End page header caption -->

        </div> <!-- /.page-header-inner -->

        <!-- Begin scroll down (you can change "data-offset" to set scroll top offset)
                        ======================= -->
        <div class="tt-scroll-down">
            <a href="#page-content" class="tt-sd-inner ph-appear" data-offset="0">
                <div class="tt-sd-arrow">
                    <div class="tt-sd-arrow-inner"></div>
                </div>
                <div class="tt-sd-text">Scroll</div>
            </a>
        </div>
        <!-- End scroll down -->
    </div>

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
    <!-- ... -->
@endsection

@push('scripts')
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
@endpush
