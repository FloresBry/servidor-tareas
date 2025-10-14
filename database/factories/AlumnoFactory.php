<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->unique()->numerify('A########'),
            'nombre' => $this->faker->name(),
            'correo' => $this->faker->unique()->safeEmail(),
            'fecha_nacimiento' => $this->faker->date(),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino', 'Otro']),
            'carrera' => $this->faker->randomElement(['Ingeniería de Sistemas', 'Medicina', 'Derecho', 'Arquitectura']),
        ];
    }
}
