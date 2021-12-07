<?php namespace App\Models;

use CodeIgniter\Model;

class Comments extends Model {
    protected $table="komentar";
    protected $allowedFields=[
        "isi", "id_announcement"
    ];
}

?>