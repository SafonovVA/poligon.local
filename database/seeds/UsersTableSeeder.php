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
        $data = [
            [
                'name'      => 'Unknown',
                'email'     => 'unknown@who.com',
                'password'  => bcrypt(Str::random(16))
            ],
            [
                'name'      => 'Author',
                'email'     => 'author@who.com',
                'password'  => bcrypt('123123')
            ]
        ];

        DB::table('users')->insert($data);
    }
}
