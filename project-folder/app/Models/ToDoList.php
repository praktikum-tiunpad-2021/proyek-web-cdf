<?php namespace App\Models;

use CodeIgniter\Model;

class ToDoList extends Model {
    protected $table="todolist";
    protected $allowedFields=[
        "isi", "keterangan",
        "status", "npm"
    ];
    protected $useAutoIncrement=true;
}

?>