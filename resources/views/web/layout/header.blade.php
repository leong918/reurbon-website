<header id="tt-header" class="tt-header-fixed">
    <div class="tt-header-inner justify-between items-center">
        <div class="flex-1">
            <!-- Begin logo -->
            <div class="tt-logo">
                <a href="{{ route('web.home') }}">
                    <img src="{{ asset('/template/img/logo-light.png') }}" class="tt-logo-light magnetic-item"
                        alt="Logo">
                    <img src="{{ asset('/template/img/logo-dark.png') }}" class="tt-logo-dark magnetic-item"
                        alt="Logo">
                </a>
            </div>
            <!-- End logo -->
        </div> <!-- /.tt-header-col -->

        <div class="flex-3">
            <nav class="pointer-events-auto">
                <ul class="flex flex-row justify-center items-center list-none gap-[50px]">
                    <li>
                        <a href="{{ route('web.home') }}" class="text-white transition-colors duration-200 hover:text-[red]">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('web.about') }}" class="text-white transition-colors duration-200 hover:text-[red]">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('web.portfolio') }}" class="text-white transition-colors duration-200 hover:text-[red]">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('web.blogs') }}" class="text-white transition-colors duration-200 hover:text-[red]">
                            Blogs
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('web.contact') }}" class="text-white transition-colors duration-200 hover:text-[red]">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="flex-1 text-end pointer-events-auto">
            <a href="{{ route('web.quotation') }}" class="tt-btn tt-btn-primary">
                Get a Quotation
            </a>
        </div>

    </div> <!-- /.header-inner -->
</header>
