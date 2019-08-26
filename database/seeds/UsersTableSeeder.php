<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Admin',
            'email' => 'ecommerce@admin.com',
            'admin' => 1,
            'password' => bcrypt('admin')
        ]);
    }
}
