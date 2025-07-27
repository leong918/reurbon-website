<div class="tt-sliding-sidebar-wrap tt-ss-right">
    <div class="tt-sliding-sidebar">
        <div class="tt-sliding-sidebar-inner">
            <form action="#" id="contact_form" method="post" class="grid h-full">
                <div>
                    <h1 class="text-theme text-[30px] font-[500]">Request a quotation</h1>
                </div>
                <div class="mt-7">
                    <p class="text-theme text-[17px] font-[500] leading-[24px]">Get a ballpark costing on the product or idea you want to build. Be specific to get a more concise cost and timeline.</p>
                </div>
                <div class="mt-10">
                    <h6 class="text-theme text-[22px]">What do you need?<span class="text-secondary">*</span></h6>
                    <div class="checkbox-container mt-7">
                        <div class="custom-checkbox">
                            <label class="text-theme text-[17px] font-[500]">
                                <input type="checkbox" name="type[]" value="Brand Design Services" />
                                <span class="checkmark"></span>
                                Brand Design Services
                            </label>
                        </div>
                        <div class="custom-checkbox">
                            <label class="text-theme text-[17px] font-[500]">
                                <input type="checkbox" name="type[]" value="Build a Website/App" />
                                <span class="checkmark"></span>
                                Build a Website/App
                            </label>
                        </div>
                        <div class="custom-checkbox">
                            <label class="text-theme text-[17px] font-[500]">
                                <input type="checkbox" name="type[]" value="Digital Marketing" />
                                <span class="checkmark"></span>
                                Digital Marketing
                            </label>
                        </div>
                        <div class="custom-checkbox">
                            <label class="text-theme text-[17px] font-[500]">
                                <input type="checkbox" name="type[]" value="Others" />
                                <span class="checkmark"></span>
                                Others
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <h6 class="text-theme text-[22px]">How do we get in touch?<span class="text-reurbon-red">*</span></h6>
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
                <div class="text-center mt-10">
                    <button class="btn-default min-w-[280px] !h-[80px] w-fit hover-button hover-button--red" type="submit">
                        <em></em>
                        <span class="font-[500]">Send Message<img class="arrow-icon" src="{{ asset('/images/header/white-arrow.svg') }}" alt="arrow"></span>
                    </button>
                </div>
            </form>
        </div>
    </div> <!-- /.tt-sliding-sidebar -->

    <!-- Close overlay -->
    <div class="tt-sliding-sidebar-close cursor-close"></div>
</div>