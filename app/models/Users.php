<?php

namespace App\Models;

use AegisFang\Database\Model;

class Users extends Model
{
    public function getUsers()
    {
        return $this->query->select()
            ->from('users')
            ->where('user_id = 1')
            ->execute();
    }

    public function createUser()
    {
        return $this->query->insert(
            ['user_name', 'user_email', 'user_password'],
            ['Tom', 'tom@tommail.com', 'tom_pass']
        )->into('users')->execute();
    }
}
