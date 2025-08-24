    <section id="custom-component" class="pt-[80px] md:pt-[120px] pb-[80px] md:pb-[120px] relative overflow-hidden bg-[#110000] anim-fadeinup" data-speed="800" data-simulate-touch="true"
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