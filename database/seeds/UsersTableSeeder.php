<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
            'role_id' => '1',
            'name' => 'Azerus.Admin',
            'username' => 'admin',
            'email' => 'kevinm@mybestplace.fr',
            'password' => bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'MBP.Auteur',
            'username' => 'auteur',
            'email' => 'support@mybestplace.fr',
            'password' => bcrypt('rootauthor'),
        ]);
    }
}
