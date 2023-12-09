<?php

namespace Database\Seeders;

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
        // new user admin
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
        ]);

        $this->call(PortfolioSeeder::class);
    }
}
