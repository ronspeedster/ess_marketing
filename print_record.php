<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

  	<title>SPCF Student Violation</title>

  	<!-- Custom fonts for this template-->
  	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  	<!-- Custom styles for this template-->
  	<link href="css/sb-admin-2.min.css" rel="stylesheet">
  	<link rel="icon" href="img/logo.png" type="image/gif" sizes="16x16">
  	<style type="text/css" media="print">
  		body{
  			font-family: 'Arial', sans-serif !important;
  			font-size: 12px !important;
  			scroll-behavior: smooth !important;
  		}
  		@media print{@page {size: portrait !important;

  			}
  			body{
  			font-family: 'Arial', sans-serif !important;
  			font-size: 12px !important;
  			scroll-behavior: smooth !important;
  			}
  		}
    	@page { 
        	size: portrait;
    	}  		
  	</style>	
</head>
<body>
	<a href="index.php"><- Back to dashboard</a>
	<?php
		$surname =  $_GET['surname'];
		$firstname = $_GET['firstname'];
		$course =  $_GET['course'];
		$violation =  $_GET['violations'];
		$date = $_GET['date'];

		$adviser = $_GET['adviser'];
		$contact_no = $_GET['contact_no'];
		$reasons = $_GET['reasons'];
		$student_id = $_GET['student_id'];

		$counter = 0;
	?>
	<div class="container-fluid">
		<!-- 1st half -->
		<div class="row">
			<!-- Content Column -->
            <div class="col-lg-6 mb-4" style="max-width: 50% !important;">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">

                  <h6 class="m-0 font-weight-bold text-black">
                  	<center>
                  	<img src="img/logo.png" style="width: 50px;">
                  	<br/>
                  	SYSTEMS PLUS COLLEGE FOUNDATION
                  	<br/>
                  	VIOLATION SLIP
                  	</center>
                  </h6>
                </div>
                <div class="card-body">
                  <label class="float-right"><b>Date:</b> <?php echo $date; ?></label>
                  <br/>
                  <label><b>Student ID: </b><?php echo $student_id; ?></label>
                  <br/>
                  <label><b>Name: </b><?php echo $surname." ".$firstname; ?></label>
                  <br/>
                  <label><b>Course / Grade & Section: </b><?php echo $course; ?></label>
                  <br/>
                  <label><b>Adviser: </b><?php echo $adviser; ?></label>                  
                  <br/>
                  <label><b>Adviser </b><?php echo $course; ?></label>                  
                  <br/>
                  <label><b>Contact #: </b><?php echo $contact_no; ?></label>  
                  <br/>
                  <label><b>Violations: </b><?php echo $violation; ?></label>
                  <br/>
                  <label><b>Reasons for Violations: </b><?php echo $reasons; ?></label>
                  <br/>
                  <br/>
                  <label>I pledged that I will not commit any or the violations stipulated in the <b>Study Manual</b> again</label>
                  <br/>
                  <br/>
                  <label class="float-right" style="text-decoration: overline;"><b>Signature Over Printed Name</b>
                  </label>
                  <br/>
                  <br/>
                  <label>Noted by: </label>                              
                  <label class="float-right">_ 1st Violation<br/>_ 2nd Violation<br/>_ 3rd Violation</label>                              
                </div>
              </div>


            </div>
            <div class="col-lg-6 mb-4 " style="max-width: 50% !important;">

              <!-- Project Card Example -->
              <div class="card shadow mb-4" style="">
                <div class="card-header py-3">

                  <h6 class="m-0 font-weight-bold text-black">
                  	<center>
                  	<img src="img/logo.png" style="width: 50px;">
                  	<br/>
                  	SYSTEMS PLUS COLLEGE FOUNDATION
                  	<br/>
                  	VIOLATION SLIP
                  	</center>
                  </h6>
                </div>
                <div class="card-body">
                  <label class="float-right"><b>Date:</b> <?php echo $date; ?></label>
                  <br/>
                  <label><b>Student ID: </b><?php echo $student_id; ?></label>
                  <br/>
                  <label><b>Name: </b><?php echo $surname." ".$firstname; ?></label>
                  <br/>
                  <label><b>Course / Grade & Section: </b><?php echo $course; ?></label>
                  <br/>
                  <label><b>Adviser: </b><?php echo $adviser; ?></label>                  
                  <br/>
                  <label><b>Adviser </b><?php echo $course; ?></label>                  
                  <br/>
                  <label><b>Contact #: </b><?php echo $contact_no; ?></label>  
                  <br/>
                  <label><b>Violations: </b><?php echo $violation; ?></label>
                  <br/>
                  <label><b>Reasons for Violations: </b><?php echo $reasons; ?></label>
                  <br/>
                  <br/>
                  <label>I pledged that I will not commit any or the violations stipulated in the <b>Study Manual</b> again</label>
                  <br/>
                  <br/>
                  <label class="float-right" style="text-decoration: overline;"><b>Signature Over Printed Name</b>
                  </label>
                  <br/>
                  <br/>
                  <label>Noted by: </label>                              
                  <label class="float-right">_ 1st Violation<br/>_ 2nd Violation<br/>_ 3rd Violation</label>       
                </div>
              </div>


            </div>

		</div>
		<!-- 2nd half -->
		<div class="row">
			<!-- Content Column -->
            <div class="col-lg-6 mb-4" style="max-width: 50% !important;">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">

                  <h6 class="m-0 font-weight-bold text-black">
                  	<center>
                  	<img src="img/logo.png" style="width: 50px;">
                  	<br/>
                  	SYSTEMS PLUS COLLEGE FOUNDATION
                  	<br/>
                  	VIOLATION SLIP
                  	</center>
                  </h6>
                </div>
                <div class="card-body">
                  <label class="float-right"><b>Date:</b> <?php echo $date; ?></label>
                  <br/>
                  <label><b>Student ID: </b><?php echo $student_id; ?></label>
                  <br/>
                  <label><b>Name: </b><?php echo $surname." ".$firstname; ?></label>
                  <br/>
                  <label><b>Course / Grade & Section: </b><?php echo $course; ?></label>
                  <br/>
                  <label><b>Adviser: </b><?php echo $adviser; ?></label>                  
                  <br/>
                  <label><b>Adviser </b><?php echo $course; ?></label>                  
                  <br/>
                  <label><b>Contact #: </b><?php echo $contact_no; ?></label>  
                  <br/>
                  <label><b>Violations: </b><?php echo $violation; ?></label>
                  <br/>
                  <label><b>Reasons for Violations: </b><?php echo $reasons; ?></label>
                  <br/>
                  <br/>
                  <label>I pledged that I will not commit any or the violations stipulated in the <b>Study Manual</b> again</label>
                  <br/>
                  <br/>
                  <label class="float-right" style="text-decoration: overline;"><b>Signature Over Printed Name</b>
                  </label>
                  <br/>
                  <br/>
                  <label>Noted by: </label>                              
                  <label class="float-right">_ 1st Violation<br/>_ 2nd Violation<br/>_ 3rd Violation</label>                              
                </div>
              </div>


            </div>
            <div class="col-lg-6 mb-4 " style="max-width: 50% !important;">

              <!-- Project Card Example -->
              <div class="card shadow mb-4" style="">
                <div class="card-header py-3">

                  <h6 class="m-0 font-weight-bold text-black">
                  	<center>
                  	<img src="img/logo.png" style="width: 50px;">
                  	<br/>
                  	SYSTEMS PLUS COLLEGE FOUNDATION
                  	<br/>
                  	VIOLATION SLIP
                  	</center>
                  </h6>
                </div>
                <div class="card-body">
                  <label class="float-right"><b>Date:</b> <?php echo $date; ?></label>
                  <br/>
                  <label><b>Student ID: </b><?php echo $student_id; ?></label>
                  <br/>
                  <label><b>Name: </b><?php echo $surname." ".$firstname; ?></label>
                  <br/>
                  <label><b>Course / Grade & Section: </b><?php echo $course; ?></label>
                  <br/>
                  <label><b>Adviser: </b><?php echo $adviser; ?></label>                  
                  <br/>
                  <label><b>Adviser </b><?php echo $course; ?></label>                  
                  <br/>
                  <label><b>Contact #: </b><?php echo $contact_no; ?></label>  
                  <br/>
                  <label><b>Violations: </b><?php echo $violation; ?></label>
                  <br/>
                  <label><b>Reasons for Violations: </b><?php echo $reasons; ?></label>
                  <br/>
                  <br/>
                  <label>I pledged that I will not commit any or the violations stipulated in the <b>Study Manual</b> again</label>
                  <br/>
                  <br/>
                  <label class="float-right" style="text-decoration: overline;"><b>Signature Over Printed Name</b>
                  </label>
                  <br/>
                  <br/>
                  <label>Noted by: </label>                              
                  <label class="float-right">_ 1st Violation<br/>_ 2nd Violation<br/>_ 3rd Violation</label>       
                </div>
              </div>


            </div>

		</div>		
	</div>
</body>
</html>
