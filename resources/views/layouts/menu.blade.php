<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/ventanaWeb/public/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <title>Pulido</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
    <!-- Styles
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="http://localhost/ventanaWeb/public/assets/font-awesome/css/font-awesome.min.css">
    <link href="http://localhost/ventanaWeb/public/assets/bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
    <link href="http://localhost/ventanaWeb/public/assets/pickadate/lib/compressed/themes/classic.date.css" rel='stylesheet' type='text/css'>
    <link href='http://localhost/ventanaWeb/public/assets/jquery-confirm-master/css/jquery-confirm.css' rel='stylesheet' />
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="http://localhost/ventanaWeb/public/assets/bootstrap/js/bootstrap.min.js"></script>
   <!--script src="http://localhost/ventanaWeb/public/assets/pickdate/lib/picker.date.js"></script-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://localhost/ventanaWeb/public/assets/jquery-confirm-master/js/jquery-confirm.js"></script>


    
    <script type="text/javascript" >
        $(document).ready(function(){
            
             $(function() {
                $('#formselector').change(function(){
                $('.txtForm').hide();
                $('#' + $(this).val()).show();
            });
        });
            
            
            $( "#button" ).submit(function( event ) {
                
              $(".loginfields").show();
                
            });
        
        });
        
        
        
         
    </script>
   <style type="text/css">

   .footer{
   background-color: #22262E;
   color:#fff;
   padding: 10px 10px 10px 10px !important;
}

.header{
   background-color:#166BA2 !important
}
      a{
        color: #FFF;
       }
       .margin-bottom {
           margin-bottom:5px;
       }
       .colorModal{
           background-color:#f48024;
       }
       .navbar{
              margin-bottom:0px !important;
       }
       .dl-horizontal dt{
        text-align:left;
       }
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 0px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
}

@media screen and (max-width: 1024px) {

  #menu{
    display: none;
  }

   #menuL{
    display: none;
  }
    #menuL2{
    display: block;
  }
}

@media screen and (min-width: 1024px) {
    #menuL2{
    display: none;
  }
}


   </style>
</head>
<body id="main">

<nav class="navbar navbar-default" id="menuL2">
    <div class="container-fluid">
      <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
                <!-- Branding Image -->
                <a class="brand-logo" href="{{ url('/login') }}">
                   <img src="http://ventana.vitaminaonline.com.mx/public/img/logo_header.png"  alt="Logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                   <!--  <li><a href="{{ url('inventario') }}"><i class="fa fa-btn fa-th-large "></i>Inventario</a></li> -->
                  
            <li class="dropdown">
             <a href="http://localhost/ventanaWeb/public/clientes">
                 <i class="fa fa-users"></i> Mis Clientes
            </a>
            </li>

              <li class="dropdown">
             <a href="http://localhost/ventanaWeb/public/cotizaciones">
             <i class="fa fa-file"></i>  Mis Cotizaciones</a>
            </li>

              <li class="dropdown">
             <a href="http://localhost/ventanaWeb/public/ordersWeb">
             <i class="fa fa-file-text"></i>  Mis Pedidos Web</a>
            </li>

             <li class="dropdown">
             <a href="http://localhost/ventanaWeb/public/ordersSap">
             <i class="fa fa-file-text"></i>  Pedidos SAP</a>
            </li>

             <li class="dropdown">
             <a href="http://localhost/ventanaWeb/public/bills">
             <i class="fa fa-book"></i>  Facturas</a>
            </li>

             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
               @if (!Auth::guest())
               <i class="fa fa-user"></i>  {{ Auth::user()->name }}</a>
               @endif
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/auth/logout') }}">Salir</a></li>
              </ul>
            </li>

                </ul>
            </div>
        </div>
    </nav>

<nav class="navbar navbar-default" id="menuL">
    <div class="container-fluid">
      <div class="navbar-header">
  @if (!Auth::guest())
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             @endif
                @if (!Auth::guest())
                <span id="menu" style="font-size:30px;cursor:pointer;color:#fff" onclick="openNav()">&#9776;</span>
                <!-- Branding Image -->
                @else
                 <a class="brand-logo" href="{{ url('/login') }}">
                   <img src="http://localhost/ventanaWeb/public/img/logo_header.png"  alt="Logo" style="height:50px;" >
                </a>
                 @endif
            </div>
               @if (!Auth::guest())
            <div class="collapse navbar-collapse" id="app-navbar-collapse">

               <a style="margin-left: 40%;" class="brand-logo" href="{{ url('/login') }}">
                   <img src="http://localhost/ventanaWeb/public/img/logo_header.png"  alt="Logo" style="height:50px;" >
                </a>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                   <!--  <li><a href="{{ url('inventario') }}"><i class="fa fa-btn fa-th-large "></i>Inventario</a></li> -->

             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
               <i class="fa fa-user"></i>  {{ Auth::user()->name }}</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/logout') }}">Salir</a></li>
              </ul>
            </li>

                </ul>
            </div>
              @endif
        </div>
    </nav>
 @if (!Auth::guest())
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="pull-right closebtn" onclick="closeNav()">&times;</a>
               <hr>
          <a href="#">
                 <i class="pull-right hidden-xs showopacity fa fa-user"></i>Bienvenido / {{ Auth::user()->name }}
            </a>
                <hr>
             <a href="http://localhost/ventanaWeb/public/clientes ">
                 <i class="pull-right hidden-xs showopacity fa fa-users"></i> Mis Clientes
            </a>
      
                  <hr>
             <a href="http://localhost/ventanaWeb/public/cotizaciones">
             <i class="pull-right hidden-xs showopacity fa fa-file"></i>  Mis Cotizaciones</a>
         
                  <hr>

             <a href="http://localhost/ventanaWeb/public/ordersWeb">
             <i class="pull-right hidden-xs showopacity fa fa-file-text"></i>  Mis Pedidos Web</a>
         
                <hr>

             <a href="http://localhost/ventanaWeb/public/ordersSap">
             <i class="pull-right hidden-xs showopacity fa fa-file-text"></i>  Pedidos SAP</a>
                <hr>

             <a href="http://localhost/ventanaWeb/public/bills">
             <i class="pull-right hidden-xs showopacity fa fa-book"></i>  Facturas</a>
  
                   <hr>
</div>
  @endif

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
   // document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  //  document.body.style.backgroundColor = "white";
}

/*$(document).ready(function($){
  var ventana_ancho = $(window).width();
  var ventana_alto = $(window).height();


  if(ventana_ancho <= 375  &&  ventana_alto <= 667){
     $('#menu').hide();
  }
  else{
     $('#menu').show();
  }

});  */
</script>
<script type="text/javascript">
	$(document).ready(){
	 document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
});
</script>
    @yield('content')

 
</body>
</html>
