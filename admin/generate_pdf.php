<?php
//include connection file
include_once("connection.php");
include_once('../libs/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Bike Rent Report ',1,0,'C');
    // Line break
    $this->Ln(10);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',6);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('transaction_id'=>'Transaction ID', 'bike_no'=> 'Bike Number', 'bike_id'=>'Bike ID','extra_days'=>'Extra Days','status'=>'status',
'days'=>'Days','checkin'=>'Book Date/Time','checkin_time'=>'Allocated Time/Date','checkout'=>'Return Date/Time','checkout_time'=>'Return Date','guest_id'=> 'Guest ID','bill'=> 'Bill',);
 
$result = mysqli_query($connString, "SELECT transaction_id, bike_no,guest_id,bike_id,extra_days,status,
days,checkin,checkin_time,checkout,checkout_time,bill FROM transaction") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM transaction");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',6);
foreach($header as $heading) {
$pdf->Cell(20,6,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(20,6,$column,1);
}
$pdf->Output();
?>
