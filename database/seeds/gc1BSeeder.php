<?php

use Illuminate\Database\Seeder;

class gc1BSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('gc1b')->insert([

            ['jours'=>'Lundi',
            'heureMatin1'=>'09h-10h',
            'heureMatin2'=>'10h-12h',
            'heureSoir1'=>'15h-17h',
            'heureSoir2'=>'17h-19h',],

            ['jours'=>'Mardi',
            'heureMatin1'=>'08h-10h',
            'heureMatin2'=>'10h-12h',
            'heureSoir1'=>'',
            'heureSoir2'=>'',],

            ['jours'=>'Mercredi',
            'heureMatin1'=>'08h-10h',
            'heureMatin2'=>'10h-12h',
            'heureSoir1'=>'',
            'heureSoir2'=>'',],

            ['jours'=>'Jeudi',
            'heureMatin1'=>'08h-10h',
            'heureMatin2'=>'10h-12h',
            'heureSoir1'=>'15h-17h',
            'heureSoir2'=>'17h-19h',],

            ['jours'=>'Vendredi',
            'heureMatin1'=>'08h-10h',
            'heureMatin2'=>'10h-12h',
            'heureSoir1'=>'15h-17h',
            'heureSoir2'=>'17h-19h',],

            ['jours'=>'Samedi',
            'heureMatin1'=>'',
            'heureMatin2'=>'',
            'heureSoir1'=>'',
            'heureSoir2'=>'',],
        ]);
    }
}
