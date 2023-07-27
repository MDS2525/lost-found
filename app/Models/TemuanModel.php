<?php

namespace App\Models;

use CodeIgniter\Model;

class TemuanModel extends Model
{
    protected $table = 'temuan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_barang', 'kategori', 'tanggal_penemuan', 'tempat_penemuan', 'foto', 'no_hp'];
}
