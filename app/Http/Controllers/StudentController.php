<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Request;

class StudentController extends Controller
{
    public function update(Request $request)
    {
        $student = Auth::user();

        $validatedData = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'golongan' => 'required',
            'profile_image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $student->nama = $validatedData['nama'];
        $student->kelas = $validatedData['kelas'];
        $student->golongan = $validatedData['golongan'];

        // Periksa apakah ada file foto profil yang diunggah
        if ($request->hasFile('profile_image')) {
            // Hapus foto profil lama jika ada
            if ($student->profile_image) {
                Storage::delete($student->profile_image);
            }

            // Simpan foto profil baru
            $imagePath = $request->file('profile_image')->store('profile_images');
            $student->profile_image = $imagePath;
        }

        $student->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }
}
