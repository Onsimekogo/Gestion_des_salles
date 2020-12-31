@extends('layouts.master')
<style>
    table {
        border-collapse : collapse;
    }
    td, th {
        border : 1px solid black;
    }

</style>


@section('content')

<h1>Occupation des salles</h1>

<table>
    <caption>Salle A1</caption>
    <tr>
        <th>Jours</th>
        <th>Heures
            <tr>
                <td> </td>
                <td>08h-10h</td>
                <td>10h-12h</td>
                <td>14h-17h</td>
                <td>17h-19h</td>
            </tr>
        </th>
    </tr>
    <tr>
        <td>Lundi</td>
        <td> Occupé</td> 
        <td> Occupé</td>
        <td> Occupé</td>
        <td> Occupé</td>
    </tr>
    <tr>
        <td>Mardi</td>
        <td> Occupé</td> 
        <td> Occupé</td>
        <td> Libre</td>
        <td> Libre</td>
    </tr>
    <tr>
        <td>Mercredi</td>
        <td> Libre</td> 
        <td> Libre</td>
        <td> Occupé</td>
        <td> Occupé</td>
    </tr>
    <tr>
        <td>Jeudi</td>
        <td> Occupé</td> 
        <td> Occupé</td>
        <td> Occupé</td>
        <td> Occupé</td>
    </tr>
    <tr>
        <td>Vendredi</td>
        <td> Occupé</td> 
        <td> Occupé</td>
        <td> Occupé</td>
        <td> Occupé</td>
    </tr>
    <tr>
        <td>Samedi</td>
        <td> Occupé</td> 
        <td> Occupé</td>
        <td> Occupé</td>
        <td> Occupé</td>
    </tr>
     
    
</table>


<?php
    $emploiGei3IT = DB::table('emploigei3it')->pluck('heureMatin1');
    
   

    echo $emploiGei3IT;



?>

@endsection