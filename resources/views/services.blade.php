@extends('layouts.mylayouts')

@section('content')
    <div class="container-fluid pb-5" id="">
        <div class="container h-100">
            <div class="row h-100 flex-column-reverse flex-md-row mt-5">
                <div class="services-style col-md-8 ">
                    <h2 class="fw-bold" data-aos="fade-right">{{ $data['heading'] }}</h2>
                    <h3 class="fw-bold text-danger" data-aos="fade-right">{{ $data['sub-heading'] }}</h3>

                    <div class="row g-3 d-flex">
                        @foreach ($data['details'] as $key => $detail)
                            <div class=" col-md-4">
                                <div class="card" id="Style" data-aos="fade-up"
                                    data-aos-delay="{{ (400 * $key) % 1200 }}">

                                    <div class="card-body " id="remove" data-aos="fade-up">
                                        <h5 class=" fw-medium" data-aos="fade-up">{{ $detail['heading'] }}</h5>
                                        <p class="card-text pt-3" data-aos="fade-up">
                                            {{ $detail['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>



                <div class="col-md-4  mt-5">
                    <div class="image text-center">
                        <img src="{{ $data['hero-image'] }}" data-aos="fade-left" alt="" width="100%"
                            style="max-width: 300px">
                    </div>
                    <div>
                        <table class="table table-hover" id="pricingTable" style="text-align: end;">
                            <thead>
                                <tr>
                                    <th scope="col">40 Hrs</th>
                                    <th scope="col">80 Hrs</th>
                                    <th scope="col">120 Hrs</th>
                                    <th scope="col">+120 Hrs</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr style="text-align: end;">
                                    <td class="">${{ $pricing[0] }}/hr</td>
                                    <td>${{ $pricing[1] }}/hr</td>
                                    <td>${{ $pricing[2] }}/hr</td>
                                    <td>${{ $pricing[3] }}/hr</td>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="my-5 text-center">

                        <a target="_blank" href="https://calendly.com/redrep/sales-call" class="text-decoration-none text-white"><button
                                class="btn btn-dark ">Hire
                                Me</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container mt-5 pt-5">
        <table class="table table-hover" id="pricingTable">
            <thead>
                <tr>
                    <th scope="col">UpTo 40Hr</th>
                    <th scope="col">UpTo 80Hr</th>
                    <th scope="col">UpTo 120Hr</th>
                    <th scope="col">UpTo +120Hr</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="">${{ $pricing[0] }}/hr</td>
                    <td>${{ $pricing[1] }}/hr</td>
                    <td>${{ $pricing[2] }}/hr</td>
                    <td>${{ $pricing[3] }}/hr</td>

                </tr>


            </tbody>
        </table>

    </div> --}}
    {{-- Extract all the data from controller (home) --}}


    {{-- <div class="container-fluid pt-5 mt-5  bg-light" id="remove_padding_bottom">
        <div class="row container mx-auto justify-content-center">



            @foreach ($data['details'] as $key => $detail)
                <div class="col-md-4 mt-3 mb-3">
                    <div class="card" id="Style" data-aos="fade-up" data-aos-delay="{{ (400 * $key) % 1200 }}">

                        <div class="card-body p-5" id="remove" data-aos="fade-up">
                            <h3 class="card-title fw-medium" data-aos="fade-up">{{ $detail['heading'] }}</h3>
                            <p class="card-text pt-3" data-aos="fade-up">
                                {{ $detail['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div> --}}
@endsection
