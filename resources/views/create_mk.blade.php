@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Mata Kuliah</h1>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama_mk">Nama Mata Kuliah</label>
                <input type="text" class="form-control" id="nama_mk" name="nama_mk"
                       value="{{ old('nama_mk') }}" required>
            </div>

            <div class="form-group">
                <label for="sks">SKS</label>
                <input type="number" class="form-control" id="sks" name="sks"
                       value="{{ old('sks') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('matakuliah.index') }}">Kembali</a>
        </form>
    </div>
@endsection