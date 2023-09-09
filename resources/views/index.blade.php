@extends('layouts.app2')

@section('content')
    @include('partials.header')

    <div class="main">
        @include('partials.about')

        @include('partials.partner')

        @include('partials.service')

        @include('partials.gallery')
    </div>
@endsection
