<?php

// User Model

class User extends Model
{
    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'password'
    ]; 
    protected $beforeInsert = [
        'make_username',
        'hash_passwoerd'
    ];

    public function validate($DATA) {
        $this->errors = array();
        // Check for firstname
        if(empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed in firstname";
        }

        // Check for lasttname
        if(!preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed in lastname";
        }

        // Check for email
        if(empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }

        // Check for password
        if(empty($DATA['password']) || $DATA['password'] != $DATA['password2']) {
            $this->errors['password'] = "Password does not match";
        }

        // Check for password length
        if(strlen($DATA['password']) < 4) {
            $this->errors['password'] = "Password must be 4 character";
        }

        

        if(count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function make_username()
    {
        return $data;
    } 
    
    public function hash_passwoerd()
    {
        return $data;
    }
}