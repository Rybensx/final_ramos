<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>

<div class="container">
    <h1 class="text-center">Buscar Puesto</h1>
    <div class="row justify-content-center">
        <form action="/final_ramos/Controladores/Puestos/buscar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="puesto_descr">Descripción del puesto</label>
                    <input type="text" name="puesto_descr" id="puesto_descr" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="puesto_suel">Salario del puesto</label>
                    <input type="number" name="puesto_suel" id="puesto_suel" class="form-control">
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
