<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([
            'name' => 'Damla',
            'role' => 'Developer',
            'email' => 'em1.14@odsol-mail.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$5JEyzaD7ngK5zISWcm9Lq.zKvXHb6ZiFXCGoFBZkYHtPXrrohvWnu',
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory(1)->create([
            'name' => 'Emin',
            'role' => 'Developer',
            'email' => 'em1.16@odsol-mail.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$SLyP0WB63oOe.WVaLnVOJuPnOaZnJ9nvwBy05J2VSFPvtsSZFVvui',
            'remember_token' => Str::random(10),
        ]);
    }
}
