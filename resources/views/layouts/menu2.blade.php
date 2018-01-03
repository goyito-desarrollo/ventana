<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <title>Pulido</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
    <!-- Styles
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
    <link href="/assets/pickadate/lib/compressed/themes/classic.date.css" rel='stylesheet' type='text/css'>
    <link href='/assets/jquery-confirm-master/css/jquery-confirm.css' rel='stylesheet' />
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
   <!--script src="/assets/pickdate/lib/picker.date.js"></script-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/assets/jquery-confirm-master/js/jquery-confirm.js"></script>


    
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
  
<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> UI Elements <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="#">CSS3 Animation</a></li>
                    <li><a href="#">General</a></li>
                    <li><a href="#">Buttons</a></li>
                    <li><a href="#">Tabs & Accordions</a></li>
                    <li><a href="#">Typography</a></li>
                    <li><a href="#">FontAwesome</a></li>
                    <li><a href="#">Slider</a></li>
                    <li><a href="#">Panels</a></li>
                    <li><a href="#">Widgets</a></li>
                    <li><a href="#">Bootstrap Model</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li>New Service 1</li>
                  <li>New Service 2</li>
                  <li>New Service 3</li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li>New New 1</li>
                  <li>New New 2</li>
                  <li>New New 3</li>
                </ul>


                 <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> Profile
                  </a>
                  </li>

                 <li>
                  <a href="#">
                  <i class="fa fa-users fa-lg"></i> Users
                  </a>
                </li>
            </ul>
     </div>
</div>
