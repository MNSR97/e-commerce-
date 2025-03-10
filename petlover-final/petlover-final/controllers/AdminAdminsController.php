<?php
require_once 'models/admin.php';
require_once 'controllers/Controller.php';
require_once 'config/Database.php';
class AdminAdminsController extends Controller
{
    // public function getByCategory($role)
    // {
    //     $user = $this->model('user');
    //     $users = $user->where('role', $role);
    //     $this->render('admin.admins.index', [
    //         'pageTitle' => 'Dashboard Admins',
    //         'users' => $users
    //     ]);
    // }
    public function index()
    {
        $admin = $this->model('admin');
        $admins = $admin->all();

        $title = 'admins';
        $this->render('admin.admins.index', [
            'pageTitle' => 'All Admins',
            'admins' => $admins
        ]);
    }


    public function show($id)
    {
        echo "<h1>Showing admin with ID: {$id}</h1>";
    }
    public function create()
    {
        $this->render('admin.admins.create', ['title' => 'Create Admin']);
    }

    public function store()
    {
        // 1. Retrieve data from POST
        $username = $_POST['username'] ?? null;
        $email    = $_POST['email'] ?? null;

        // 2. (Optionally) Validate the data
        $errors = $this->validate([
            'username' => 'required|alphanumeric|min:3',
            'email'    => 'required|email'
        ]);

        // If validation fails, re-render form with errors
        if (!empty($errors)) {
            // In a real app, you might:
            //   - Store errors in session or re-render the form
            //   - For simplicity, we'll just dump them:
            dd($errors);
        }
        $admin = $this->model('admin');
        $admin->create([
            'username' => $username,
            'email'    => $email
        ]);
        $this->redirect('/admins');
    }


    public function edit($id)
    {
        $admin = $this->model('admin');
        $admin = $admin->find($id);
        $this->render('admin.admins.edit', ['admin' => $admin]);
    }

    public function update($id)
    {
        $data = [
            'username' => $_POST['username'] ?? '',
            'email'    => $_POST['email'] ?? ''
        ];

        // Update the admin record
        $adminModel = $this->model('admin'); // "admin" maps to admin.php, extends Model
        $result = $adminModel->update($id, $data);

        if ($result) {
            // Update succeeded
            // Redirect or show a success message
            $this->redirect('/admins');
        } else {
            // Update failed
            echo "Error updating admin with ID: " . htmlspecialchars($id);
        }
    }

    public function destroy($id)
    {
        $admin = $this->model('admin');
        $admin->delete($id);
        $this->redirect('/admins'); {
        }
    }



    


    public function createphp()
    {
        $this->render('admin.admins.create');
    }

    public function editphp()
    {
        $this->render('admin.admins.edit');
    }
    
    public function showphp()
    {
        $this->render('admin.admins.show');
    }

    public function showadmins($role)
    {
        $admin = $this->model('User');
        $admins = $admin->where('role', $role);
        $this->render('admin.admins.index', [
            'pageTitle' => 'Dashboard Admins',
            'admins' => $admins
        ]);
    }
}
