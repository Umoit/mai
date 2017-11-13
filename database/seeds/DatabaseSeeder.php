<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Admin::class,12)->create();
        factory(App\Product::class,100)->create();
        factory(App\Category::class,20)->create();
        factory(App\Brand::class,20)->create();
    }
}
