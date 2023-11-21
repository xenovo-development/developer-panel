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
        \App\Models\User::factory(1)->create([
            'name' => 'Gökay',
            'role' => 'Admin',
            'email' => 'em1.2@odsol-mail.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$DmFtaXV3q4ASmdwlGAj28ORYiv/AE8Ffj5zHyqGzYz17P6biK.bvS',
            'remember_token' => Str::random(10),

        ]);
        \App\Models\User::factory(1)->create([
            'name' => 'Stefan',
            'role' => 'Admin',
            'email' => 'admin@xenovo.com.tr',
            'email_verified_at' => now(),
            'password' => '$2a$12$DmFtaXV3q4ASmdwlGAj28ORYiv/AE8Ffj5zHyqGzYz17P6biK.bvS',
            'remember_token' => Str::random(10),

        ]);
        \App\Models\User::factory(1)->create([
            'name' => 'Şeyda',
            'role' => 'Staff',
            'email' => 'em1.6@odsol-mail.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$DmFtaXV3q4ASmdwlGAj28ORYiv/AE8Ffj5zHyqGzYz17P6biK.bvS',
            'remember_token' => Str::random(10),

        ]);
        \App\Models\User::factory(1)->create([
            'name' => 'Batuhan',
            'role' => 'Staff',
            'email' => 'em1.7@odsol-mail.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$DmFtaXV3q4ASmdwlGAj28ORYiv/AE8Ffj5zHyqGzYz17P6biK.bvS',
            'remember_token' => Str::random(10),

        ]);
        \App\Models\User::factory(1)->create([
            'name' => 'Enes',
            'role' => 'Staff',
            'email' => 'em1.12@odsol-mail.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$DmFtaXV3q4ASmdwlGAj28ORYiv/AE8Ffj5zHyqGzYz17P6biK.bvS',
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory(1)->create([
            'name' => 'Mihrimah',
            'role' => 'Staff',
            'email' => 'em1.3@odsol-mail.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$DmFtaXV3q4ASmdwlGAj28ORYiv/AE8Ffj5zHyqGzYz17P6biK.bvS',
            'remember_token' => Str::random(10),

        ]);
    }
}
