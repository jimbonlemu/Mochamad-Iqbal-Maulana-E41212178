<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Lakukan logika atau query untuk mengambil data yang diperlukan untuk dashboard
        $user = auth()->user();
        // Contoh pengambilan jumlah pengguna
        $totalUsers = \App\Models\User::count();

        // Contoh pengambilan jumlah siswa
        $totalStudents = \App\Models\Student::count();

        // Pass data ke view
        return view('dashboard.index', compact('totalUsers', 'totalStudents'));
    }
}
