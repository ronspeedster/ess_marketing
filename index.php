<?php
  require_once 'dbh.php';
  include("sidebar.php");
?>
<title>Dashboard</title>
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
                  <form action="process_projects.php" method="POST" class="mb-1">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Project: </h6><br/> <input type="text" class="form-control" placeholder="PROJECT-001" required>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label class="float-right"><b>Target Loading Month</b></label>
                        </div>
                        <div class="col">
                            <input type="date" name="tlm" class="form-control">
                        </div>
                        <div class="col">
                            <label class="float-right"><b>Order Date</b></label>
                        </div>
                        <div class="col">
                            <input type="date" name="tlm" class="form-control">
                        </div>
                    </div>
                    <br/>
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Item Code</th>
                                  <th>Remarks</th>
                                  <th>QTY</th>
                                  <th>Unit Flanges</th>
                                  <th>Unit CBM</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>
                                      <select name="item_code" class="form-control" required>
                                          <option disabled>ITEM CODE</option>
                                          <option>SAMPLE</option>
                                      </select>
                                  </td>
                                  <td>
                                      <input type="text" class="form-control" name="remarks" placeholder="OK" required>
                                  </td>
                                  <td>
                                      <input type="text" class="form-control" name="qty" placeholder="1" required>
                                  </td>
                                  <td>
                                      <input type="text" class="form-control" name="unit_flanges" placeholder="1" required>
                                  </td>
                                  <td>
                                      <input type="text" class="form-control" name="unit_cbm" placeholder="1" required>
                                  </td>




                              </tr>
                              <tr>

                              </tr>
                          </tbody>

                      </table>
                    <button type="submit" class="btn btn-primary btn-sm mb-1 float-right" name="save"><i class="far fa-save"></i> Save</button>
                  </form>
                </div>
              </div>


            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php include("footer.php"); ?>
