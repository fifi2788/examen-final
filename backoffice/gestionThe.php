<?php 
ob_start(); 

$message = isset($_GET['message']) ? $_GET['message'] : '';

?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-lg-2"></div>
    <!-- Content Column -->
    <div class="col-lg-8 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thé</h6>
            </div>
            <div class="card-body">
                <form action="traitement/ajoutThe.php" method="post">
                    <div class="mb-3">
                        <label for="nom_variete" class="form-label">Nom variété</label>
                        <input type="text" class="form-control" id="nom_variete" name="nom_variete" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="occupation" class="form-label">Occupation (Pieds)</label>
                        <input type="text" class="form-control" id="occupation" name="occupation" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="rendement_pied" class="form-label">Rendement (Pieds)</label>
                        <input type="text" class="form-control" id="rendement_pied" name="rendement_pied" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Valider</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-2"></div>
</div>

<?php 
$content=ob_get_clean(); 
require_once "./templates/template.php";
?>
