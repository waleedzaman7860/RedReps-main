@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('{{ asset('assets/img/curved-images/curved0.jpg') }}'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="multisteps-form">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto mt-4 mb-sm-5 mb-3">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                                    <span>1. Product Info</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Media">2.
                                    Media</button>
                                {{-- <button class="multisteps-form__progress-btn" type="button" title="Socials">3.
                                    Socials</button> --}}
                                <button class="multisteps-form__progress-btn" type="button" title="Pricing">3.
                                    Tags</button>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form mb-8" action="{{ route('new.blog.store') }}" method="POST"
                                enctype="multipart/form-data" class="needs-validation" novalidate>
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Product Information</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>Name</label>
                                                <input class="multisteps-form__input form-control" name="title"
                                                    type="text" placeholder="eg. Off-White" />
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Category</label>
                                                <select class="form-control" name="choices-category" id="choices-category">
                                                    <option value="Choice 1" selected="">Healthy Recipes</option>
                                                    <option value="Choice 2">Special Diet</option>
                                                    <option value="Choice 3">Diabetes</option>
                                                    <option value="Choice 4">Meal Plans</option>
                                                    <option value="Choice 5">News</option>
                                                    <option value="Choice 5">Healthy Eating</option>
                                                    <option value="Choice 5">Healthy Lifestyle</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class="mt-4">Description</label>
                                                <p class="form-text text-muted text-xs ms-1 d-inline">
                                                    (optional)
                                                </p>
                                                <div id="edit-deschiption" class="h-50" name="description">
                                                    <p>Some initial <strong>bold</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <a class="btn bg-gradient-dark ms-auto mb-0 mt-4 js-btn-next" type="button"
                                                title="Next">Next</a>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Media</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <label>Banner Images</label>
                                                <div action="/file-upload" class="form-control dropzone" id="productImg"
                                                    name="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                {{-- <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Socials</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <label>Shoppify Handle</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="@soft" />
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label>Facebook Account</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="https://..." />
                                            </div>
                                            <div class="col-12 mt-3">
                                                <label>Instagram Account</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="https://..." />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                                    title="Prev">Prev</button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                    title="Next">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--single form panel-->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white h-100"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Tags</h5>
                                    <div class="multisteps-form__content mt-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="mt-4 form-label" name="tags">Tags</label>
                                                <select class="form-control" name="choices-tags" id="choices-tags" multiple>
                                                    <option value="Choice 1" selected>In Stock</option>
                                                    <option value="Choice 2">Out of Stock</option>
                                                    <option value="Choice 3">Sale</option>
                                                    <option value="Choice 4">Black Friday</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0" type="submit"
                                                title="Send">Submit</button>
                                        </div>
                                    </div>
                                    {{-- {{ dd($errors) }} --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        if (document.getElementById('edit-deschiption')) {
            var quill = new Quill('#edit-deschiption', {
                theme: 'snow' // Specify theme in configuration
            });
        };

        if (document.getElementById('choices-category')) {
            var element = document.getElementById('choices-category');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-sizes')) {
            var element = document.getElementById('choices-sizes');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-currency')) {
            var element = document.getElementById('choices-currency');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-tags')) {
            var tags = document.getElementById('choices-tags');
            const examples = new Choices(tags, {
                removeItemButton: true
            });

            examples.setChoices(
                [{
                        value: 'One',
                        label: 'Expired',
                        disabled: true
                    },
                    {
                        value: 'Two',
                        label: 'Out of Stock',
                        selected: true
                    }
                ],
                'value',
                'label',
                false,
            );
        }
    </script>
    <script src="{{ asset('assets/js/plugins/multistep-form.js') }}"></script>
@endpush
