@extends('web.layout.app')

@section('content')
<div id="home">
    <section class="section-banner">
        <div class="h-[890px] overflow-hidden">
            <div id="kinetic-slider" class="kinetic-slider text-center">
                <div class="@container container px-4 mx-auto pt-[148px] pb-13 flex z-10 h-full flex-col justify-between">
                    <h1 class="text-[92px] text-light-white text-start leading-[0.8] font-[400] tracking-tight" data-gsap-fade="left" data-fade-amount="35" data-delay="1.9">A Brand-Tech <br>
                        Agency
                    </h1>
                    <div class="flex items-end justify-between">
                        <p class="text-[22px] text-light-white" data-gsap-fade data-delay="2.6" data-duration="1.2" data-start="top 95%">Powered by © Reurbon</p>
                        <h1 class="text-[92px] text-light-white text-end leading-[0.8] font-[400] tracking-tight" data-gsap-fade="right" data-fade-amount="35" data-delay="2.2">Who*Born <br>
                            Something Fresh
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="page-header" class="ph-ghost-scroll ph-image-cropped ph-content-parallax bg-light-grey py-[320px] pt-[170px]">
        <div class="@container container px-4 mx-auto">
            <div class="ph-caption">
                <h1 class="ph-caption-title">
                    <p class="text-[46px] mb-0 font-[500] text-theme leading-[1.2] tracking-tight lg:max-w-[80%]">
                        One stop service of creative brand-tech agency with branding design, IT software development and
                        marketing services. We drive B2B and SMEs to a new generation of creative and strategic.
                    </p>
                </h1>
                <div class="ph-caption-title-ghost">
                    <div
                        class="ph-appear text-[260px] text-theme font-[500] font-(family-name:--font-anybody) tracking-wide">
                        WE ARE REURBON
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[150px] bg-red-mesh">
        <div class="@container container px-4 mx-auto">
            <div class="text-white">
                <div class="mx-auto space-y-10">
                    <!-- Header Section -->
                    <div data-gsap-fade="left" data-fade-amount="35">
                        <p
                            class="text-[21px] leading-[27px] uppercase tracking-wide font-(family:--font-anybody-ultracondensed) text-light-white">
                            Look Over! Why your business challenge today
                        </p>
                        <h2 class="text-[46px] font-[500] leading-[1.4]">
                            Most creative & marketing <br />agency are
                            <span class="italic font-light">failing you behind.</span>
                        </h2>
                    </div>

                    <!-- Problem Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-10">
                        <!-- Item 1 -->
                        <div data-gsap-fade="bottom" data-fade-amount="35">
                            <div class="mb-[36px]">
                                <!-- Placeholder icon -->
                                <img src="{{ asset('/images/home/lack-marketing-strategy.svg') }}"
                                    alt="Lack of Marketing Strategy" class="w-[86px] h-[86px] object-cover" />
                            </div>
                            <h3 class="text-[30px] leading-[37px] font-[500] mb-[36px]">Lack of a Marketing Strategy
                            </h3>
                            <p class="text-[22px] leading-[31px] text-light-white">
                                Designers make good-looking designs but without purpose, it amplify the current poor
                                messaging to
                                build your brands.
                            </p>
                        </div>

                        <!-- Item 2 -->
                        <div data-gsap-fade="bottom" data-fade-amount="35" data-delay="0.3">
                            <div class="mb-[36px]">
                                <!-- Placeholder icon -->
                                <img src="{{ asset('/images/home/poorly-brand-identity.svg') }}"
                                    alt="Poorly Brand Identity" class="w-[86px] h-[86px] object-cover" />
                            </div>
                            <h3 class="text-[30px] leading-[37px] font-[500] mb-[36px]">Poorly Brand Identity</h3>
                            <p class="text-[22px] leading-[31px] text-light-white">
                                Straightforward start and overlook brand identity development, make it difficult to
                                attract the
                                right target audiences.
                            </p>
                        </div>

                        <!-- Item 3 -->
                        <div data-gsap-fade="bottom" data-fade-amount="35" data-delay="0.6">
                            <div class="mb-[36px]">
                                <!-- Placeholder icon -->
                                <img src="{{ asset('/images/home/disconnect-digital-systems.svg') }}"
                                    alt="Disconnected Digital Systems" class="w-[86px] h-[86px] object-cover" />
                            </div>
                            <h3 class="text-[30px] leading-[37px] font-[500] mb-[36px]">Disconnected Digital Systems
                            </h3>
                            <p class="text-[22px] leading-[31px] text-light-white">
                                Most providers lack an integrated digital systems approach, creating data silos,
                                inconsistent user
                                experiences.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[175px] pb-[85px] bg-light-grey">
        <div class="@container md:container px-4 mx-auto">
            <div class="flex flex-wrap gap-x-[46px] gap-y-[20px] items-stretch justify-center">
                <!-- Left image and text -->
                <div class="lg:flex-[0_0_30%] flex flex-col h-full">
                    <div class="relative h-full">
                        <div class="w-full rounded-[28px] overflow-hidden shadow-[0_4_4px_0_rgba(0,0,0,0.25)] h-full">
                            <img src="{{ asset('/images/home/city-walk.jpg') }}" alt="City Walk"
                                class="object-cover w-full h-full" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-black/80 via-transparent to-transparent 
                                rounded-[28px]">
                        </div>
                        <div class="absolute inset-0 top-[40px] left-[44px]">
                            <p class="text-[46px] font-[500] leading-[60px] text-white">
                                At Reurbon,<br />we do it diffrent
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right content list -->
                <div class="lg:flex-[0_0_60%] self-stretch">
                    <div class="flex flex-col gap-y-[20px] h-full">
                        <!-- Item 1 -->
                        <div
                            class="flex gap-[40px] py-[30px] px-[20px] lg:py-[49px] lg:px-[69px] rounded-[28px] bg-light-gray lg:h-3/1 flex-col lg:flex-row">
                            <div class="lg:w-1/7">
                                <div
                                    class="text-[150px] lg:text-[200px] font-[400] text-secondary leading-[150px] px-[20px] lg:px-0">
                                    1
                                </div>
                            </div>
                            <div class="lg:w-3/7">
                                <h4
                                    class="font-[500] text-[24px] lg:text-[30px] leading-[24px] lg:leading-[37px] text-theme">
                                    Strategic Planning in Creativity
                                </h4>
                            </div>
                            <div class="lg:w-3/7">
                                <p
                                    class="text-[16px] lg:text-[22px] leading-[24px] lg:leading-[31px] font-[400] text-dark-theme">
                                    We do beautiful designs and structured IT by elaborate planning to ensure that great
                                    results
                                    are inline.
                                </p>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div
                            class="flex gap-[40px] py-[30px] px-[20px] lg:py-[49px] lg:px-[69px] rounded-[28px] bg-light-gray lg:h-3/1 flex-col lg:flex-row">
                            <div class="lg:w-1/7">
                                <div
                                    class="text-[150px] lg:text-[200px] font-[400] text-secondary leading-[150px] px-[20px] lg:px-0">
                                    2
                                </div>
                            </div>
                            <div class="lg:w-3/7">
                                <h4
                                    class="font-[500] text-[24px] lg:text-[30px] leading-[24px] lg:leading-[37px] text-theme">
                                    Integrated IT Ecosystems
                                </h4>
                            </div>
                            <div class="lg:w-3/7">
                                <p class="text-[22px] leading-[31px] font-[400] text-dark-theme">
                                    We bring together expert marketers and creative designers to bring out marketing
                                    strategy
                                    messages and build a strong core brand visual identity.
                                </p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div
                            class="flex gap-[40px] py-[30px] px-[20px] lg:py-[49px] lg:px-[69px] rounded-[28px] bg-light-gray lg:h-3/1 flex-col lg:flex-row">
                            <div class="lg:w-1/7">
                                <div
                                    class="text-[150px] lg:text-[200px] font-[400] text-secondary leading-[150px] px-[20px] lg:px-0">
                                    3
                                </div>
                            </div>
                            <div class="lg:w-3/7">
                                <h4
                                    class="font-[500] text-[24px] lg:text-[30px] leading-[24px] lg:leading-[37px] text-theme">
                                    Budget-Friendly Pricing
                                </h4>
                            </div>
                            <div class="lg:w-3/7">
                                <p class="text-[22px] leading-[31px] font-[400] text-dark-theme">
                                    We deliver powerful IT works in affordable prices while maintaining quality.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[90px] bg-light-grey">
        <div
            class="@container container px-4 mx-auto flex flex-col lg:flex-row gap-10 justify-center">

            <!-- Image First on Mobile -->
            <div class="order-1 lg:order-2 w-full flex-[0_0_45%]">
                <img src="{{ asset('images/home/brand.png') }}" alt="Red Black Abstract"
                    class="object-contain max-w-full lg:absolute lg:right-[0]" />
            </div>

            <!-- Text Content Last on Mobile -->
            <div class="order-2 lg:order-1 w-full flex-[0_0_45%] space-y-6 text-center lg:text-start lg:py-[150px]">
                <p
                    class="text-[21px] leading-[27px] text-light-theme font-(family:--font-anybody-ultracondensed) text-gray-500">
                    What you can expect
                </p>

                <h2 class="text-[46px] leading-[60px] font-[500] text-theme">
                    Crafting <span class="text-red-600 font-normal">Brands</span><br />
                    with <em class="font-(family-name:--font-ogg-text-trial) font-[300] font-italic">Soul</em>
                </h2>

                <p class="text-[22px] leading-[31px] font-[400] text-dark-theme max-w-[600px] mx-auto lg:mx-0">
                    We make spiritless brands vivid soul. At Reurbon, we blend big ideas and super technologies to
                    create impactful connections. Our works stand out, evolved your brand with a interesting spirit.
                </p>
            </div>

        </div>
    </section>

    <section class="py-[90px] bg-light-grey">
        <div class="@container container px-4 mx-auto flex flex-col lg:flex-row gap-10">

            <!-- Left: Heading + Description -->
            <div class="order-2 lg:order-1 w-full lg:w-1/2 space-y-4 text-center lg:text-left">
                <p class="text-[21px] leading-[27px] font-(family:--font-anybody-ultracondensed) text-gray-500">
                    What we provide
                </p>
                <h2 class="text-[46px] leading-[60px] font-[500] text-theme">
                    Our <span class="font-(family-name:--font-ogg-text-trial) font-[300] font-italic">
                        <em class="text-secondary">Se</em>rvices
                    </span>
                </h2>
                <p class="text-[22px] leading-[31px] font-[400] text-dark-theme max-w-[600px] mx-auto lg:mx-0">
                    For B2B and SMEs that struggling to drive growth. We passionate about craft branding that stick to
                    deliver best result with ideal clients.
                </p>
            </div>

            <!-- Right: Service Categories -->
            <div class="order-1 lg:order-2 w-full lg:w-1/2 space-y-10 text-sm text-gray-700">

                <!-- IT Software Dev -->
                <div class="border-t pt-4 space-y-2">
                    <h3 class="font-[500] text-[30px] leading-[37px] text-theme mb-[25px]">
                        IT Software Dev
                    </h3>
                    <ul class="text-[22px] leading-[31px] font-[400] space-y-[14px]">
                        <li class="flex items-start gap-2"><span class="text-red-500">●</span> Website & Mobile
                            Development</li>
                        <li class="flex items-start gap-2"><span class="text-red-500">●</span> E-Commerce System</li>
                        <li class="flex items-start gap-2"><span class="text-red-500">●</span> Custom Website Design
                            for
                            Brands</li>
                        <li class="flex items-start gap-2"><span class="text-red-500">●</span> React, PHP, Node.js,
                            Laravel</li>
                    </ul>
                </div>

                <!-- Creative Design -->
                <div class="border-t pt-4 space-y-2">
                    <h3 class="font-[500] text-[30px] leading-[37px] text-theme mb-[25px]">
                        Creative Design
                    </h3>
                    <ul class="text-[22px] leading-[31px] font-[400] space-y-[14px]">
                        <li class="flex items-start gap-2"><span class="text-red-500">●</span> Branding & Digital
                            Identity</li>
                        <li class="flex items-start gap-2"><span class="text-red-500">●</span> UI/UX Design</li>
                        <li class="flex items-start gap-2"><span class="text-red-500">●</span> Logo Design</li>
                        <li class="flex items-start gap-2"><span class="text-red-500">●</span> Design Research</li>
                    </ul>
                </div>

                <!-- Digital Marketing -->
                <div class="border-t pt-4 space-y-2 border-b pb-4">
                    <h3 class="font-[500] text-[30px] leading-[37px] text-theme mb-[25px]">
                        Digital Marketing
                    </h3>
                    <ul class="text-[22px] leading-[31px] font-[400] space-y-[14px]">
                        <li class="flex items-start gap-2"><span class="text-red-500">●</span> SEO & Content Strategy
                        </li>
                        <li class="flex items-start gap-2"><span class="text-red-500">●</span> Lead Generation &
                            Customer Engagement</li>
                        <li class="flex items-start gap-2"><span class="text-red-500">●</span> Marketing Collaterals &
                            Visual Content</li>
                        <li class="flex items-start gap-2"><span class="text-red-500">●</span> Social Media Ads</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-light-grey py-[90px]">
        <div class="tt-section-inner">
            <div id="portfolio-grid" class="pgi-hover">
                <div class="tt-grid ttgr-layout-creative-2 ttgr-gap-4">
                    <div class="tt-grid-items-wrap isotope-items-wrap">
                        <div class="tt-grid-item isotope-item people">
                            <div class="ttgr-item-inner">
                                <div class="portfolio-grid-item">
                                    <a href="single-project-1.html" class="pgi-image-wrap"
                                        data-cursor="View<br>Project">
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
                                    <a href="single-project-2.html" class="pgi-image-wrap"
                                        data-cursor="View<br>Project">
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
                                    <a href="single-project-3.html" class="pgi-image-wrap"
                                        data-cursor="View<br>Project">
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
                                    <a href="single-project-4.html" class="pgi-image-wrap"
                                        data-cursor="View<br>Project">
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
                <a href="portfolio-grid-creative.html" class="tt-scrolling-btn all-works-btn"
                    data-cursor="All<br>Works">
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
    </section>

    <section class="pt-[120px] pb-[120px] relative overflow-hidden bg-[#110000]">
        <div class="globo" id="globo"></div>
        <div class="blur"></div>
        <div class="@container container px-4 mx-auto z-10 relative">
            <div class="mb-[110px]">
                <div class="swiper swiper-clients swiper-continuous swiper-mask">
                    <div class="swiper-wrapper">
                        @php
                            $clients = range(1, 16);
                        @endphp
                        @foreach($clients as $client)
                            <div class="swiper-slide">
                                <div class="max-w-[150px] mx-auto">
                                    <img src="{{ asset('images/home/client.png') }}" alt="Client" class="w-full h-full object-cover">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center mb-[60px]">
                <h6 class="text-[46px] leading-[46px] font-[500] text-white">What Our <span class="text-secondary">Client</span> Say</h6>
            </div>
            <div class=>
                <div class="swiper swiper-client-feedback">
                    <div class="swiper-wrapper">
                        @php
                            $feedbacks = range(1, 4); // Example feedbacks
                        @endphp
                        @foreach($feedbacks as $feedback)
                        <div class="swiper-slide">
                            <div class="client-feedback-item">
                                <div class="flex items-center mb-4">
                                   <div class="w-[80px] h-[80px] bg-gray-300 rounded-full mr-3"></div>
                                   <div>
                                      <p class="font-[500] text-theme text-[30px] leading-[34px]">Kiki</p>
                                      <p class="font-[300] text-black text-[21px] leading-[30px] font-(family-name:--font-ogg-text-trial)">
                                        @ Tiktok Studio
                                        </p>
                                   </div>
                                </div>
                                <p class="text-gray-800 text-[30px] font-[500] leading-[34px]">
                                    Redesign with Reurbon was an easy process. Before this, our website had an outdated design, it was very hard for people to find the content. After Reurbon web redesign call support was reduced, and leads came pouring in.
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
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
                            <h2 class="tt-bci-title"><a href="blog-post.html">Secrets to Getting Your Project to
                                    Complete
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
@endsection
