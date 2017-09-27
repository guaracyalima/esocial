<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/countries.json");
        $states = json_decode($json);
        foreach ($states as $state){
            Country::create(array(
                              'name' => $state->name,
                              'code' => $state->code,
                          ));
        }
    }
}
