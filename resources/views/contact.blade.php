@extends('layouts.mylayouts')

@section('content')
    <h3 class="mt-4 mb-4 text-center fw-bold">Contact Us</h3>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-5" style="border-radius: 0;">
                    <div class="card-body">
                        <form action="{{ route('submitContactForm') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Your Full Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@domain.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Add Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-5 w-50" style="border-radius: 0; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
                    <div class="card-body">
                        <h4 class="card-title p-0">RedRep LLC</h4><br>
                        <p class="card-text">30 N Gould Street Suite 22970, Sheridan, WY, United States, 82801 <br>
                            <a href="tel:+16068799555" class="card-link text-decoration-none"><span
                                    class="text-dark fw-semibold">Tel:</span> +1 606-879-9555</a> <br>
                            <a href="mailto:hello@redrep.io" class="card-link text-decoration-none"><span
                                    class="text-dark fw-semibold">Email:</span> hello@redrep.io</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
