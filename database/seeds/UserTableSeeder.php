<?php

/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 15/11/2015
 * Time: 13:29
 */

use \Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        for($i = 0; $i < 10; ++$i)
        {
            DB::table('users')->insert([
                'name' => 'Nom' . $i,
                'email' => 'email' . $i . '@blop.fr',
                'password' => bcrypt('password' . $i),
                'admin' => rand(0, 1)
            ]);
        }
    }
}