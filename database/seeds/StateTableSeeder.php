<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/state.json");
        $states = json_decode($json);
        foreach ($states as $state){
            State::create(array(
                              'name' => $state->name,
                              'initials' => $state->initials,
                          ));
        }
    }
}
