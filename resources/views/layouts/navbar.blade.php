@extends('layouts.main')

@section('navbar')
    <form action="{{ route('login.business_shopper') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="business" class="form-label">Business</label>
            <input 
               type="text" 
               name="business" 
               id="business" 
               class="form-control" >
            @error('business')
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

