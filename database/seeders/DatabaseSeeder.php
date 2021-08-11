<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Point;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(5)->create();
        User::factory(5)->create();

        Point::factory(24)->create();


    }
}
