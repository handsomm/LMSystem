<?php

// Profile controller

class Profile extends Controller
{
    function index()
    {
        $db = new Database();
        $data = $db->query("select * from users");
        $this->view('profile',['rows' => $data]);
    }
}
