<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <title>EncuentraDondeIr</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Inicio</a>
      <button class="navbar-toggler" type="button" id="dropdownMenuButton" data-toggle="collapse" data-target="#navbarResponsive" data-toggle="dropdown" aria-haspopup="true" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
         
      <ul class="navbar-nav ml-auto">
<!-- Botones de navegacion-->
      <div class="btn-group">
      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chignahuapan</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Eventos</a>
      <a class="dropdown-item" href="#">Recintos</a>
    </div>
  </div>
      <a > "" </a>

           <div class="btn-group">
      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zacatlán</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Eventos</a>
      <a class="dropdown-item" href="#">Recintos</a>
    </div>
  </div>

    <a > "" </a>
 
           <div class="btn-group">
      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cholula</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Eventos</a>
      <a class="dropdown-item" href="#">Recintos</a>
    </div>
  </div>
        <a class="nav-link js-scroll-trigger" href="#info">Mas información</a>
        </ul>
      </div>
    </div>
  </nav>
<!-- CARRUSEL DE IMAGENES-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="chignahuapan.jpg" alt="First slide">
       <div class="carousel-caption d-none d-md-block">
       <h5>Chignahuapan</h5>
       <p>Conoce los eventos de este hermoso lugar, creador de artesanias y alegria decembrina</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="cholula.jpg" alt="Second slide">
       <div class="carousel-caption d-none d-md-block">
            <h5>Cholula</h5>
           <p>Conoce los eventos de este maravilloso sitio, con una piramide increible y parques familiares</p>

  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="zacatlan.jpg" alt="Third slide">
       <div class="carousel-caption d-none d-md-block">
           <h5>Zacatlan</h5>
          <p>Conoce Zacatlan, un hermoso lugar para admirar la naturaleza</p>
  </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>


  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Sobre este lugar</h2>
          <p class="lead">Descripcion breve del lugar:</p>
          <ul>
            <li>Tips y consejos</li>
            
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Costos: </h2>
          <p class="lead">Detalles de los costos</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Seccion de comentarios</h2>
          <p class="lead">Aqui se pondra la seccion para que se pueda comentar</p>
        </div>
      </div>
    </div>
  </section>
  <!--Seccion de Comentarios -->
  <br />
  <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Tus vacaciones al alcance de un Click</p>
    </div>
    <!-- /.container -->
    <a class="nav-link js-scroll-trigger" href="#admin">Admin</a>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000);    
}
</script>

