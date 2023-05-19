@extends('sidebar.app')

@section('content')
    <!-- Form untuk mengubah informasi profil -->
    <form action="{{ route('student.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Field Nama -->
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ $student->nama }}" class="form-control" required>
        </div>

        <!-- Field Kelas -->
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" id="kelas" value="{{ $student->kelas }}" class="form-control" required>
        </div>

        <!-- Field Golongan -->
        <div class="form-group">
            <label for="golongan">Golongan</label>
            <input type="text" name="golongan" id="golongan" value="{{ $student->golongan }}" class="form-control"
                required>
        </div>

        <!-- Field Foto Profil -->
        <div class="form-group">
            <label for="profile_image">Foto Profil</label>
            <input type="file" name="profile_image" id="profile_image" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
