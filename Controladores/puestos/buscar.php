<?php
require '../../modelos/Puesto.php';

if ($_POST) {
    $puesto = new Puesto($_POST);
    $resultados = $puesto->buscar();
}

?>

<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>

<div class="container">
    <h1 class="text-center">Resultados de la búsqueda</h1>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                <tr>
        <th>NO.</th>
        <th>NOMBRE DEL PUESTO</th>
        <th>SUELDO</th>
        <th>MODIFICAR</th>
        <th>ELIMINAR</th>
    </tr>
</thead>
<tbody>
        <?php if(count($resultados) > 0):?>
        <?php foreach($resultados as $key => $puesto) : ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $puesto['PUESTO_DESCR'] ?></td>
                <td><?= $puesto['PUESTO_SUEL'] ?></td>
                <td><a class="btn btn-warning w-100" href="/final_ramos/vistas/puestos/modificar.php?puesto_id=<?= $puesto['PUESTO_ID']?>">Modificar</a></td>
                <td><a class="btn btn-danger w-100" href="/final_ramos/controladores/puestos/eliminar.php?puesto_id=<?= $puesto['PUESTO_ID']?>">Eliminar</a></td>
            </tr>
        <?php endforeach ?>
    <?php else : ?>
        <tr>
            <td colspan="5">NO EXISTEN REGISTROS</td>
        </tr>
    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <a href="/final_ramos/vistas/puestos/buscar.php" class="btn btn-info w-100">Volver a buscar</a>
        </div>
    </div>
</div>

<?php include_once '../../includes/footer.php'?>
