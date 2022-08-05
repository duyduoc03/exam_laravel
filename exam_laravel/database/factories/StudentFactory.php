<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' =>$this->faker->randomFloat(0,1,99999),
            'name'=>$this->faker->firstName,
            'age'=>$this->faker->randomFloat(0,1,150),
            'address'=>$this->faker->randomElement(array('ha noi','tp ho chi minh','da nang','sai gon','bac giang','bac ninh')),
            'telephone'=>'0'.$this->faker->randomFloat(0,100000000,999999999)
        ];
    }
}
