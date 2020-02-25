<?php
	include 'dbh.php';

	if(isset($_POST['save'])){
		$surname = $_POST['surname'];
		$fname = $_POST['fname'];
		$course = $_POST['course'];
		$violations = $_POST['violation'];
		$student_id = $_POST['student_id'];
		$adviser = $_POST['adviser'];
		$contact_no = $_POST['contact_no'];
		$reasons = $_POST['reasons'];

		$date = date('Y-m-d H:i:s');
		$mysqli->query("INSERT INTO violation (surname, firstname, course_grade_section, violations, violation_date, adviser, contact_no, reasons, student_id) VALUES('$surname','$fname','$course','$violations','$date','adviser' ,'$contact_no' ,'$reasons', '$student_id' )") or die ($mysqli->error());

		$_SESSION['message'] = "Violation record has been saved!";
		$_SESSION['msg_type'] = "success";

		header("location: print_record.php?surname=".$surname."&firstname=".$fname."&course=".$course."&violations=".$violations."&date=".$date."&adviser=".$adviser."&contact_no=".$contact_no."&reasons=".$reasons."&student_id=".$student_id);
	}
?>
