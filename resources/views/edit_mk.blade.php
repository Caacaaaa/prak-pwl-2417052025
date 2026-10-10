<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Mata Kuliah</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f3f6fb;
            color: #1e2a5a;
        }

        .container {
            max-width: 700px;
            margin: 60px auto;
            padding: 0 20px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #64748b;
            margin-bottom: 25px;
        }

        .card {
            background-color: #ffffff;
            padding: 30px;
            border: 1px solid #dbe3f0;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(30, 42, 90, 0.06);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 5px;
            font-size: 15px;
            color: #1e2a5a;
        }

        input:focus {
            outline: none;
            border-color: #4f63ed;
        }

        .actions {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 5px;
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-update {
            background-color: #4f63ed;
            color: white;
            border: 1px solid #4f63ed;
        }

        .btn-update:hover {
            background-color: #394dcc;
        }

        .btn-back {
            background-color: white;
            color: #1e2a5a;
            border: 1px solid #1e2a5a;
        }

        .btn-back:hover {
            background-color: #edf1fa;
        }

        @media (max-width: 600px) {
            .container {
                margin: 30px auto;
            }

            .card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <h1>Edit Mata Kuliah</h1>
        <p class="subtitle">
            Perbarui informasi mata kuliah sesuai kebutuhan.
        </p>

        <div class="card">
            <form action="{{ route('matakuliah.update', $mk->id) }}"
                  method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_mk">Nama Mata Kuliah</label>
                    <input
                        type="text"
                        id="nama_mk"
                        name="nama_mk"
                        value="{{ old('nama_mk', $mk->nama_mk) }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="sks">SKS</label>
                    <input
                        type="number"
                        id="sks"
                        name="sks"
                        value="{{ old('sks', $mk->sks) }}"
                        min="1"
                        max="6"
                        required
                    >
                </div>

                <div class="actions">
                    <button type="submit" class="btn btn-update">
                        Simpan Perubahan
                    </button>

                    <a href="{{ url('/mata-kuliah') }}"
                       class="btn btn-back">
                        Kembali
                    </a>
                </div>
            </form>
        </div>

    </div>
</body>
</html>