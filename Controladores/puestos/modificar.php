<?php
require_once '../../modelos/Puesto.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST['puesto_descr'] != '' && $_POST['puesto_suel'] != '' && $_POST['puesto_id'] != ''){
    try {
        $puesto = new Puesto($_POST);
        $resultado = $puesto->modificar();
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
}else{
    $error = "Debe llenar todos los datos";
}
?>

<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?php if($resultado): ?>
                <div class="alert alert-success" role="alert">
                    Puesto modificado exitosamente!
                </div>
            <?php else :?>
                <div class="alert alert-danger" role="alert">
                    Ocurrió un error: <?= $error ?>
                </div>
            <?php endif ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <a href="/final_ramos/vistas/puestos/buscar.php" class="btn btn-info">Volver al formulario</a>
        </div>
    </div>
</div>

<?php include_once '../../includes/footer.php'?>
