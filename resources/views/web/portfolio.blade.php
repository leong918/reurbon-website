@extends('web.layout.app')

@section('content')
<div id="portfolio">
  <section class="section-banner">
    <div class="overflow-hidden !max-w-none !h-[500px] !pr-[0] container banner-section bg-light-grey flex-row justify-between">
      <div class="banner-title text-black my-auto ">
        Woaw
        <span class="banner-red-title font-italic font-[ogo]">Portfolio</span>
      </div>
      <div class="image-container my-auto">
        <img src="\images\portfolio\portfolio-banner-deboss-font.png" class="banner-image" />
      </div>
    </div>
  </section>

  <section class="section-container">
    <div class="@container container mx-auto">
      <div class="work-item-category-nav mb-20">
        <div class="title relative font-[ogo] section-subheader p-10 pl-20 pr-0">
          <span>
            Some <p>Recent Works</p>
          </span>
          <img src="{{ asset("/images/portfolio/portfolio-title-arrow.png")}}">
        </div>
        <div class="item-list flex-item-list-container section-content ml-10">
          <button class="item active">All</button>
          <button class="item">Branding</button>
          <button class="item">Website & App</button>
        </div>
      </div>
      <div class="work-item grid-item-list-container !grid-cols-12">
        <div class="grid-item-first-row card">
          <div class="card-content">
            <div class="card-header section-subheader">Born the Creative</div>
            <div class="card-subheader section-content">By Reurbon</div>
          </div>
        </div>
        <div class="grid-item-first-row card">
          <div class="card-content">
            <div class="card-header section-subheader">Born the Creative</div>
            <div class="card-subheader section-content">By Reurbon</div>
          </div>
        </div>
        <div class="grid-item-row card">
          <div class="card-content">
            <div class="card-header section-subheader">Born the Creative</div>
            <div class="card-subheader section-content">By Reurbon</div>
          </div>
        </div>
        <div class="grid-item-row card">
          <div class="card-content">
            <div class="card-header section-subheader">Born the Creative</div>
            <div class="card-subheader section-content">By Reurbon</div>
          </div>
        </div>
        <div class="grid-item-row card">
          <div class="card-content">
            <div class="card-header section-subheader">Born the Creative</div>
            <div class="card-subheader section-content">By Reurbon</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include("web.component.consultation")
</div>
@endsection