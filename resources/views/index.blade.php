@extends('layouts.app')

@section('content')
    <header class="hero" style="background-image: url('')">
        <img src="{{ asset('img/freighter.jpg') }}" class="bg-image">
        @include('partials.navbar')

        <div class="hero-content">
            <h1 class="hero-heading animate__animated animate__slideInLeft" id="pt">PT. INTERBENUA LOGISTINDO</h1>
            <div class="buttons">
                <a href="https://wa.me/contohnomor" class="btn btn-whatsapp animate__animated animate__slideInUp">WhatsApp</a>
                <a href="mailto:contohemail@example.com" class="btn btn-email animate__animated animate__slideInUp">
                    Email</a>
            </div>
            <h6 class="bottom-heading animate__animated animate__slideInUp" id="inter">INTERNATIONAL FREIGHT FORWARDING
            </h6>
            <div class="service-list animate__animated animate__slideInRight" id="service">
                <h6 class="service-title">Our Service</h6>
                <ul class="service-items">
                    <li>Sea Freight</li>
                    <li>Air Freight</li>
                    <li>Inland Transportation</li>
                    <li>Reefer Container</li>
                    <li>Documentation</li>
                </ul>
            </div>
        </div>
    </header>

    <div class="main">
        @include('partials.about')

        @include('partials.partner')

        @include('partials.service')

        @include('partials.gallery')
    </div>

    <footer class="dark-footer">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-12 text-center">
                    <img src="/img/logo.png" alt="logo" width="100" height="100">
                    <p>Copyright &copy; PT. Interbenua Logistindo. All right reserved.</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
