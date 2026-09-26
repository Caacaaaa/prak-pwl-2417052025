@extends('layouts.app')

@section('content')

<x-navbar />

<main class="main-content">

    <div class="intro">

        <h1>Daftar Pengguna</h1>

    </div>

    <x-user-table :users="$users" />

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
        padding: 55px 30px;
    }

    .intro {
        margin-bottom: 30px;
    }

    .intro h1 {
        color: #171717;
        font-size: 38px;
        margin: 0 0 10px;
    }

    .description {
        color: #6b6257;
        font-size: 14px;
        margin: 0;
    }
</style>

@endsection