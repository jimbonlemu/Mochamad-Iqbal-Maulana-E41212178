@extends('sidebar.app')

@section('content')
    <h1>Upload Tugas</h1>
    <!-- Form Upload Tugas -->
    <form action="{{ route('upload.tugas') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="file">File Tugas:</label>
            <input type="file" name="file" id="file" required>
        </div>
        <div class="mb-4">
            <label for="keterangan">Keterangan:</label>
            <textarea name="keterangan" id="keterangan" rows="3"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
    </form>
@endsection
