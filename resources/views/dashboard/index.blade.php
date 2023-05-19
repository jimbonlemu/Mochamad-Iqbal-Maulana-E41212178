@extends('sidebar.app')

@section('title', 'Dashboard')

@section('content')
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">Dashboard</h2>

        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-lg font-bold mb-2">Total Users</h3>
                <p class="text-3xl font-bold">{{ $totalUsers }}</p>
            </div>

            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-lg font-bold mb-2">Total Students</h3>
                <p class="text-3xl font-bold">{{ $totalStudents }}</p>
            </div>
        </div>
    </div>
@endsection
