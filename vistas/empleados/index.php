<?php
require_once '../../modelos/Sexo.php';
require_once '../../modelos/Puesto.php';
try {
    $sexo = new Sexo();
    $puesto = new Puesto();
    $sexos = $sexo->buscar();
    $puestos = $puesto->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}
?>
<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Formulario de Empleado</h1>
        <form action="/final_ramos/controladores/Empleados/guardar.php" method="POST">
            <div class="form-group">
                <label for="emp_nom1">Primer Nombre:</label>
                <input type="text" class="form-control" id="emp_nom1" name="emp_nom1">
            </div>
            <div class="form-group">
                <label for="emp_nom2">Segundo Nombre:</label>
                <input type="text" class="form-control" id="emp_nom2" name="emp_nom2">
            </div>
            <div class="form-group">
                <label for="emp_ape1">Primer Apellido:</label>
                <input type="text" class="form-control" id="emp_ape1" name="emp_ape1">
            </div>
            <div class="form-group">
                <label for="emp_ape2">Segundo Apellido:</label>
                <input type="text" class="form-control" id="emp_ape2" name="emp_ape2">
            </div>
            <div class="form-group">
                <label for="emp_dpi">DPI:</label>
                <input type="text" class="form-control" id="emp_dpi" name="emp_dpi">
            </div>
            <div class="form-group">
                <label for="emp_edad">Edad:</label>
                <input type="number" class="form-control" id="emp_edad" name="emp_edad">
            </div>
            <div class="form-group">
                <label for="emp_puesto_id">Puesto:</label>                
                
                <select name="emp_puesto_id" id="puesto_id" class="form-control">
                    <option value="">SELECCIONE...</option>
                    <?php foreach ($puestos as $key => $puesto) : ?>
                       <option value="<?= $puesto['PUESTO_ID'] ?>"><?= $puesto['PUESTO_DESCR'] ?></option>
                    <?php endforeach ?>
                </select>

            </div>
            <div class="form-group">
                <label for="emp_sexo_id">Sexo:</label>
                <select name="emp_sexo_id" id="sexo_id" class="form-control">
                    <option value="">SELECCIONE...</option>
                    <?php foreach ($sexos as $key => $sexo) : ?>
                        <option value="<?= $sexo['SEXO_ID'] ?>"><?= $sexo['SEXO_DESCR'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
<?php include_once '../../includes/footer.php'?>