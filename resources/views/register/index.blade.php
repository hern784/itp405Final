@extends('layouts.main')

@section('title', 'Register')

@section('content')
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register.shopper') }}">
                Shopper
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register.business') }}">
                Business
            </a>
        </li>
    </ul>
@endsection
