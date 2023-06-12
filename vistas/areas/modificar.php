<?php
require_once '../../modelos/Area.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $area = new Area($_GET);
    $area = $area->buscar();
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
        <div class="col-lg-6">
            <form action="/final_ramos/Controladores/Areas/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="area_id" value="<?= $area[0]['AREA_ID'] ?>">
                <div class="mb-3">
                    <label for="area_nom" class="form-label">Nombre de la Área</label>
                    <input type="text" name="area_nom" id="area_nom" class="form-control" value="<?= $area[0]['AREA_NOM'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Modificar</button>
            </form>
        </div>
    </div>
</div>

<?php include_once '../../includes/footer.php'?>
