@extends('layouts.master')

@section('content')

<div class="container" style = "padding-top:100px;">
    <h1>Liste des salles</h1>
    <p>Découvrez sur cette page les pages que dispose l'INSTI pour permettre à ses étudiants de suivre les cours dans de bonnes conditions.
        Celles-ci sont régroupées dans des bâtiments
    </p>
    <div>
        <h2>Bâtiment A</h2>
        <div class="row">
            <img src="assets/img/UACBatiment.png" alt="Batiment A" class="col-lg-6 col-md-12 col-sm-12 ">
           <div class=" col-lg-6 col-md-10 col-sm-10">
                <p>Les salles de classe du bâtiment.</p>
                <ul >
                    <li ><a href="#">A1</a> </li>
                    <li ><a href="#">A2</a> </li>
                    <li ><a href="#">A3</a> </li>
                    <li ><a href="#">A4</a> </li>
                    <li ><a href="#">A5</a> </li>
                    <li ><a href="#">A6</a> </li>
                </ul>
           </div>
            

        </div>
       
    </div>

    <h2>Bâtiment B</h2>
    <div class="row">
       
       <div class="col-lg-6 col-md-10 col-sm-10">
            <p>Les salles de classe du bâtiment.</p>
            <ul class="col-lg-6 col-md-10 col-sm-10">
                <li ><a href="#">B1</a> </li>
                <li ><a href="#">B2</a> </li>
                <li ><a href="#">B3</a> </li>
                <li ><a href="#">B4</a> </li>
                <li ><a href="#">B5</a> </li>
                <li ><a href="#">B6</a> </li>
            </ul>
       </div>
        
        <img src="assets/img/IMG-20201223-WA0012.jpg" alt="Batiment B" class="col-lg-6 col-md-12 col-sm-12 ">
    </div>

    <h2>Bâtiment C</h2>
    <div class="row" >

        <img src="assets/img/IMG-20201223-WA0009.jpg" alt="Batiment C" class="col-lg-6 col-md-12 col-sm-12 ">
        <ul class=" col-lg-6 col-md-10 col-sm-10">
            <li ><a href="#">C1</a> </li>
            <li ><a href="#">C2</a> </li>
            <li ><a href="#">C3</a> </li>
            <li ><a href="#">C4</a> </li>
            <li ><a href="#">C5</a> </li>
            <li ><a href="#">C6</a> </li>
        </ul>
    </div>

    <div class="row">
        <h2>Bâtiment D</h2>
        
        <ul class=" col-lg-6 col-md-10 col-sm-10">
            <li ><a href="#">D1</a> </li>
            <li ><a href="#">D2</a> </li>
            <li ><a href="#">D3</a> </li>
            <li ><a href="#">D4</a> </li>
            <li ><a href="#">D5</a> </li>
            <li ><a href="#">D6</a> </li>
        </ul>
        <img src="assets/img/mac.png" alt="Batiment D" class="col-lg-6 col-md-12 col-sm-12 ">
    </div>

   
    

</div>

 
@endsection

