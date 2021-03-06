<?php

namespace Database\Factories;

use App\Models\Familia;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamiliaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Familia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'cpf' => $this->faker->numberBetween(11,11),
            'data_nascimento' => $this->faker->date(),
            'declaracao_autonomo' => $this->faker->file('/tmp',storage_path('app/public/familias/faker'),false),
            'declaracao_agricultor' => $this->faker->file('/tmp',storage_path('app/public/familias/faker'),false),
            'escolaridade' => $this->faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
            'renda_mensal' => $this->faker->randomFloat(2,0,1000000),
            'profissao' => $this->faker->jobTitle(),
            'user_id' => $this->faker->numberBetween(1,20)
        ];
    }
}
