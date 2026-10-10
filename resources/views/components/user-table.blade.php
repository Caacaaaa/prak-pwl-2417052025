<div class="table-card">

    <div class="table-header">
        <div>
            <h2>LIST USER</h2>
            <p>Daftar pengguna yang terdaftar dalam sistem</p>
        </div>

        <a href="{{ route('user.create') }}" class="add-button">
            + Tambah User
        </a>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NPM</th>
                    <th>KELAS</th>
                    <th>AKSI</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->nim }}</td>
                        <td>
                            <span class="kelas">
                                {{ $user->nama_kelas }}
                            </span>
                        </td>
                        <td class="action-buttons">
                            <a href="{{ route('user.edit', $user->id) }}"
                               class="btn-edit">
                                Edit
                            </a>

                            <form action="{{ route('user.destroy', $user->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus data user ini?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn-delete">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="empty">
                            Belum ada data pengguna.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

<style>
    .table-card {
        background-color: #171717;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(30, 42, 90, 0.08);
    }

    .table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
    }

    .table-header h2 {
        color: #ffffff;
        margin: 0 0 6px;
        font-size: 23px;
    }

    .table-header p {
        color: #b8c3dc;
        margin: 0;
        font-size: 13px;
    }

    .add-button {
        background-color: #4f63ed;
        color: #ffffff;
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        font-size: 13px;
        white-space: nowrap;
    }

    .add-button:hover {
        background-color: #394bc5;
    }

    .table-wrapper {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        min-width: 650px;
    }

    th {
        background-color: #26365c;
        color: #ffffff;
        padding: 14px;
        text-align: left;
        font-size: 12px;
        letter-spacing: 0.5px;
    }

    td {
        padding: 14px;
        color: #1e2a5a;
        background-color: #ffffff;
        border-bottom: 1px solid #dbe3f0;
        font-size: 14px;
    }

    .kelas {
        background-color: #e8edff;
        color: #26365c;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 12px;
    }

    .action-buttons {
        white-space: nowrap;
    }

    .action-buttons form {
        display: inline;
    }

    .btn-edit,
    .btn-delete {
        display: inline-block;
        padding: 7px 12px;
        border-radius: 4px;
        font-family: Arial, sans-serif;
        font-size: 12px;
        text-decoration: none;
        cursor: pointer;
    }

    .btn-edit {
        background-color: #ffffff;
        color: #4f63ed;
        border: 1px solid #4f63ed;
        margin-right: 4px;
    }

    .btn-edit:hover {
        background-color: #4f63ed;
        color: #ffffff;
    }

    .btn-delete {
        background-color: #1e2a5a;
        color: #ffffff;
        border: 1px solid #1e2a5a;
    }

    .btn-delete:hover {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .empty {
        text-align: center;
        color: #64748b;
        padding: 25px;
    }

    tr:last-child td {
        border-bottom: none;
    }

    @media (max-width: 600px) {
        .table-card {
            padding: 16px;
        }

        .table-header {
            align-items: flex-start;
            flex-direction: column;
        }
    }
</style>