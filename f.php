<?php


require("fpdf/fpdf.php");

include('db_connection.php');
$id = null;
$username=null;

session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
	$id = $_SESSION['id'];
	$result = mysqli_query($conn,"select * from users where id = '$id'")
		or die("Failed to query database".mysql_error());
	if((mysqli_num_rows($result))==1){
		foreach($result as $rs){
			$username = $rs['username'];
			
		}
	}else{
		header("location:login.php");
	}


	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont("Arial","B","20");

	
	$pdf->Cell(0,10,"           BIT EXTERNAL DEGREE PROGRAMME        ");
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Cell(0,10,"_________________USER DETAILS_________________");
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Cell(0,10,"username: ".$username);
	
	$pdf->Output();

	
	
}



?>