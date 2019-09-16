<?php include 'includes/header.php';?>

<div class="container-fluid" id="registration-step">
    <h2 class="text-center h2-responsive p-3">List of organizations registered with us are: </h2>
    <div class="row container-fluid">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" *ngFor="let x of ngo">
            <div class="card">
                <div class="card-header">
                    <h4 class="h4-responsive p-2 text-center"></h4>
                </div>
                <div class="card-body table-bordered">
                    <table class="table table-striped">
                        <tr>
                            <th>Organization Type</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Contact No</th>
                            <td></td>
                        </tr>

                    </table>
                </div>
                <div class="card-footer">
                    <p class="text-center p-2 lead">Project Incharge: </p>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
<br>

<?php include 'includes/footer.php';?>