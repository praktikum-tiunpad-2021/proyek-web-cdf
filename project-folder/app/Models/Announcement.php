<?php namespace App\Models;

use CodeIgniter\Model;

class Announcement extends Model {
    protected $table="announcement";
    protected $allowedFields=[
        "isi", "tgl_post", "npm"
    ];
    protected $useAutoIncrement=true;
}

?>