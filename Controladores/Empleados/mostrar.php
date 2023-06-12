<?php
require '../../modelos/Empleado.php';

$empleado = new Empleado();
$resultados = $empleado->mostrar();


?>

<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>

<div class="container">
    <h1 class="text-center">Resultados de la búsqueda</h1>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                <tr>
                    <th>NO.</th>
                    <th>PNOMBRES</th>
                    <th>DPI</th>
                    <th>PUESTO</th>
                    <th>EDAD</th>
                    <th>SEXO</th>
                    <th>SUELDO</th>
                </tr>
                </thead>
                <tbody>
                    <?php if (!empty($resultados)) : ?>
                        <?php foreach ($resultados as $key => $empleado) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $empleado['EMP_NOM1'] . " " . $empleado['EMP_NOM2'] . " " . $empleado['EMP_APE1'] . " " . $empleado['EMP_APE2'] ?></td>
                                <td><?= $empleado['EMP_DPI'] ?></td>
                                <td><?= $empleado['PUESTO_DESCR'] ?></td>
                                <td><?= $empleado['EMP_EDAD'] ?></td>
                                <td><?= $empleado['SEXO_DESCR'] ?></td>
                                <td><?= $empleado['PUESTO_SUEL'] ?></td>
                            </tr>

                        <?php endforeach ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="9">NO EXISTEN REGISTROS</td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <a href="/final_ramos/vistas/empleados/buscar.php" class="btn btn-info w-100">Volver a buscar</a>
        </div>
    </div>
</div>

<?php include_once '../../includes/footer.php'?>
