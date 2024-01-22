@extends('layouts.mylayouts')


@section('content')
    <div class="container-fluid pt-5 pb-5" style="background: #F2F4F7;">

        <div class="container rounded-4" id="bg-style-carrer">
            <div class="row">
                <div class="col-md-4 pt-4">
                    <div class="tabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link vacancy active" id="task-genie-tab" data-bs-toggle="pill"
                                    data-bs-target="#task-genie-container" type="button" role="tab"
                                    aria-controls="task-genie" aria-selected="true">Task Genie</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link vacancy" id="tech-whiz-tab" data-bs-toggle="pill"
                                    data-bs-target="#tech-whiz-container" type="button" role="tab"
                                    aria-controls="tech-whiz" aria-selected="false">Tech Whiz</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link vacancy" id="marketing-maverick-tab" data-bs-toggle="pill"
                                    data-bs-target="#marketing-maverick-container" type="button" role="tab"
                                    aria-controls="marketing-maverick" aria-selected="false">Marketing Maverick</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link vacancy" id="money-master-tab" data-bs-toggle="pill"
                                    data-bs-target="#money-master-container" type="button" role="tab"
                                    aria-controls="money-master" aria-selected="false">Money Master
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link vacancy" id="data-jedi-tab" data-bs-toggle="pill"
                                    data-bs-target="#data-jedi-container" type="button" role="tab"
                                    aria-controls="data-jedi" aria-selected="false">Data Jedi</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link vacancy" id="word-ninja-tab" data-bs-toggle="pill"
                                    data-bs-target="#word-ninja-container" type="button" role="tab"
                                    aria-controls="word-ninja" aria-selected="false">Word Ninja</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link vacancy" id="linguister-tab" data-bs-toggle="pill"
                                    data-bs-target="#linguister-container" type="button" role="tab"
                                    aria-controls="linguister" aria-selected="false">Linguister
                                </button>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-8 py-4">
                    <div class="scrollable-content bg-light rounded-4 p-3">
                        <div class="row">

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="task-genie-container" role="tabpanel"
                                    aria-labelledby="task-genie-tab" tabindex="0">
                                    <div class="d-flex justify-content-between">

                                        <div class="heading">

                                            <h5 class="fw-bold">Task Genie - Virtual Assistant</h5>
                                        </div>
                                        <div class="btn-apply px-4">

                                            <a class="nav-link" href="" role="button" data-bs-toggle="modal"
                                                data-bs-target="#carrerModal">
                                                <button class="btn-dark  rounded-pill px-3 px-1 btn btn-sm"> <i
                                                        class="fa-solid fa-briefcase">&nbsp;Apply</i></button>
                                            </a>
                                        </div>
                                    </div>
                                    <h6>Role Overview:</h6>
                                    <p>As a Task Genie, you'll be the secret weapon behind seamless operations. Your
                                        mission? To
                                        handle tasks
                                        with precision, boost productivity, and free up valuable time for our clients.</p>
                                    <h6>Responsibilities</h6>
                                    <ul>
                                        <li>Manage a range of administrative tasks.</li>
                                        <li>Conduct research and gather essential data.</li>
                                        <li>Organize schedules and appointments.</li>
                                        <li>Assist in project coordination.</li>
                                        <li>Provide top-notch customer support.</li>
                                    </ul>
                                    <h6>Requirements</h6>
                                    <ul>
                                        <li>Strong organizational and multitasking skills.</li>
                                        <li>Excellent communication abilities.</li>
                                        <li>Tech-savvy with proficiency in MS Office.</li>
                                        <li>A knack for problem-solving.</li>
                                        <li>Previous virtual assistant experience is a plus</li>
                                    </ul>
                                    <h6>What We Offer:</h6>
                                    <ul>
                                        <li>Competitive compensation.</li>
                                        <li>Remote work flexibility.</li>
                                        <li>The chance to be part of a dynamic team.</li>
                                        <li>Opportunities for growth and learning.</li>
                                        <li>A collaborative and innovative work environment</li>
                                    </ul>
                                    <h6>Ready to Grant Wishes?</h6>
                                    <p>If you're a Task Genie ready to make magic happen, apply with your genie lamp
                                        (resume).
                                        Join us in rewriting the future of excellence at RedRep!
                                    </p>
                                </div>

                                {{-- Tech whiz --}}
                                <div class="tab-pane fade" id="tech-whiz-container" role="tabpanel"
                                    aria-labelledby="tech-whiz-tab" tabindex="0">
                                    <div class="d-flex justify-content-between">
                                        <div class="heading">
                                            <h5 class="fw-bold">Tech Whiz - Technical Support Engineer</h5>
                                        </div>
                                        <div class="btn-apply px-4">

                                            <a class="nav-link" href="" role="button" data-bs-toggle="modal"
                                                data-bs-target="#carrerModal">
                                                <button class="btn-dark  rounded-pill px-3 px-1 btn btn-sm"> <i
                                                        class="fa-solid fa-briefcase">&nbsp;Apply</i></button>
                                            </a>
                                        </div>
                                    </div>
                                    <h6>Role Overview:</h6>
                                    <p>As a Tech Whiz, you'll be the guardian of our clients' technology. Your mission? To
                                        ensure smooth
                                        operations, minimize downtime, and keep the tech gears turning flawlessly.
                                    </p>
                                    <h6>Responsibilities:</h6>
                                    <ul>
                                        <li>Diagnose and resolve technical issues.</li>
                                        <li>Provide top-notch IT support.</li>
                                        <li>Maintain and optimize tech systems.</li>
                                        <li>Collaborate with cross-functional teams.</li>
                                        <li>Keep up-to-date with tech trends and innovations.</li>
                                    </ul>
                                    <h6>Requirements:</h6>
                                    <ul>
                                        <li>Strong technical skills and problem-solving abilities.</li>
                                        <li>Excellent communication and customer service skills.</li>
                                        <li>Familiarity with IT tools and software.</li>
                                        <li>Previous technical support experience is a plus.</li>
                                        <li>A passion for staying ahead in the tech world.</li>
                                    </ul>
                                    <h6>What We Offer:</h6>
                                    <ul>
                                        <li>Competitive compensation.</li>
                                        <li>Remote work flexibility.</li>
                                        <li>A chance to be part of an innovative team.</li>
                                        <li>Opportunities for professional development.</li>
                                        <li>A dynamic and collaborative work environment.</li>
                                    </ul>
                                    <h6>Ready to Work Your Tech Magic?</h6>
                                    <p>If you're a Tech Whiz ready to solve IT mysteries, apply with your enchanted resume.
                                        Join us in creating a
                                        future where technology works like clockwork at RedRep!
                                    </p>
                                </div>

                                {{-- Marketing Tab --}}
                                <div class="tab-pane fade" id="marketing-maverick-container" role="tabpanel"
                                    aria-labelledby="pills-contact-tab" tabindex="0">
                                    <div class="d-flex justify-content-between">

                                        <div class="heading">

                                            <h5 class="fw-bold">Marketing Maverick - Digital Marketing Specialist</h5>
                                        </div>
                                        <div class="btn-apply px-4">

                                            <a class="nav-link" href="" role="button" data-bs-toggle="modal"
                                                data-bs-target="#carrerModal">
                                                <button class="btn-dark  rounded-pill px-3 px-1 btn btn-sm"> <i
                                                        class="fa-solid fa-briefcase">&nbsp;Apply</i></button>
                                            </a>
                                        </div>
                                    </div>

                                    <h6>Role Overview:</h6>
                                    <p>As a Marketing Maverick, you'll wield the power of digital marketing to boost our
                                        brand's presence and
                                        drive explosive growth for our clients.</p>
                                    <h6>Responsibilities:</h6>
                                    <ul>
                                        <li>Craft creative digital marketing strategies.</li>
                                        <li>Execute engaging online campaigns.</li>
                                        <li>Analyze data for insights and optimizations.</li>
                                        <li>Optimize SEO, SEM, and social media efforts.</li>
                                        <li>Collaborate with a dynamic marketing team</li>
                                    </ul>
                                    <h6>Requirements:</h6>
                                    <ul>Proven track record in digital marketing.
                                        <li>Deep understanding of SEO, SEM, and social media.</li>
                                        <li>Analytical mindset and data-driven decision-making.</li>
                                        <li>Exceptional creativity and content strategy skills.</li>
                                        <li>Strong communication and project management abilities.</li>
                                    </ul>
                                    <h6>What We Offer:</h6>
                                    <ul>
                                        <li>Competitive compensation.</li>
                                        <li>Remote work flexibility.</li>
                                        <li>A chance to shape the digital landscape.</li>
                                        <li>Opportunities for professional growth.</li>
                                        <li>A vibrant and collaborative work culture.</li>
                                    </ul>
                                    <h6>Ready to Unleash Digital Havoc?</h6>
                                    <p>If you're a Marketing Maverick, eager to ride the digital marketing wave, apply with
                                        your electrifying
                                        resume. Join us in creating a digital storm at RedRep!
                                    </p>
                                </div>

                                {{-- Money Master --}}
                                <div class="tab-pane fade" id="money-master-container" role="tabpanel"
                                    aria-labelledby="money-master-tab" tabindex="0">
                                    <div class="d-flex justify-content-between">

                                        <div class="heading">

                                            <h5 class="fw-bold">Money Master - Financial Analyst</h5>
                                        </div>
                                        <div class="btn-apply px-4">

                                            <a class="nav-link" href="" role="button" data-bs-toggle="modal"
                                                data-bs-target="#carrerModal">
                                                <button class="btn-dark  rounded-pill px-3 px-1 btn btn-sm"> <i
                                                        class="fa-solid fa-briefcase">&nbsp;Apply</i></button>
                                            </a>
                                        </div>
                                    </div>
                                    <h6>Role Overview:</h6>
                                    <p>As a Money Master, you will play a pivotal role in our financial strategy, providing
                                        key insights and
                                        guidance to keep our financial compass true.</p>
                                    <h6>Responsibilities:</h6>
                                    <ul>
                                        <li>Analyze financial data for strategic decision-making.</li>
                                        <li>Prepare and maintain financial reports.</li>
                                        <li>Forecast financial trends and opportunities.</li>
                                        <li>Collaborate with cross-functional teams.</li>
                                        <li>Identify cost-saving and revenue-generating avenues.</li>
                                    </ul>
                                    <h6>Requirements:</h6>
                                    <ul>
                                        <li>Proven experience as a Financial Analyst.</li>
                                        <li>Strong analytical and problem-solving skills.</li>
                                        <li>Proficiency in financial software and tools.</li>
                                        <li>Exceptional attention to detail.</li>
                                        <li>Excellent communication and teamwork abilities.</li>
                                    </ul>
                                    <h6>What We Offer:</h6>
                                    <ul>
                                        <li>Competitive salary and benefits.</li>
                                        <li>Remote work opportunities.</li>
                                        <li>A dynamic and innovative work environment.</li>
                                        <li>Opportunities for career advancement.</li>
                                        <li>The chance to make a significant financial impact.</li>
                                    </ul>
                                    <h6>Ready to Master the Money Game?</h6>
                                    <p>If you're a financial guru with a passion for precision, apply with your resume. Join
                                        us in taking RedRep's
                                        financial journey to new heights!
                                    </p>


                                </div>

                                {{-- Data Jedi --}}
                                <div class="tab-pane fade" id="data-jedi-container" role="tabpanel"
                                    aria-labelledby="data-jedi-tab" tabindex="0">
                                    <div class="d-flex justify-content-between">

                                        <div class="heading">

                                            <h5 class="fw-bold">Data Jedi - Data Analyst</h5>
                                        </div>
                                        <div class="btn-apply px-4">

                                            <a class="nav-link" href="" role="button" data-bs-toggle="modal"
                                                data-bs-target="#carrerModal">
                                                <button class="btn-dark  rounded-pill px-3 px-1 btn btn-sm"> <i
                                                        class="fa-solid fa-briefcase">&nbsp;Apply</i></button>
                                            </a>
                                        </div>
                                    </div>

                                    <h6>Role Overview:</h6>
                                    <p>As a Data Jedi, you will embark on epic data adventures, using your analytical
                                        prowess to guide our
                                        decision-making processes</p>
                                    <h6>Responsibilities:</h6>
                                    <ul>
                                        <li>Collect and analyze large datasets.</li>
                                        <li>Develop data-driven strategies.</li>
                                        <li>Create meaningful visualizations and reports.</li>
                                        <li>Collaborate with cross-functional teams.</li>
                                        <li>Identify trends and opportunities within data.</li>
                                    </ul>
                                    <h6>Requirements:</h6>
                                    <ul>
                                        <li>Proven experience as a Data Analyst.</li>
                                        <li>Strong analytical and problem-solving skills.</li>
                                        <li>Proficiency in data analysis tools.</li>
                                        <li>Keen attention to detail.</li>
                                        <li>Excellent communication and teamwork abilities.</li>
                                    </ul>
                                    <h6>What We Offer:</h6>
                                    <ul>
                                        <li>Competitive salary and benefits.</li>
                                        <li>Remote work opportunities.</li>
                                        <li>A dynamic and innovative work environment.</li>
                                        <li>Opportunities for career advancement.</li>
                                        <li>The chance to be a data hero!</li>

                                    </ul>
                                    <h6>Ready to Embrace the Data Force?</h6>
                                    <p>If you're a data enthusiast ready to wield your analytical lightsaber, apply with
                                        your resume. Join us in
                                        unlocking the full potential of data for RedRep!</p>

                                </div>


                                {{-- Word Ninja --}}

                                <div class="tab-pane fade" id="word-ninja-container" role="tabpanel"
                                    aria-labelledby="word-ninja-tab" tabindex="0">
                                    <div class="d-flex justify-content-between">

                                        <div class="heading">

                                            <h5 class="fw-bold">Word Ninja - Content Writer/Editor</h5>
                                        </div>
                                        <div class="btn-apply px-4">

                                            <a class="nav-link" href="" role="button" data-bs-toggle="modal"
                                                data-bs-target="#carrerModal">
                                                <button class="btn-dark  rounded-pill px-3 px-1 btn btn-sm"> <i
                                                        class="fa-solid fa-briefcase">&nbsp;Apply</i></button>
                                            </a>
                                        </div>
                                    </div>

                                    <h6>Role Overview:</h6>
                                    <p>As a Word Ninja, you'll be a key player in our quest for content excellence, creating
                                        and refining content
                                        that engages and inspires</p>
                                    <h6>Responsibilities:</h6>
                                    <ul>
                                        <li>Craft high-quality written content for various platforms.</li>
                                        <li>Edit and proofread content for accuracy and clarity.</li>
                                        <li>Collaborate with the marketing team on content strategies.</li>
                                        <li>Stay up-to-date with industry trends and best practices.</li>
                                        <li>Contribute creative ideas to content development.</li>
                                    </ul>

                                    <h6>Requirements:</h6>
                                    <ul>
                                        <li>Proven experience as a Content Writer/Editor.</li>
                                        <li>Exceptional writing and editing skills.</li>
                                        <li>Ability to adapt writing style to different audiences.</li>
                                        <li>Knowledge of SEO and content optimization.</li>
                                        <li>Creativity and attention to detail.</li>
                                    </ul>

                                    <h6>What We Offer:</h6>
                                    <ul>
                                        <li>Competitive salary and benefits.</li>
                                        <li>Remote work options.</li>
                                        <li>A dynamic and innovative work environment.</li>
                                        <li>Opportunities for growth and skill development.</li>
                                        <li>The chance to be part of a creative team!</li>
                                    </ul>
                                    <h6>Ready to Unleash Your Content Superpowers?</h6>
                                    <p>If you're a content aficionado ready to conquer the world with your words, apply with
                                        your resume and a
                                        writing sample. Join RedRep's mission to create compelling content!
                                    </p>

                                </div>

                                {{-- Linguister --}}
                                <div class="tab-pane fade" id="linguister-container" role="tabpanel"
                                    aria-labelledby="linguister-tab" tabindex="0">
                                    <div class="d-flex justify-content-between">

                                        <div class="heading">

                                            <h5 class="fw-bold">Linguister - Language Specialist/Translator</h5>
                                        </div>
                                        <div class="btn-apply px-4">

                                            <a class="nav-link" href="" role="button" data-bs-toggle="modal"
                                                data-bs-target="#carrerModal">
                                                <button class="btn-dark  rounded-pill px-3 px-1 btn btn-sm"> <i
                                                        class="fa-solid fa-briefcase">&nbsp;Apply</i></button>
                                            </a>
                                        </div>
                                    </div>

                                    <h6>Role Overview:</h6>
                                    <p>As a Linguister, you'll play a pivotal role in our global operations, ensuring
                                        seamless communication
                                        across languages.</p>
                                    <h6>Responsibilities:</h6>
                                    <ul>
                                        <li>Translate and localize content accurately and culturally.</li>
                                        <li>Interpret spoken or written communication.</li>
                                        <li>Collaborate with teams to bridge language gaps.</li>
                                        <li>Proofread and edit translated materials.</li>
                                        <li>Stay updated with linguistic trends and cultural nuances.</li>
                                    </ul>

                                    <h6>Requirements:</h6>
                                    <ul>
                                        <li>Proven experience as a Language Specialist/Translator.</li>
                                        <li>Proficiency in multiple languages.</li>
                                        <li>Strong knowledge of grammar and linguistics.</li>
                                        <li>Cultural sensitivity and adaptability.</li>
                                        <li>Excellent communication skills.</li>
                                    </ul>
                                    <h6>What We Offer:</h6>
                                    <ul>
                                        <li>Competitive salary and benefits.</li>
                                        <li>Remote work options.</li>
                                        <li>A diverse and inclusive work environment.</li>
                                        <li>Opportunities for language skill enhancement.</li>
                                        <li>The chance to work on international projects.</li>
                                    </ul>

                                    <h6>Ready to Connect the World Through Language?</h6>
                                    <p>
                                        If you're a linguistic virtuoso eager to break down language barriers, apply with
                                        your resume and
                                        language proficiency details. Join RedRep's mission to bridge cultures and
                                        languages!
                                    </p>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>


    {{-- Carrer Form Model --}}
    <div class="modal fade" id="carrerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <div class="d-flex flex-row justify-content-center align-items-center gap-3"> --}}
                    <div>
                        <p class="card-text fs-2 fw-bold">Career Form</p>
                    </div>
                    <div class="carrer-img">

                        <img src="{{ asset('assets/career.svg') }}" alt="career">
                    </div>
                    {{-- </div> --}}
                </div>
                <div class="modal-body">


                    <div class="container mt-4">
                        <div class="container">

                        </div>
                        <form onsubmit="disableBtn()" class="row g-3" id="careerForm"
                            action="{{ route('submitCareerForm') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="vacancy" id="vacancy" value="">
                            <h4>Personal Information</h4>
                            <div class="col-md-4">
                                <label for="firstname" class="form-label">First Name <span
                                        class="text-danger">*</span></label>
                                <input type="text"
                                    class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}"
                                    name="firstname" required id="firstname" placeholder="First Name">

                                <div class="invalid-feedback">Please enter your first name.</div>
                            </div>
                            <div class="col-md-4">
                                <label for="middlename" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" name="middlename" id="middlename"
                                    placeholder="Middle Name">
                            </div>
                            <div class="col-md-4">
                                <label for="lastname" class="form-label">Last Name <span
                                        class="text-danger">*</span></label>
                                <input type="text"
                                    class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}"
                                    name="lastname" required id="lastname" placeholder="Last Name">
                                <div class="invalid-feedback">Please enter your last name.</div>
                            </div>

                            <div class="col-md-4">
                                <label for="email" class="form-label">Email address <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    name="email" id="email" placeholder="name@domain.com">
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="col-md-4">
                                <label for="phone_number" class="form-label">Phone Number <span
                                        class="text-danger">*</span></label>
                                <input type="text"
                                    class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}"
                                    name="phone_number" required id="phone_number" placeholder="0333 XXXXXXX">
                                <div class="invalid-feedback">Please enter your phone number.</div>
                            </div>
                            <div class="col-md-4">
                                <label for="linkedin" class="form-label">LinkedIn <span
                                        class="fs-6">(optional)</span></label>
                                <input type="text" class="form-control" name="linkedin" id="linkedin"
                                    placeholder="https://www.linkedin.com/in/xyz">
                            </div>

                            <h4 class="mt-4">Professional Information</h4>
                            <div class="col-md-6">
                                <label for="jobtitle" class="form-label">Current Job Title <span
                                        class="text-danger">*</span></label>
                                <input type="text"
                                    class="form-control {{ $errors->has('jobtitle') ? 'is-invalid' : '' }}"
                                    name="jobtitle" required id="jobtitle">
                                <div class="invalid-feedback">Please enter your current job title.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="employer" class="form-label">Current Employer <span
                                        class="text-danger">*</span></label>
                                <input type="text"
                                    class="form-control {{ $errors->has('employer') ? 'is-invalid' : '' }}"
                                    name="employer" required id="employer">
                                <div class="invalid-feedback">Please enter your current employer.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="experience_year" class="form-label">Years of Experience in Relevant Field
                                    <span class="text-danger">*</span></label>
                                <input type="number"
                                    class="form-control {{ $errors->has('experience_year') ? 'is-invalid' : '' }}"
                                    name="experience_year" required id="experience_year">
                                <div class="invalid-feedback">Please enter the number of years of experience.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="education_level" class="form-label">Highest Education Level <span
                                        class="text-danger">*</span></label>
                                <select class="form-select {{ $errors->has('education_level') ? 'is-invalid' : '' }}"
                                    name="education_level" required id="education_level">
                                    <option selected disabled value="">-- Select Highest Education Level --</option>
                                    <option value="High School">High School</option>
                                    <option value="Bachelor's Degree">Bachelor's Degree</option>
                                    <option value="Master's Degree">Master's Degree</option>
                                    <option value="Ph.D.">Ph.D.</option>
                                </select>
                                <div class="invalid-feedback">Please select your highest education level.</div>
                            </div>

                            <div class="mb-3 mt-4">
                                <label for="resume" class="form-label fw-medium fs-4">Upload Resume<span
                                        class="text-danger">*</span></label>
                                <input type="file"
                                    class="form-control {{ $errors->has('resume') ? 'is-invalid' : '' }}"name="resume"
                                    id="resume" required aria-label="file example">
                                <div class="invalid-feedback">Please upload your resume.</div>
                            </div>

                            <div class="mb-3 mt-4">
                                <label for="cover_letter" class="form-label fw-medium fs-4">Cover Letter <span
                                        class="fs-6">(optional)</span></label>
                                <input type="file" class="form-control" name="cover_letter" id="cover_letter"
                                    aria-label="file example">
                            </div>

                            <h4>Additional Information</h4>
                            <div class="col-md-4">
                                <label for="job_opening" class="form-label">How did you hear about this job opening?<span
                                        class="text-danger">*</span></label>
                                <select class="form-select {{ $errors->has('job_opening') ? 'is-invalid' : '' }}"
                                    id="job_opening" required name="job_opening">
                                    <option selected disabled value="">-- Select --</option>
                                    <option value="RedRep Website">RedRep Website</option>
                                    <option value="Job Board">Job Board</option>
                                    <option value="Referral">Referral</option>
                                </select>
                                <div class="invalid-feedback">Please select how you heard about this job opening.</div>
                            </div>

                            <div class="col-md-4">
                                <label for="availability" class="form-label">Availability to Start<span
                                        class="text-danger">*</span></label>
                                <select class="form-control {{ $errors->has('availability') ? 'is-invalid' : '' }}"
                                    id="availability" required name="availability">
                                    <option selected disabled value="">-- Select --</option>
                                    <option value="Immediately">Immediately</option>
                                    <option value="2 Weeks' Notice">2 Weeks' Notice</option>
                                    <option value="Specific Date">Specific Date</option>
                                </select>
                                <div class="invalid-feedback">Please select your availability to start.</div>
                            </div>

                            <div class="col-md-4">
                                <label for="salary" class="form-label">Salary Expectations<span
                                        class="fs-6">(optional)</span></label>
                                <input type="text" class="form-control" name="salary" id="salary">
                            </div>
                            <div class="col-md-12">
                                <label for="comments" class="form-label">Additional Comments or Information <span
                                        class="fs-6">(optional)</span></label>
                                <textarea type="text" class="form-control" name="comments" id="comments"></textarea>
                            </div>

                            <div class="col-md-12">
                                <h4 class="mt-4">Equal Opportunity Employer Statement</h4>
                                <p class="text-justify">RedRep is an equal opportunity employer. We consider all applicants
                                    for employment
                                    without regard to race, color, religion, sex, national origin, age, disability, or any
                                    other legally
                                    protected status.</p>
                            </div>

                            <div class="form-check">
                                <input type="checkbox"
                                    class="form-check-input {{ $errors->has('check-box') ? 'is-invalid' : '' }}"
                                    id="validationFormCheck1" style="float: left; margin-right: 0;">
                                <label class="form-check-label" for="validationFormCheck1"
                                    style="display: flex;padding-left: 10px;text-align: justify;">By submitting this
                                    application, I certify
                                    that the information provided in this form is true and complete to the best of my
                                    knowledge. I
                                    understand that any false statements or omissions may disqualify me from employment or
                                    may result in
                                    termination if already employed. I authorize RedRep to investigate all statements
                                    contained in this
                                    application.</label>
                                <div class="invalid-feedback">Please check this box to certify your information.</div>
                            </div>
                            <div class="modal-footer">

                                <div class=" justify-content-center">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>

                                    <button class="btn btn-dark" type="submit">Submit form</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
                {{-- <div class="modal-footer"> --}}
                {{-- <button type="submit" class="btn ms-auto btn-dark" form="contactForm">Submit</button> --}}
                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}

                {{-- <button class="btn btn-dark " type="submit">Submit form</button> --}}

                {{-- </div> --}}


            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(() => {
            $('form#careerForm').submit(function() {
                $(this).find(':input[type=submit]').prop('disabled', true);
            });
            vacancy = $('.vacancy.nav-link.active').attr('data-bs-target').replace('#', '').replace('-container',
                    '')
                .replace('-', ' ');
            $('#vacancy').attr('value', vacancy)

            $('.vacancy.nav-link').click(e => {
                vacancy = $(e.target).attr('data-bs-target').replace('#', '').replace('-container', '')
                    .replace('-', ' ');
                $('#vacancy').attr('value', vacancy)
            })
        })
    </script>
@endpush
