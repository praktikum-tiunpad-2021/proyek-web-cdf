<?php namespace App\Models;

use CodeIgniter\Model;

class Calendar extends Model {
    protected $table="calendar";
    protected $allowedFields=[
        "isi", "tanggal", "npm"
    ];
}

?>