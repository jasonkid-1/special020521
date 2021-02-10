<?php
require ('../fpdf/fpdf.php');
include '../../includes/session.php';




class PDF extends FPDF
{

// Page header

function Header()
{   
    // Logo(x axis, y axis, height, width)
    $this->Image('../../assets/img/logo.png',27,3,19,19);
    // font(font type,style,font size)
    $this->SetFont('Times','B',30);
    $this->SetTextColor(255,0,0);
    // Dummy cell
    $this->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $this->Cell(110,5,'Saint Francis of Assisi College',0,0,'C');
    // Line break
    $this->Ln(9);
    $this->SetTextColor(0,0,0);
    $this->SetFont('Arial','',10);
    // dummy cell
    $this->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $this->Cell(90,3,'96 Bayanan, City of Bacoor, Cavite',0,0,'C');
    // Line break
    $this->Ln(11);
    $this->SetFont('Arial','B',14);
    // //cell(width,height,text,border,end line,[align])
    $this->Cell(190,4,'COLLEGE DEPARTMENT',0,0,'C');
    // Line break
    $this->Ln(6);
    $this->SetFont('Arial','B',14);
    // //cell(width,height,text,border,end line,[align])
    $this->Cell(190,8,'PRE-ENROLLMENT FORM',0,1,'C');

}


// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-25);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    $this->SetTextColor(255,0,0);
    // Page number
    $this->Cell(0,5,'',0,1,'C');
    $this->SetFont('Arial','',8);
    $this->SetTextColor(0,0,0);
    $this->Cell(0,5,'',0,0,'R');
}


}

$pdf = new PDF('P','mm','Legal');
//left top right
$pdf->SetMargins(10,10,10);
$pdf ->AddPage();

$pdf->SetFont('Arial','','10');


$pdf ->Cell(40 ,5,'',0,0);
$pdf ->Cell(25 ,5,'','B',0,0);
$pdf ->Cell(45 ,5,'Semester, Academic Year',0,0,'C');
$pdf ->Cell(25 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'-',0,0);
$pdf ->Cell(25 ,5,'','B',0,0);

//Rect(float x, float y, float w, float h [, string style])
$pdf ->SetLineWidth(1);
$pdf ->Rect(8,51,203,93);
//cell(width,height,text,border,end line,[align])

$pdf ->SetLineWidth(.2);
$pdf->Ln(10);
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(23 ,5,'Student No.:',0,0); 
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(47 ,5,'','B',0,'C');
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(16 ,5,'Course:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(112 ,5,'','B',0,'C');


$pdf->Ln(4);

$pdf ->Cell(20 ,3,'',0,1);

$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(30 ,5,'Student Name:',0,0); 
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(56 ,5,'','B',0,'C');
$pdf ->Cell(56 ,5,'','B',0,'C');

$pdf ->Cell(56 ,5,'','B',1,'C');
$pdf ->Ln(1);
$pdf ->Cell(50 ,3,'',0,0); 
$pdf->SetFont('Arial','','8');
$pdf ->Cell(56 ,3,'Surname',0,0);
$pdf ->Cell(56 ,3,'First Name',0,0);
$pdf ->Cell(56 ,3,'Middle Name',0,1);


$pdf ->Cell(20 ,1,'',0,1);
//ADDRESS
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(18 ,5,'Address:',0,0); 
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(180 ,5,'','B',1,'C');

$pdf ->Cell(20 ,3,'',0,1);

$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(25 ,5,'Date of Birth:',0,0); 
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(35 ,5,'','B',0,'C');
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(25 ,5,'Place of Birth:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(48 ,5,'','B',0,'C'); 
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(10 ,5,'Age:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(15 ,5,'','B',0,''); 
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(15 ,5,'Gender:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(25 ,5,'','B',1,'C'); 
//end of line;



$pdf ->Cell(20 ,3,'',0,1);
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(30 ,5,'Contact Number:',0,0); 
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(33 ,5,'','B',0,'C');
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(22 ,5,'Civil Status:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(21 ,5,'','B',0,'C'); 
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(16 ,5,'Religion:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(31 ,5,'','B',0,''); 
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(19 ,5,'Nationality:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(26 ,5,'','B',1,'C');


$pdf ->Cell(20 ,3,'',0,1);
//HIGHSCHOOL & ACADYEAR
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(49 ,5,'Highschool Graduated From:',0,0); 
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(92 ,5,'','B',0,'C');
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(30 ,5,'Year Graduated:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(27 ,5,'','B',1,'C'); //end of line;

$pdf ->Cell(20 ,3,'',0,1);

$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(37 ,5,'School Last Attended:',0,0); 
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(91 ,5,'','B',0,'C');
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(35 ,5,' ACR No.(For Allien) :',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(35 ,5,'','B',1,'C'); 
//end of line;

$pdf ->Cell(20 ,3,'',0,1);

$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(29 ,5,'Name of Father:',0,0); 
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(70 ,5,'','B',0,'C');
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(29 ,5,'Name of Mother:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(70 ,5,'','B',1,'C');


$pdf ->Cell(20 ,3,'',0,1);
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(34 ,5,'Name of Guardian:',0,0); 
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(49 ,5,'','B',0,'C');
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(22 ,5,'Relationship:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(31 ,5,'','B',0,'C');
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(22 ,5,'Occupation:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(40 ,5,'','B',1,'C');

$pdf ->Cell(20 ,3,'',0,1);

$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(37 ,5,'Address of Guardian:',0,0); 
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(82 ,5,'','B',0,'C');
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(37 ,5,'Occupation Number:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(42 ,5,'','B',1,'C');


$pdf ->Cell(20 ,3,'',0,1);

$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(40 ,5,'Monthly Family Income:',0,0); 
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(62 ,5,'','B',0,'C');
$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(33 ,5,'     No. of Siblings:',0,0);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(42 ,5,'','B',1,'C');

//END STUDENT DETAILS;



$pdf ->Cell(20 ,6,'',0,1);

$pdf ->Cell(14 ,5,'NOTE:',0,0);
$pdf ->Cell(8 ,5,'',0,0);
$pdf->SetFont('Arial','I','10.8');
$pdf ->Cell(180 ,5,'Use this form in writing your schedule of subjects from the class scheduled posted on the bulletin board.',0,0);
$pdf ->Cell(20 ,5,'',0,1);
$pdf ->Cell(14 ,5,'',0,0);
$pdf ->Cell(8 ,5,'',0,0);
$pdf ->Cell(180 ,5,'You may choose any subjects from different courses provided that the description / title are the same.',0,1);
$pdf ->Cell(20 ,7,'',0,1);
$pdf->SetFont('Arial','B','12');
$pdf ->Cell(200 ,5,'S U B J E C T S',0,1,'C');
$pdf ->Cell(200 ,2,'',0,1);
$pdf->SetFont('Arial','B','11');
$pdf ->Cell(43 ,5,'   CODE',0,0);
$pdf ->Cell(60 ,5,'DESCRIPTION',0,0);
$pdf ->Cell(25 ,5,'UNITS',0,0);
$pdf ->Cell(30 ,5,'TIME',0,0);
$pdf ->Cell(22 ,5,'DAY',0,0);
$pdf ->Cell(20 ,5,'ROOM',0,1);

$pdf ->Cell(20 ,2,'',0,1);

//CODE
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DESCRIPTION
$pdf ->Cell(75 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//UNITS
$pdf ->Cell(18 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//TIME
$pdf ->Cell(29 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DAY
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//ROOM
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,1);



$pdf ->Cell(20 ,2,'',0,1);
//CODE
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DESCRIPTION
$pdf ->Cell(75 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//UNITS
$pdf ->Cell(18 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//TIME
$pdf ->Cell(29 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DAY
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//ROOM
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,1);

$pdf ->Cell(20 ,2,'',0,1);

//CODE
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DESCRIPTION
$pdf ->Cell(75 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//UNITS
$pdf ->Cell(18 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//TIME
$pdf ->Cell(29 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DAY
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//ROOM
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,1);



$pdf ->Cell(20 ,2,'',0,1);
//CODE
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DESCRIPTION
$pdf ->Cell(75 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//UNITS
$pdf ->Cell(18 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//TIME
$pdf ->Cell(29 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DAY
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//ROOM
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,1);

$pdf ->Cell(20 ,2,'',0,1);

//CODE
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DESCRIPTION
$pdf ->Cell(75 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//UNITS
$pdf ->Cell(18 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//TIME
$pdf ->Cell(29 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DAY
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//ROOM
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,1);



$pdf ->Cell(20 ,2,'',0,1);
//CODE
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DESCRIPTION
$pdf ->Cell(75 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//UNITS
$pdf ->Cell(18 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//TIME
$pdf ->Cell(29 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DAY
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//ROOM
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,1);

$pdf ->Cell(20 ,2,'',0,1);

//CODE
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DESCRIPTION
$pdf ->Cell(75 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//UNITS
$pdf ->Cell(18 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//TIME
$pdf ->Cell(29 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DAY
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//ROOM
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,1);



$pdf ->Cell(20 ,2,'',0,1);
//CODE
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DESCRIPTION
$pdf ->Cell(75 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//UNITS
$pdf ->Cell(18 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//TIME
$pdf ->Cell(29 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DAY
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//ROOM
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,1);

$pdf ->Cell(20 ,2,'',0,1);

//CODE
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DESCRIPTION
$pdf ->Cell(75 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//UNITS
$pdf ->Cell(18 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//TIME
$pdf ->Cell(29 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DAY
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//ROOM
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,1);



$pdf ->Cell(20 ,2,'',0,1);
//CODE
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DESCRIPTION
$pdf ->Cell(75 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//UNITS
$pdf ->Cell(18 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//TIME
$pdf ->Cell(29 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DAY
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//ROOM
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,1);

$pdf ->Cell(20 ,2,'',0,1);

//CODE
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DESCRIPTION
$pdf ->Cell(75 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//UNITS
$pdf ->Cell(18 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//TIME
$pdf ->Cell(29 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DAY
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//ROOM
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,1);



$pdf ->Cell(20 ,2,'',0,1);
//CODE
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DESCRIPTION
$pdf ->Cell(75 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//UNITS
$pdf ->Cell(18 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//TIME
$pdf ->Cell(29 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//DAY
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,0);
//ROOM
$pdf ->Cell(20 ,5,'','B',0,0);
$pdf ->Cell(3 ,5,'',0,1);


$pdf ->Cell(20 ,3,'',0,1);



$pdf->SetFont('Arial','I','10');
$pdf ->Cell(200 ,5,'I hereby declare that all pre - requisite subjects were already taken and passed in accordance with the curriculum prescribed by',0,1);
$pdf ->Cell(200 ,5,'Saint Francis of Assisi College and the Commision on Higher Education.',0,1,'C');


$pdf ->Cell(20 ,8,'',0,1);

$pdf->SetFont('Arial','','10.5');
$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(90 ,5,'Verified by:',0,0);
$pdf ->Cell(90 ,5,'Verified by:',0,1);
$pdf ->Cell(20 ,10,'',0,0);
$pdf ->Cell(70 ,10,'','B',0);
$pdf ->Cell(20 ,10,'',0,0);
$pdf ->Cell(70 ,10,'','B',0);
$pdf ->Cell(20 ,10,'',0,1);
$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(70 ,5,'Student\'s Signature',0,0,'C');
$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(70 ,5,'Program Coordinator',0,0,'C');
$pdf ->Cell(20 ,5,'',0,1);

$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(15 ,5,'Date:',0,0);
$pdf ->Cell(55 ,5,'','B',0);
$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(15 ,5,'Date:',0,0);
$pdf ->Cell(55 ,5,'','B',0);
$pdf ->Cell(20 ,5,'',0,1);
$pdf ->Cell(200 ,5,'',0,1);
$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(70 ,5,'Approved by:',0,0);
$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(70 ,5,'Approved by:',0,0);
$pdf ->Cell(20 ,5,'',0,1);

$pdf ->Cell(20 ,10,'',0,0);
$pdf ->Cell(70 ,10,'','B',0);
$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(70 ,5,'',0,0,'C');
$pdf ->Cell(20 ,5,'',0,1);

$pdf ->Cell(20 ,10,'',0,0);
$pdf ->Cell(70 ,10,'',0,0);
$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(70 ,5,'','B',0,'C');
$pdf ->Cell(20 ,5,'',0,1);

$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(70 ,5,'Enrollment Adviser',0,0,'C');
$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(70 ,5,'College Dean',0,0,'C');
$pdf ->Cell(20 ,5,'',0,1);

$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(15 ,5,'Date:',0,0);
$pdf ->Cell(55 ,5,'','B',0);
$pdf ->Cell(20 ,5,'',0,0);
$pdf ->Cell(15 ,5,'Date:',0,0);
$pdf ->Cell(55 ,5,'','B',0);
$pdf ->Cell(20 ,5,'',0,0);

$pdf ->Output();
?>