<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Type;
use App\Models\Posting;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Type::truncate();
        Posting::truncate();
        Department::truncate();
       
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Department::factory()->count(4)->create();
        Posting::factory()->count(4)->create();


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
