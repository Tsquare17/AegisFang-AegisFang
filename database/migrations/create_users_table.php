<?php

use AegisFang\Database\Table\Blueprint;
use AegisFang\Database\Migrations\Migration;

/**
 * Class CreateUsersTable
 */
class CreateUsersTable extends Migration
{
    /**
     * Create the users table.
     *
     * @param Blueprint $blueprint
     * @return Blueprint
     */
    public function table(Blueprint $blueprint): Blueprint
    {
        $blueprint->id('user_id');
        $blueprint->string('user_name');
        $blueprint->string('user_email');
        $blueprint->string('user_password');

        return $blueprint;
    }
}
