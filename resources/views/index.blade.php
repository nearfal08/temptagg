@extends('layouts.main')

@section('content')
<div class="main-bg">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-md-6">
                <h1 class="main-header">The Best Way to Create Name Tags</h1>
                <p class="main-p">Simple, easy to create, customizable name tags for conferences, work events, and get
                    togethers.</p>
                <a href="/create-tagg" role="button" class="btn btn-main">Create a Tagg</a>
                <a href="" role="button" class="btn btn-main ml-3">Learn More</a>
            </div>
            <div class="col-md-6 main-img">
                <img src="{{ asset('images/undraw_reminder_pa79.svg') }}" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div> 
</div> 
@endsection
