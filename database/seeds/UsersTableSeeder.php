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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => '$2y$10$aJWMsBLSAbSInMe3jhNGfOrNdifHlZEfZZ0lSHYfxgmGbNJmXjQyO',
        ]);
    }
}
