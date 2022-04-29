<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alimento>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->text(20),
            'cod_libro'=>$this->faker->text(20),
            'isbn'=>$this->faker->text(10),
            'titulo'=>$this->faker->text(),
            'annio_publicacion'=>$this->faker->date(10),
            'precio_venta'=>$this->faker->text(10),
            'descripcion'=>$this->faker->text(10),
            
        ];
    }
}
