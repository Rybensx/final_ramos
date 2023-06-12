<?php
require_once '../../modelos/Sexo.php';

$sexo_descr = $_POST['sexo_descr'] ?? '';

try {
    $sexoObj = new Sexo(['sexo_descr' => $sexo_descr]);
    $resultados = $sexoObj->buscar();
    // var_dump($resultados);
    // exit;
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}
?>

<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>NO. </th>
                            <th>Descripción del Sexo</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($resultados) > 0):?>
                        <?php foreach($resultados as $key => $sexo) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $sexo['SEXO_DESCR'] ?></td>
                            <td><a class="btn btn-warning w-100" href="/final_ramos/vistas/sexo/modificar.php?sexo_id=<?= $sexo['sexo_id']?>">Modificar</a></td>
                            <td><a class="btn btn-danger w-100" href="/final_ramos/controladores/sexos/eliminar.php?sexo_id=<?= $sexo['sexo_id']?>">Eliminar</a></td>
                        </tr>
                        <?php endforeach ?>
                        <?php else :?>
                            <tr>
                                <td colspan="4">NO EXISTEN REGISTROS</td>
                            </tr>
                        <?php endif?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="/final_ramos/vistas/sexos/buscar.php" class="btn btn-info w-100">Volver al formulario</a>
            </div>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>