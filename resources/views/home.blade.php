@extends('layouts.app')
@section('home')

<section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container-fluid px-0 mt-5 mb-0">
      	<div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
	      	<img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="images/undraw_book_lover_mkck.svg" alt="">
	        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
	        	<div class="text mt-5">
		  				<h2>Partager une fois, Partager pour toujours !</h2>
		  				<p>
                Vous avez besoin d'une épreuve, ou d'un travaux dirrigés ?
                Nous vous donnons la possibilité de consulter notre banque de document, 
                <span style="font-weight: bold"> 
                  gratuitement et sans créer un compte,
                </span> ou d'y contribuer pour aider les autres.
              </p>
		  				<p><a href="" class="btn btn-primary py-3 px-4">Commencer <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
	          </div>
	        </div>
	    	</div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    	<div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Nos Chiffres</h2>
          </div>
        </div>
				<div class="row d-md-flex align-items-center align-items-stretch">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 bg-light">
              <div class="text">
                <strong class="number" data-number="8">0</strong>
                <span>Salle de classe</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 bg-light">
              <div class="text">
                <strong class="number" data-number="4">0</strong>
                <span>Promotions</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 bg-light">
              <div class="text">
                <strong class="number" data-number="34">0</strong>
                <span>Documents Contribués</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 bg-light">
              <div class="text">
                <strong class="number" data-number="3">0</strong>
                <span>Communauté</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Les classes ayant le plus de contribution</h2>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div style="background-color: white" class="align-self-stretch box text-center p-4 bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<img src="https://img.icons8.com/nolan/64/conference-call.png"/>
          		</div>
          		<div>
	          		<h3 class="mb-4">3iL 4</h3>
		            <p>19 Promotions</br>7 Documents contribués</p>
		          </div>
	          </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div style="background-color: white" class="align-self-stretch box text-center p-4 bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<img src="https://img.icons8.com/nolan/64/conference-call.png"/>
          		</div>
          		<div>
	          		<h3 class="mb-4">CS2i 3 </h3>
		            <p>7 Promotions</br>21 Documents contribués</p>
		          </div>
	          </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div style="background-color: white" class="align-self-stretch box text-center p-4 bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<img src="https://img.icons8.com/nolan/64/conference-call.png"/>
          		</div>
          		<div>
	          		<h3 class="mb-4">3iL 3</h3>
		            <p>13 Promotions</br>90 Documents contribués</p>
		          </div>
	          </div>
          </div>


          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div style="background-color: white" class="align-self-stretch box text-center p-4 bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<img src="https://img.icons8.com/nolan/64/conference-call.png"/>
          		</div>
          		<div>
	          		<h3 class="mb-4">ENSTIN 2</h3>
		            <p>8 Promotions</br>3 Documents contribués</p>
		          </div>
	          </div>
          </div>
        </div>
    </section>
	
@endsection