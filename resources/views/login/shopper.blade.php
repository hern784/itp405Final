@extends('layouts.main')

@section('title', 'Shopper Login')

@section('content')
    <form action="{{ route('login.login_shopper') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input 
               type="text" 
               name="username" 
               id="username" 
               class="form-control" >
            @error('username')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input 
               type="text" 
               name="password" 
               id="password" 
               class="form-control" >
            @error('password')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">
            login
        </button>
    </form>
@endsection

