<?php

// User Model

class User extends Model
{
    public function validate($DATA) {
        $this->errors = array();
        // Check for firstname
        if(empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed";
        }

        // Check for lasttname
        if(!preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed";
        }

        // Check for email
        if(empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }

        // Check for password
        if(empty($DATA['password']) || $DATA['password'] != $DATA['password2']) {
            $this->errors['password'] = "Password does not match";
        }


        if(count($this->errors) == 0) {
            return true;
        }
        return false;
    }
}