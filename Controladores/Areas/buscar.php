<?php
require '../../modelos/Area.php';

try {
    $area = new Area($_POST);
    $resultados = $area->buscar();

} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
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
        <th>NOMBRE DEL ÁREA</th>
        <th>MODIFICAR</th>
        <th>ELIMINAR</th>
    </tr>
</thead>
<tbody>
    <?php if (!empty($resultados)) : ?>
        <?php foreach ($resultados as $key => $area) : ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $area['AREA_NOM'] ?></td>
                <td><a class="btn btn-warning w-100" href="/final_ramos/vistas/areas/modificar.php?area_id=<?= $area['AREA_ID']?>">Modificar</a></td>
                <td><a class="btn btn-danger w-100" href="/final_ramos/controladores/areas/eliminar.php?area_id=<?= $area['AREA_ID']?>">Eliminar</a></td>
            </tr>
        <?php endforeach ?>
    <?php else : ?>
        <tr>
            <td colspan="4">NO EXISTEN REGISTROS</td>
        </tr>
    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <a href="/final_ramos/vistas/areas/buscar.php" class="btn btn-info w-100">Volver a buscar</a>
        </div>
    </div>
</div>

<?php include_once '../../includes/footer.php'?>