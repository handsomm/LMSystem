<?php

// Students controller

class Students extends Controller
{
    function index($id = '')
    {
        $this->view('students');
    }


}
