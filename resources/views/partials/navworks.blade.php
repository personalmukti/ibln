<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container-fluid d-flex justify-content-between">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo-lg.png') }}" alt="ibl" width="80" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto"> <!-- Gunakan ml-auto untuk menu berada di kanan -->
                <li class="nav-item">
                    @if ($title === 'Home')
                        <a class="nav-link active" href="/">Home</a>
                    @else
                        <a class="nav-link" href="/">Home</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ($title === 'About')
                        <a class="nav-link active" href="/about">About</a>
                    @else
                        <a class="nav-link" href="/about">About</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ($title === 'Service')
                        <a class="nav-link active" href="/service">Service</a>
                    @else
                        <a class="nav-link" href="/service">Service</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ($title === 'Contact')
                        <a class="nav-link active" href="/contact">Contact</a>
                    @else
                        <a class="nav-link" href="/contact">Contact</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>


@push('script')
    <script>
        const navEl = document.querySelector('.navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY >= 56) {
                navEl.classList.add('navbar-scrolled');
            } else if ((window.scrollY < 56)) {
                navEl.classList.remove('navbar-scrolled');
            }
        });
    </script>
@endpush
