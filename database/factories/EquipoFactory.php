<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombresMaquinariasPesadas = [
            'Excavadora',
            'Cargadora frontal',
            'Bulldozer',
            'Grúa móvil',
            'Rodillo compactador',
            'Camión volquete',
            'Retroexcavadora',
            'Tractor de orugas',
            'Motoniveladora',
            'Compactador de asfalto',
            'Perforadora de pozos',
            'Tractor de ruedas',
            'Dumper articulado',
            'Martillo hidráulico',
            'Manipulador telescópico',
            'Pala hidráulica',
            'Dragalina',
            'Tractor de cadenas',
            'Topadora',
            // Agrega más nombres según sea necesario
        ];

        return [
            'nombre' => $this->faker->randomElement($nombresMaquinariasPesadas),
            'categoria_id' => $this->faker->numberBetween(1, 6),
            'cantidad' => $this->faker->randomNumber(2),
        ];
    }
}
