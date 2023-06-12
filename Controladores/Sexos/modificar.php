<?php
require_once '../../modelos/Sexo.php';

if($_POST['sexo_descr'] != '' && $_POST['sexo_id'] != ''){
    try {
        $sexo = new Sexo($_POST);
        $resultado = $sexo->modificar();
    // var_dump($sexo);
    // exit;
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
                        Modificado exitosamente!
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
                <a href="/final_ramos/vistas/sexo/buscar.php" class="btn btn-info">Volver al formulario</a>
            </div>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>
