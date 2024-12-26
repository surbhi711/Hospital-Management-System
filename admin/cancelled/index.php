<?php
$pageName = "Appointment";
$subPageName = "Cancelled";
include('../include/header.php');
?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4 class="card-title"><?php echo $pageName . " | " . $subPageName; ?></h4>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Appointment Date</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Diagnostic</th>
                            <th>Patient Mobile Number</th>
                            <th>symptoms</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <th>
                                20-04-2024
                            </th>
                            <th>ABC</th>
                            <th>XYZ</th>
                            <th>Headache</th>
                            <th>9090909090</th>
                            <th>I have headache since long time...</th>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>
<?php
include('../include/footer.php');
?>
