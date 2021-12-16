<?php
include '../dbconnect.php';
$stmt = $pdo->prepare('SELECT * FROM brands');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('./inc/link.php')?>
</head>
<body>
    <div class="container-scroller">
        <!-- partial:./partials/_navbar.html -->
        <?php require('./inc/header.php')?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:./partials/_sidebar.html -->
            <?php require('./inc/sidebar.php') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper"> </div>
                <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Invoice</h4>
                          <a href="#"><small>Show All</small></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quod cupiditate esse fuga</p>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Name</th>
                                <th scope="col">Desc</th>
                              </tr>
                            </thead>
                            <tbody>
                <?php 
                    $stt = 0;
                    while($row = $stmt->Fetch()){
                        $stt++;
                ?>
                <tr>
                    <td><?php echo $stt?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['desc']?></td>
                </tr>
                <?php }?>
            </tbody> 
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- content-wrapper ends -->
                <!-- partial:./partials/_footer.html -->
                <?php include_once('./inc/footer.php') ?>
            <!-- partial -->
            </div>
        <!-- main-panel ends -->
        </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="./assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="./assets/js/shared/off-canvas.js"></script>
    <script src="./assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="./assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
    <!-- End custom js for this page-->
</body>
</html>