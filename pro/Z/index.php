<!<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--iconos google-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--CSS         materialize-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--CSS                    -->
    <link rel="stylesheet" type="text/css" href="./css/estilo.css" media="screen" />
    <!--JQuery                 -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>PROYECTO Z</title>
</head>

<body>
    <?php require 'vista/navbar.php';?>

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m12">
                    
                    <div class="carousel carousel-slider">
                        <a class="carousel-item" href="#"><img src="img/index/ash_blossom.jpg"></a>
                        <a class="carousel-item" href="#"><img src="img/index/logo_yugioh.png"></a>
                        </div>



                </div>
            </div>
        </div>
    </div>

    <script>
      $(document).ready(function(){
        $('.carousel').carousel();
      }, setTimeout(autoplay, 4500));


     function autoplay() {
       $('.carousel').carousel('next');
       setTimeout(autoplay, 4500);
     }

    </script>



  <!--JavaScript  materialize-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

