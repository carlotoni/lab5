<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $data = [
    '1' => ['id'=>'1', 'code' => 'comp4711', 'desc' => 'introduction to internet software development'],
    '2' => ['id'=>'2', 'code' => 'comp4942', 'desc' => 'business plan'],
    '3' => ['id'=>'3', 'code' => 'comp4943', 'desc' => 'ux/ui design'],
    '4' => ['id'=>'4', 'code' => 'comp4735', 'desc' => 'operating systems'],
    '5' => ['id'=>'5', 'code' => 'math3042', 'desc' => 'probability and statistics'],
    '6' => ['id'=>'6', 'code' => 'busa4919', 'desc' => 'pitching and positioning']
    ];

    public function find($id = null)
    {
        return $this->data[$id];
    }

    public function findAll(int $limit = 0, int $offset = 0)
    {
        return $this->data;
    }
}

