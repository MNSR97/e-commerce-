<?php
require_once __DIR__ . "/../models/sign_up.model.php";

class SignUpController {
    private $model;
    private $name;
    private $email;
    private $password;
    private $confirm_password;

    public function __construct() {
        $this->model = new SignupModel();
        
        // Capture form data when form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->name = trim($_POST['name'] ?? '');
            $this->email = trim($_POST['email'] ?? '');
            $this->password = trim($_POST['password'] ?? '');
            $this->confirm_password = trim($_POST['confirm_password'] ?? '');
        }
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->signupUser();
        } else {
            $this->displaySignupForm();
        }
    }

    private function signupUser() {
        // Validate inputs first
        $this->validateInput();

        try {
            // Create user if validation passes
            $this->model->setUser($this->name, $this->email, $this->password);
            $this->redirectWithSuccess();
        } catch (Exception $e) {
            $this->redirectWithError('dberror');
        }
    }

    private function validateInput() {
        $errors = [];
        
        if (!$this->emptyInput()) {
            $errors[] = 'emptyInput';
        }
        if (!$this->invalidEmail()) {
            $errors[] = 'invalidEmail';
        }
        if (!$this->confPassword()) {
            $errors[] = 'not_match_password';
        }
        
        if (!$this->userEmailMatch()) {
            $errors[] = 'userEmailMatch';
        }

        if (!empty($errors)) {
            $this->redirectWithError($errors[0]);
        }
    }

    private function displaySignupForm() {
        require_once __DIR__ . "/../views/public/auth/sign_up.view.php";
    }

    private function redirectWithError($error) {
        $baseUrl = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
        $baseUrl = rtrim($baseUrl, '/\\');
        header("Location: $baseUrl/sign_up.php?error=" . urlencode($error));
        exit();
    }

    private function redirectWithSuccess() {
        $baseUrl = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
        $baseUrl = rtrim($baseUrl, '/\\');
        header("Location: $baseUrl/sign_in.php?signup=success");
        exit();
    }

    private function emptyInput() {
        return !(empty($this->name) || empty($this->email) || empty($this->password));
    }

    private function invalidEmail() {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }

    private function confPassword() {
        return $this->password === $this->confirm_password;
    }

    private function userEmailMatch() {
        return $this->name !== $this->email;
    }

    public function index() {
        require_once __DIR__ . '/../views/public/auth/sign_up.view.php';
    }
}

// Instantiate and handle request
$signupController = new SignUpController();
$signupController->handleRequest();