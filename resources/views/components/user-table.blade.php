<div class="table-card">

    <div class="table-header">
        <div>
            <h2>LIST USER</h2>
            <p>Daftar pengguna yang terdaftar dalam sistem</p>
        </div>

        <a href="/user/create" class="add-button">
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
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->NPM }}</td>
                        <td>
                            <span class="kelas">
                                {{ $user->nama_kelas }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<style>
    .table-card {
        background-color: #171717;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 8px 8px 0px #b83232;
    }

    .table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .table-header h2 {
        color: #f5ead7;
        margin: 0 0 5px;
        font-size: 24px;
    }

    .table-header p {
        color: #c94a4a;
        margin: 0;
        font-size: 13px;
    }

    .add-button {
        background-color: #c03939;
        color: #f5ead7;
        padding: 11px 17px;
        border-radius: 9px;
        text-decoration: none;
        font-weight: bold;
        font-size: 13px;
    }

    .add-button:hover {
        background-color: #b83232;
        color: #f5ead7;
    }

    .table-wrapper {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background-color: #c03939;
        color: #f5ead7;
        padding: 14px;
        text-align: left;
        font-size: 12px;
        letter-spacing: 1px;
    }

    td {
        padding: 15px 14px;
        color: #171717;
        background-color: #f5ead7;
        border-bottom: 2px solid #171717;
        font-size: 14px;
    }

    .kelas {
        background-color: #171717;
        color: #f5ead7;
        padding: 5px 10px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: bold;
    }

    tr:last-child td {
        border-bottom: none;
    }
</style>