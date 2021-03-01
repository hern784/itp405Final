@extends('layouts.main')

@section('title')
    Profile
@endsection

@section('content')
    <h1>
        Userid: {{$user->id}}
    </h1>
@endsection
