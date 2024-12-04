<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks, truncate table, and re-enable checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Insert the first user
        User::firstOrCreate([
            'email' => 'test@example.com',
        ], [
            'name' => 'Test User',
            'password' => bcrypt('password'),
        ]);

        // Insert the second user
        User::firstOrCreate([
            'email' => 'second@example.com',
        ], [
            'name' => 'Second User',
            'password' => bcrypt('password123'),
        ]);

        $this->call(ContactSeeder::class);
    }
}
