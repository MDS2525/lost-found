<?php

namespace App\Models;

use CodeIgniter\Model;

class KehilanganModel extends Model
{
    protected $table = 'kehilangan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_barang', 'kategori', 'tanggal_kehilangan', 'tempat_kehilangan', 'informasi_detail', 'foto', 'no_hp'];
}
