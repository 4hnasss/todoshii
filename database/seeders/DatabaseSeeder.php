<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        //  $table->string('name')->unique();
        //     $table->text('description')->nullable();
        //     $table->integer('task_limit')->default(0);
        Plan::create([
            'name' => 'Free',
            'description' => 'coba',
            'task_limit' => 8,
            'price' => 8,
        ]);
    }
}
