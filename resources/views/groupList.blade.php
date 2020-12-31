@extends('layouts.master')

<style>
    .souligner{
        border-bottom: 2px solid #78DF;  
        display: inline-block;
        width: 87%; 
        margin-top: 5px;
        margin-left:37px;
        
    }
    .separateur{
        border-bottom: 2px solid #658F;

    } 
    li a {
        color:black;
        
            
    }
    li a .hover{
        color:blue;
        text-decoration:underline;
            
    }
    ul li{
        font-size:25px;
    }
    .signification{
        font-size:20px;
    }
    ul{
        list-style-type: none;
    }
    h1{
        text-align:center;
    }
</style>    


@section('content')
    <div class="container" style ="padding-top:100px;">

        <h1>Les groupes pédagogiques</h1>
        
        <ul>
             
             
            
            <ul class="row">
                <li class="col-lg-4">GEI1A</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">GEI1B</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">GEI2/EE</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">GEI2/IT</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">GEI3/EE</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row" >
                <li class="col-lg-4">GEI3/IT</li>
                <li class="col-lg-offset-5 col-lg-2"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner separateur"></div>


            <ul class="row">
                <li class="col-lg-4">ER1</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">ER2</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">ER3</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner separateur"></div>


            <ul class="row">
                <li class="col-lg-4">GMP1</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>

            <ul class="row">
                <li class="col-lg-4">GMP2</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">GMP3</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner separateur"></div>
            <ul class="row">
                <li class="col-lg-4">GC1A</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>

            <ul class="row">
                <li class="col-lg-4">GC1B</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">GC1C</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">GC2A</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">GC2B</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">GC2C</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">GC3A</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>

            <ul class="row">
                <li class="col-lg-4">GC3B</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul><div class="souligner"></div>
            <ul class="row">
                <li class="col-lg-4">GC3C</li>
                <li class="col-lg-offset-5 col-lg-3"><a href="#">Télécharger</a> </li>
            </ul>
            
        </ul>

        <div>
            <h2>Note:</h2>
            <p class="signification">GC: Génie Civil</p>
            <p class="signification">ER: Energie Renouvelable</p>
            <p class="signification">GMP: Génie Mécanique et Productique</p>
            <p class="signification">GEI: Génie Electrique et Informatique</p>
            <p class="signification">EE:  Electronique et Electrotechnique </p> 
            <p class="signification">IT: Informatique et Télécommunications</p>  
            
        </div>
    
    </div>



@endsection