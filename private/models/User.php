<?php

// User Model

class User extends Model
{
    protected $beforeInsert = [
        'make_username',
        'hash_password'
    ];

    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'password'
    ];

    public function validate($DATA)
    {
        $this->errors = array();
        // Check for firstname
        if (empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed in firstname";
        }

        // Check for lasttname
        if (empty($DATA['email']) || !preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed in lastname";
        }

        // Check for email
        if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }

        // Check for email exist
        if ($this->where('email', $DATA['email'])) {
            $this->errors['email'] = "Email already exist";
        }

        // Check for password
        if (empty($DATA['password']) || $DATA['password'] != $DATA['password2']) {
            $this->errors['password'] = "Password does not match";
        }

        // Check for password length
        if (strlen($DATA['password']) < 4) {
            $this->errors['password'] = "Password must be 4 character";
        }



        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function make_username($data)
    {
        $data['username'] = strtolower($data['firstname']).$this->random_number(3);
        return $data;
    }

    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }

    private function random_number($length) //or arndom string
    {
        $array = array(0,1,2,3,4,5,6,7,8,9);
        $text = "";
        for ($i=0; $i < $length; $i++) { 
            $random = rand(0, 9);
            $text .= $array[$random];
        }
        return $text;   
    }
}
