<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas
        ];

        return view('create_user', $data);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'NPM' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $data = [
            'nama' => $request->nama,
            'nim' => $request->NPM,
            'kelas_id' => $request->kelas_id,
        ];

        $this->userModel->create($data);

        return redirect('/user')
            ->with('success', 'Data user berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $user = $this->userModel->findOrFail($id);
        $kelas = $this->kelasModel->getKelas();

        return view('edit_user', [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'NPM' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        try {
            $user = $this->userModel->findOrFail($id);

            $user->update([
                'nama' => $request->nama,
                'NPM' => $request->NPM,
                'kelas_id' => $request->kelas_id,
            ]);

            return redirect()->to('/user')
                ->with('success', 'Data user berhasil diperbarui!')
                ->with('status', 'edit');
        } catch (\Throwable $e) {
            report($e);

            return back()->withInput()
                ->with('error', 'Data user gagal diperbarui.');
        }
    }

    public function destroy($id)
    {
        try {
            $user = $this->userModel->findOrFail($id);
            $user->delete();

            return redirect()->to('/user')
                ->with('success', 'Data user berhasil dihapus!')
                ->with('status', 'hapus');
        } catch (\Throwable $e) {
            report($e);

            return redirect()->to('/user')
                ->with('error', 'Data user gagal dihapus.');
        }
    }
}