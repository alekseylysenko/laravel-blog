<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categories')->insert([

            [   'user_id' => '1',
                'name' => 'Laravel',
                'slug' => 'laravel',
                'is_published' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

           [   'user_id' => '1',
               'name' => 'WordPress',
               'slug' => 'wordpress',
               'is_published' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
           ],

           [   'user_id' => '1',
               'name' => 'Python',
               'slug' => 'python',
               'is_published' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
           ],

           [   'user_id' => '1',
               'name' => 'JavaScript',
               'slug' => 'javascript',
               'is_published' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
           ],

           [   'user_id' => '1',
               'name' => 'Django',
               'slug' => 'django',
               'is_published' => '1',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
           ],
       ]);
    }
}
