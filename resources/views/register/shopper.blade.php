@extends('layouts.main')

@section('title', 'Shopper Register')

@section('content')
    <form action="{{ route('register.register_shopper') }}" method="POST">
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
               type="password" 
               name="password" 
               id="password" 
               class="form-control" >
            @error('password')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="confirm" class="form-label">Confirm</label>
            <input 
               type="password" 
               name="confirm" 
               id="confirm" 
               class="form-control" >
            @error('confirm')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">
            register
        </button>
    </form>
@endsection

