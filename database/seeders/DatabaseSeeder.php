<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

use function PHPSTORM_META\map;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Post::factory(10)->create();

        AdminUser::factory(1)->create([
            'name' => 'admin',
            'email' => 'laravel@laravel.com',
            'password' => bcrypt('12345')
        ]);
    }
}
