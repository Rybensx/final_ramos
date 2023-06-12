<?php
require_once '../../modelos/Puesto.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $puesto = new Puesto($_GET);
    $puesto = $puesto->buscar();
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
            <form action="/final_ramos/Controladores/Puestos/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="puesto_id" value="<?= $puesto[0]['PUESTO_ID'] ?>">
                <div class="mb-3">
                    <label for="puesto_descr" class="form-label">Descripción del Puesto</label>
                    <input type="text" name="puesto_descr" id="puesto_descr" class="form-control" value="<?= $puesto[0]['PUESTO_DESCR'] ?>">
                </div>
                <div class="mb-3">
                    <label for="puesto_suel" class="form-label">Salario del Puesto</label>
                    <input type="number" name="puesto_suel" id="puesto_suel" class="form-control" value="<?= $puesto[0]['PUESTO_SUEL'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Modificar</button>
            </form>
        </div>
    </div>
</div>

<?php include_once '../../includes/footer.php'?>
