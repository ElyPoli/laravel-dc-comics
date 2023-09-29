<header>
    <div class="nav-upperline">
        <div class="container d-flex align-items-center justify-content-end">
            <p class="text-uppercase text-white fw-bold m-0 pt-2 pb-2 pe-5">
                Dc power visa
                <i class="fa-regular fa-registered"></i>
            </p>
            <p class="text-uppercase text-white fw-bold m-0 pt-2 pb-2 ps-5">
                Additional dc sites
                <i class="fa-solid fa-caret-down"></i>
            </p>
        </div>
    </div>

    <div class="container d-flex align-items-center justify-content-between pt-4 pb-4 overflow-hidden">
        <!-- Logo -->
        <div>
            <a href="/" class="my-navbar-logo">
                <img src="{{ asset('img/dc-logo.png') }}" alt="DC logo">
            </a>
        </div>

        <!-- Menù -->
        <nav class="ps-2 ps-sm-4 ps-md-0">
            <ul class="my-navbar-link d-flex flex-wrap align-items-center justify-content-center">
                @foreach ($navLinks as $link)
                    <li class="list-group-item pt-1 pt-md-0">
                        <a href="{{ $link['name'] }}" class="link-underline link-underline-opacity-0">
                            {{ $link['name'] }}
                        </a>
                    </li>
                @endforeach
                <li class="list-group-item pt-1 pt-md-0">
                    <form class="d-flex align-items-center nav-search" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</header>