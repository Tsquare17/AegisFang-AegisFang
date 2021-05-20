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
        $blueprint->string('user_email')->unique();
        $blueprint->string('user_password');

        $blueprint->int('user_profile_id')
            ->references('user_id')
            ->on('user_profiles');

        return $blueprint;
    }
}
