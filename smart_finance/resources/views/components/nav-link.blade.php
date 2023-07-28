{{--@props(['active'])--}}

{{--@php--}}
{{--$classes = ($active ?? false)--}}
{{--            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600 text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'--}}
{{--            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';--}}
{{--@endphp--}}

{{--<a {{ $attributes->merge(['class' => $classes]) }}>--}}
{{--    {{ $slot }}--}}
{{--</a>--}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="shrink-0 flex items-center">
            <a href="/">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
