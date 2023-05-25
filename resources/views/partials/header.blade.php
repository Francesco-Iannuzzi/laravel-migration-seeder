<header id="app_header" class="bg-primary py-3">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link text-light {{ Route::currentRouteName() === 'home' ? 'bg-light text-dark' : '' }}"
                href="{{ route('home') }}" aria-current="page">
                Home
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{ Route::currentRouteName() === 'about' ? 'bg-light text-dark' : '' }}"
                href="{{ route('about') }}">
                About
            </a>
        </li>
    </ul>
</header>
