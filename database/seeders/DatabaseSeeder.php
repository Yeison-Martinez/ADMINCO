<?php

namespace Database\Seeders;

use App\Models\Role;
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
        User::factory()->create();
        Role::factory()->create();

        // User::factory()->create([
        //     'name' => 'Yeison',
        //     'lastname' => 'Martinez',
        //     'document_type' => 1,
        //     'document_number' => 1234,
        //     'birthdate' => '1997-09-04',
        //     'cell' => 12345678,
        //     'address' => 'cll 34 65 78',
        //     'email' => 'admin@gmail.com',
        //     'password' => '$2y$12$wGMapr2hcr3zmk9NKpyeY.RfCiPaXuLrDkpx/So5r7IRaxMjx3fa.',
        //     'updated_at' => '2024-07-27 16:15:34',
        //     'created_at' => '2024-07-27 16:15:34',
        // ]);
    }
}
