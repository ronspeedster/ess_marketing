<?php
  require_once 'dbh.php';
  include("sidebar.php");
  $getViolationRecord = mysqli_query($mysqli, "SELECT * FROM violation
    ORDER BY violation_date DESC");
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
<?php
  include("topbar.php");
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <?php
          if(isset($_SESSION['message'])){
        ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
          ?>
        </div>
        <?php
          }
        ?>          
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Violators</h6>
                </div>
                <div class="card-body">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Full Name</th>
                        <th>Contact Number</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while($newViolationRecord=$getViolationRecord->fetch_assoc()){ ?>
                      <tr>
                        <td><?php echo $newViolationRecord['surname'].' '.$newViolationRecord['firstname']; ?></td>
                        <td><?php echo $newViolationRecord['contact_no']; ?></td>
                        <td><?php echo $newViolationRecord['violation_date']; ?></td>
                      </tr>
                      <?php } ?> 
                    </tbody>
                  </table>
                </div>
              </div>


            </div>            
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php include("footer.php"); ?>
