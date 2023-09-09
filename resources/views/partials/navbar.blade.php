<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo-lg.png') }}" alt="Logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
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
