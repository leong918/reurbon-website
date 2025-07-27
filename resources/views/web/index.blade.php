@extends('web.layout.app')

@section('content')
<div id="home">
    <section class="section-banner">

        <div class="h-[525px] xs:h-[890px] overflow-hidden">
            <div id="kinetic-slider" class="kinetic-slider text-center">
                <div class="@container container mx-auto pt-[86px] xs:pt-[108px] xl:pt-[148px] pb-6 xs:pb-13 flex z-10 h-full flex-col justify-between">
                    <h1 class="text-[40px] xs:text-[62px] xl:text-[92px] text-light-white text-start leading-[90%] xs:leading-[95%] xl:leading-[85%] font-[400] tracking-tight" data-gsap-fade="left" data-fade-amount="35" data-delay="1.9">A Brand-Tech <br>
                        Agency
                    </h1>
                    <div class="flex justify-end md:justify-between items-end">
                        <p class="text-[17px] xl:text-[22px] hidden md:block text-light-white" data-gsap-fade data-delay="2.6" data-duration="1.2" data-start="top 95%">Powered by © Reurbon</p>
                        <h1 class="text-[40px] xs:text-[62px] xl:text-[92px] text-light-white text-end leading-[90%] xs:leading-[95%] xl:leading-[85%] font-[400] tracking-tight" data-gsap-fade="right" data-fade-amount="35" data-delay="2.2" data-start="top 95%">Who*Born <br>
                            Something Fresh
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="page-header" class="ph-ghost-scroll ph-image-cropped ph-content-parallax bg-light-grey py-[150px] xs:py-[220px] xl:py-[320px] pt-[60px] xs:pt-[100px] xl:pt-[170px]">
        <div class="@container container mx-auto">
            <div class="ph-caption">
                <h1 class="ph-caption-title" data-gsap-fade="bottom" data-fade-amount="35">
                    <p class="text-[23px] xs:text-[36px] xl:text-[46px] leading-[27px] xs:leading-[43px] xl:leading-[54px] mb-0 font-[500] text-theme tracking-tight 2xl:max-w-[80%]">
                        One stop service of creative brand-tech agency with branding design, IT software development and
                        marketing services. We drive B2B and xsEs to a new generation of creative and strategic.
                    </p>
                </h1>
                <div class="ph-caption-title-ghost" data-gsap-fade="bottom" data-fade-amount="35">
                    <div
                        class="ph-appear mt-[90px] sm:mt-[3%] md:mt-[0px] text-[96px] xs:text-[140px] xl:text-[260px]  text-theme font-anybody-expanded font-bold">
                        WE ARE REURBON
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[50px] xs:py-[100px] xl:py-[150px] bg-red-mesh">
        <div class="@container container mx-auto">
            <div class="text-white">
                <div class="mx-auto space-y-10">
                    <!-- Header Section -->
                    <div data-gsap-fade="left" data-fade-amount="35">
                        <p
                            class="text-[16px] xl:text-[21px]  leading-[27px] font-anybody-expanded font-[300] text-light-white">
                            Look Over! Why your business challenge today
                        </p>
                        <h2 class="text-[36px] xl:text-[46px] font-[500] leading-[37px] xl:leading-[46px] mt-8">
                            Most creative & marketing <br />agency are
                            <span class="font-(family-name:--font-ogg-text-trial) font-[300] font-italic">failing you behind.</span>
                        </h2>
                        <p
                            class="text-[16px] xl:text-[21px] leading-[27px] font-anybody-expanded font-[300] text-light-white mt-20">
                            Here’s why the problems fail to deliver results
                        </p>
                    </div>

                    <!-- Problem Grid -->
                    <div class="grid grid-cols-1 gap-[50px] md:gap-[25px] xl:gap-[75px] md:grid-cols-3 pt-5">
                        <!-- Item 1 -->
                        <div data-gsap-fade="bottom" data-fade-amount="35" class="grid">
                            <div class="md:mb-[36px] min-h-[85px] md:min-h-[95px]">
                                <!-- Placeholder icon -->
                                <img src="{{ asset('/images/home/lack-marketing-strategy.svg') }}"
                                    alt="Lack of Marketing Strategy" class="w-[65px] md:w-[86px] h-[86px] object-cover" />
                            </div>
                            <h3 class="text-[23px] xl:text-[30px] leading-[27px] xl:leading-[34px] font-[500] mb-[36px]">Lack of a Marketing Strategy
                            </h3>
                            <p class="text-[17px] xl:text-[22px] leading-[23px] xl:leading-[34px] text-light-white font-[400] xs:pe-[15%] xl:pe-[0%]">
                                Designers make good-looking designs but without purpose, it amplify the current poor
                                messaging to
                                build your brands.
                            </p>
                        </div>

                        <!-- Item 2 -->
                        <div data-gsap-fade="bottom" data-fade-amount="35" data-delay="0.3" class="grid">
                            <div class="md:mb-[36px] min-h-[85px] md:min-h-[95px]">
                                <!-- Placeholder icon -->
                                <img src="{{ asset('/images/home/poorly-brand-identity.svg') }}"
                                    alt="Poorly Brand Identity" class="w-[65px] md:w-[86px] h-[86px] object-cover" />
                            </div>
                            <h3 class="text-[23px] xl:text-[30px] leading-[27px] xl:leading-[34px] font-[500] mb-[36px]">Poorly Brand Identity</h3>
                            <p class="text-[17px] xl:text-[22px] leading-[23px] xl:leading-[34px] text-light-white font-[400] xs:pe-[15%] xl:pe-[0%]">
                                Straightforward start and overlook brand identity development, make it difficult to
                                attract the
                                right target audiences.
                            </p>
                        </div>

                        <!-- Item 3 -->
                        <div data-gsap-fade="bottom" data-fade-amount="35" data-delay="0.6" class="grid">
                            <div class="md:mb-[36px] min-h-[85px] md:min-h-[95px]">
                                <!-- Placeholder icon -->
                                <img src="{{ asset('/images/home/disconnect-digital-systems.svg') }}"
                                    alt="Disconnected Digital Systems" class="w-[65px] md:w-[86px] h-[86px] object-cover" />
                            </div>
                            <h3 class="text-[23px] xl:text-[30px] leading-[27px] xl:leading-[34px] font-[500] mb-[36px]">Disconnected Digital Systems
                            </h3>
                            <p class="text-[17px] xl:text-[22px] leading-[23px] xl:leading-[34px] text-light-white font-[400] xs:pe-[15%] xl:pe-[0%]">
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

    <section class="py-[70px] xs:py-[100px] xl:py-[150px] pb-[85px] bg-light-grey">
        <div class="@container container mx-auto">
            <div class="flex flex-wrap gap-y-[10px] items-stretch justify-center">
                <!-- Left image and text -->
                <div class="md:flex-[0_0_35%] xl:flex-[0_0_31%] flex flex-col h-[260px] md:!h-auto w-full mb-3 md:mb-0" data-gsap-fade="left" data-fade-amount="35">
                    <div class="relative h-full flex-1">
                        <div class="w-full rounded-[28px] overflow-hidden shadow-[0_11px_23px_rgba(0,0,0,0.2)] h-full">
                            <img src="{{ asset('/images/home/city-walk.jpg') }}" alt="City Walk"
                                class="object-cover w-full !h-full hidden md:block" />
                            <img src="{{ asset('/images/home/city-walk-full.jpg') }}" alt="City Walk"
                                class="object-cover object-[19%_0%] w-full !h-full md:hidden" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-black/80 via-transparent to-transparent 
                                rounded-[28px]">
                        </div>
                        <div class="absolute inset-0 top-[35px] xl:top-[44px] left-[34px] xl:left-[44px]">
                            <p class="text-[36px] 2xl:text-[46px] font-[500] leading-[37px] xl:leading-[64px] text-white">
                                At Reurbon,<br />we do it diffrent
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right content list -->
                <div class="md:flex-[0_0_65%] xl:flex-[0_0_69%] self-stretch md:pl-3">
                    <div class="flex flex-col gap-y-[10px] h-full">
                        <!-- Item 1 -->
                        <div data-gsap-fade="bottom" data-fade-amount="35"
                            class="flex gap-[40px] pt-[5px] xs:pt-auto py-[30px] xs:py-[30px] xl:py-[49px] px-[20px]  xl:px-[69px] rounded-[28px] bg-light-gray xs:h-[230px] md:h-3/1 flex-col xs:flex-row">
                            <div class="lg:w-1/7 h-[90px] xs:h-[135px] xl:h-[150px] overflow-hidden min-w-[120px] xl:min-w-[150px]">
                                <div
                                    class="text-[120px] xs:text-[179.74px] xl:text-[250px] font-[400] text-secondary leading-[150px] pl-[34px] xs:pl-[20px] md:px-0 xs:text-center xs:pt-[23px]">
                                    1
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center 2xl:items-start xs:w-6/7 justify-start 2xl:justify-evenly">
                                <div class="2xl:w-3/7 mb-[25px] xs:mb-0">
                                    <h4
                                        class="font-[500] text-[23px] xl:text-[30px] leading-[27px] xl:leading-[34px] text-theme max-w-[90%] md:max-w-none">
                                        Strategic Planning in Creativity
                                    </h4>
                                </div>
                                <div class="2xl:w-3/7">
                                    <p
                                        class="text-[17px]  xl:text-[22px] leading-[23px] xl:leading-[30px] font-[400] text-dark-theme">
                                        We make out standing design with creative strategy to bring out strong core brand identity and marketing value message.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <!-- Item 2 -->
                        <div data-gsap-fade="bottom" data-fade-amount="35"
                            class="flex gap-[40px] pt-[5px] xs:pt-auto py-[30px] xs:py-[30px] xl:py-[49px] px-[20px]  xl:px-[69px] rounded-[28px] bg-light-gray xs:h-[230px] md:h-3/1 flex-col xs:flex-row">
                            <div class="lg:w-1/7 h-[90px] xs:h-[135px] xl:h-[150px] overflow-hidden min-w-[120px] xl:min-w-[150px]">
                                <div
                                    class="text-[120px] xs:text-[179.74px] xl:text-[250px] font-[400] text-secondary leading-[150px] px-[20px] md:px-0 xs:text-center xs:pt-[23px]">
                                    2
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center 2xl:items-start xs:w-6/7 justify-start 2xl:justify-evenly">
                                <div class="2xl:w-3/7 mb-[25px] xs:mb-0">
                                    <h4
                                        class="font-[500] text-[23px]  xl:text-[30px] leading-[27px] xl:leading-[34px] text-theme max-w-[90%] md:max-w-none">
                                        Integrated IT Ecosystems
                                    </h4>
                                </div>
                                <div class="2xl:w-3/7">
                                    <p class="text-[17px]  xl:text-[22px]  leading-[23px] xl:leading-[30px] font-[400] text-dark-theme">
                                        We offer full range of IT services to support businesses access the technical tools and information for their daily activities.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <!-- Item 3 -->
                        <div data-gsap-fade="bottom" data-fade-amount="35"
                            class="flex gap-[40px] pt-[5px] xs:pt-auto py-[30px] xs:py-[30px] xl:py-[49px] px-[20px]  xl:px-[69px] rounded-[28px] bg-light-gray xs:h-[230px] md:h-3/1 flex-col xs:flex-row">
                            <div class="lg:w-1/7 h-[90px] xs:h-[135px] xl:h-[150px] overflow-hidden min-w-[120px] xl:min-w-[150px]">
                                <div
                                    class="text-[120px] xs:text-[179.74px] xl:text-[250px] font-[400] text-secondary leading-[150px] px-[20px] md:px-0 xs:text-center xs:pt-[23px]">
                                    3
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center 2xl:items-start xs:w-6/7 justify-start 2xl:justify-evenly">
                                <div class="2xl:w-3/7 mb-[25px] xs:mb-0">
                                    <h4
                                        class="font-[500] text-[23px]  xl:text-[30px] leading-[27px] xl:leading-[34px] text-theme max-w-[90%] md:max-w-none">
                                        Budget-Friendly Pricing
                                    </h4>
                                </div>
                                <div class="2xl:w-3/7">
                                    <p class="text-[17px] xl:text-[22px] leading-[23px] xl:leading-[30px] font-[400] text-dark-theme">
                                        We deliver powerful works in affordable prices while maintaining quality..
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative lg:py-[60px] xl:py-[90px] bg-light-grey overflow-hidden">
        <div class="container mx-auto flex flex-col md:flex-row gap-2 md:gap-10 justify-center items-center relative z-10">

            <!-- Text Content -->
            <div class="w-full md:w-[60%] space-y-6 py-[40px] xl:py-[150px]" data-gsap-fade="bottom" data-fade-amount="35">
                <p class="text-[16px] xl:text-[21px] leading-[27px] text-light-theme font-anybody-expanded font-[300] text-gray-500">
                    What you can expect
                </p>

                <h2 class="text-[36px] xl:text-[46px] leading-[36px] xl:leading-[46px] font-[500] text-theme">
                    Crafting <span class="text-red-600 font-normal">Brands</span><br />
                    with <em class="font-(family-name:--font-ogg-text-trial) font-[300] font-italic">Soul</em>
                </h2>

                <p class="text-[17px] xl:text-[22px] leading-[24px] xl:leading-[34px] font-[400] text-dark-theme max-w-[600px] mt-10 md:mt-15">
                    We make spiritless brands vivid soul. At Reurbon, we blend big ideas and super technologies to
                    create impactful connections. Our works stand out, evolved your brand with a interesting spirit.
                </p>
            </div>

            <!-- Image -->
            <div class="w-full md:w-[85%] relative flex justify-center md:justify-end z-0" data-gsap-fade="right" data-fade-amount="50">
                <img src="{{ asset('images/home/brand.png') }}"
                    alt="Red Black Abstract"
                    class="max-w-[90%] md:max-w-none w-[500px] md:w-[1000px] object-contain md:absolute md:top-1/2 md:translate-y-[-50%] right-[-38px] 2xl:right-[-68px] 3xl:right-[-90px]" />
            </div>

        </div>
    </section>


    <section class="py-[90px] bg-light-grey">
        <div class="@container container mx-auto flex flex-col md:flex-row gap-10">

            <!-- Left: Heading + Description -->
            <div class="w-full md:w-[60%] space-y-6" data-gsap-fade="bottom" data-fade-amount="35">
                <p class="text-[16px] xl:text-[21px] leading-[27px] text-light-theme font-anybody-expanded font-[300] text-gray-500">
                    What we provide
                </p>
                <h2 class="text-[36px] xl:text-[46px] leading-[36px] xl:leading-[46px] font-[500] text-theme">
                    Our <span class="font-(family-name:--font-ogg-text-trial) font-[300] font-italic">
                        <em class="text-secondary">Se</em>rvices
                    </span>
                </h2>
                <p class="md:max-w-[80%] text-[17px] xl:text-[22px] leading-[24px] xl:leading-[34px] font-[400] text-dark-theme max-w-[600px] mt-10 md:mt-15">
                    For B2B and xsEs that struggling to drive growth. We passionate about craft branding that stick to
                    deliver best result with ideal clients.
                </p>
            </div>

            <!-- Right: Service Categories -->
            <div class="w-full md:w-1/2 space-y-10 text-xs text-light-theme">

                <!-- IT Software Dev -->
                <div class="border-t pt-4 space-y-2" data-gsap-fade="bottom" data-fade-amount="35">
                    <h3 class="font-[500] text-[23px] xl:text-[30px] leading-[27px] xl:leading-[34px] text-theme mb-[25px] mt-3">
                        IT Software Dev
                    </h3>
                    <ul class="text-[17px] xl:text-[22px] leading-[24px] xl:leading-[34px] font-[400] space-y-[14px]">
                        <li class="flex items-start gap-2"><img src="{{ asset('/images/home/effect-circle.svg') }}" alt="" class="w-[20px] mr-2" /> Website & Mobile
                            Development</li>
                        <li class="flex items-start gap-2"><img src="{{ asset('/images/home/effect-circle.svg') }}" alt="" class="w-[20px] mr-2" /> E-Commerce System</li>
                        <li class="flex items-start gap-2"><img src="{{ asset('/images/home/effect-circle.svg') }}" alt="" class="w-[20px] mr-2" /> Custom Website Design
                            for
                            Brands</li>
                        <li class="flex items-start gap-2"><img src="{{ asset('/images/home/effect-circle.svg') }}" alt="" class="w-[20px] mr-2" /> React, PHP, Node.js,
                            Laravel</li>
                    </ul>
                </div>

                <!-- Creative Design -->
                <div class="border-t pt-4 space-y-2" data-gsap-fade="bottom" data-fade-amount="35">
                    <h3 class="font-[500] text-[23px] xl:text-[30px] leading-[27px] xl:leading-[34px] text-theme mb-[25px] mt-3">
                        Creative Design
                    </h3>
                    <ul class="text-[17px] xl:text-[22px] leading-[24px] xl:leading-[34px] font-[400] space-y-[14px]">
                        <li class="flex items-center gap-2">
                            <img src="{{ asset('/images/home/effect-circle.svg') }}" alt="" class="w-[20px]  mr-2" />
                            Branding & Digital Identity
                        </li>
                        <li class="flex items-center gap-2">
                            <img src="{{ asset('/images/home/effect-circle.svg') }}" alt="" class="w-[20px] mr-2" />
                            UI/UX Design
                        </li>
                        <li class="flex items-center gap-2">
                            <img src="{{ asset('/images/home/effect-circle.svg') }}" alt="" class="w-[20px] mr-2" />
                            Logo Design
                        </li>
                        <li class="flex items-center gap-2">
                            <img src="{{ asset('/images/home/effect-circle.svg') }}" alt="" class="w-[20px] mr-2" />
                            Design Research
                        </li>
                    </ul>

                </div>

                <!-- Digital Marketing -->
                <div class="border-t pt-4 space-y-2 border-b pb-6" data-gsap-fade="bottom" data-fade-amount="35">
                    <h3 class="font-[500] text-[23px] xl:text-[30px] leading-[27px] xl:leading-[34px] text-theme mb-[25px] mt-3">
                        Digital Marketing
                    </h3>
                    <ul class="text-[17px] xl:text-[22px] leading-[24px] xl:leading-[34px] font-[400] space-y-[14px]">
                        <li class="flex items-start gap-2"><img src="{{ asset('/images/home/effect-circle.svg') }}" alt="" class="w-[20px] mr-2" /> SEO & Content Strategy
                        </li>
                        <li class="flex items-start gap-2"><img src="{{ asset('/images/home/effect-circle.svg') }}" alt="" class="w-[20px] mr-2" /> Lead Generation &
                            Customer Engagement</li>
                        <li class="flex items-start gap-2"><img src="{{ asset('/images/home/effect-circle.svg') }}" alt="" class="w-[20px] mr-2" /> Marketing Collaterals &
                            Visual Content</li>
                        <li class="flex items-start gap-2"><img src="{{ asset('/images/home/effect-circle.svg') }}" alt="" class="w-[20px] mr-2" /> Social Media Ads</li>
                    </ul>

                </div>

            </div>
        </div>
    </section>



    <section class="bg-light-grey py-[90px]">
        <div class="tt-section-inner @container container mx-auto">
            <div id="portfolio-grid" class="pgi-hover">
                <div class="tt-grid ttgr-layout-creative-2 ttgr-gap-4">
                    <div class="tt-grid-items-wrap isotope-items-wrap">
                        <div class="tt-grid-item isotope-item people">
                            <div class="ttgr-item-inner">
                                <div class="portfolio-grid-item">
                                    <a href="single-project-1.html" class="pgi-image-wrap rounded-3xl"
                                        data-cursor="View<br>Project">
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-image ttgr-height">
                                                    <img src="{{ asset('/images/home/IOI.jpg') }}"
                                                        alt="image">
                                                </figure>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title ">
                                                <a href="single-project-1.html" class="font-[500]">IOI Properties</a>
                                            </h2>
                                            <div class="pgi-categories-wrap ">
                                                <div class="pgi-category font-anybody-expanded font-[300]">Campaign Design</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-grid-item isotope-item creative">
                            <div class="ttgr-item-inner">
                                <div class="portfolio-grid-item">
                                    <a href="single-project-2.html" class="pgi-image-wrap rounded-3xl"
                                        data-cursor="View<br>Project">
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-image ttgr-height">
                                                    <img src="{{ asset('/images/home/commas.jpg') }}"
                                                        alt="image">
                                                </figure>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title">
                                                <a href="single-project-2.html">Commas’</a>
                                            </h2>
                                            <div class="pgi-categories-wrap">
                                                <div class="pgi-category">Web System Development</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-grid-item isotope-item people">
                            <div class="ttgr-item-inner">
                                <div class="portfolio-grid-item">
                                    <a href="single-project-3.html" class="pgi-image-wrap rounded-3xl"
                                        data-cursor="View<br>Project">
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-video-wrap ttgr-height">
                                                    <video class="pgi-video" loop muted preload="metadata"
                                                        poster="{{ asset('/images/home/ayam-a1-cover.jpg') }}">
                                                        <source src="{{ asset('/images/home/ayam-a1.mp4') }}"
                                                            type="video/mp4">
                                                        <source src="{{ asset('/images/home/ayam-a1.webm') }}"
                                                            type="video/webm">
                                                    </video>
                                                </figure>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title">
                                                <a href="single-project-3.html">ayam A1</a>
                                            </h2>
                                            <div class="pgi-categories-wrap">
                                                <div class="pgi-category">Animation Interactive Website</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-grid-item isotope-item nature">
                            <div class="ttgr-item-inner">
                                <div class="portfolio-grid-item">
                                    <a href="single-project-4.html" class="pgi-image-wrap rounded-3xl"
                                        data-cursor="View<br>Project">
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-image ttgr-height">
                                                    <img src="{{ asset('/images/home/artivo.jpg') }}"
                                                        alt="image">
                                                </figure>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title">
                                                <a href="single-project-4.html">Artivo</a>
                                            </h2>
                                            <div class="pgi-categories-wrap">
                                                <div class="pgi-category">Web System Development</div>
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
                        <div class="scr-btn-icon"><img src="{{ asset('images/svg/arrow.svg') }}" alt="arrow"></div>
                        <div class="scr-btn-spinner">
                            <img src="{{ asset('images/home/see-all-works.svg') }}" alt="See All Works">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="pt-[80px] md:pt-[120px] pb-[80px] md:pb-[120px] relative overflow-hidden bg-[#110000] anim-fadeinup" data-speed="800" data-simulate-touch="true"
        data-pagination-type="bullets">
        <div class="globo" id="globo"></div>
        <div class="blur"></div>
        <div class="@container container px-4 mx-auto z-10 relative">
            <div class="mb-[70px] md:mb-[110px]">
                <div class="swiper swiper-clients swiper-continuous swiper-mask">
                    <div class="swiper-wrapper">
                        @php
                        $clients = range(1, 16);
                        @endphp
                        @foreach($clients as $client)
                        <div class="swiper-slide">
                            <div class="max-w-[150px] mx-auto">
                                <img src="{{ asset('images/home/client-artivo.png') }}" alt="Client" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-[150px] mx-auto">
                                <img src="{{ asset('images/home/client-fwb.png') }}" alt="Client" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-[150px] mx-auto">
                                <img src="{{ asset('images/home/client-ioi.png') }}" alt="Client" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-[150px] mx-auto">
                                <img src="{{ asset('images/home/client-prince.png') }}" alt="Client" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-[150px] mx-auto">
                                <img src="{{ asset('images/home/client-scientex.png') }}" alt="Client" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-[150px] mx-auto">
                                <img src="{{ asset('images/home/client-synthOS.png') }}" alt="Client" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="max-w-[150px] mx-auto">
                                <img src="{{ asset('images/home/client-uocoland.png') }}" alt="Client" class="w-full h-full object-cover">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center mb-[60px]">
                <h6 class="text-[36px] xl:text-[46px] font-[500] leading-[37px] xl:leading-[46px] text-white">What Our <span class="font-(family-name:--font-ogg-text-trial) text-secondary font-[300] font-italic">
                        Client
                    </span> Say</h6>
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
                                        <p class="font-[500] text-theme text-[23px] xl:text-[30px] leading-[27px] xl:leading-[34px]">Kiki</p>
                                        <p class="font-[300] text-black text-[16px] xl:text-[21px]  leading-[27px] font-(family-name:--font-ogg-text-trial)">
                                            @ Tiktok Studio
                                        </p>
                                    </div>
                                </div>
                                <p class="text-gray-800 font-[500] text-[23px] xl:text-[30px] leading-[27px] xl:leading-[34px]">
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
    <section class="bg-light-grey py-[90px]">
        <div class="@container container mx-auto tt-blog-carousel">

            <div class="w-full space-y-6" data-gsap-fade="bottom" data-fade-amount="35">
                <h2 class="text-[36px] xl:text-[46px] leading-[36px] xl:leading-[46px] font-[500] text-theme mb-[10px]">
                    Insights <span class="font-(family-name:--font-ogg-text-trial) font-[300] font-italic text-secondary">
                        Blog
                    </span>
                </h2>
                <div class="flex flex-row mb-10">
                    <p class="tt-btn text-[17px] xl:text-[22px] leading-[24px] xl:leading-[34px] text-dark-theme font-anybody-expanded font-[300]">
                        <span data-hover="Look For More">Look For More</span>
                    </p>
                    <img src="{{ asset('images/svg/arrow.svg') }}" class="ms-3" alt="Look For More">
                </div>

            </div>

            <div class="flex flex-row anim-fadeinup gap-x-[2vw]" data-speed="800" data-simulate-touch="true" data-pagination-type="bullets">
                @php
                $blogs = range(1, 3); // Example feedbacks
                @endphp
                @foreach($blogs as $blog)
                @php
                // Determine visibility based on index
                $visibilityClass = match($loop->index) {
                0 => '', // Always show
                1 => 'hidden md:block', // Show ≥640px
                2 => 'hidden xl:block', // Show ≥1280px
                default => 'hidden', // Hide extra (if >3)
                };
                @endphp
                <div class="tt-blog-carousel-item w-full md:w-1/2 xl:w-1/3 {{ $visibilityClass }}">
                    <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                        <figure class="tt-bci-image">
                            <img class="swiper-lazy" src="{{ asset('/template/img/low-qlt-thumb.jpg') }}"
                                data-src="{{ asset('/template/img/blog/carousel/blog-carousel-1.jpg') }}"
                                alt="Image">
                        </figure>
                    </a>
                    <div class="tt-bci-info">
                        <h2 class="tt-bci-title">
                            <a href="blog-post.html">💡 5 Surprising Techniques to Improve Your Creativity</a>
                        </h2>
                        <div class="tt-bci-meta font-anybody-expanded font-[300]">
                            <span class="published">May 26, 2022</span>
                            <span class="posted-by">- by <a href="blog-archive.html" title="View all posts by John Doe">John Doe</a></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <div class="tt-blc-pagination hide-cursor"></div>
        </div>
    </section>
</div>
@endsection