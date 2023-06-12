<?php
require_once '../../modelos/Empleado.php';
require_once '../../modelos/Sexo.php';
require_once '../../modelos/Puesto.php';
    try {
        $empleado = new empleado($_GET);
        $puesto = new puesto();
        $area = new sexo();
        $empleados = $empleado->buscar();
        $puestos = $puesto->buscar();
        $areas = $area->buscar();

    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">Modificar Empleados</h1>
        <div class="row justify-content-center">
            <form action="/final_ramos/Controladores/Empleados/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="emp_id" value="<?= $empleados[0]['EMP_ID'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_nom1">Primer Nombre del Empleado</label>
                        <input type="text" name="emp_nom1" id="emp_nom1" class="form-control" value="<?= $empleados[0]['EMP_NOM1'] ?>">
                    </div>
                    <div class="col">
                        <label for="emp_nom2">Segundo Nombre del Empleado</label>
                        <input type="text" name="emp_nom2" id="emp_nom2" class="form-control" value="<?= $empleados[0]['EMP_NOM2'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_ape1">Primer Apellido del Empleado</label>
                        <input type="text" name="emp_ape1" id="emp_ape1" class="form-control" value="<?= $empleados[0]['EMP_APE1'] ?>">
                    </div>
                    <div class="col">
                        <label for="emp_ape2">Segundo Apellido del Empleado</label>
                        <input type="text" name="emp_ape2" id="emp_ape2" class="form-control" value="<?= $empleados[0]['EMP_APE2'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_dpi">DPI del Empleado</label>
                        <input type="text" name="emp_dpi" id="emp_dpi" class="form-control" value="<?= $empleados[0]['EMP_DPI'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_edad">Edad del Empleado</label>
                        <input type="number" step="1" min="18" max="65" name="emp_edad" id="emp_edad" class="form-control" value="<?= $empleados[0]['EMP_EDAD'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_puesto_id">Puesto del Empleado</label>
                        <input type="number" step="1" min="1" name="emp_puesto_id" id="emp_puesto_id" class="form-control" value="<?= $empleados[0]['EMP_PUESTO_ID'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_situacion">Situacion del Empleado</label>
                        <input type="number" name="emp_situacion" id="emp_situacion" class="form-control" value="<?= $empleados[0]['EMP_SITUACION'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
    <div class="col">
        <label for="emp_sexo_id">Sexo del Empleado</label>
        <input type="number" name="emp_sexo_id" id="emp_sexo_id" class="form-control" value="<?= $empleados[0]['EMP_SEXO_ID'] ?>">
    </div>
</div>
    <div class="col">
        <button type="submit" class="btn btn-primary">Modificar Empleado</button>
    </div>
</div>
</form>
</div>
</div>
<?php include_once '../../includes/footer.php'?>
