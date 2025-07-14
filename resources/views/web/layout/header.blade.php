<header id="tt-header" class="tt-header-fixed">
    <div class="tt-header-inner @container container mx-auto px-4 lg:px-[50px]">
        <div class="flex-1">
            <!-- Begin logo -->
            <div class="tt-logo">
                <a href="{{ route('web.home') }}">
                    <img src="{{ asset('/images/reurbon-logo-white.png') }}" class="tt-logo-light magnetic-item"
                        alt="Logo">
                    <img src="{{ asset('/images/reurbon-logo-black.png') }}" class="tt-logo-dark magnetic-item"
                        alt="Logo">
                </a>
            </div>
            <!-- End logo -->
        </div> <!-- /.tt-header-col -->

        <div class="flex-3">
            <nav class="pointer-events-auto">
                <ul class="flex flex-row justify-center items-center list-none gap-[50px]">
                    <li>
                        <a href="{{ route('web.home') }}" class="text-white transition-colors duration-200 hover:!text-[red] magnetic-item">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('web.about') }}" class="text-white transition-colors duration-200 hover:!text-[red] magnetic-item">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('web.portfolio') }}" class="text-white transition-colors duration-200 hover:!text-[red] magnetic-item">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('web.blogs') }}" class="text-white transition-colors duration-200 hover:!text-[red] magnetic-item">
                            Blogs
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('web.contact') }}" class="text-white transition-colors duration-200 hover:!text-[red] magnetic-item">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="flex-1 text-end pointer-events-auto magnetic-item">
            <button class="btn-default px-5 hover-button hover-button--white tt-sliding-sidebar-trigger-custom " type="submit">
                <em></em>
                <span>Get a Quotation <img class="arrow-icon" src="{{ asset('/images/header/white-arrow.svg') }}" alt="arrow"></span>
            </button>
        </div>

    </div> <!-- /.header-inner -->
</header>