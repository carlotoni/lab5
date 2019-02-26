<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{

  protected $table = 'student';
  protected $primaryKey = 'id';
  protected $allowedFields = ['first', 'last'];

    // public function find($id = null)
    // {
    //     $db = \Config\Database::connect();
    //     $query = $db->query("SELECT * FROM student WHERE id=$id");
    //     $results = $query->getResult();
    //     return $results;
    // }

    // public function findAll(int $limit = 0, int $offset = 0)
    // {
    //     $db = \Config\Database::connect();
    //     $query = $db->query("SELECT * FROM student");
    //     $results = $query->getResult();
    //     return $results;
    // }
}

