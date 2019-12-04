<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        customers::truncate();

        $faker = \Faker\Factory::create();


        customers::create([
            'user_id' => '1',
            'name' => 'Administrator',
            'nic' => '123456789V',
            'address' => 'Colombo',
            'telephone1' =>  '0987654321',
            'telephone2' =>  '0987654321',
            'telephone3' =>  '0987654321',
            'telephone4' =>  '0987654321',
        ]);

        
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'user_id' =>$faker->id,
                'name' => $faker->name,
                'nic' => $faker->nice,
                'address' => $faker->address,
            'telephone1' =>  $faker->telephone,
            'telephone2' =>  $faker->telephone,
            'telephone3' =>  $faker->telephone,
            'telephone4' =>  $faker->telephone
            ]);
        }
    }
}
