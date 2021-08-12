<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::create([
             'email' => 'davidyants@davidyants.am',
             'password' => Hash::make('12Davidyants21'),
             'name' => 'Davidyants'
         ]);
    }
}
