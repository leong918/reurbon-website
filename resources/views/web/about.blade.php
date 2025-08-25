@extends('web.layout.app')

@section('content')
<div id="about">
  <section id="banner" class="banner-section-container">
    <div class="overflow-hidden container banner-section items-center">
      <h1 class="banner-title w-full text-theme leading-[1]">We are <span class="banner-red-title">Reurbon</span><br />
        <div class="sub-title">
          <img src="/images/about/pattern.png" data-gsap-grow data-delay="1.6" alt="">
            Born the
            <span class="font-(family-name:--font-ogg-text-trial) font-[300] font-italic">Creative</span>
        </div>
      </h1>
    </div>
  </section>

  <section id="aboutUs" class="section-container">
    <div class="@container container mx-auto">
      <div class="flex max-lg:flex-col items-start flex-row gap-[20px]  border-t border-t-[#A0A0A0] pt-[50px]">
        <div class="lg:flex-[50%] flex flex-col h-full">
          <p class="section-content font-[400] font_cabinet text-theme">About US</p>
        </div>
        <div class="lg:flex-[30%] flex flex-col h-full">
          <p class="section-content font-[400] font_cabinet text-theme">Reurbon is a bold-new agency made up of a collective of creatives and tech-skills that helps SMEs and B2B corporation enhance extraordinary brand values.</p>
        </div>
        <div class="lg:flex-[20%] flex flex-col h-full items-end">
          <button class="rounded-4xl sm:py-2 sm:px-2 min-w-[160px] w-fit hover-button hover-button--black">
            <em></em>
            <span>Our works <img class="arrow-icon" src="{{ asset('/images/header/white-arrow.svg') }}" alt="arrow"></span>
          </button>
        </div>
      </div>
    </div>
    <div id="parallax-container" class="animation-logo">
      <div class="left">
        <img src="\images\about\chrome-left-hand.png" class="left-hand" alt="">
      </div>
      <div class="center">
        <img id="parallax-image" src="\images\about\r-logo.png" class="r-logo" alt="">
      </div>
      <div class="right">
        <img src="\images\about\chrome-right-hand.png" class="right-hand" alt="">
      </div>
    </div>
    <div class="@container container mx-auto whitespace-pre-line">
      <div class="bottom-caption section-header font_cabinet text-black font-[500]">
        We save business from boring
        "Born" them a <span class="italic font-[ogo]  font-[300]">fresh start</span>.
      </div>
    </div>
  </section>

  <section class="section-container">
    <div class="@container container mx-auto">
      <div class="split-container border-t border-t-[#A0A0A0] py-10">
        <div class="left-content section-content">
          Reurbon / A story of rebirth
        </div>
        <div class="right-content section-content">
          <div class="whitespace-pre-line w-[60%] min-w-[400px] text-justify">Inspired by “reborn” which a fresh start with purpose, soul and story. Together this ideal, we strive to bring brands to life with interesting spirit and value.

            Even if it's just a small force, we hope to “reborn” a fresh new different looks for this overcrowded market, leaving a lasting spark wherever goes.
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="boxSimulation-wrapper section-container ">
    <div id="missionVision" class="@container container mx-auto bg-[#DE3A27] pb-[20px] text-white">
      <div class="content-wrapper flex flex-col pt-20">
        <div class="header">
          <div class="lead-title section-leading font-[300] color-[#FDFDFD] opacity-75 font_any">Mission & Vision</div>
          <div class="title section-subheader max-w-[400px] font_cabinet font-[500] text-center my-3 mb-10">
            The
            <em class="font_ogo_text font-[300]">secrete</em>
            where creativity & technology converge
          </div>
          <div class="split-container section-content my-6 justify-between">
            <div class="left-content">
              <div class="split-title font_cabinet font-[700]">Vision</div>
              <div class="split-content font_cabinet font-[400]">
                With our unstoppable passion, save all brands from outdated by creative ideas and super tech. Thus “reborn” a more vibrance vivid life to this market.
              </div>
            </div>
            <div class="right-content">
              <div class="split-title font_cabinet font-[700]">Mission</div>
              <div class="split-content font_cabinet font-[400]">
                Drive results by creating and transforming the brand in an effort. Strive to give the top respect by delivering high quality works and solutions.
              </div>
            </div>
          </div>
        </div>
        <div class="boxSimulation animate-widget border-t-[1px] border-white">
          <div class="tag">Booking System</div>
          <div class="tag">SEO & Content Strategy</div>
          <div class="tag">Creative Design</div>
          <div class="tag">Web & Mobile Development</div>
          <div class="tag">API Integrated</div>
          <div class="tag">E-Commerce Website</div>
          <div class="tag">Logo Design</div>
          <div class="tag">UI/UX Design</div>
          <div class="tag">Social Media Ads</div>
          <div class="tag">Content Planning</div>
          <div class="tag">Branding</div>
          <div class="tag">Customized System</div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-container">
    <div id="ourServiceWrapper" class="@container container mx-auto">
      <div class="flex flex-col md:flex-row gap-10">
        <!-- Left: Heading + Description -->
        <div class="w-full md:w-[60%] space-y-6" data-gsap-fade="bottom" data-fade-amount="35">
          <p class="text-[16px] xl:text-[21px] leading-[27px] text-light-theme font_any font-[300] text-gray-500">
            What we provide
          </p>
          <h2 class="text-[36px] xl:text-[46px] leading-[36px] xl:leading-[46px] font-[500] text-theme">
            Our <span class="font-(family-name:--font-ogg-text-trial) font-[300] font-italic">
              <em class="text-secondary">Se</em>rvices
            </span>
          </h2>
          <p class="md:max-w-[80%] text-[17px] xl:text-[22px] leading-[24px] xl:leading-[34px] font-[400] text-dark-theme max-w-[600px] mt-10 md:mt-15">
            For B2B and SMEs that struggling to drive growth. We passionate about craft branding that stick to
            deliver best result with ideal clients.
          </p>
        </div>

        <!-- Right: Service Categories -->
        <div class="w-full md:w-1/2 text-xs text-light-theme">
          <!-- IT Software Dev -->
          <div data-dropdown-wrapper class="border-t pt-4 space-y-4" data-gsap-fade="bottom" data-fade-amount="35">
            <div data-dropdown-header class="category-title-container flex flex-row justify-between items-center">
              <h3 class="category-title section-subheader text-theme">
                IT Software Dev
              </h3>
              <img data-dropdown-toggle src="\images\svg\arrow.svg" class="category-arrow" alt="">
            </div>

            <ul data-dropdown-child class="text-[17px] xl:text-[22px] leading-[24px] xl:leading-[34px] font-[400] space-y-[14px] mb-3">
              <li class="flex items-start gap-2 my-3">
                We develop websites and customise system that fit your business needs. Whether you need an e-commerce system or a fully customized website, we use advanced technologies like React, PHP, Node.js, and Laravel to create fast, reliable, and scalable digital solutions.</li>
            </ul>
          </div>

          <!-- Creative Design -->
          <div data-dropdown-wrapper class="border-t pt-4 space-y-4" data-gsap-fade="bottom" data-fade-amount="35">
            <div data-dropdown-header class="category-title-container flex flex-row justify-between items-center mt-3">
              <h3 class="category-title section-subheader text-theme">
                Creative Design
              </h3>
              <img data-dropdown-toggle src="\images\svg\arrow.svg" class="category-arrow" alt="">
            </div>
            <ul data-dropdown-child class="text-[17px] xl:text-[22px] leading-[24px] xl:leading-[34px] font-[400] space-y-[14px] mb-3">
              <li class="flex items-start gap-2 my-3">
                We develop websites and customise system that fit your business needs. Whether you need an e-commerce system or a fully customized website, we use advanced technologies like React, PHP, Node.js, and Laravel to create fast, reliable, and scalable digital solutions.</li>
            </ul>

          </div>

          <!-- Digital Marketing -->
          <div data-dropdown-wrapper class="border-t pt-4 space-y-4 border-b" data-gsap-fade="bottom" data-fade-amount="35">
            <div data-dropdown-header class="category-title-container flex flex-row justify-between items-center  mt-3">
              <h3 class="category-title section-subheader text-theme">
                Digital Marketing
              </h3>
              <img data-dropdown-toggle src="\images\svg\arrow.svg" class="category-arrow" alt="">
            </div>

            <ul data-dropdown-child class="text-[17px] xl:text-[22px] leading-[24px] xl:leading-[34px] font-[400] space-y-[14px] mb-3">
              <li class="flex items-start gap-2 my-3">
                We develop websites and customise system that fit your business needs. Whether you need an e-commerce system or a fully customized website, we use advanced technologies like React, PHP, Node.js, and Laravel to create fast, reliable, and scalable digital solutions.</li>
            </ul>

          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="section-container">
    <div id="developmentPhrase" class="@container container mx-auto">
      <div class="split-container " data-gsap-fade="bottom" data-fade-amount="35">
        <div class="phrase_title left-content pt-4 section-content text-theme">
          01 Phrase
        </div>
        <div class="w-full md:w-1/2  right-content text-xs text-light-theme">
          <div data-dropdown-wrapper class="pt-4 space-y-4">
            <div data-dropdown-header class="category-title-container flex flex-row justify-between">
              <h3 class="category-title section-content text-theme">
                Discovery
              </h3>
              <div class="read_box space-x-4">
                <span class="section-content text-theme">Read</span>
                <img data-dropdown-toggle data-rotate="90" src="\images\svg\arrow.svg" class="category-arrow" alt="">
              </div>
            </div>

            <div data-dropdown-child class="dropdown-child">
              <img src="\images\about\discovery-icon.png" alt="">
              <span class="section-content-child">
                We start by understanding business needs and brand objectives to develop a clear strategy plan
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="split-container " data-gsap-fade="bottom" data-fade-amount="35">
        <div class="phrase_title  left-content pt-4 section-content text-theme">
          02 Phrase
        </div>
        <div class="w-full  right-content md:w-1/2 text-xs text-light-theme">
          <div data-dropdown-wrapper class="pt-4 space-y-4">
            <div data-dropdown-header class="category-title-container flex flex-row justify-between">
              <h3 class="category-title section-content text-theme">
                Design
              </h3>
              <div class="read_box space-x-4">
                <span class="section-content text-theme">Read</span>
                <img data-dropdown-toggle data-rotate="90" src="\images\svg\arrow.svg" class="category-arrow" alt="">
              </div>
            </div>

            <div data-dropdown-child class="dropdown-child">
              <img src="\images\about\discovery-icon.png" alt="">
              <span class="section-content">
                We start by understanding business needs and brand objectives to develop a clear strategy plan
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="split-container " data-gsap-fade="bottom" data-fade-amount="35">
        <div class="phrase_title  left-content pt-4 section-content text-theme">
          03 Phrase
        </div>
        <div class="w-full right-content md:w-1/2 text-xs text-light-theme">
          <div data-dropdown-wrapper class="pt-4 space-y-4">
            <div data-dropdown-header class="category-title-container flex flex-row justify-between">
              <h3 class="category-title section-content text-theme">
                Development
              </h3>
              <div class="read_box space-x-4">
                <span class="section-content text-theme">Read</span>
                <img data-dropdown-toggle data-rotate="90" src="\images\svg\arrow.svg" class="category-arrow" alt="">
              </div>
            </div>

            <div data-dropdown-child class="dropdown-child">
              <img src="\images\about\discovery-icon.png" alt="">
              <span class="section-content">
                We start by understanding business needs and brand objectives to develop a clear strategy plan
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="split-container " data-gsap-fade="bottom" data-fade-amount="35">
        <div class="phrase_title left-content pt-4 section-content text-theme">
          04 Phrase
        </div>
        <div class="w-full right-content md:w-1/2 text-xs text-light-theme">
          <div data-dropdown-wrapper class="pt-4 space-y-4">
            <div data-dropdown-header class="category-title-container flex flex-row justify-between">
              <h3 class="category-title section-content text-theme">
                Enhancement
              </h3>
              <div class="read_box space-x-4">
                <span class="section-content text-theme">Read</span>
                <img data-dropdown-toggle data-rotate="90" src="\images\svg\arrow.svg" class="category-arrow" alt="">
              </div>
            </div>

            <div data-dropdown-child class="dropdown-child">
              <img src="\images\about\discovery-icon.png" alt="">
              <span class="section-content">
                We start by understanding business needs and brand objectives to develop a clear strategy plan
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="split-container border-[#a0a0a0] border-b-[1px]" data-gsap-fade="bottom" data-fade-amount="35">
        <div class="phrase_title left-content pt-4 section-content text-theme">
          05 Phrase
        </div>
        <div class="w-full right-content md:w-1/2 text-xs text-light-theme">
          <div data-dropdown-wrapper class="pt-4 space-y-4">
            <div data-dropdown-header class="category-title-container flex flex-row justify-between">
              <h3 class="category-title section-content text-theme">
                Delivery
              </h3>
              <div class="read_box space-x-4">
                <span class="section-content text-theme">Read</span>
                <img data-dropdown-toggle data-rotate="90" src="\images\svg\arrow.svg" class="category-arrow" alt="">
              </div>
            </div>

            <div data-dropdown-child class="dropdown-child">
              <img src="\images\about\discovery-icon.png" alt="">
              <span class="section-content">
                We start by understanding business needs and brand objectives to develop a clear strategy plan
              </span>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="section-container">
    <div id="ourAchievement" class="@container container mx-auto">
      <div class="split-container justify-between py-10">
        <div class="title left-content">
          <p class="text-[16px] xl:text-[21px] leading-[27px] text-light-theme font_any font-[300] text-gray-500">
            Our Achievement
          </p>
          <h2 class="mt-2 text-[36px] xl:text-[46px] leading-[36px] xl:leading-[46px] font_cabinet font-[500] text-theme">
            <span class="text-secondary">
              Reurbon
            </span>
            in
            <span class="font-italic font_ogo_text font-[300]">Number</span>
          </h2>
        </div>
        <div class="content grid grid-cols-2  gap-6 right-content">
          <div class="content-item">
            <h1 class="section-header ">99+</h1>
            <span class="section-leading">Bran-tech solutions delivered</span>
          </div>
          <div class="content-item">
            <h1 class="section-header ">50+</h1>
            <span class="section-leading">Custom IT solutions implemented</span>
          </div>
          <div class="content-item">
            <h1 class="section-header ">85%</h1>
            <span class="section-leading">Clients return for more projects</span>
          </div>
          <div class="content-item">
            <h1 class="section-header ">15+</h1>
            <span class="section-leading">Industries we've worked</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include("web.component.feedbackSlide")
  @include("web.component.consultation")


</div>
@endsection