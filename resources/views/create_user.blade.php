@extends('layouts.app')

@section('content')

<x-navbar />

<main class="main-content">

    <div class="intro">
        <h1>Tambah User</h1>
    </div>

    <div class="form-card">

        <div class="form-title">
            <div class="icon">+</div>

            <div>
                <h2>Form Tambah User</h2>
                <p>Masukkan data pengguna dengan lengkap.</p>
            </div>
        </div>

        {{-- Notifikasi error validasi --}}
        @if ($errors->any())
            <div class="alert-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama">NAMA</label>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    value="{{ old('nama') }}"
                    placeholder="Masukkan nama lengkap"
                    required
                >
            </div>

            <div class="form-group">
                <label for="NPM">NPM</label>
                <input
                    type="text"
                    id="NPM"
                    name="NPM"
                    value="{{ old('NPM') }}"
                    placeholder="Masukkan NPM"
                    required
                >
            </div>

            <div class="form-group">
                <label for="kelas_id">KELAS</label>
                <select name="kelas_id" id="kelas_id" required>
                    <option value="" disabled
                        {{ old('kelas_id') ? '' : 'selected' }}>
                        Pilih kelas
                    </option>

                    @foreach ($kelas as $kelasItem)
                        <option
                            value="{{ $kelasItem->id }}"
                            {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}
                        >
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-actions">
                <a href="/user" class="back-button">
                    Kembali
                </a>

                <button type="submit" class="save-button">
                    Simpan
                </button>
            </div>

        </form>
    </div>

</main>

<x-footer />

<style>
    body {
        margin: 0;
        background-color: #f3f6fb;
        font-family: Arial, sans-serif;
        min-height: 100vh;
        color: #1e2a5a;
    }

    .main-content {
        max-width: 1100px;
        margin: auto;
        padding: 45px 30px 65px;
    }

    .intro {
        margin-bottom: 25px;
    }

    .intro h1 {
        color: #1e2a5a;
        font-size: 32px;
        margin: 0 0 8px;
    }

    .intro p {
        color: #64748b;
        font-size: 14px;
        margin: 0;
    }

    .form-card {
        max-width: 700px;
        margin: 30px auto 0;
        padding: 30px;
        background-color: #ffffff;
        border: 1px solid #dbe3f0;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(30, 42, 90, 0.06);
    }

    .form-title {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 28px;
        padding-bottom: 20px;
        border-bottom: 1px solid #e2e8f0;
    }

    .icon {
        width: 42px;
        height: 42px;
        flex-shrink: 0;
        background-color: #4058e8;
        color: #ffffff;
        border-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 25px;
    }

    .form-title h2 {
        margin: 0 0 5px;
        color: #1e2a5a;
        font-size: 20px;
    }

    .form-title p {
        margin: 0;
        color: #64748b;
        font-size: 13px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        color: #1e2a5a;
        font-size: 13px;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 12px 14px;
        background-color: #ffffff;
        border: 1px solid #cbd5e1;
        border-radius: 6px;
        box-sizing: border-box;
        color: #1e293b;
        font-family: Arial, sans-serif;
        font-size: 14px;
        outline: none;
    }

    .form-group input:focus,
    .form-group select:focus {
        border-color: #4058e8;
        box-shadow: 0 0 0 3px rgba(64, 88, 232, 0.1);
    }

    .form-group input::placeholder {
        color: #94a3b8;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 28px;
        padding-top: 20px;
        border-top: 1px solid #e2e8f0;
    }

    .back-button,
    .save-button {
        padding: 10px 18px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
        cursor: pointer;
        transition: 0.2s;
    }

    .back-button {
        background-color: #ffffff;
        color: #1e2a5a;
        border: 1px solid #cbd5e1;
    }

    .back-button:hover {
        background-color: #f1f5f9;
    }

    .save-button {
        background-color: #4058e8;
        color: #ffffff;
        border: 1px solid #4058e8;
    }

    .save-button:hover {
        background-color: #3046c9;
        border-color: #3046c9;
    }

    .alert-error {
        padding: 10px 14px;
        margin-bottom: 20px;
        background-color: #ffffff;
        border: 1px solid #fecaca;
        border-left: 4px solid #dc2626;
        border-radius: 5px;
        color: #b91c1c;
        font-size: 13px;
    }

    .alert-error p {
        margin: 4px 0;
    }

    @media (max-width: 600px) {
        .main-content {
            padding: 30px 18px 45px;
        }

        .intro h1 {
            font-size: 27px;
        }

        .form-card {
            padding: 22px 18px;
        }

        .form-actions {
            flex-direction: column-reverse;
        }

        .back-button,
        .save-button {
            text-align: center;
        }
    }
</style>

@endsection