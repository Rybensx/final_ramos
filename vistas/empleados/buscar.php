<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>

<div class="container">
    <h1 class="text-center">Buscar Empleado</h1>
    <div class="row justify-content-center">
        <form action="/final_ramos/controladores/Empleados/buscar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="emp_nom1">Primer nombre</label>
                    <input type="text" name="emp_nom1" id="emp_nom1" class="form-control">
                    <label for="emp_nom2">Segundo nombre</label>
                    <input type="text" name="emp_nom2" id="emp_nom2" class="form-control">
                    <label for="emp_ape1">Primer apellido</label>
                    <input type="text" name="emp_ape1" id="emp_ape1" class="form-control">
                    <label for="emp_ape2">Segundo apellido</label>
                    <input type="text" name="emp_ape2" id="emp_ape2" class="form-control">
                    <label for="emp_dpi">DPI</label>
                    <input type="text" name="emp_dpi" id="emp_dpi" class="form-control">
                    <label for="emp_edad">Edad</label>
                    <input type="number" name="emp_edad" id="emp_edad" class="form-control">
                    <label for="emp_puesto_id">ID de Puesto</label>
                    <input type="number" name="emp_puesto_id" id="emp_puesto_id" class="form-control">
                    <label for="emp_sexo_id">ID de Sexo</label>
                    <input type="number" name="emp_sexo_id" id="emp_sexo_id" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" class="btn btn-primary w-100">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once '../../includes/footer.php'?>





<!-- <?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>

<div class="container">
    <h1 class="text-center">Buscar Empleado</h1>
    <div class="row justify-content-center">
        <form action="/final_ramos/controladores/Empleados/buscar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="buscar">Buscar</label>
                    <input type="text" name="buscar" id="buscar" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" class="btn btn-primary w-100">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php include_once '../../includes/footer.php'?> -->