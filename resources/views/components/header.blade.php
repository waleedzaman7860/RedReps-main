<nav class="navbar navbar-expand sticky-top bg-white" style="height: 95px">
    <div class="container h-100">
        <a class="navbar-brand h-100" href="{{ route('home') }}">
            <img src="{{ asset('assets/logo.svg') }}" class="h-100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav  me-auto mb-2 mb-lg-0" id="serviceDropdown">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu text-end ">
                        <li><a class="dropdown-item" href="{{ route('services', ['task-genie']) }}">Task Genie</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('services', ['tech-whiz']) }}"> Tech Whiz</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('services', ['marketing-maverick']) }}">
                                Marketing Maverick</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('services', ['money-master']) }}"> Money
                                Master</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('services', ['data-jedi']) }}"> Data Jedi</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('services', ['word-ninja']) }}"> Word Ninja</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('services', ['linguister']) }}"> Linguister</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('career') }}">
                        Career
                    </a>
                </li>
                <li class="nav-item me-md-4">
                    <a class="nav-link" href="" role="button" data-bs-toggle="modal"
                        data-bs-target="#contactModal">
                        <button class="btn-dark rounded-pill px-3 px-1 btn btn-sm"><i class="fas fa-envelope d-md-none"></i><span class="d-none d-md-inline">Contact</span></button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
