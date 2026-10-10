@extends('layouts.app')

@section('content')

<x-navbar />

<main class="main-content">

    <div class="intro">
        <h1>Daftar Pengguna</h1>
        <p class="description">
            Kelola data pengguna dengan mudah.
        </p>
    </div>

    
    @if (session('success'))
        <div class="alert {{ session('status') === 'hapus' ? 'alert-delete' : 'alert-success' }}">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif


    <x-user-table :users="$users" />

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
        padding: 55px 30px;
    }

    .intro {
        margin-bottom: 25px;
    }

    .intro h1 {
        color: #1e2a5a;
        font-size: 32px;
        margin: 0 0 10px;
    }

    .description {
        color: #64748b;
        font-size: 14px;
        margin: 0;
    }

   
    .alert {
        padding: 15px 20px;
        margin-bottom: 18px;
        background: #ffffff;
        border: 1px solid #dbe3f0;
        border-left: 5px solid;
        border-radius: 5px;
        color: #1e2a5a;
    }

    .main-content .alert.alert-success {
        border-left-color: #28a745 !important;
    }

    .main-content .alert.alert-delete {
        border-left-color: #dc3545 !important;
    }

    .main-content .alert.alert-error {
        border-left-color: #dc3545 !important;
    }


</style>

@endsection