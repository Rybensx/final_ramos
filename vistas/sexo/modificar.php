<?php
require_once '../../modelos/Sexo.php';

try {
    $sexo = new Sexo($_GET);
    $sexo = $sexo->buscar();

    var_dump($sexo);
    exit;
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
            <form action="/final_ramos/controladores/Sexos/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="sexo_id" value="<?= $sexo[0]['SEXO_ID']?>">
                <div class="mb-3">
                    <label for="sexo_descr" class="form-label">Descripción del Sexo</label>
                    <input type="text" name="sexo_descr" id="sexo_descr" class="form-control" value="<?= $sexo[0]['SEXO_DESCR'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Modificar</button>
            </form>
        </div>
    </div>
</div>

<?php include_once '../../includes/footer.php'?>
