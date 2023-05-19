<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadTugasController extends Controller
{
    public function showUploadForm()
    {
        return view('upload-tugas');
    }

    public function upload(Request $request)
    {
        // Validasi file tugas
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        // Simpan file tugas
        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('tugas', $fileName);
        }

        // Buat entri tugas dalam database
        Tugas::create([
            'nama_file' => $fileName,
            'keterangan' => $request->input('keterangan'),
            'siswa_id' => auth()->user()->id,
        ]);

        return redirect('/dashboard')->with('success', 'Tugas berhasil diupload.');
    }
}
