<?php

// Login controller

class Login extends Controller
{
    function index()
    {
        $errors = array();

        if (count($_POST) > 0) {
            $user = new User();
            if ($row = $user->where('email', $_POST['email'])) {
                $row = $row[0];
                if (password_verify($_POST['password'], $row->password)) {
                    Auth::authenticate($row);
                    $this->redirect('/profile');
                } else {
                    $errors['password'] = "Wrong Password";
                }
            } else {
                $errors['email'] = "Invalid Email";
            }
        }

        $this->view('login', [
            'errors' => $errors,
        ]);
    }
}
