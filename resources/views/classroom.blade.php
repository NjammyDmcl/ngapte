@extends('layouts.app')
@section('home')

    <section class="my-auto">
        <div class="container mb-5">
            <div class=" mt-5 mb-5 text-center display-4" style="color:white">Nos Classes</div>
            <div class="container h-100 mb-3">
                <div class="text-muted mt-5 mb-5 text-center display-4 mr-3">Nos Classes</div></br>
                <div class="d-flex justify-content-end h-100">
                    <div class="searchbar">
                        <input class="search_input" type="text" name="" placeholder="Chercher une classe...">
                        <a href="#" class="search_icon"><i class="fas fa-search "></i></a>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                @foreach ($classroom as $item)
                    <a href="" class="col-xs-6 col-sm-6 col-md-3 col-lg-3 p-2">
                        <div class="card p-3 shadow text-center border-0">
                            <div class="card-body">
                                <img src="https://img.icons8.com/nolan/64/google-classroom.png"/>                        <hr/>
                                <h2 class="card-title display-1" style="font-size:3.0vmin;"> {{$item['name']}} </h2>  <hr/>
                                <span style="color: black;" class="pr-5"><img width="25px" height="25px" src="https://img.icons8.com/nolan/64/documents.png"/> {{$item['member']}} </span>
                                <span style="color: black;" class=""><img width="30px" height="30px" src="https://img.icons8.com/nolan/64/conference-call.png"/> {{$item['document']}} </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

	
@endsection