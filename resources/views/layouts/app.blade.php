<!DOCTYPE html>
<html lang="en">
  <head>
    <title>meNgaptè | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      .login-container{
          margin-top: 10%;
          margin-bottom: 5%;
      }
      .login-form-1{
          padding-top: 6%;
          box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
      }
      .login-form-1 h3{
          text-align: center;
          color: #333;
      }
      .login-form-2{
          padding: 5%;
          background: #0062cc;
          box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
      }
      .login-form-2 h3{
          text-align: center;
          color: #fff;
      }
      .login-container form{
          padding: 10%;
      }
      .btnSubmit
      {
          width: 50%;
          border-radius: 1rem;
          padding: 1.5%;
          border: none;
          cursor: pointer;
      }
      .login-form-1 .btnSubmit{
          font-weight: 600;
          color: #fff;
          background-color: #0062cc;
      }
      .login-form-2 .btnSubmit{
          font-weight: 600;
          color: #0062cc;
          background-color: #fff;
      }
      .login-form-2 .ForgetPwd{
          color: #fff;
          font-weight: 600;
          text-decoration: none;
      }
      .login-form-1 .ForgetPwd{
          color: #0062cc;
          font-weight: 600;
          text-decoration: none;
      }
      ::placeholder{
        color: white;
      }
      .searchbar{
      margin-bottom: auto;
      margin-top: auto;
      height: 60px;
      background-color: #6c757d ;
      border-radius: 30px;
      padding: 10px;
      }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 300px;
    caret-color:white;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #6c757d ;
    }
    .pagination>li>a { border-radius: 50% !important;margin: 0 5px;}
    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }
    </style>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="/">meNgaptè<span style="color: black">.</span></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars fa-2x text-white" aria-hidden="true"></i>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav nav ml-auto">
            <li class="nav-item"><a href="/" class="nav-link"><span>Accueil</span></a></li>
            <li class="nav-item"><a href="/login" class="nav-link"><span>Compte</span></a></li>
            <li class="nav-item"><a href="/classroom" class="nav-link"><span>Classe</span></a></li>
            <li class="nav-item"><a href="/about" class="nav-link"><span>A propos</span></a></li>
          </ul>
        </div>
      </div>
  </nav>
    
  @yield('home')

  <footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
            Tous droits réservés | Ce site a été concu avec
            <i class="fa fa-heart" aria-hidden="true"></i> par 
            <a href="" target="_blank">Njammy</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
    
  

  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script>
    var getLogin = document.getElementById('getLogin');
    var getSignin = document.getElementById('getSignin');
    var clickCreate = document.getElementById('clickCreate');
    var clickSignin = document.getElementById('clickSign');
    clickCreate = hideLogin;

    function hideLogin(){
      getLogin.classList.add('showlog');
      getSignin.classList.remove('showlog')
    }

    function hideSignin(){
      getSignin.classList.add('showlog');
      getLogin.classList.remove('showlog')
    }

  </script>
  </body>
</html>