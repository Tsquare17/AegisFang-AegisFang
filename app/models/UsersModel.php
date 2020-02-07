<?php

namespace App\Models;

use AegisFang\Database\Query;

class UsersModel
{
    protected Query $query;

    public function __construct(Query $query)
    {
        $this->query = $query;
    }

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
