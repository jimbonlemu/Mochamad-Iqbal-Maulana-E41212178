@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Register</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block font-bold mb-2">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror">
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block font-bold mb-2">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block font-bold mb-2">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="block font-bold mb-2">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
        </div>
        <div>
            <input type="submit" value="Register" class="px-4 py-2 bg-blue-500 text-white rounded cursor-pointer">
        </div>
    </form>
    <p class="mt-4">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500">Login</a></p>
@endsection
