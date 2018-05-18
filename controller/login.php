<?php
class Login extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index() {

        $firstname = $this->sanitize($_POST['firstname']);
        $lastname = $this->sanitize($_POST['lastname']);
        $email = $this->sanitize($_POST['email']);
        $password = md5($_POST['password']);

        if(isset($firstname) && isset($lastname) && isset($email) && isset($password)) {

            if(! $this->model->isExistEmail($email)) {
                if(!$this->model->addUser($firstname, $lastname, $email, $password)) {
                    throw new Exception('Some errors');
                }
            } else {
                echo 'Error email';
            }

        }

        $this->view->render('login');
    }

    public function sanitize($var) {
        $var = stripcslashes($var);
        $var = strip_tags($var);
        return $var;
    }
}