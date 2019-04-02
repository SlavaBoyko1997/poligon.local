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
        $date = [
            [
                'name'     => 'Автор не известен',
                'email'    => 'avtor.@g.g',
                'password' => bcrypt(str_random(16)),
            ],
            [
                'name'     => 'Автор',
                'email'    => 'avtor2.@g.g',
                'password' => bcrypt('123123'),
            ]
        ];

        DB::table('users')->insert($date);

    }
}
