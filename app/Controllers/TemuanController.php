<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TemuanModel;

class TemuanController extends Controller
{
    public function index()
    {
        $temuanModel = new TemuanModel();
        $data['temuans'] = $temuanModel->findAll();
        return view('dashboard/temuan/index', $data);
    }


    public function create()
    {
        return view('dashboard/temuan/create');
    }

    public function store()
    {
        $temuanModel = new TemuanModel();

        // Ambil data dari permintaan
        $nama_barang = $this->request->getPost('nama_barang');
        $kategori = $this->request->getPost('kategori');
        $tanggal_penemuan = $this->request->getPost('tanggal_penemuan');
        $tempat_penemuan = $this->request->getPost('tempat_penemuan');
        $no_hp = $this->request->getPost('no_hp');

        // Ambil file gambar dari permintaan
        $foto = $this->request->getFile('foto');

        // Validasi file gambar
        if ($foto->isValid() && !$foto->hasMoved()) {
            // Pindahkan file gambar ke direktori yang ditentukan
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/uploads', $newName);

            // Simpan data ke database
            $temuanModel->insert([
                'nama_barang' => $nama_barang,
                'kategori' => $kategori,
                'tanggal_penemuan' => $tanggal_penemuan,
                'tempat_penemuan' => $tempat_penemuan,
                'foto' => $newName,
                'no_hp' => $no_hp,
            ]);

            return redirect()->to('/temuan')->with('success', 'Data temuan berhasil ditambahkan.');
        }

        return redirect()->back()->withInput()->with('error', 'Gagal mengunggah foto atau foto tidak valid.');
    }

    public function edit($id)
    {
        $temuanModel = new TemuanModel();
        $data['temuan'] = $temuanModel->find($id);

        return view('dashboard/temuan/edit', $data);
    }

    public function update($id)
    {
        $temuanModel = new TemuanModel();

        // Ambil data temuan yang akan diupdate
        $temuan = $temuanModel->find($id);

        // Validasi input
        $validation = $this->validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'tanggal_penemuan' => 'required',
            'tempat_penemuan' => 'required',
            'foto' => 'max_size[foto,1024]|is_image[foto]',
            'no_hp' => 'required',
        ]);

        // Cek apakah file foto diunggah atau tidak
        $foto = $this->request->getFile('foto');
        if ($foto->isValid() && !$foto->getError()) {
            // File foto diunggah, simpan foto baru
            $newFotoName = $foto->getRandomName();
            $foto->move('uploads', $newFotoName);

            // Hapus foto lama jika ada
            if ($temuan['foto'] && file_exists('uploads/' . $temuan['foto'])) {
                unlink('uploads/' . $temuan['foto']);
            }

            // Update data temuan dengan foto baru
            $data = [
                'nama_barang' => $this->request->getPost('nama_barang'),
                'kategori' => $this->request->getPost('kategori'),
                'tanggal_penemuan' => $this->request->getPost('tanggal_penemuan'),
                'tempat_penemuan' => $this->request->getPost('tempat_penemuan'),
                'foto' => $newFotoName,
                'no_hp' => $this->request->getPost('no_hp')
            ];
        } else {
            // File foto tidak diunggah, gunakan foto yang ada sebelumnya
            $data = [
                'nama_barang' => $this->request->getPost('nama_barang'),
                'kategori' => $this->request->getPost('kategori'),
                'tanggal_penemuan' => $this->request->getPost('tanggal_penemuan'),
                'tempat_penemuan' => $this->request->getPost('tempat_penemuan'),
                'foto' => $temuan['foto'],
                'no_hp' => $this->request->getPost('no_hp')
            ];
        }

        $temuanModel->update($id, $data);

        // Redirect atau tampilkan pesan sukses
        return redirect()->to('/temuan')->with('success', 'Data temuan berhasil diperbarui.');
    }

    public function delete($id)
    {
        $temuanModel = new TemuanModel();
        $temuanModel->delete($id);

        return redirect()->to('/temuan');
    }
}
