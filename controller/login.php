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
//        $get_start = $_POST['submit'];

        if(isset($firstname) && isset($lastname) && isset($email) && isset($password)) {
            $this->model->addUser($firstname);
//            if(!$this->model->addUser($firstname)) {
//                throw new Exception('Some errors');
//            }
//
//            try {
//                $this->model->addUser($firstname);
//            } catch (Exception $e) {
//                echo 'Exception: ',  $e->getMessage(), "\n";
//            }

        }

        $this->view->render('login');
    }
}