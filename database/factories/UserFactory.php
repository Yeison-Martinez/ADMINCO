<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Yeison',
            'lastname' => 'Martinez',
            'document_type' => 1,
            'document_number' => 1234,
            'birthdate' => '1997-09-04',
            'cell' => 12345678,
            'address' => 'cll 34 65 78',
            'email' => 'admin@gmail.com',
            'password' => '$2y$12$wGMapr2hcr3zmk9NKpyeY.RfCiPaXuLrDkpx/So5r7IRaxMjx3fa.',
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
