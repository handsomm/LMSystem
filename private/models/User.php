<?php

// User Model

class User extends Model
{
    public function validate($DATA) {
        $this->errors = array();
        // Check for firstname
        if(!preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed";
        }

        // Check for lasttname
        if(!preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed";
        }

        // Check for email
        if($DATA['password']) {
            $this->errors['email'] = "Password does not match";
        }

        // Check for password
        if($DATA['password'] != $DATA['password2']) {
            $this->errors['password'] = "Password does not match";
        }


        if(count($this->errors) == 0) {
            return true;
        }
        return false;
    }
}