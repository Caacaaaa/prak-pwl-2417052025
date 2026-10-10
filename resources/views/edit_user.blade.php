<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6fb;
            color: #1e2a5a;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 20px;
        }

        h1 {
            margin-bottom: 8px;
        }

        .subtitle {
            color: #64748b;
            margin-bottom: 25px;
        }

        .card {
            background: white;
            padding: 30px;
            border: 1px solid #dbe3f0;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(30,42,90,.06);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 5px;
            font-size: 15px;
        }

        .actions {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .btn {
            padding: 10px 18px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-save {
            background: #4f63ed;
            color: white;
            border: 1px solid #4f63ed;
        }

        .btn-back {
            background: white;
            color: #1e2a5a;
            border: 1px solid #1e2a5a;
        }

        .error {
            color: #dc3545;
            font-size: 13px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit User</h1>
        <p class="subtitle">Perbarui informasi pengguna.</p>

        <div class="card">
            <form action="{{ route('user.update', $user->id) }}"
                  method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama"
                           value="{{ old('nama', $user->nama) }}" required>
                    @error('nama')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="NPM">NPM</label>
                    <input type="text" id="NPM" name="NPM"
                        value="{{ old('NPM', $user->nim) }}" required>
                    @error('NPM')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kelas_id">Kelas</label>
                    <select id="kelas_id" name="kelas_id" required>
                        <option value="">Pilih kelas</option>

                        @foreach ($kelas as $k)
                            <option value="{{ $k->id }}"
                                {{ old('kelas_id', $user->kelas_id) == $k->id ? 'selected' : '' }}>
                                {{ $k->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                    @error('kelas_id')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="actions">
                    <button type="submit" class="btn btn-save">
                        Simpan Perubahan
                    </button>

                    <a href="{{ url('/user') }}" class="btn btn-back">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>