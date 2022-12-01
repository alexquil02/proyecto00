<?=$this->extend("Front/layout/main")?>

<?=$this->section("style")?>
<?=$this->endSection()?>

<?=$this->section("title")?>Lista<?=$this->endSection()?>

<?=$this->section("content")?>
<br>
<h1>NUESTRA EMPRESA</h1>
<img src="./img/img4.png" style=" width: 300px; height: 300px;" class="d-block w-100" alt="juego3">
<br>
<br>
<div class= text-aling: center; >
<p>Mini Market EL Chagra es un local que se dedica a la venta de productos alimenticios tanto perecibles como no perecibles, así como también posee gran variedad 
de productos para el cuidado personal, la limpieza del hogar, souvenirs, etc. 
Su objetivo primordial es el de siempre brindar un servicio ameno a sus clientes y así lograr poder ser el supermercado preferido de la gente de Machachi.
</p>
</div>
<h1>OFERTAS</h1>
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-4">
    <div class="card" style="width: 18rem;">
  <img src="./imagen/derechos.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">productos de primera necesidad </h5>
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">oferta</li>
    <li class="list-group-item">DIA DEL AHORRO</li>
    <li class="list-group-item">
      1: pack de pollo 8$
      2: cubetas de huevos a 2.50
      3: carne de res 1.25
      
      </ul>

   
</div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
    <div class="card" style="width: 18rem;">
  <img src="./imagen/obligaciones.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">HIGIENE PERSONAL </h5>
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">LEER</li>
    <li class="list-group-item">TENER EN CUENTA</li>
    <li class="list-group-item">
    1:jabon de baño 2*1
    2:shampo 3.50 $
    3:acondicionador 3$
</li>
  </ul>
  
</div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
    <div class="card" style="width: 18rem;">
  <img src="./imagen/noticias.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">PROMOCIONES </h5>
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">HOGAR</li>
    <li class="list-group-item">camas 90 $</li>
    <li class="list-group-item">hollas 3*2</li>
  </ul>
 
</div>

    </div>
  </div>
</div>
</div>
<h1>TERMINOS Y CONDICIONES </h1>
<div>
    <p>Productos bajo el sistema de promoción. Válido del 10 al 30 de Noviembre de 2022. No aplica promoción sobre promoción, aplica mejor beneficio. Descuento ya aplicado en cenefa de oferta. Productos y precios pueden varias sin previo aviso. 
        Promoción aplica solo para ventas de consumo familiar. Máximo 5 productos por cuenta.</p>
</div>
<div class ="text-center">
<img src="./img/img1.png" class="img-fluid" alt="...">
</div>
<h1>TU OPINION ES IMPORTANTE </h1>
<p>Dejanos saber cual es tu opinion de nuestra empresa y los servicios que ofrecemos.  </p>
    <form action="">
    <div class="form-group">
  <label for="nombre">NOMBRE:</label>
  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej;Jhandry ">

</div>
</form>
<form action="" method="POST">
    <div class="form-group">
  <label for="apellido">APELLIDO:</label>
  <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ej;Pinzón">

</div>

<div>
  <label for="email">CORREO ELECTRONICO:</label>
<input type="email" id="email"
       pattern=".+@globex\.com" size="30" required>
       
</div>
       <fieldset>
    <legend>¿Que seccion te gusta mas de nuestra empresa?</legend>

    <div>
      <input type="radio" id="huey" name="drone" value="huey"
             checked>
      <label for="huey">EMBUTIDOS </label>
    </div>

    <div>
      <input type="radio" id="dewey" name="drone" value="dewey">
      <label for="dewey">SNACKS</label>
    </div>

    <div>
      <input type="radio" id="louie" name="drone" value="louie">
      <label for="louie">LACTEOS</label>
    </div>
</fieldset>
<button type="button" class ="btn btn-primary">Enviar</button>
</form>
<?php if (!empty(session('msg'))) { ?>
    <div class="alert alert-<?=session('msg.type')?>" role="alert">
        <?=session("msg.body")?>
    </div>
<?php } ?>

<?=$this->endSection()?>