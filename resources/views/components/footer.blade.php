<div class="container-fluid py-4" id="footer_bg">


    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/footer_logo.svg') }}" alt="Redrep">
                </a>
                {{-- <div class="btn_hire pt-5">
                    <a href="{{ route('home') }}#pricing-section" class=" text-decoration-none text-light  change-btn">
                        <button type="submit" id="scroll-button" class="btn btn-danger border-2">
                            Hire RedRep
                        </button>
                    </a>
                </div> --}}
                <div class="copyright text-white pt-5">
                    <div class="text-white mb-4">
                        <p class="m-0"><span class="fw-semibold m-0">RedRep LLC<br></span>30 N Gould
                            Street
                            Suite 22970, Sheridan,<br> WY, United States, 82801</p>
                        <a href="tel:+16068799555" class="card-link text-decoration-none m-0 text-white"><i
                                class="fa fa-whatsapp"></i> <i class="fa fa-phone"></i> +1
                            606-879-9555</a> <br>
                        <a href="mailto:hello@redrep.io" class="card-link text-decoration-none m-0 text-white"><i
                                class="far fa-envelope"></i> hello@redrep.io</a>
                                <div class="social-icons">
                                    <a target="_blank" href="https://instagram.com/getredrep?igshid=NGVhN2U2NjQ0Yg==">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a target="_blank" href="https://www.twitter.com/getredrep">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a target="_blank" href="https://www.linkedin.com/company/getredrep">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a target="_blank" href="https://www.facebook.com/getredrep/">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </div>
                    </div>
                    2023 RedRep. All Rights Reserved.
                </div>
            </div>
            <div class="col-md-2 text-white">
                <h6 class="text-dark-emphasis mt-3 fw-bold text-uppercase footer-headings">Services</h6>
                <div class="links d-flex flex-column gap-3">
                    <a href="{{ route('services', ['page' => 'task-genie']) }}"
                        class=" text-decoration-none  text-white">Task Genie</a>

                    <a href="{{ route('services', ['page' => 'tech-whiz']) }}"
                        class=" text-decoration-none  text-white"> Tech Whiz</a>
                    <a href="{{ route('services', ['page' => 'marketing-maverick']) }}"
                        class=" text-decoration-none  text-white">Marketing Maverick</a>

                    <a href="{{ route('services', ['page' => 'money-master']) }}"
                        class=" text-decoration-none  text-white">Money Master</a>

                    <a href="{{ route('services', ['page' => 'data-jedi']) }}"
                        class=" text-decoration-none  text-white">Data Jedi</a>

                    <a href="{{ route('services', ['page' => 'word-ninja']) }}"
                        class=" text-decoration-none  text-white">Word Ninja</a>

                    <a href="{{ route('services', ['page' => 'linguister']) }}"
                        class=" text-decoration-none  text-white">Linguister</a>
                </div>
            </div>
            <div class="col-md-2 text-white">
                <h6 class="text-dark-emphasis mt-3 fw-bold text-uppercase footer-headings">Resources</h6>
                <div class="links d-flex flex-column  gap-3">
                    <a href="" data-bs-toggle="modal" data-bs-target="#comingSoonModal"
                        class=" text-decoration-none  text-white">Blogs</a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#comingSoonModal"
                        class=" text-decoration-none  text-white">Radio (Newsletter)</a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#comingSoonModal"
                        class=" text-decoration-none  text-white">Case Studies</a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#comingSoonModal"
                        class=" text-decoration-none  text-white">Help Center</a>
                </div>
            </div>
            <div class="col-md-2 text-white">
                <h6 class="text-dark-emphasis mt-3 fw-bold text-uppercase footer-headings">Company</h6>
                <div class="links d-flex flex-column  gap-3">
                    <a href="{{ route('career') }}" class=" text-decoration-none  text-white">Career</a>
                    <a href="{{ route('term-of-use') }}" class=" text-decoration-none  text-white"> Terms</a>
                    <a href="{{ route('privacy-policy') }}" class=" text-decoration-none  text-white">Privacy</a>
                    <a data-bs-toggle="modal" data-bs-target="#contactModal" type="button"
                        class=" text-decoration-none  text-white">Contact Us</a>
                </div>
                <div class="hide">
                    <div class="text-white mt-5">
                        <p class="m-0"><span class="fw-semibold m-0">RedRep LLC<br></span>30 N Gould
                            Street
                            Suite 22970, Sheridan,<br> WY, United States, 82801</p>
                        <a href="tel:+16068799555" class="card-link text-decoration-none m-0 text-white"><i
                                class="fa fa-whatsapp"></i> <i class="fa fa-phone"></i> +1
                            606-879-9555</a> <br>
                        <a href="mailto:hello@redrep.io" class="card-link text-decoration-none m-0 text-white"><i
                                class="far fa-envelope"></i> hello@redrep.io</a>
                    </div>
                    <p class="copyright_mobile mt-3"> 2023 RedRep. All Rights Reserved.</p>
                </div>
            </div>
            <hr style="color: white; margin: 20px 0 ;">
            <div class="container d-flex flex-row justify-content-center text-center gap-2">
                <img src="{{ asset('assets/devarx-logo-white.svg') }}" alt="devarx" width="14px" height="14px">
                <p class="copyright_mobile text-white mb-0" style="font-size: 12px">Designed and developed by
                    <a target="_blank" class="fw-bold"
                        href="https://devarx.org/?utm_source=redreps.io&utm_medium=acquisition&utm_content=footer"
                        style="color: #4087c5;">DevArx.org</a>
                </p>
            </div>

        </div>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <form class="row g-3" id="contactForm" action="{{ route('submitContactForm') }}"
                            method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="d-flex fw-bold col-form-label">Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Your Full Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="d-flex fw-bold col-form-label">Email<span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@domain.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="d-flex fw-bold col-form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Add Your Message"></textarea>
                            </div>


                        </form>
                    </div>
                    <div class="col-md-6" style="border-left: 1px solid #dee2e6">
                        <div class="container h-100">
                            <div class="d-flex flex-row align-items-center gap-3">
                                <img src="{{ asset('assets/location.svg') }}" alt="Location" width="50px"
                                    height="50px">
                                <div>
                                    <p class="card-text m-0"><span class="fw-semibold m-0">RedRep LLC<br></span>30 N
                                        Gould
                                        Street
                                        Suite 22970, Sheridan, WY, United States, 82801</p>
                                    <a href="tel:+16068799555" class="card-link text-decoration-none m-0 text-dark"><i
                                            class="fa fa-whatsapp"></i> <i class="fa fa-phone"></i> +1
                                        606-879-9555</a> <br>
                                    <a href="mailto:hello@redrep.io"
                                        class="card-link text-decoration-none m-0 text-dark"><i
                                            class="far fa-envelope"></i> hello@redrep.io</a>
                                </div>
                            </div>
                            <iframe class="float-start mt-4 ms-1" style="width: 80%; height: 58%"
                                src="https://maps.google.com/maps?q=30%20N%20Gould%20St,%20Sheridan,%20WY%2082801,%20USA&amp;t=&amp;z=6&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn ms-auto btn-dark" form="contactForm">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="https://calendly.com/redrep/sales-call" target="_blank" class="btn btn-danger">Book
                    Appointment</a>
            </div>
        </div>
    </div>
</div>






{{-- Modal --}}
<div class="modal fade" id="comingSoonModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header justify-content-between">
                <img src="{{ asset('assets/logo.svg') }}" width="40" alt="">
                <h2 class="text-center">Coming Soon</h2>
                <div class=""></div>
            </div>
            <div class="modal-body">
                RedRep is about to unveil an AI tech marvel that will reshape the future. Stay on the edge; it's coming
                soon! </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
