<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    public function find($id = null)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM courses WHERE id=$id");
        $results = $query->getResult();
        return $results;
    }

    public function findAll(int $limit = 0, int $offset = 0)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM student");
        $results = $query->getResult();
        return $results;
    }
}

