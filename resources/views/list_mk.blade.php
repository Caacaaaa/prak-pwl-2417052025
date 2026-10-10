<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mata Kuliah</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 35px 20px;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1e293b;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 8px;
            color: #172554;
        }

        .subtitle {
            color: #64748b;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            padding: 9px 14px;
            border-radius: 5px;
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
            border: none;
        }

        .btn-tambah {
            background: #2563eb;
            color: white;
            margin-bottom: 18px;
        }

        .btn-edit {
            background: white;
            color: #2563eb;
            border: 1px solid #2563eb;
        }

        .btn-hapus {
            background: #172554;
            color: white;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .card {
            background: white;
            padding: 20px;
            border: 1px solid #dbe3ef;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(15, 23, 42, 0.05);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #dbe3ef;
            text-align: left;
        }

        th {
            background: #172554;
            color: white;
            font-weight: 600;
        }

        tbody tr:nth-child(even) {
            background: #f4f7fb;
        }

        tbody tr:hover {
            background: #e8efff;
        }

        .aksi {
            white-space: nowrap;
        }

        .aksi form {
            display: inline;
            margin-left: 5px;
        }

        .alert-success {
            background-color: #ffffff;
            color: #1e2a5a;
            border-left: 4px solid #28a745;
            padding: 12px 16px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .alert-delete {
            background-color: #ffffff;
            color: #1e2a5a;
            border-left: 4px solid #dc3545;
            padding: 12px 16px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .kosong {
            text-align: center;
            color: #64748b;
        }

        @media (max-width: 600px) {
            .card {
                padding: 10px;
            }

            th, td {
                padding: 9px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <h1>Daftar Mata Kuliah</h1>
        <p class="subtitle">Kelola data mata kuliah dengan mudah.</p>

        @if (session('success'))
            <div class="alert {{ session('status') == 'hapus' ? 'alert-delete' : 'alert-success' }}">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <a href="{{ route('matakuliah.create') }}"
           class="btn btn-tambah">
            + Tambah Mata Kuliah
        </a>

        <div class="card">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($mks as $mk)
                        <tr>
                            <td>{{ $mk->id }}</td>
                            <td>{{ $mk->nama_mk }}</td>
                            <td>{{ $mk->sks }}</td>
                            <td class="aksi">
                                <a href="{{ route('matakuliah.edit', $mk->id) }}"
                                   class="btn btn-edit">
                                    Edit
                                </a>

                                <form
                                    action="{{ route('matakuliah.destroy', $mk->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-hapus"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="kosong">
                                Belum ada data mata kuliah.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</body>
</html>