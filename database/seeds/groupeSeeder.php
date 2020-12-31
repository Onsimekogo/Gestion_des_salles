<?php

use Illuminate\Database\Seeder;

class groupeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group')->insert([

            ['nomGroupe' => 'GEI1A',],
            ['nomGroupe' => 'GEI1B',],

            ['nomGroupe' => 'GEI2/EE',],
            ['nomGroupe' => 'GEI2/IT',],

            ['nomGroupe' => 'GEI3/EE',],
            ['nomGroupe' => 'GEI3/IT',],

            ['nomGroupe' => 'GC1A',],
            ['nomGroupe' => 'GC1B',],
            ['nomGroupe' => 'GC1C',],
            

            ['nomGroupe' => 'GC2A',],
            ['nomGroupe' => 'GC2B',],
            ['nomGroupe' => 'GC2C',],

            ['nomGroupe' => 'GC3A',],
            ['nomGroupe' => 'GC3B',],
            ['nomGroupe' => 'GC3C',],

            ['nomGroupe' => 'GMP1',],
            ['nomGroupe' => 'GMP2',],
            ['nomGroupe' => 'GMP3',],

            ['nomGroupe' => 'ER1',],
            ['nomGroupe' => 'ER2',],
            ['nomGroupe' => 'ER3',],
            
            ['nomGroupe' => 'MS1',],
            ['nomGroupe' => 'MS2',],
            ['nomGroupe' => 'MS3',],
        ]);
    }
}
