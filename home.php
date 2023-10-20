<!DOCTYPE html>
<html>
<head>
  <!-- En el encabezado, enlaza tu hoja de estilo CSS -->
  <link rel="stylesheet" type="text/css" href="libs/css/main.css">
</head>
<body class="homee"> <!-- Agrega una clase específica a la página -->
  <!-- Contenido de la página 2 -->

<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="hola">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
 <div class="panel1">
      <div class="jumbotron text-center">
         <h1>CENTRO PRE UNIVERSITARIO </h1>
         <img src="libs/images/logo1.png" id=imagen alt="Sistema de Seguimiento" width="70" height="70">
         <p class="infor"  style="text-align: justify;">
         En el Centro Preuniversitario (CPU) de la Universidad Nacional Micaela Bastidas de Apurimac, 
         tenemos por finalidad prepararte con exigencia para que inicies con éxito tu vida universitaria, 
         todo ello de acuerdo a la misión y visión de la Universidad Nacional Micaela Bastidas de Apurimac.
         Nuestra metodología permite que enfrentes el ingreso a la Universidad y desarrolles al máximo tus 
         conocimientos y habilidades, según el perfil profesional de la carrera que elijas.
         Por ello, nos dirigimos a jóvenes de 4to, 5to y egresados de Educación secundaria, quienes desean 
         lograr una formación integral y preparatoria para su etapa universitaria.</p>
      </div>
      
    </div>

      <div class="ofrece">
      <div class="texto">
      Te ofrecemos:
        <ul>
          <li>Ingreso Directo a la UNAMBA</li>
          <li>Estrategias para enfrentar el Examen</li>
          <li>Orientación Psicológica y Vocacional</li>
          <li>Docentes de calidad</li>
          <li>El más alto nivel académico</li>
          <li>Examen de Becas</li>
          <li>Guía de Estudios</li>
        </ul>
      </div>
      <img class="imghome" src="libs/images/imagen1.jpg" id="imagen" alt="Sistema de Seguimiento" width="70" height="70">
      </div>  
</div>
<?php include_once('layouts/footer.php'); ?>
</body>
</html>