@extends('layouts.main')

@section('content')
    @if (Auth::check())
        @include('dashboard')
    @else
        @include('components.nav-link')
        @include('partials.currency')
    @endif
@endsection

@section('scripts')
    @parent
@endsection
