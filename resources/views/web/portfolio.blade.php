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
    <div id="portfolio-container" class="@container container mx-auto flex flex-col overflow-hidden">
      @php
      $category = ["All", "Branding", "Website & App", "Social Media", "System Development"];
      $portfolios = [
      [
      "title"=> "Born the Creative",
      "sub_title"=> "By Reurbon",
      "image"=>"https://www.mindinventory.com/blog/wp-content/uploads/2023/11/difference-between-ui-ux.webp",
      "category"=> "Branding",
      "link" => "https://www.facebook.com/",
      "order"=>1
      ],
      [
      "title"=> "Born the Creative",
      "sub_title"=> "By Reurbon",
      "image"=>"https://cdn.dribbble.com/userupload/16734509/file/original-5a0621b7a943fc636554615a823aa49d.png?resize=400x0",
      "category"=> "Website & App",
      "link" => "https://www.facebook.com/",
      "order"=>2
      ],
      [
      "title"=> "Born the Creative",
      "sub_title"=> "By Reurbon",
      "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-1qnLKJZy0X5ZYc0DdqAGX9Ta4WFQH_3Otw&s",
      "category"=> "Social Media",
      "link" => "https://www.facebook.com/",
      "order"=>3
      ],
      [
      "title"=> "Born the Creative",
      "sub_title"=> "By Reurbon",
      "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl5OfD-r5JhPk9Brn3RTk-BpgMPA_jWxbuJg&s",
      "category"=> "System Development",
      "link" => "https://www.facebook.com/",
      "order"=>4
      ],
      [
      "title"=> "Born the Creative",
      "sub_title"=> "By Reurbon",
      "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl5OfD-r5JhPk9Brn3RTk-BpgMPA_jWxbuJg&s",
      "category"=> "System Development",
      "link" => "https://www.facebook.com/",
      "order"=>5
      ],
      [
      "title"=> "Born the Creative",
      "sub_title"=> "By Reurbon",
      "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl5OfD-r5JhPk9Brn3RTk-BpgMPA_jWxbuJg&s",
      "category"=> "System Development",
      "link" => "https://www.facebook.com/",
      "order"=>6
      ]
      ];
      $portfolio = usort($portfolios, function($a, $b) {
      return $a['order'] <=> $b['order']; // ascending
        });
        @endphp
        <div id="portfolio-category-wrapper" class="@container work-item-category-nav lg:mb-20 mb-10 h-min">
          <div class="title relative font-[ogo] section-subheader p-10 pl-20 pr-0 max-md:!text-[20px]">
            <span>
              Some <p>Recent Works</p>
            </span>
            <img class=" lg:!h-[70px] lg:left-[10px] lg:bottom-[-50px] !h-[50px] left-[40px] bottom-[-20px]" src="{{ asset("/images/portfolio/portfolio-title-arrow.png")}}">
          </div>
          <div id="portfolio-filter-container" class="item-list flex-item-list-container section-content ml-10">
            @foreach($category as $item)
            <button
              class="item {{ $loop->first ? 'active' : '' }}"
              data-category="{{ $item }}">
              {{ $item }}
            </button>
            @endforeach
          </div>
        </div>

        <div id="portfolio-items-container" class="work-item grid-item-list-container overflow-hidden !grid-cols-12">
          @foreach ($portfolios as $portfolio)
          <div
            onclick="window.open('{{ $portfolio['link'] }}', '_blank')"
            data-category="{{$portfolio['category']}}" class="{{ $loop->index<2?"grid-item-first-row":"grid-item-row" }} card">
            <div class="img-wrapper">
              <img src={{ $portfolio['image'] }} alt="">
            </div>
            <div class="card-content">
              <div class="card-header section-subheader">{{ $portfolio['title'] }} </div>
              <div class="card-subheader section-content">{{ $portfolio['sub_title'] }} </div>
            </div>
          </div>
          @endforeach
        </div>
  </section>

  @include("web.component.consultation")
</div>
@endsection