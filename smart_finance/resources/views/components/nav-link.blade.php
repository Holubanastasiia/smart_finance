<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="shrink-0 flex items-center">
            <a href="/">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
        </div>
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"--}}
{{--                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
        <div class="navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('login') }}">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
