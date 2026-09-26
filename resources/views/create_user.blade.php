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

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama">NAMA</label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
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
                    placeholder="Masukkan NPM"
                    required
                >
            </div>

            <div class="form-group">
                <label for="kelas_id">KELAS</label>

                <select
                    name="kelas_id"
                    id="kelas_id"
                    required
                >
                    <option value="" disabled selected>
                        Pilih kelas
                    </option>

                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">
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
        background-color: #f5ead7;
        font-family: Arial, sans-serif;
        min-height: 100vh;
    }

    .main-content {
        max-width: 1100px;
        margin: auto;
        padding: 55px 30px 70px;
    }

    .intro {
        margin-bottom: 30px;
    }

    .small-title {
        color: #c03939;
        font-size: 12px;
        font-weight: bold;
        letter-spacing: 2px;
        margin-bottom: 8px;
    }

    .intro h1 {
        color: #171717;
        font-size: 42px;
        margin: 0 0 10px;
    }


    .form-card {
        max-width: 750px;
        margin: 40px auto 0;

        background-color: #171717;

        padding: 35px 45px;

        border-radius: 20px;

        box-shadow: 8px 8px 0px #b83232;
    }

    .form-title {
        display: flex;
        align-items: center;
        gap: 15px;

        margin-bottom: 30px;
    }

    .icon {
        width: 50px;
        height: 50px;

        background-color: #c03939;
        color: #f5ead7;

        border-radius: 50%;

        display: flex;
        justify-content: center;
        align-items: center;

        font-size: 30px;
        font-weight: bold;
    }

    .form-title h2 {
        margin: 0 0 5px;

        color: #f5ead7;

        font-size: 24px;
    }

    .form-title p {
        margin: 0;

        color: #c9bba5;

        font-size: 13px;
    }


    .form-group {
        margin-bottom: 22px;
    }

    .form-group label {
        display: block;

        color: #c03939;

        font-size: 12px;
        font-weight: bold;

        letter-spacing: 1.5px;

        margin-bottom: 8px;
    }

    .form-group input,
    .form-group select {

        width: 100%;

        padding: 14px 16px;

        background-color: #f5ead7;

        border: 2px solid transparent;

        border-radius: 10px;

        box-sizing: border-box;

        color: #171717;

        font-size: 14px;

        outline: none;
    }

    .form-group input:focus,
    .form-group select:focus {
        border-color: #c03939;
    }

    .form-group input::placeholder {
        color: #8d8478;
    }


    .form-actions {
        display: flex;

        justify-content: flex-end;

        gap: 12px;

        margin-top: 30px;
    }

    .back-button,
    .save-button {
        padding: 12px 22px;

        border-radius: 9px;

        font-size: 14px;

        font-weight: bold;

        text-decoration: none;

        cursor: pointer;
    }

    .back-button {
        background-color: transparent;

        color: #f5ead7;

        border: 2px solid #f5ead7;
    }

    .back-button:hover {
        background-color: #f5ead7;
        color: #171717;
    }

    .save-button {
        background-color: #c03939;

        color: #f5ead7;

        border: 2px solid #c03939;
    }

    .save-button:hover {
        background-color: #b83232;

        border-color: #b83232;
    }


    @media (max-width: 600px) {

        .main-content {
            padding: 35px 20px 50px;
        }

        .intro h1 {
            font-size: 32px;
        }

        .form-card {
            padding: 25px 20px;
        }

        .form-actions {
            flex-direction: column;
        }

        .back-button,
        .save-button {
            text-align: center;
        }

    }

</style>

@endsection