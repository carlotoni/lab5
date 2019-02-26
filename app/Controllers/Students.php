<?php
namespace App\Controllers;
use App\Models\StudentModel;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class Students extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $model = new StudentModel();

        $std = $model->findAll();

// validation starts here

if (! $this->validate([]))
                {
                        echo view('welcome_message', [
                                'validation' => $this->validation
                        ]);
                }
                else
                {
                        echo view('edit_success');
                }

// validation ends here

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
        <form action="/students/{$id}" method="post">
            First:
            <input placeholder="$first" name="first">
            Last:
            <input placeholder="$last" name="last">
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
      $model = new StudentModel();
      
      $data = [
        'first' => $this->request->getPost('first'),
        'last' => $this->request->getPost('last')
      ];

      $create_id = $model->insert($data, true);
      $resp = $model->find($create_id);

      return $this->respondCreated($resp);
    }

    public function update($id)
    {
      $model = new StudentModel();
      
      $data = [
        'first' => $this->request->getPost('first'),
        'last' => $this->request->getPost('last')
      ];

      $model->update($id, $data);
      $resp = $model->find($id);

      return $this->respond($resp);
    }

    public function delete($id)
    {
        return $this->failUnauthorized('Delete not implemented');
    }
}