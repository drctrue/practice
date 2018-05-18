<?php
class Login extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index() {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        if(isset($firstname) && isset($lastname) && isset($email) && isset($password)) {

            if(!$this->model->addUser($firstname, $lastname, $email, $password)) {
                throw new Exception('Some errors');
            }
        }

        $this->view->render('login');
    }
}