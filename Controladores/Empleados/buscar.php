<?php
require '../../modelos/Empleado.php';

if ($_POST) {
    $empleado = new Empleado($_POST);
    $resultados = $empleado->buscar();
}

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
                    <th>PRIMER NOMBRES</th>
                    <th>SEGUNDO NOMBRES</th>
                    <th>PRIMER APELLIDOS</th>
                    <th>SEGUNDO APELLIDOS</th>
                    <th>DPI</th>
                    <th>EDAD</th>
                    <th>PUESTO ID</th>
                    <th>SEXO ID</th>
                    <th>MODIFICAR</th>
                    <th>ELIMINAR</th>
                </tr>
                </thead>
                <tbody>
                    <?php if (!empty($resultados)) : ?>
                        <?php foreach ($resultados as $key => $empleado) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $empleado['EMP_NOM1'] ?></td>
                                <td><?= $empleado['EMP_NOM2'] ?></td>
                                <td><?= $empleado['EMP_APE1'] ?></td>
                                <td><?= $empleado['EMP_APE2'] ?></td>
                                <td><?= $empleado['EMP_DPI'] ?></td>
                                <td><?= $empleado['EMP_EDAD'] ?></td>
                                <td><?= $empleado['EMP_PUESTO_ID'] ?></td>
                                <td><?= $empleado['EMP_SEXO_ID'] ?></td>
                                <td><a class="btn btn-warning w-100" href="/final_ramos/vistas/empleados/modificar.php?emp_id=<?= $empleado['EMP_ID']?>">Modificar</a></td>
                                <td><a class="btn btn-danger w-100" href="/final_ramos/controladores/empleados/eliminar.php?emp_id=<?= $empleado['EMP_ID']?>">Eliminar</a></td>
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
