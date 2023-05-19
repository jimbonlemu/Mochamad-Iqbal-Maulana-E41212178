@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="username" class="block font-bold mb-2">username</label>
            <input type="text" id="username" name="username" placeholder="username" required class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('username') border-red-500 @enderror">
            @error('username')
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
        <div>
            <input type="submit" value="Login" class="px-4 py-2 bg-blue-500 text-white rounded cursor-pointer">
        </div>
    </form>
    <p class="mt-4">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-500">Daftar</a></p>
@endsection
