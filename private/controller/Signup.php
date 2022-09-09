<?php

// Signup controller

class Signup extends Controller
{
    function index()
    {
        $errors = array();
        if(count($_POST) > 0) {
            $user = new User();
            if($user->validate($_POST)) {
<<<<<<< HEAD
                $arr['firstname'] = $_POST['firstname'];
                $arr['lastname'] = $_POST['lastname'];
                $arr['email'] = $_POST['email'];
                // $arr['date'] = date("y-m-d H:i:s");
                $arr['password'] = $_POST['password'];
                $user->insert($arr);
=======
                $user->insert($_POST);
>>>>>>> e583fd4cfbe45fecc94d2649bdd0fd7f30c22376
                $this->redirect('login');
            } else {
                $errors = $user->errors;
            }
        }
        $this->view('signup', [
            'errors' => $errors,
        ]);
    }


}
