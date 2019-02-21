<?php
namespace App\Controllers;
use App\Models\CourseModel;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class Courses extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $model = new CourseModel();

        $std = $model->findAll();

        return $this->respond($std, 200);
    }

    public function new()
    {
        return $this->failUnauthorized('New not implemented');
    }

    public function edit($id)
    {
        return $this->failUnauthorized('Edit not implemented');
    }

    public function show($id)
    {
        $model = new CourseModel();
        $std = $model->find($id);

        return $this->respond($std, 200);
    }

    public function create()
    {
        return $this->failUnauthorized('Create not implemented');
    }

    public function update($id)
    {
        return $this->failUnauthorized('Update not implemented');
    }

    public function delete($id)
    {
        return $this->failUnauthorized('Delete not implemented');
    }
}