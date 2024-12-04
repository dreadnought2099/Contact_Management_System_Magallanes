<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run()
    {
        //10 ka generated accounts
        Contact::factory()->count(10)->create();
    }
}
