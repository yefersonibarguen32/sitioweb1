<?php include("template/cabecera.php");?>

<?php
include("administrador/config/bd.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM tenis");
$sentenciaSQL->execute();
$listatenis=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>


<?php foreach($listatenis as $tenis ) { ?>
<div class="col-md-3">
    <div class="card">
   <img class="card-img-top" src="./img/<?php echo $tenis['imagen']; ?>" alt="">
       <div class="card-body">
        <h4 class="card-title"> <?php echo $tenis['nombre']; ?></h4>
       
</div>
</div>
</div>
<?php } ?>


<?php include("template/pie.php");?>