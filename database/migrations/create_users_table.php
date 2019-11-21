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
     *
     * @return Blueprint
     */
    public function table(Blueprint $blueprint): Blueprint
    {
        $blueprint->int('id');
        $blueprint->string('name');
        $blueprint->string('email');
        $blueprint->string('password');

        return $blueprint;
    }
}
