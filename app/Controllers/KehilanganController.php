<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KehilanganModel;

class KehilanganController extends Controller
{
    public function index()
    {
        $model = new KehilanganModel();
        $data['kehilangan'] = $model->findAll();
        return view('dashboard/kehilangan/index', $data);
    }

    public function create()
    {
        return view('dashboard/kehilangan/create');
    }

    public function store()
    {
        $model = new KehilanganModel();

        // Ambil data dari permintaan
        $nama_barang = $this->request->getPost('nama_barang');
        $kategori = $this->request->getPost('kategori');
        $tanggal_kehilangan = $this->request->getPost('tanggal_kehilangan');
        $tempat_kehilangan = $this->request->getPost('tempat_kehilangan');
        $informasi_detail = $this->request->getPost('informasi_detail');

        // Ambil file foto dari permintaan
        $foto = $this->request->getFile('foto');
        $no_hp = $this->request->getPost('no_hp');

        // Validasi file foto
        if ($foto->isValid() && !$foto->hasMoved()) {
            // Pindahkan file foto ke direktori yang ditentukan
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/uploads', $newName);

            // Simpan data ke database
            $model->insert([
                'nama_barang' => $nama_barang,
                'kategori' => $kategori,
                'tanggal_kehilangan' => $tanggal_kehilangan,
                'tempat_kehilangan' => $tempat_kehilangan,
                'informasi_detail' => $informasi_detail,
                'foto' => $newName,
                'no_hp' => $no_hp,
            ]);

            return redirect()->to('/kehilangan')->with('success', 'Data kehilangan berhasil ditambahkan.');
        }

        return redirect()->back()->withInput()->with('error', 'Gagal mengunggah foto atau foto tidak valid.');
    }

    public function edit($id)
    {
        $model = new KehilanganModel();
        $data['kehilangan'] = $model->find($id);
        return view('dashboard/kehilangan/edit', $data);
    }

    public function update($id)
    {
        $model = new KehilanganModel();

        // Ambil data kehilangan yang akan diupdate
        $kehilangan = $model->find($id);

        // Validasi input
        $validation = $this->validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'tanggal_kehilangan' => 'required',
            'tempat_kehilangan' => 'required',
            'informasi_detail' => 'required',
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
            if ($kehilangan['foto'] && file_exists('uploads/' . $kehilangan['foto'])) {
                unlink('uploads/' . $kehilangan['foto']);
            }

            // Update data kehilangan dengan foto baru
            $data = [
                'nama_barang' => $this->request->getPost('nama_barang'),
                'kategori' => $this->request->getPost('kategori'),
                'tanggal_kehilangan' => $this->request->getPost('tanggal_kehilangan'),
                'tempat_kehilangan' => $this->request->getPost('tempat_kehilangan'),
                'informasi_detail' => $this->request->getPost('informasi_detail'),
                'foto' => $newFotoName,
                'no_hp' => $this->request->getPost('no_hp'),
            ];
        } else {
            // File foto tidak diunggah, gunakan foto yang ada sebelumnya
            $data = [
                'nama_barang' => $this->request->getPost('nama_barang'),
                'kategori' => $this->request->getPost('kategori'),
                'tanggal_kehilangan' => $this->request->getPost('tanggal_kehilangan'),
                'tempat_kehilangan' => $this->request->getPost('tempat_kehilangan'),
                'informasi_detail' => $this->request->getPost('informasi_detail'),
                'foto' => $kehilangan['foto'],
                'no_hp' => $this->request->getPost('no_hp'),
            ];
        }

        $model->update($id, $data);

        // Redirect atau tampilkan pesan sukses
        return redirect()->to('/kehilangan')->with('success', 'Data kehilangan berhasil diperbarui.');
    }

    public function delete($id)
    {
        $model = new KehilanganModel();
        $kehilangan = $model->find($id);

        // Hapus foto jika ada
        if ($kehilangan['foto'] && file_exists('uploads/' . $kehilangan['foto'])) {
            unlink('uploads/' . $kehilangan['foto']);
        }

        $model->delete($id);
        return redirect()->to('/kehilangan')->with('success', 'Data kehilangan berhasil dihapus.');
    }
}
