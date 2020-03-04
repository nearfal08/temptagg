@extends('layouts.main')

@section('content')
<div class="main-bg">
    <div class="container align-self-center">
        <div class="step step-1">
            <div class="row">
                <div class="col-12">
                    <h1 class="main-header text-center">Step 1: Choose a Template</h1>
                    <p class="text-center helper-text">Choose one of our name tag templates!
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach ($cards as $card)
                <div class="col-md-4 justify-content-center tag-thumbnail-wrapper">
                    <div class="tag-thumbnail">
                        <span class="name">{{ $card['name'] }}</span>
                    </div>
                    <span class="badge badge-pill badge-free">Free</span>
                    <span class="badge badge-pill badge-money">$5</span>
                    <span class="badge badge-pill badge-custom">Customizable</span>
                    <span class="badge badge-pill badge-logo">logo</span>
                </div>
                @endforeach
            </div>
        </div>
        <div class="step step-2">
            <div class="row">
                <div class="col-12">
                    <h1 class="main-header text-center">Step 2: Enter Your Names</h1>
                    <p class="text-center helper-text">You can enter names in the text box. Follow the example format
                        provided!
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <textarea class="form-control" id="names" rows="8"></textarea>
                </div>
                <div class="col-6">
                    <label for="exampleFormControlTextarea1">Seperate names and titles by a comma. If you don't need
                        titles, just type the name. Enter each person on their own line.</label>
                    <button type="button" class="btn btn-save">Save</button>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Name</th>
                                <th scope="col">Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="step step-3">
            <div class="row">
                <div class="col-12">
                    <h1 class="main-header text-center">Step 3: Customize Taggs</h1>
                    <p class="text-center helper-text">Change font, color, add company logos, and more!
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="form-group row">
                        <label for="exampleFormControlFile1" class="col-sm-4 col-form-label">Logo Upload</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="font-type" class="col-sm-4 col-form-label">Name Font</label>
                        <div class="col-sm-8">
                            <select id="font-type" class="form-control form-control-lg">
                                <option>Times New Roman</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="font-type" class="col-sm-4 col-form-label">Name Size and Color</label>
                        <div class="col-sm-6">
                            <select id="font-type" class="form-control form-control-lg">
                                <option>Size</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <div class="color-picker" id="name-color" class="mx-auto"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="font-type" class="col-sm-4 col-form-label">Title Font</label>
                        <div class="col-sm-8">
                            <select id="font-type" class="form-control form-control-lg">
                                <option>Times New Roman</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="font-type" class="col-sm-4 col-form-label">Title Size and Color</label>
                        <div class="col-sm-6">
                            <select id="font-type" class="form-control form-control-lg">
                                <option>Size</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <div class="color-picker" id="title-color" class="mx-auto"></div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                </div>
                <div class="col-4 tag-thumbnail-wrapper justify-content-center">
                    <div class="tag-thumbnail">
                        <span class="name">Chuck Norris</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="step step-4">
            <div class="row">
                <div class="col-12">
                    <h1 class="main-header text-center">Step 4: Preview and Download Taggs</h1>
                    <p class="text-center helper-text">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 tag-preview">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
<script>
// Simple example, see optional options for more configuration.
const namePickr = Pickr.create({
    el: '#name-color',
    theme: 'nano', // or 'monolith', or 'nano'
    swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 0.95)',
        'rgba(156, 39, 176, 0.9)',
        'rgba(103, 58, 183, 0.85)',
        'rgba(63, 81, 181, 0.8)',
        'rgba(33, 150, 243, 0.75)',
        'rgba(3, 169, 244, 0.7)',
        'rgba(0, 188, 212, 0.7)',
        'rgba(0, 150, 136, 0.75)',
        'rgba(76, 175, 80, 0.8)',
        'rgba(139, 195, 74, 0.85)',
        'rgba(205, 220, 57, 0.9)',
        'rgba(255, 235, 59, 0.95)',
        'rgba(255, 193, 7, 1)'
    ],
    components: {
        // Main components
        preview: true,
        opacity: true,
        hue: true,
        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            input: true,
            save: true
        }
    }
});
const titlePickr = Pickr.create({
    el: '#title-color',
    theme: 'nano', // or 'monolith', or 'nano'
    swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 0.95)',
        'rgba(156, 39, 176, 0.9)',
        'rgba(103, 58, 183, 0.85)',
        'rgba(63, 81, 181, 0.8)',
        'rgba(33, 150, 243, 0.75)',
        'rgba(3, 169, 244, 0.7)',
        'rgba(0, 188, 212, 0.7)',
        'rgba(0, 150, 136, 0.75)',
        'rgba(76, 175, 80, 0.8)',
        'rgba(139, 195, 74, 0.85)',
        'rgba(205, 220, 57, 0.9)',
        'rgba(255, 235, 59, 0.95)',
        'rgba(255, 193, 7, 1)'
    ],
    components: {
        // Main components
        preview: true,
        opacity: true,
        hue: true,
        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            input: true,
            save: true
        }
    }
});
</script>
@endsection
