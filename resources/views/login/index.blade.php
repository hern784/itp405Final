@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login.shopper') }}">
                Shopper
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login.business') }}">
                Business
            </a>
        </li>
    </ul>
@endsection

