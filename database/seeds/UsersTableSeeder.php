<?php

use Carbon\Carbon;
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

            [
                'name' => 'Alex',
                'email' => 'lysenko-a@mail.ru',
                'password' => bcrypt('Gromozeka1'),
                'isAdmin' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Lesha34',
                'email' => 'alsochi22@gmail.ru',
                'password' => bcrypt('Gromozeka1'),
                'isAdmin' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
