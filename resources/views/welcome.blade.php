@extends('layouts.mylayouts')


@section('content')
    {{-- <a href="https://calendly.com/redrep/sales-call" target="_blank"> --}}
        <div class="floating-btn float-start rounded-circle p-2">

            <img src="{{ asset('assets/ai.svg') }}" alt="image" class="w-100 " >
            <div class="text">
                <img src="{{asset('assets/callout.svg')}}" alt="">
                {{-- <p>RedRep elevates tasks with AI, rewriting the
                    playbook of excellence.</p> --}}
            </div>
        </div>


    {{-- </a> --}}

    {{-- <button class="tool-tip">Here I am</button> --}}
    {{-- Hero Section --}}
    <div class="text-center justify-content-between d-flex flex-column" id="hero_Section">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="fw-bold">Double Up Your <span class="text-red">Savings!</span></h2>
                        <h2 class="fw-bold">Through Smart Remote Staffing</h2>
                    </div>
                    <div class="para">
                        <p>Unlock remote staffing efficiency with RedRep.<br> No more staff churn or hiring fuss, just
                            savings and
                            streamlined
                            operations.</p>
                    </div>
                    <div class="hirebtn pb-1">
                        <a href="#services" class="text-decoration-none text-light change-btn">
                            <button type="submit" class="btn btn-dark">
                                Dive Deeper
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="layer" data-aos="fade-up" data-aos-delay="0" data-aos-offset="-200">
            <img src="{{ asset('assets/hero.svg') }}" alt="background image">
        </div>
    </div>
    {{-- Services --}}
    <div class="container-fluid mt-5" id="services">
        <h2 class="fw-bold text-center" id="services">Services</h2>
        <div class="container d-flex flex-column justify-content-center d-none d-md-block">
            {{-- <div class="row">
                <div class="col-md-12 text-center">
                    <div class="task-img">
                        <img class="w-100" data-aos="fade-right" style="max-width: 700px"
                            src="{{ asset('assets/tasks.svg') }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <p class="service_paragraph">At RedRep, we've got the moves to lighten your load
                        and keep the groove going. We're here to bust a move
                        on those tedious tasks that bog you down, so you can
                        stay in the rhythm of doing what you love. Our
                        talented team is ready to take care of all the
                        administrative and time
                        -consuming stuff, leaving you
                        free to rock and roll with your passions. Get ready to
                        dance to the beat of productivity and leave the heavy
                        lifting to us. RedRep, bringing the excitement to your
                        workday!</p>
                </div>
            </div>
            <div class="hirebtn pb-5 my-5 text-center">
                <a href="#pricing-section" class=" text-decoration-none text-light  change-btn"><button type="submit"
                        class="btn btn-dark border-2">
                        Choose Your RedRep
                    </button></a>
            </div> --}}
        </div>

        <div class="container pt-5 " id="cards-scroll">
            <div class="slider mb-5">
                <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-white shadow-sm" id="pricing-section" role="tablist"
                    style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-white); --bs-nav-pills-link-active-bg: var(--bs-black);">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link change-color active rounded-5" id="home-tab2" data-bs-toggle="tab"
                            type="button" role="tab" aria-selected="true" onclick="updatePrice(0)">Upto 40 Hrs</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link change-color rounded-5" id="profile-tab2" data-bs-toggle="tab"
                            type="button" role="tab" aria-selected="false" onclick="updatePrice(1)">Upto 80
                            Hrs</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link change-color rounded-5" id="contact-tab2" data-bs-toggle="tab"
                            type="button" role="tab" aria-selected="false" onclick="updatePrice(2)">Upto 120
                            Hrs</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link change-color rounded-5" id="contact-tab2" data-bs-toggle="tab"
                            type="button" role="tab" aria-selected="false" onclick="updatePrice(3)">+120
                            Hrs</button>
                    </li>
                </ul>
            </div>
            <div class="row justify-content-center gy-4">

                <div class="col-md-3">
                    <div class="card  h-100 service-card text-center flex-row flex-md-column" data-aos="fade-up"
                        data-aos-delay="0">
                        <div class="card_image ">

                            <img src="{{ asset('assets/task_genie.svg') }}">
                        </div>
                        <div class="card-body card-body justify-content-between d-flex flex-column">
                            <div class="">
                                <h5 class="card-title fw-bold fs-5">Task Genie</h5>
                                <p class="card-text pb-3">Your Virtual Assistant, Task
                                    Genie, who works magic behind the scenes
                                    to lighten your workload.
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('services', ['page' => 'task-genie']) }}"
                                    class="btn btn-dark border-2 fw-bold text-white btn-sm px-4">More</a>
                                <p class="card-text-hr mb-0 span-change">
                                    <span id="task-genie-price"></span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100 service-card text-center flex-row flex-md-column" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="card_image ">

                            <img src="{{ asset('assets/tech_whiz1.svg') }}">
                        </div>
                        <div class="card-body justify-content-between d-flex flex-column">
                            <div class="">

                                <h5 class="card-title fw-bold fs-5">Tech Whiz</h5>
                                <p class="card-text pb-3">The ultimate IT problem
                                    solver to tackle technical issues and keep your
                                    technology running like clockwork.
                                </p>
                            </div>

                            <div class="">
                                <a href="{{ route('services', ['page' => 'tech-whiz']) }}"
                                    class="btn btn-dark border-2  fw-bold text-white  btn-sm px-4">More</a>
                                <p class="card-text-hr mb-0 span-change">
                                    <span id="tech-whiz-price"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100 service-card text-center flex-row flex-md-column" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="card_image">

                            <img src="{{ asset('assets/marketing.svg') }}">
                        </div>
                        <div class="card-body justify-content-between d-flex flex-column">
                            <div>

                                <h5 class="card-title fw-bold fs-5">Marketing Maverick</h5>
                                <p class="card-text pb-3">Your brand's one stop digital hype
                                    machine, will create & amplify your online presence and drive explosive
                                    growth.
                                </p>
                            </div>

                            <div>

                                <a href="{{ route('services', ['page' => 'marketing-maverick']) }}"
                                    class="btn btn-dark border-2  fw-bold text-white  btn-sm px-4">More</a>
                                <p class="card-text-hr mb-0 span-change">
                                    <span id="marketing-maverick-price"></span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card h-100 service-card text-center flex-row flex-md-column" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="card_image">

                            <img src="{{ asset('assets/money_master.svg') }}">
                        </div>
                        <div class="card-body justify-content-between d-flex flex-column">
                            <div>

                                <h5 class="card-title fw-bold fs-5">Money Master</h5>
                                <p class="card-text pb-3">The financial maestro,
                                    ensures your finances are in perfect
                                    harmony, giving you a clear view of your
                                    financial health.
                                </p>
                            </div>
                            <div>

                                <a href="{{ route('services', ['page' => 'money-master']) }}"
                                    class="btn btn-dark border-2  fw-bold text-white  btn-sm px-4">More</a>
                                <p class="card-text-hr mb-0 span-change">
                                    <span id="money-master-price"></span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100 service-card text-center flex-row flex-md-column" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="card_image">

                            <img src="{{ asset('assets/data_jedi.svg') }}">
                        </div>
                        <div class="card-body justify-content-between d-flex flex-column">
                            <div>

                                <h5 class="card-title fw-bold fs-5">Data Jedi</h5>
                                <p class="card-text pb-3">The master of data arts,
                                    transforms your data into valuable insights,
                                    empowering informed decisions.
                                </p>
                            </div>

                            <div class="">
                                <a href="{{ route('services', ['page' => 'data-jedi']) }}"
                                    class="btn btn-dark border-2  fw-bold text-white  btn-sm px-4">More</a>
                                <p class="card-text-hr mb-0 span-change">
                                    <span id="data-jedi-price"></span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100 service-card text-center flex-row flex-md-column" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="card_image">

                            <img src="{{ asset('assets/ninja.svg') }}">
                        </div>
                        <div class="card-body justify-content-between d-flex flex-column">
                            <div>

                                <h5 class="card-title fw-bold fs-5">Word Ninja</h5>
                                <p class="card-text pb-3">The wordsmith extraordinaire, crafts compelling narratives that
                                    resonate with your target audience.
                                </p>
                            </div>

                            <div class="">

                                <a href="{{ route('services', ['page' => 'word-ninja']) }}"
                                    class="btn btn-dark border-2  fw-bold text-white  btn-sm px-4">More</a>
                                <p class="card-text-hr mb-0 span-change">
                                    <span id="word-ninja-price"></span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card h-100 service-card text-center flex-row flex-md-column" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="card_image">

                            <img src="{{ asset('assets/linguister.svg') }}">
                        </div>
                        <div class="card-body justify-content-between d-flex flex-column">
                            <div class="">
                                <h5 class="card-title fw-bold fs-5">Linguister</h5>
                                <p class="card-text pb-3">The multilingual communicator, breaks language barriers and
                                    unlocks global
                                    opportunities for your business.

                                </p>
                            </div>
                            <div class="">

                                <a href="{{ route('services', ['page' => 'linguister']) }}"
                                    class="btn btn-dark  border-2 fw-bold text-white  btn-sm px-4">More</a>
                                <p class="card-text-hr mb-0 span-change">
                                    <span id="linguister-price"></span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-5 mt-5" id="banner">
        <div class="container  justify-content-center">
            <div class="txt">

                <h2 class="text-white ">We Have Got Your Back While You Rock Your Passion.</h2>
            </div>
        </div>

    </div>




    {{-- Embark Layout --}}
    <div class="container-fluid">
        <div class="container text-center pt-5 pb-5">

            <h2 class="fw-bold">Embark On Your RedRep Adventure</h2>
            <div class="image_embark" data-aos="fade-right">

                <img src="{{ asset('assets/group.svg') }}">

            </div>

            <div class="row g-0">
                <div class="col-md-4 ">
                    <div class="style text-center" style="position: relative;">

                        <span>1</span>
                        <div class="line line-1">

                        </div>
                    </div>
                    <div class="paragraph pt-4 mx-md-5">

                        <p class="change-para">Blast off into the RedRep
                            Universe by completing the registration
                            form with your business details.</p>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="style text-center" style="position: relative">

                        <span>2</span>
                        <div class="line line-2">
                        </div>
                    </div>
                    <div class="paragraph pt-4 mx-md-5">

                        <p class="change-para">Get engaged with our expert team
                            as you share your needs and goals, and
                            handpick your RedRep service and
                            assemble your dream team of specialists.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="style text-center" style="position: relative">

                        <span>3</span>
                        <div class="line line-3">
                        </div>

                    </div>
                    <div class="paragraph pt-4 mx-md-5">

                        <p class="change-para ">Let the onboarding journey
                            begin! Unleash your business potential
                            with the perfect RedRep
                            and experience a seamless integration
                            that will make your workflow
                            dance with joy.
                        </p>
                    </div>
                </div>


                {{-- <div class="hirebtn pb-1">
                    <a href="#pricing-section" class=" text-decoration-none text-light  change-btn"><button
                            type="submit" class="btn btn-dark border-2">
                            Get in Touch
                        </button></a>
                </div> --}}

                <div class="hirebtn pb-1">
                    <button type="button" class="btn btn-dark border-2" data-bs-toggle="modal"
                        data-bs-target="#contactModal">
                        Get in Touch
                    </button>
                </div>


            </div>

        </div>
    </div>


    <div class="container-fluid px-0 pt-5 pb-5">
        <div class="heading-redrep text-center">
            <h2 class="fw-bold">RedRep Advantage</h2>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="redRep">
                        <img src="{{ asset('assets/redrep.svg') }}" alt="">
                    </div>
                </div>


                <div class="col-md-6 p-4" style="overflow: hidden;">
                    <div class="row justify-content-center">

                        {{-- one --}}
                        <div class="col-md-6 col-12 pt-3" data-aos="fade-left" data-aos-delay="1000">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <div class="text-center">
                                            <div class="pt-3">

                                                <img src="{{ asset('assets/cost.svg') }}">
                                            </div>
                                            <div class="card-body padding-card" style="padding: 0px;">
                                                <p class="card-title fw-bold">Cost Efficiency</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">

                                        <p>RedRep delivers cost
                                            -
                                            efficient staffing solutions, helping
                                            businesses optimize their budgets while
                                            ensuring top
                                            -tier talent for all tasks, leading
                                            to remarkable savings and profitability.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Two --}}
                        <div class="col-md-6 col-12 pt-3" data-aos="fade-left" data-aos-delay="900">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <div class="text-center">
                                            <div class="pt-3">

                                                <img src="{{ asset('assets/global_talent.svg') }}">

                                            </div>
                                            <div class="card-body padding-card" style="padding: 0px;">
                                                <p class="card-title fw-bold">Global Talent Pool</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">

                                        <p>With access to a vast,
                                            globally distributed talent pool, RedRep
                                            empowers businesses to find the perfect
                                            match for their unique needs, transcending
                                            borders and harnessing diverse skills from
                                            around the world.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>

                        {{-- Three --}}
                        <div class="col-md-6 col-12 pt-3" data-aos="fade-left" data-aos-delay="800">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <div class="text-center">
                                            <div class="pt-3">

                                                <img src="{{ asset('assets/time_zone.svg') }}">
                                            </div>
                                            <div class="card-body padding-card" style="padding: 0px;">
                                                <p class="card-title fw-bold">Time Zone Coverage</p>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="flip-card-back">

                                        <p>Our worldwide team
                                            ensures round
                                            -the
                                            -clock support, aligning
                                            with your time zone preferences to
                                            guarantee seamless collaboration and
                                            unhindered workflow, no matter where you
                                            are.

                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-6 col-12 pt-3" data-aos="fade-left" data-aos-delay="700">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <div class="text-center">
                                            <div class="pt-3">

                                                <img src="{{ asset('assets/scalablilty.svg') }}">
                                            </div>
                                            <div class="card-body padding-card" style="padding: 0px;">
                                                <p class="card-title fw-bold">Scalability</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-card-back">
                                        <p>RedRep offers scalable
                                            solutions that grow organically with your
                                            business, adapting to changing demands
                                            and opportunities, all while maintaining
                                            top
                                            -notch quality and efficiency.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-6 col-12 pt-3" data-aos="fade-left" data-aos-delay="600">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <div class="text-center">
                                            <div class="pt-3">

                                                <img src="{{ asset('assets/increased_productivity.svg') }}">
                                            </div>
                                            <div class="card-body padding-card" style="padding: 0px;">
                                                <p class="card-title fw-bold">Increased Productivity</p>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="flip-card-back">

                                        <p>Our services are
                                            designed to turbocharge your team's
                                            productivity, allowing you to achieve more
                                            with less effort, and ultimately driving your
                                            business towards new heights of success.

                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="col-md-6 col-12 pt-3" data-aos="fade-left" data-aos-delay="500">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <div class="text-center">
                                            <div class="pt-3">

                                                <img src="{{ asset('assets/access.svg') }}">
                                            </div>
                                            <div class="card-body padding-card" style="padding: 0px;">
                                                <p class="card-title fw-bold">Access To Specialized Skills</p>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="flip-card-back">

                                        <p>We provide
                                            businesses with access to a reservoir of
                                            specialized skills, enabling them to tap into
                                            niche expertise precisely when required,
                                            giving them a competitive edge.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="col-md-6 col-12 pt-3" data-aos="fade-left" data-aos-delay="400">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <div class="text-center">
                                            <div class="pt-3">

                                                <img src="{{ asset('assets/time.svg') }}">
                                            </div>
                                            <div class="card-body padding-card" style="padding: 0px;">
                                                <p class="card-title fw-bold">Faster Turnaround Time</p>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="flip-card-back">

                                        <p>RedRep's
                                            streamlined processes and dedicated
                                            professionals ensure swift results, keeping
                                            you ahead of your deadlines and granting
                                            you a critical advantage in your industry.

                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="col-md-6 col-12 pt-3" data-aos="fade-left" data-aos-delay="300">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <div class="text-center">
                                            <div class="pt-3">

                                                <img src="{{ asset('assets/language.svg') }}">
                                            </div>
                                            <div class="card-body padding-card" style="padding: 0px;">
                                                <p class="card-title fw-bold">Language & Cultural Diversity</p>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="flip-card-back">

                                        <p>Our diverse
                                            team bridges linguistic and cultural gaps,
                                            helping your business connect with a global
                                            audience, fostering trust, and enabling
                                            expansion into new markets.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>




                    </div>
                </div>

            </div>

        </div>

        <div class="container-fluid gap-5 px-0">
            <div class="row pt-5 m-md-0  owl-carousel gap-5 d-flex text-slider">

                <div class="pt-3 gap-card">
                    <div class="card change-card11">
                        <div class="pt-3">


                        </div>
                        <div class="card-body">
                            <p class="card-title">Discover top notch professionals handpicked for awesomeness.
                            </p>

                        </div>
                    </div>

                </div>


                <div class="pt-3">
                    <div class="card change-card11">
                        <div class="pt-3">


                        </div>
                        <div class="card-body">
                            <p class="card-title">Experience bespoke staffing tailored to your business vibe.
                            </p>

                        </div>
                    </div>

                </div>

                <div class="pt-3">
                    <div class="card change-card11">
                        <div class="pt-3">

                        </div>
                        <div class="card-body">
                            <p class="card-title ">Witness a mind- blowing fusion as we blend into your rhythm.
                            </p>

                        </div>
                    </div>

                </div>

                <div class="pt-3">
                    <div class="card change-card11">
                        <div class="pt-3">

                        </div>
                        <div class="card-body">
                            <p class="card-title ">Immerse in offshore staffing wizardry with proven expertise.
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('scripts')
    <script>
        const pricing = @json($pricing)


        // Function to update the price text based on the selected button

        // function updatePrice(selectedHours) {
        //     $.each(pricing, (k, v) => {
        //         $(`#${k}-price`).html('<span class="spinner-border"></span>');
        //     })
        //     setTimeout(() => {
        //         $.each(pricing, (k, v) => {
        //             $(`#${k}-price`).html(`AS LOW AS $${v[selectedHours]}/hr`);
        //         })
        //     }, 800)

        // }


        // function updatePrice(selectedHours) {
        //     // Remove the "red-text" class from all elements with an ID ending in "-price"
        //     $('[id$="-price"]').removeClass('red-text');

        //     $.each(pricing, (k, v) => {
        //         $(`#${k}-price`).html('<span class="spinner-border"></span>');
        //     });

        //     setTimeout(() => {
        //         $.each(pricing, (k, v) => {
        //             $(`#${k}-price`).html(`AS LOW AS $${v[selectedHours]}/hr`);
        //             // Add the "red-text" class to the selected hours element
        //             if (k === selectedHours) {
        //                 $(`#${k}-price`).addClass('red-text');
        //             }
        //         });
        //     }, 800);
        // }

        function updatePrice(selectedHours) {
            // Remove the "red-text" class from all elements with an ID ending in "-price"
            $('[id$="-price"]').removeClass('red-text');

            $.each(pricing, (k, v) => {
                $(`#${k}-price`).html('<span class="spinner-border"></span>');
            });

            setTimeout(() => {
                $.each(pricing, (k, v) => {
                    // Wrap the price part in a <span> with a class for red color
                    const priceHtml = `<span class="red-text">$${v[selectedHours]}/hr</span>`;
                    $(`#${k}-price`).html(`AS LOW AS ${priceHtml}`);
                });
            }, 800);
        }




        $(document).ready(() => {
            updatePrice(0)
        })
    </script>
@endpush
