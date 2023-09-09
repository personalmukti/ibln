@extends('layouts.app2')

@section('content')
<section class="features py-5">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-12 text-center">
                <h1 class="section-title">- Our Service -</h1>
                <hr class="custom-hr">
            </div>
        </div>
        <div class="row py-1">
            <div class="col-md-12">
                @include('partials.tabservice')
            </div>

        </div>
    </div>
</section>

@endsection


