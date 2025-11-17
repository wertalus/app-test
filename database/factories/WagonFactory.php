<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wagon>
 */
class WagonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    
    public function definition(): array
    { 
        return [
            //

            'status' => $this -> faker -> randomElement(['w naprawie','wstrzymany','KJ']),            
            'wagon_number' => $this -> faker -> regexify('\d{2}[ ]\d{2}[ ]\d{4}[ ]\d{3}[-]\d'),            
            'type' => $this -> faker -> numberBetween(1001,8099),
            'tank_revision' => $this -> faker -> randomElement(['L','P','Psif']),            
            'uf_revision' => $this -> faker -> randomElement(['4.0','4.1','4.2','4.8','4.8+']),          
            'cleaning_status' => $this -> faker -> randomElement(['Oczyszczony','Nieoczyszczony']),       
            'position_on_list' => $this -> faker -> numberBetween(1,10),
            'painting' => $this -> faker -> randomElement(['Malowanie pasa','Malowanie odświeające','']),
            'color_status' =>$this -> faker -> randomElement(['border-warning bg-warning','border-info bg-info','border-success bg-success']),
            //'location' => $this -> faker -> randomElement(['SM2a','SM2','SR2a','SR2','SR3a','SR3','SR4a','SR4','SR5a','SR5','SM1a','SM1'])
            'location' => $this -> faker -> randomElement(['T4','T5','T6','T7','T8','NA','NB','SR9','SR10','SR8','SR7','SR6','SH2','SH3'])
        ];
    }
}

