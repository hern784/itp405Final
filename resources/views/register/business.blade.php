@extends('layouts.main')

@section('title', 'Business Login')

@section('content')
    <form action="{{ route('register.register_business') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input 
               type="text" 
               name="name" 
               id="name" 
               class="form-control" >
            @error('name')
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
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input 
               type="text" 
               name="address" 
               id="address" 
               class="form-control" >
            @error('address')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">   
            <label for="max_occupancy" class="form-label">Max Occupancy</label>
            <input 
               type="number" 
               name="max_occupancy" 
               id="max_occupancy" 
               class="form-control" >
            @error('max_occupancy')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">
            login
        </button>
    </form>
@endsection

