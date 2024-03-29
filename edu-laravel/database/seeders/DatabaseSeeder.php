<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\CategorySeeder; // 시더 use

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 초기 데이터 삽입용 시더 호출
        $this->call(CategorySeeder::class);

        // \App\Models\User::factory(10)->create();

        // 더미 데이터  삽입용 팩토리 호출
        // \App\Models\Board::factory(100)->create();
        // \App\Models\Category::factory(100)->create();
    }
}


