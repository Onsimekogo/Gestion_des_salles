<?php

use Illuminate\Database\Seeder;

class ms3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ms3')->insert([

            ['jours'=>'Lundi',
            'heureMatin1'=>'07h-10h',
            'heureMatin2'=>'10h-11h',
            'heureSoir1'=>'14h-17h',
            'heureSoir2'=>'17h-19h',],

            ['jours'=>'Mardi',
            'heureMatin1'=>'08h-10h',
            'heureMatin2'=>'10h-13h',
            'heureSoir1'=>'15h-17h',
            'heureSoir2'=>'17h-18h',],

            ['jours'=>'Mercredi',
            'heureMatin1'=>'07h-10h',
            'heureMatin2'=>'10h-12h',
            'heureSoir1'=>'',
            'heureSoir2'=>'',],

            ['jours'=>'Jeudi',
            'heureMatin1'=>'08h-10h',
            'heureMatin2'=>'10h-12h',
            'heureSoir1'=>'14h-17h',
            'heureSoir2'=>'17h-18h',],

            ['jours'=>'Vendredi',
            'heureMatin1'=>'',
            'heureMatin2'=>'',
            'heureSoir1'=>'14h-17h',
            'heureSoir2'=>'17h-18h',],

            ['jours'=>'Samedi',
            'heureMatin1'=>'',
            'heureMatin2'=>'',
            'heureSoir1'=>'',
            'heureSoir2'=>'',],
        ]);
    }
}
