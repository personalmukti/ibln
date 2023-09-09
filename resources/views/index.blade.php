@extends('layouts.app2')

@section('content')
    @include('partials.navworks')

    <div class="main">
        @include('partials.about')

        @include('partials.partner')

        @include('partials.service')

        @include('partials.gallery')
    </div>

    @include('partials.footer')
@endsection
