<?php

use AegisFang\Database\Table\Blueprint;
use AegisFang\Database\Migrations\Migration;

/**
 * Class CreateUserProfilesTable
 */
class CreateUserProfilesTable extends Migration
{
    /**
     * Create the user_profiles table.
     *
     * @param Blueprint $blueprint
     *
     * @return Blueprint
     */
    public function table(Blueprint $blueprint): Blueprint
    {
        $blueprint->id('user_profile_id');
        $blueprint->string('user_profile_first_name');
        $blueprint->string('user_profile_last_name');

        return $blueprint;
    }
}
