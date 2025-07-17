<footer id="tt-footer" class="bg-[#ebebeb] py-10 md:py-[90px]!">
    <div class="tt-footer-inner">
        <div class="@container container mx-auto flex flex-col md:flex-row justify-between items-start gap-10 md:gap-[50px]">
            <div class="footer-col w-full md:w-1/2">
                <h1 class="font-[400] text-4xl md:text-[78px] leading-tight md:leading-[73px] text-theme">
                    Born the Creative
                    <span class="font-[700] block">Power by Tech</span>
                </h1>
            </div>
            <div class="footer-col w-full md:w-1/2">
                <div class="mb-10 md:mb-[50px] text-theme">
                    <h5 class="text-4xl md:text-[78px] leading-tight md:leading-[73px] text-secondary font-[700]">
                        REURBON
                    </h5>
                </div>
    
                <div class="mb-10 md:mb-[55px] text-theme">
                    <p class="font-[700] text-lg md:text-[20px] leading-6 md:leading-[30px] mb-3 md:mb-[18px] text-theme">
                        S:
                    </p>
                    <ul class="flex flex-col gap-2.5 md:gap-[10px]">
                        <li>
                            <a href="https://instagram.com" target="_blank" rel="noopener"
                                class="text-theme text-lg md:text-[20px] leading-6 md:leading-[30px] hover:text-theme font-[500]">
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://facebook.com" target="_blank" rel="noopener"
                                class="text-theme text-lg md:text-[20px] leading-6 md:leading-[30px] hover:text-theme font-[500]">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/" target="_blank" rel="noopener"
                                class="text-theme text-lg md:text-[20px] leading-6 md:leading-[30px] hover:text-theme font-[500]">
                                Whatsapp
                            </a>
                        </li>
                    </ul>
                </div>
    
                <div class="mb-10 md:mb-[55px] text-theme">
                    <div class="flex flex-col md:flex-row gap-8 md:gap-[223px]">
                        <div class="flex-1 md:flex-[0_0_300px]">
                            <p class="font-[700] text-lg md:text-[20px] leading-6 md:leading-[30px] mb-3 md:mb-[18px] text-theme">L:</p>
                            <ul class="flex flex-col gap-2.5 md:gap-[10px]">
                                <li class="text-theme text-lg md:text-[20px] leading-6 md:leading-[30px] font-[500]">
                                    No.3, Condo, Jalan Riang Ria 8, Taman Gembira, 58200 Kuala Lumpur
                                </li>
                                <li class="text-theme text-lg md:text-[20px] leading-6 md:leading-[30px] font-[500]">
                                    +(60) 11-3777-4131
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 md:flex-[0_0_300px] mt-8 md:mt-0">
                            <p class="font-[700] text-lg md:text-[20px] leading-6 md:leading-[30px] mb-3 md:mb-[18px] text-theme">
                                M :
                            </p>
                            <ul class="flex flex-col gap-2.5 md:gap-[10px]">
                                <li>
                                    <a href="{{ route('web.home') }}" class="text-theme text-lg md:text-[20px] leading-6 md:leading-[30px] hover:text-theme font-[500]">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('web.about') }}" class="text-theme text-lg md:text-[20px] leading-6 md:leading-[30px] hover:text-theme font-[500]">About us</a>
                                </li>
                                <li>
                                    <a href="#" class="text-theme text-lg md:text-[20px] leading-6 md:leading-[30px] hover:text-theme font-[500]">Our Work</a>
                                </li>
                                <li>
                                    <a href="{{ route('web.blogs') }}" class="text-theme text-lg md:text-[20px] leading-6 md:leading-[30px] hover:text-theme font-[500]">Blogs</a>
                                </li>
                                <li>
                                    <a href="{{ route('web.contact') }}" class="text-theme text-lg md:text-[20px] leading-6 md:leading-[30px] hover:text-theme font-[500]">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
    
                <div class="text-theme">
                    <p class="font-[700] text-lg md:text-[20px] leading-6 md:leading-[30px] mb-3 md:mb-[18px] text-theme">
                        E:
                    </p>
                    <ul class="flex flex-col gap-2.5 md:gap-[10px]">
                        <li>
                            <a href="mailto:enquieries.reurbon@gmail.com" class="text-theme text-lg md:text-[20px] leading-6 md:leading-[30px] hover:text-theme font-[500]">
                                enquieries.reurbon@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tt-footer-inner mt-10 md:mt-[60px]">
        <div class="@container container mx-auto text-start">
            <p class="fw-[500] text-lg md:text-[20px] leading-6 md:leading-[30px] text-theme">
                {{ date('Y') }} | &copy; All Right Reserved by Reurbon
            </p>
        </div>
    </div>
</footer>
