<?php
require_once '../../modelos/Sexo.php';

if ($_POST) {
    $sexo = new Sexo($_POST);
    $resultados = $sexo->buscar();
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($resultados) > 0):?>
                        <?php foreach($resultados as $key => $sexo) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $sexo['SEXO_DESCR'] ?></td>                            
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
                <a href="/final_ramos/vistas/sexo/buscar.php" class="btn btn-info w-100">Volver al formulario</a>
            </div>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>