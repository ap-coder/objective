<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
        ]);
        $this->call(ApplicantsTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
    }
}
