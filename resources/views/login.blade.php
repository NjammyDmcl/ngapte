@extends('layouts.app')
@section('home')


<section style="background-image: url('images/undraw_book_lover_mkck.svg');background-repeat: no-repeat; background-size: auto; background-size:  100% 100%;" class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img p-4" id="section-counter">
    <div class="container login-container">
        <div class="row m-1">
            <div style="background-color: white" id="getLogin" class="col-md-6 login-form-1">
                <h3 class="logCon">Connectez vous</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Votre telephone *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Votre mot de passe *" value="" />
                    </div>
                    <div class="form-group row">
                        <input style="background-color: white; border: 0px solid white;color:#0062cc; font-weight: bold" type="submit" class="py-3 px-4 col-md-6 my-auto mb-3" value="Connexion" />
                        <div style="text-align: center" class="col-md-6 my-auto mx-auto mt-3">
                            <a href="#" class="ForgetPwd">Mot de passe Oublie?</a>
                        </div>
                    </div>
                    <div style="text-align: center" class="form-group">
                        <a href="#" onclick="hideLogin()" id="clickCreate" class="ForgetPwd">Creer un compte</a>
                    </div>
                </form>
            </div>
            <div  style="background-color: white" id="getSignin" class="col-md-6 login-form-1 showlog">
                <h3>Creer un compte</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Votre nom complet *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Votre telephone *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Votre mot de passe *" value="" />
                    </div>
                    <div class="form-group row">
                        <input style="background-color: white; border: 0px solid white;color:#0062cc; font-weight: bold" type="submit" class="py-3 px-4 col-md-6 my-auto mb-3" value="Creer" />
                        <div style="text-align: center" class="col-md-6 my-auto mx-auto mt-3">
                            <a href="#" onclick="hideSignin()" id="clickSign" class="ForgetPwd">Se connecter</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
	
@endsection