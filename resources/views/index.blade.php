@extends('layouts.master')

@section('header')

<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">GESTION DES SALLES</h1>
			</div>
		</div>
</header>

@endsection

@section('content')

<div class="bodyDiv">
		<div class="insti"> <span class="P">I</span><span class="D">N</span><span class="i">S</span><span class="C">TI</span> </div>
		<div class="Pinsti">
			<p> Vous pouvez consulter sur ce site les salles disponibles que vous pourrez occuper pour dérouler vos cours.</p>
		</div>
		<div class="container " style="padding-bottom:70px;" >
			<section class="row">
				<img src="assets/img/IMG-20201223-WA0000.jpg" class="col-lg-6 col-md-12 col-sm-12"> <!--  urn_aaid_sc_US_7b6d72e5-dd48-40ec-b08c-c0814d5a3a62 (3).png -->
				<div class="col-lg-6 col-md-12 col-sm-12 gestion" >
					<h3> BIBLIOTHEQUE</h3>
					<p>La pratique, decouvrez le mécanisme caché derrière dans des livres.Des livres vous sont fournis ici pour approfondir vos connaissances dans tous les domaines.</p>
				</div>
			</section>

			<section class="row gestionInverse">
				
				 <img src="assets/img/IMG-20201223-WA0003.jpg " class="col-lg-6 col-md-12 col-sm-12">  <!-- urn_aaid_sc_US_7b6d72e5-dd48-40ec-b08c-c0814d5a3a62 (2).png -->

				<div class="col-lg-6 col-md-12 col-sm-12 gestion " >
					<h3>SALLES DE LECTURE</h3>
					<p>Installez vous ici pour baigner dans l'univers des connaissances. Mettez-vous à l'aise pour acquérir de nouvelles connaissances dans vos livre pris depuis la bibliothèque. </p>
				</div>
			</section>

			<section class="row">
				 <!-- urn_aaid_sc_US_7b6d72e5-dd48-40ec-b08c-c0814d5a3a62 (1).png -->
				
				<img src="assets/img/IMG-20201223-WA0004.jpg" class="col-lg-6 col-md-12 col-sm-12">
				<div class="col-lg-6 col-md-12 col-sm-12 gestion" >	
					<h3>SALLE D'INFORMATIQUE</h3>
					<p>L'outils informatique, le coeur des système d'information de nos jours. Que serait une école de technologie sans l'informatique ? Decouvrez l'univers du numérique dans cette salle.  </p>
				</div>
				
			</section>
			<section class="row gestionInverse" >
				<!-- urn_aaid_sc_US_7b6d72e5-dd48-40ec-b08c-c0814d5a3a62.png -->
				<img src="assets/img/IMG-20201223-WA0007.jpg " class="col-lg-6 col-md-12 col-sm-12 " >	
				<div class="col-lg-6 col-md-12 col-sm-12 gestion">
					<h3>LABO DE CHIMIE</h3>
					<p>Qu'est ce que c'est bon de joindre la pratique à la théorie! Le labo pour faire des expériences après une partie de cours théorique.</p>
				</div>
			</section>
		</div>	
		
	</div>


@endsection