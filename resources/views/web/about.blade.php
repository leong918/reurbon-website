@extends('web.layout.app')

@section('content')
<div id="about">
  <section class="bg-light-grey pt-[200px]">
    <div class="@container md:container px-4 lg:px-[50px] mx-auto">
      <h1 class="text-[92px] text-theme leading-[1]">We are <span class="text-red-600 font-normal">Reurbon</span><br />
        Born the <span class="font-(family-name:--font-ogg-text-trial) font-[300] font-italic">Creative</span>
      </h1>
    </div>
  </section>

  <section class="bg-light-grey pt-[125px] pb-[85px]">
    <div class="@container md:container px-4 lg:px-[50px] mx-auto ">
      <div class="flex flex-wrap gap-y-[20px] items-stretch border-t pt-[50px]">
        <div class="lg:flex-[0_0_40%] flex flex-col h-full">
          <p class="text-[22px] text-theme">About US</p>
        </div>
        <div class="lg:flex-[0_0_40%] flex flex-col h-full">
          <p class="text-[22px] text-theme">Reurbon is a bold-new agency made up of a collective of creatives and tech-skills that helps SMEs and B2B corporation enhance extraordinary brand values.</p>
        </div>
        <div class="lg:flex-[0_0_20%] flex flex-col h-full items-end">
          <button class="btn-default min-w-[160px] w-fit hover-button hover-button--black">
            <em></em>
            <span>Our works <img class="arrow-icon" src="{{ asset('/images/header/white-arrow.svg') }}" alt="arrow"></span>
          </button>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection