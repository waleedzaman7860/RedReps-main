@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-6">
                <h4>Make the changes below</h4>
            </div>
            <div class="col-lg-6 text-right d-flex flex-column justify-content-center">
                <button type="button"
                    class="btn bg-gradient-primary mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">Save</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">Image</h5>
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100 border-radius-lg shadow-lg mt-3"
                                    src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                                    alt="product_image">
                            </div>
                            <div class="col-12 mt-4">
                                <div class="d-flex">
                                    <button class="btn bg-gradient-primary btn-sm mb-0 me-2" type="button"
                                        name="button">Edit</button>
                                    <button class="btn btn-outline-dark btn-sm mb-0" type="button"
                                        name="button">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-lg-0 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">Information</h5>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label>Name</label>
                                <input class="form-control" type="text" value="Minimal Bar Stool" />
                            </div>
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <label>Category</label>
                                <select class="form-control" name="choices-category" id="choices-category-edit">
                                    <option value="Choice 1" selected="">Furniture</option>
                                    <option value="Choice 2">Real Estate</option>
                                    <option value="Choice 3">Electronics</option>
                                    <option value="Choice 4">Clothing</option>
                                    <option value="Choice 5">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="mt-4">Description</label>
                                <p class="form-text text-muted text-xs ms-1 d-inline">
                                    (optional)
                                </p>
                                <div id="edit-deschiption-edit" class="h-50">
                                    Long sleeves black denim jacket with a twisted design. Contrast stitching. Button up
                                    closure. White arrow prints on the back.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-8 mt-sm-0 mt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <label class="mt-4">Tags</label>
                                <select class="form-control" name="choices-tags" id="choices-tags-edit" multiple>
                                    <option value="Choice 1" selected>In Stock</option>
                                    <option value="Choice 2">Out of Stock</option>
                                    <option value="Choice 3">Sale</option>
                                    <option value="Choice 4">Black Friday</option>
                                </select>
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
        if (document.getElementById('edit-deschiption-edit')) {
            var quill = new Quill('#edit-deschiption-edit', {
                theme: 'snow' // Specify theme in configuration
            });
        };

        if (document.getElementById('choices-category-edit')) {
            var element = document.getElementById('choices-category-edit');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-color-edit')) {
            var element = document.getElementById('choices-color-edit');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-currency-edit')) {
            var element = document.getElementById('choices-currency-edit');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-tags-edit')) {
            var tags = document.getElementById('choices-tags-edit');
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
@endpush
