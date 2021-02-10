<?php
require ('../fpdf/fpdf.php');





class PDF extends FPDF
{

// Page header

}

$pdf = new PDF('P','mm','Legal');
//left right top
$pdf->SetLeftMargin(15);
$pdf->SetRightMargin(24);
$pdf->SetTopMargin(28);
$pdf->SetAutoPageBreak(true, 8);
$pdf ->AddPage();

$pdf ->SetFont('Arial','B',15);
$pdf ->Cell(0,5,'SAINT FRANCIS OF ASSISI COLLEGE',0,1,'C');
$pdf ->SetFont('Arial','',10);
$pdf ->Cell(0,5,'96 Bayanan, Bacoor City, Cavite',0,1,'C');
$pdf ->Cell(0,5,'',0,1);
$pdf ->SetFont('Arial','B',11);
$pdf ->Cell(0,5,'STUDENT\'S PERMANENT RECORD',0,1,'C');
$pdf ->SetFont('Arial','',10);
$pdf ->Cell(0,5,'Collegiate Department',0,1,'C');
$pdf ->Cell(0,10,'',0,1);
$pdf ->Cell(25,5,'Name',0,0,'L');
$pdf ->Cell(3,5,':',0,0);
$pdf ->Cell(74,5,'','B',0);
$pdf ->Cell(34,5,'  Date of Application',0,0,'L');
$pdf ->Cell(3,5,':',0,0);
$pdf ->Cell(36,5,'','B',1);
$pdf ->Cell(25,5,'Date of Birth',0,0,'L');
$pdf ->Cell(3,5,':',0,0);
$pdf ->Cell(74,5,'','B',0);
$pdf ->Cell(34,5,'  Place of Birth',0,0,'L');
$pdf ->Cell(3,5,':',0,0);
$pdf ->Cell(36,5,'','B',1);
$pdf ->Cell(25,5,'Home Address',0,0,'L');
$pdf ->Cell(3,5,':',0,0);
$pdf ->Cell(74,5,'','B',0);
$pdf ->Cell(34,5,'  Telephone No.',0,0,'L');
$pdf ->Cell(3,5,':',0,0);
$pdf ->Cell(36,5,'','B',1);
$pdf ->Cell(25,5,'',0,0,'L');
$pdf ->Cell(3,5,'',0,0);
$pdf ->Cell(74,5,'','B',1);
$pdf ->Cell(3,4.5,'',0,1);

$pdf ->SetFont('Arial','B',10);
$pdf ->Cell(25,5,'RECORD OF PRELIMINARY EDUCATION:',0,1,'L');
$pdf ->SetFont('Arial','',10);
$pdf ->Cell(70,5,'Elementary Grade Completed (School)',0,0,'L');
$pdf ->Cell(70,5,'','B',0);
$pdf ->Cell(3,5,'',0,0);
$pdf ->Cell(14,5,'Year   :',0,0);
$pdf ->Cell(18,5,'','B',1);
$pdf ->Cell(70,5,'High School Course Completed (School)',0,0,'L');
$pdf ->Cell(70,5,'','B',0);
$pdf ->Cell(3,5,'',0,0);
$pdf ->Cell(14,5,'Year   :',0,0);
$pdf ->Cell(18,5,'','B',1);

$pdf ->Cell(3,4.5,'',0,1);
$pdf ->SetFont('Arial','B',10);
$pdf ->Cell(25,5,'ADMISSION CREDENTIALS:',0,1,'L');
$pdf ->Cell(14,5,'',0,0);
$pdf ->Cell(18,5,'',0,0);
$pdf ->Cell(23,5,'','B',0);
$pdf ->SetFont('Arial','',8);
$pdf ->Cell(1,5,'Form 138',0,0);
$pdf ->Cell(14,5,'',0,0);
$pdf ->Cell(18,5,'',0,0);
$pdf ->Cell(21,5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(18,5,'Official Transcript of Records',0,1);
$pdf ->Cell(14,5,'',0,0);
$pdf ->Cell(18,5,'',0,0);
$pdf ->Cell(23,5,'','B',0);	
$pdf ->SetFont('Arial','',8);
$pdf ->Cell(1,5,'Form 137',0,0);
$pdf ->Cell(14,5,'',0,0);
$pdf ->Cell(18,5,'',0,0);
$pdf ->Cell(21,5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(18,5,'Certificate of Good Moral Character',0,1);
$pdf ->Cell(14,5,'',0,0);
$pdf ->Cell(18,5,'',0,0);
$pdf ->Cell(23,5,'',0,0);
$pdf ->SetFont('Arial','',8);
$pdf ->Cell(1,5,'',0,0);
$pdf ->Cell(14,5,'',0,0);
$pdf ->Cell(18,5,'',0,0);
$pdf ->Cell(21,5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(18,5,'NSO / Information Sheet / 2x2, 1x1 pictures',0,1);

$pdf ->Cell(3,4.5,'',0,1);
$pdf ->SetFont('Arial','B',10);
$pdf ->Cell(32,5,'COURSE  :',0,0,'L');
$pdf ->Cell(77,5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(13,5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->SetFont('Arial','',9);
$pdf ->Cell(32,5,'Semester   /   A.Y.',0,0,'C');
$pdf ->Cell(0,5,'','B',1);
$pdf ->Cell(3,5,'',0,1);
$pdf ->Cell(3,5,'',0,1);

$pdf ->SetFont('Arial','B',10);
$pdf ->Cell(31,5,'COURSE CODE',0,0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,5,'DESCRIPTION',0,0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,5,'UNIT',0,0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,5,'GRADE',0,0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16,5,'CREDIT',0,1,'C');

$pdf ->Cell(3,5,'',0,1);
$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,6.5,'','B',0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,6.5,'','B',0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16	,6.5,'','B',1);

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,6.5,'','B',0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,6.5,'','B',0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16	,6.5,'','B',1);

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,6.5,'','B',0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,6.5,'','B',0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16	,6.5,'','B',1);

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,6.5,'','B',0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,6.5,'','B',0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16	,6.5,'','B',1);

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,6.5,'','B',0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,6.5,'','B',0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16	,6.5,'','B',1);

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,6.5,'','B',0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,6.5,'','B',0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16	,6.5,'','B',1);

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,6.5,'','B',0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,6.5,'','B',0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16	,6.5,'','B',1);

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,6.5,'','B',0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,6.5,'','B',0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16	,6.5,'','B',1);

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,6.5,'','B',0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,6.5,'','B',0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16	,6.5,'','B',1);

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,6.5,'','B',0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,6.5,'','B',0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16	,6.5,'','B',1);

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,6.5,'','B',0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,6.5,'','B',0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16	,6.5,'','B',1);

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,6.5,'','B',0,'L');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(95,6.5,'','B',0,'C');
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(12,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(14,6.5,'','B',0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(16	,6.5,'','B',1);

$pdf ->Cell(2,5,'',0,1);
$pdf ->Cell(2,5,'',0,1);
$pdf ->Cell(2,5,'',0,1);

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(31,5,'Prepared by:',0,0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->SetFont('Arial','B',9);
$pdf ->Cell(79,5,'',0,0,'L');
$pdf ->SetFont('Arial','',9);
$pdf ->Cell(16,5,'Noted by:',0,0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->SetFont('Arial','B',9);
$pdf ->Cell(0,5,'',0,1,'L');

$pdf ->SetFont('Arial','',9);
$pdf ->Cell(33,5,'',0,0);
$pdf ->Cell(41,5,'Registrar Personnel',0,0,'C');
$pdf ->Cell(38,5,'',0,0,'C');
$pdf ->Cell(18,5,'',0,0);
$pdf ->Cell(0,5,'OIC, Registrar',0,1,'L');
$pdf ->Cell(0,5,'',0,1);

$pdf ->Cell(31,5,'Date:',0,0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(41,5,'','B',0,'C');
$pdf ->Cell(38,5,'',0,0);
$pdf ->Cell(16,5,'Date:',0,0);
$pdf ->Cell(2,5,'',0,0);
$pdf ->Cell(0,5,'','B',0,'C');





$pdf ->Output();
?>