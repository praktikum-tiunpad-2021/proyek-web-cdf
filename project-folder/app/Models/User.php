<?php namespace App\Models;

use CodeIgniter\Model;

class User extends Model {
    protected $table="user";
    protected $primaryKey="npm";
    protected $allowedFields=['nama', 'kelas', 'tgl_lahir', 'alamat', 'kontak', 'foto'];
}

?>