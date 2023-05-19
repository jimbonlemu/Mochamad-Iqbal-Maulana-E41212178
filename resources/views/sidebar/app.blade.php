<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <!-- Tambahkan link stylesheet Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="flex h-screen bg-gray-200">
        <div class="w-1/5 bg-gray-800 text-white">
            <!-- Logo dan Nama Aplikasi -->
            <div class="p-4">
                <h1 class="text-2xl font-semibold">My App</h1>
                @auth
                <p class="text-sm mt-2">Halo {{ auth()->user()->name }}</p>
                @endauth
            </div>

            <!-- Daftar Menu Sidebar -->
            <ul class="py-4">
                <li class="px-4 py-2">
                    <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'text-white' : 'text-gray-300' }} hover:text-white">Dashboard</a>
                </li>
                <li class="px-4 py-2">
                    <a href="{{ url('/upload-tugas') }}" class="{{ request()->is('upload-tugas') ? 'text-white' : 'text-gray-300' }} hover:text-white">Upload Tugas</a>
                </li>
                <li class="px-4 py-2">
                    <a href="{{ url('/edit-profil') }}" class="{{ request()->is('edit-profil') ? 'text-white' : 'text-gray-300' }} hover:text-white">Edit Profil</a>
                </li>
                <li class="px-4 py-2">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-gray-300 hover:text-white">Logout</button>
                    </form>
                </li>
            </ul>
        </div>

        <!-- Konten -->
        <div class="flex-grow p-8">
            @yield('content')
        </div>
    </div>
</body>

</html>
