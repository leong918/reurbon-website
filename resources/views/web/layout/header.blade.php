<header id="tt-header" class="tt-header-fixed">
    <div class="tt-header-inner justify-between items-center">
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
            <button class="btn-default hover-default tt-sliding-sidebar-trigger-custom " type="submit">
                <em></em>
                <span>Get a Quotation <img class="arrow-icon" src="{{ asset('/images/header/white-arrow.svg') }}" alt="arrow"></span>
            </button>
        </div>
        <div class="tt-sliding-sidebar-wrap tt-ss-right">
            <div class="tt-sliding-sidebar">
                <div class="tt-sliding-sidebar-inner">
                    <form action="#" id="contact_form" method="post">
                        <div class="text-right close-trigger"><img src="{{ asset('/images/header/close-btn.svg') }}" alt="close"></div>
                        <div>
                            <h4 class="cabinet-bold" style="line-height: 31px;">Let’s Connect & Collaboration!</h4>
                        </div>
                        <div>
                            <p class="desc">We are a full-fledged agency made up of a collective of creatives and tech-skills. We actively collaborate with businesses, SMEs and agencies to create impact together.</p>
                        </div>
                        <div>
                            <h6 class="cabinet-medium">What do you need?<span class="text-reurbon-red">*</span></h6>
                            <div class="checkbox-container">
                                <div class="custom-checkbox">
                                    <label>
                                        <input type="checkbox" name="type[]" value="Learn more about us" />
                                        <span class="checkmark"></span>
                                        Learn more about us
                                    </label>
                                </div>
                                <div class="custom-checkbox">
                                    <label>
                                        <input type="checkbox" name="type[]" value="Get free consultation" />
                                        <span class="checkmark"></span>
                                        Get free consultation
                                    </label>
                                </div>
                                <div class="custom-checkbox">
                                    <label>
                                        <input type="checkbox" name="type[]" value="Potential partnership" />
                                        <span class="checkmark"></span>
                                        Potential partnership
                                    </label>
                                </div>
                                <div class="custom-checkbox">
                                    <label>
                                        <input type="checkbox" name="type[]" value="Others" />
                                        <span class="checkmark"></span>
                                        Others
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="margin-top-50">
                            <h6 class="cabinet-medium">How do we get in touch?<span class="text-reurbon-red">*</span></h6>
                            <div class="form__group field">
                                <input type="input" class="form__field" placeholder="Your name*" name="name" id='name' required />
                                <label for="name" class="form__label">Your name*</label>
                            </div>
                            <div class="form__group field">
                                <input type="input" class="form__field" placeholder="Your company*" name="company" id='company' required />
                                <label for="company" class="form__label">Your company*</label>
                            </div>
                            <div class="form__group field">
                                <input type="email" class="form__field" placeholder="Email address*" name="email" id='email' required />
                                <label for="email" class="form__label">Email address*</label>
                            </div>
                            <div class="form__group field">
                                <input type="input" class="form__field" placeholder="Contact no*" name="contact" id='contact' required />
                                <label for="contact" class="form__label">Contact no*</label>
                            </div>
                        </div>
                        <div class="text-center submit-container">
                            <button class="btn-default hover-default" type="submit">
                                <em></em>
                                <span>Send Message<img class="arrow-icon" src="{{ asset('/images/header/close-btn.svg') }}" alt="arrow"></span>
                            </button>
                        </div>
                    </form>
                </div> <!-- /.tt-sliding-sidebar-inner -->
            </div> <!-- /.tt-sliding-sidebar -->

            <!-- Close overlay -->
            <div class="tt-sliding-sidebar-close cursor-close"></div>

        </div>
    </div> <!-- /.header-inner -->
</header>