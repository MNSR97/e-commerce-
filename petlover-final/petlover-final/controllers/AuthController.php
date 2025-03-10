<?php 

require_once 'Controller.php';


class AuthController extends Controller
{
    public function index()
    {
        $this->render('auth/login');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $errors = '';
    
        $userModel = $this->model('user');
        $user = $userModel->where('email', $email);
    
        if ($user) {
            // Since $user is an array of results, use the first element.
            if (password_verify($password, $user[0]['password'])) {
                // Store the user data from the first record.
                $_SESSION['user'] = $user[0];
    
                // Check the role from the first record in the result.
                $redirectUrl = ($user[0]['role'] == 'admin') ? '/admins/index/admin' : '/home';
                $this->redirect($redirectUrl);
            } else {
                $errors = 'Invalid email or password';
                $this->render('auth/login', ['errors' => $errors]);
            }
        } else {
            $errors = 'Invalid email or password';
            $this->render('auth/login', ['errors' => $errors]);
        }
    }

    public function singnup()
    {
        $this->render('auth/signup');
    }

    public function register()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];
        $errors = '';
    
        // Validate inputs
        if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
            $errors = 'All fields are required';
            $this->render('auth/signup', ['errors' => $errors]);
            return;
        }
    
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors = 'Invalid email format';
            $this->render('auth/signup', ['errors' => $errors]);
            return;
        }
    
        if ($password !== $confirmPassword) {
            $errors = 'Passwords do not match';
            $this->render('auth/signup', ['errors' => $errors]);
            return;
        }
    
        $userModel = $this->model('user');
       
        
        // Check if the email already exists in the database
        $existingUser = $userModel->where('email', $email);
        if (!empty($existingUser)) {
            $errors = 'Email already exists';
            $this->render('auth/signup', ['errors' => $errors]);
            return;
        }
    
        // Hash the password before saving
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
        // Create new user
        $userModel->create([
            'username' => $name,
            'email' => $email,
            'password' => $hashedPassword
        ]);
    
        $this->render('auth/login', ['success' => 'Registration successful. Please login.']);
    }
    

    public function logout()
    {
        session_destroy();
        $this->redirect('/login');
    }
}