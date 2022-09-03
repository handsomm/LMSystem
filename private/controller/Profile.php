<?php

// Profile controller

class Profile extends Controller
{
    function index()
    {
        
        $user = $this->loadModel('User');
        $data = $user->findAll();
        $this->view('profile',['rows' => $data]);
    }
}
