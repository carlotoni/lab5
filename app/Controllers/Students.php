<?php
namespace App\Controllers;
use App\Models\StudentModel;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class Students extends controller
{
    use ResponseTrait;

    public function index()
    {
        $model = new StudentModel();

        $std = $model->findAll();

        return $this->respond($std, 200);
    }

    public function new()
    {
        return $this->failUnauthorized('New not implemented');
    }

    public function edit($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM student WHERE id=$id");
        $results = $query->getResult();
        $first = NULL;
        $last = NULL;
        foreach ($results as $row)
        {
            $first = $row->first;
            $last = $row->last;
        }

        return <<<HTML
    <html>
    <body>
        <h1>Student $id</h1>
        <form>
            First:
            <input placeholder="$first">
            Last:
            <input placeholder="$last">
            <button type="submit">Update</button>
        </form>
    </body>
    </html>
HTML;
//        return $this->failUnauthorized('Edit not implemented');
    }

    public function show($id)
    {
        $model = new StudentModel();
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