@extends('layouts.mylayouts')

@section('content')
    <div class="container-fluid " id="task_Genie">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 align-self-center">

                    <h2 class="fw-bold">{{ $data['heading'] }}</h2>
                    <h3 class="fw-bold text-danger">{{ $data['sub-heading'] }}</h3>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="image text-center">


                        <img src="{{ $data['hero-image'] }}" alt="" width="255px">
                    </div>

                </div>
            </div>
        </div>


        <div class="container pt-5 pb-5  " id="remove_padding_bottom">
            <div class="row">

                @foreach ($data['details'] as $key => $detail)
                    <div class="col-md-4">
                        <div class="card" id="Style" data-aos="fade-up" data-aos-delay="{{ 400 * $key }}">

                            <div class="card-body p-5 bg-white" id="remove" data-aos="fade-up">
                                <h3 class="card-title fw-medium" data-aos="fade-up">{{ $detail['heading'] }}</h3>
                                <p class="card-text pt-3" data-aos="fade-up">Watch in awe as Task Genie blitzes through your
                                    to-do list at warp speed.
                                    With
                                    its turbo-charged efficiency, tasks are completed in a flash, leaving you with more time
                                    to kick
                                    back and enjoy the finer things in life.
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    @endsection
