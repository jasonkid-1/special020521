<?php
require ('../fpdf/fpdf.php');




class PDF extends FPDF
{

// Page header

}

$pdf = new PDF('L','mm',array(165,139));
//left top right
$pdf->SetLeftMargin(13);
$pdf->SetRightMargin(10);
$pdf->SetAutoPageBreak(true, 8);
$pdf ->AddPage();

    // Logo(x axis, y axis, height, width)
    $pdf->Image('../../assets/img/logo.png',33,9,10,10);
    // text color
    $pdf->SetTextColor(255,0,0);
    // font(font type,style,font size)
    $pdf->SetFont('Arial','B',11);
    // Dummy cell
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(151,5,'SAINT FRANCIS OF ASSISI COLLEGE',0,1,'C');
    // Line break
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',11,'C');
    // dummy cell
    // //cell(width,height,text,border,end line,[align])
    $test = utf8_decode("Piñas");
    $pdf->Cell(151,5,'Las ' .$test. '- Taguig - Cavite - Alabang - Laguna',0,1,'C');
    // Line break
    $pdf->Ln(2);
    $pdf->SetFont('Arial','',11);
    // dummy cell
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(13,4,'Name:',0,0);
    $pdf->Cell(35,4,'','B',0,'C');
    $pdf->Cell(35,4,'','B',0,'C');
    $pdf->Cell(35,4,'','B',0,'C');
    $pdf->Cell(5);
    $pdf->Cell(0,4,'','B',1,'C');

    $pdf->Ln(1);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(13,3,'',0,0);
    $pdf->Cell(35,3,'(Family Name)',0,0,'C');
    $pdf->Cell(35,3,'(First Name)',0,0,'C');
    $pdf->Cell(35,3,'(Middle Name)',0,0,'C');
    $pdf->Cell(5);
    $pdf->Cell(0,3,'Gender',0,1,'C');

    $pdf->Ln(1);
    $pdf->SetFont('Arial','',9);
    $pdf->Cell(18,4,'Student No.',0,0);
    $pdf->Cell(23,4,'','B',0,'C');
    $pdf->Cell(2);
    $pdf->Cell(20,4,'School Year:',0,0);
    $pdf->Cell(20,4,'','B',0,'C');
    $pdf->Cell(2);
    $pdf->Cell(10,4,'Date:',0,0);
    $pdf->Cell(20,4,'','B',0,'C');
    $pdf->Cell(5);
    $pdf->Cell(0,4,'Sem/Term:',0,1);

    $pdf->SetFont('Arial','',8);
    $pdf->Cell(120,4,'',0,0);
    $pdf->Cell(3,3,'',1,0,'C');
    $pdf->Cell(0,3,'1st Semester',0,1);

    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(30,6,'COURSE:','T,L,B',0);
    $pdf->Cell(85,6,'','T,R,B',0,'C');
    $pdf->Cell(5);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(3,3,'',1,0,'C');
    $pdf->Cell(0,3,'2nd Semester',0,1);

    $pdf->Cell(115,3,'',0,0,'C');
    $pdf->Cell(5);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(3,3,'',1,0,'C');
    $pdf->Cell(0,3,'Summer',0,1);

    $pdf->Ln(4);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(40,4,'COURSE NUMBER','T,L',0,'C');
    $pdf->Cell(15,7,'Units','T,L,B',0,'C');
    $pdf->Cell(15,7,'Days','T,L,B',0,'C');
    $pdf->Cell(15,7,'Time','T,L,B',0,'C');
    $pdf->Cell(10,7,'Room','T,L,R,B',0,'C');
    $pdf->Cell(17,4,'Final','T',0,'C');
    $pdf->Cell(0,7,'Professor',1,0,'C');
    $pdf->Cell(0,4,'',0,1);

    $pdf->Cell(40,3,'(SUBJECTS)','L,B',0,'C');
    $pdf->Cell(55,3,'',0,0);
    $pdf->Cell(17,3,'Rating','B',0,'C');


//SUBJECT LIST HERE
    $pdf->Rect(13,55,40,50);
    $pdf->Rect(68,55,15,50);
    $pdf->Rect(98,55,10,50);
    $pdf->Rect(125,55,30,50);

    $pdf->SetXY(13,100);
    $pdf->Cell(0,1,'',1,0);

    $pdf->SetXY(13,105);
    $pdf->Cell(18,4.5,'No. of class','L,T',0,'C');
    $pdf->Cell(15,8,'',1,0,'C');
    $pdf->Cell(15,4.5,'Total','T',0,'C');
    $pdf->Cell(15,4.5,'Total Fees','L,T',0,'C');
    $pdf->Cell(40,4.5,'Adviser\'s Signature','R,L,T',0,'C');
    $pdf->Cell(0,4.5,'VERIFIED BY:','R,T',1,'C');

    $pdf->Cell(18,3.5,'cards issued:','L,B',0,'C');
    $pdf->Cell(15,3.5,'',0,0,'C');
    $pdf->Cell(15,3.5,'Units/Load','B',0,'C');
    $pdf->Cell(15,3.5,'(PhP)','L,B',0,'C');
    $pdf->Cell(40,3.5,'Over Printed Name','R,L',0,'C');
    $pdf->Cell(0,3.5,'','R',1,'C');

    $pdf->Cell(18,7,'cards issued:','L,B',0,'C');
    $pdf->Cell(15,7,'','B,L,R',0,'C');
    $pdf->Cell(15,7,'','B',0,'C');
    $pdf->Cell(15,7,'','L,B',0,'C');
    $pdf->Cell(40,7,'','R,L,B',0,'C');
    $pdf->Cell(0,4,'','R',1,'C');

    $pdf->Cell(103);
    $pdf->Cell(0,3,'Dean/Chairperson','R,B',1,'C');

    $pdf->Ln(3);
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,8,'DEAN\'S COPY',0,1,'C');



    $pdf->SetLeftMargin(13);
    $pdf->SetRightMargin(10);
    $pdf->SetAutoPageBreak(true, 8);
    $pdf ->AddPage();

    // Logo(x axis, y axis, height, width)
    $pdf->Image('../../assets/img/logo.png',33,9,10,10);
    // text color
    $pdf->SetTextColor(255,0,0);
    // font(font type,style,font size)
    $pdf->SetFont('Arial','B',11);
    // Dummy cell
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(151,5,'SAINT FRANCIS OF ASSISI COLLEGE',0,1,'C');
    // Line break
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',11,'C');
    // dummy cell
    // //cell(width,height,text,border,end line,[align])
    $test = utf8_decode("Piñas");
    $pdf->Cell(151,5,'Las ' .$test. '- Taguig - Cavite - Alabang - Laguna',0,1,'C');
    // Line break
    $pdf->Ln(2);
    $pdf->SetFont('Arial','',11);
    // dummy cell
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(13,4,'Name:',0,0);
    $pdf->Cell(35,4,'','B',0,'C');
    $pdf->Cell(35,4,'','B',0,'C');
    $pdf->Cell(35,4,'','B',0,'C');
    $pdf->Cell(5);
    $pdf->Cell(0,4,'','B',1,'C');

    $pdf->Ln(1);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(13,3,'',0,0);
    $pdf->Cell(35,3,'(Family Name)',0,0,'C');
    $pdf->Cell(35,3,'(First Name)',0,0,'C');
    $pdf->Cell(35,3,'(Middle Name)',0,0,'C');
    $pdf->Cell(5);
    $pdf->Cell(0,3,'Gender',0,1,'C');

    $pdf->Ln(1);
    $pdf->SetFont('Arial','',9);
    $pdf->Cell(18,4,'Student No.',0,0);
    $pdf->Cell(23,4,'','B',0,'C');
    $pdf->Cell(2);
    $pdf->Cell(20,4,'School Year:',0,0);
    $pdf->Cell(20,4,'','B',0,'C');
    $pdf->Cell(2);
    $pdf->Cell(10,4,'Date:',0,0);
    $pdf->Cell(20,4,'','B',0,'C');
    $pdf->Cell(5);
    $pdf->Cell(0,4,'Sem/Term:',0,1);

    $pdf->SetFont('Arial','',8);
    $pdf->Cell(120,4,'',0,0);
    $pdf->Cell(3,3,'',1,0,'C');
    $pdf->Cell(0,3,'1st Semester',0,1);

    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(20,6,'COURSE:',1,0);
    $pdf->Cell(70,6,'','T,R,B',0,'C');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(25,3,'Year Level','T,R,B',0,'C');
    $pdf->Cell(5);
    $pdf->Cell(3,3,'',1,0,'C');
    $pdf->Cell(0,3,'2nd Semester',0,1);

    $pdf->Cell(90,3,'',0,0,'C');
    $pdf->Cell(25,3,'','R,B',0,'C');
    $pdf->Cell(5);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(3,3,'',1,0,'C');
    $pdf->Cell(0,3,'Summer',0,1);

    $pdf->Ln(1);
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(37,0.5,'','T,L,R',0,'C');
    $pdf->Cell(15,0.5,'','T,L,R',0,'C');
    $pdf->Cell(15,0.5,'','T,L,R',0,'C');
    $pdf->Cell(15,0.5,'','T,L,R',0,'C');
    $pdf->Cell(20,0.5,'','T,L,R',0,'C');
    $pdf->Cell(20,0.5,'','T,L,R',0,'C');
    $pdf->Cell(20,0.5,'','T,L,R',1,'C');

    $pdf->Cell(37,3,'COURSE NUMBER','L,R',0,'C');
    $pdf->Cell(15,6,'DAYS','L,R,B',0,'C');
    $pdf->Cell(15,6,'TIME','L,R,B',0,'C');
    $pdf->Cell(15,6,'ROOM','L,R,B',0,'C');
    $pdf->Cell(20,3,'FEES','L,R,B',0,'C');
    $pdf->Cell(20,3,'Amount','L,R,B',0,'C');
    $pdf->Cell(20,3,'Adj. Amt.','L,R,B',1,'C');

    $pdf->Cell(37,3,'(SUBJECTS)','L,R,B',0,'C');
    $pdf->Cell(45);
    $pdf->Cell(20,3,'Miscellaneous','L,R,B',0);
    $pdf->Cell(20,3,'','L,R,B',0);
    $pdf->Cell(20,3,'','L,R,B',1);

    $pdf->Rect(13,51.5,37,37);
    $pdf->Rect(50,51.5,15,37);
    $pdf->Rect(65,51.5,15,37);
    $pdf->Rect(80,51.5,15,37);

    $pdf->SetXY(95,51.5);
    $pdf->Cell(20,3,'Tuition','L,R,B',0);
    $pdf->Cell(20,3,'','L,R,B',0);
    $pdf->Cell(20,3,'','L,R,B',1);

    $pdf->SetX(95);
    $pdf->Cell(20,3,'Laboratory','L,R,B',0);
    $pdf->Cell(20,3,'','L,R,B',0);
    $pdf->Cell(20,3,'','L,R,B',1);

    $pdf->SetX(95);
    $pdf->Cell(20,3,'NSTP','L,R,B',0);
    $pdf->Cell(20,3,'','L,R,B',0);
    $pdf->Cell(20,3,'','L,R,B',1);

    $pdf->SetX(95);
    $pdf->Cell(20,3,'Other Fees','L,R,B',0);
    $pdf->Cell(20,3,'','L,R,B',0);
    $pdf->Cell(20,3,'','L,R,B',1);

    $pdf->SetX(95);
    $pdf->Cell(20,3,'TOTAL','L,R,B',0);
    $pdf->Cell(20,3,'','L,R,B',0);
    $pdf->Cell(20,3,'','L,R,B',1);


    $pdf->SetX(95);
    $pdf->SetFont('Arial','',5);
    $pdf->Cell(60,3,'ABOVE FEES SUBJECT TO CORRECTION','L,R',1,'C');

    $pdf->SetX(95);
    $pdf->Cell(60,3,'CHECK BASIS OF ASSESSMENT BELOW','L,R',1,'C');

    $pdf->SetX(95);
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(15);
    $pdf->Cell(5,3,'',1,0,'C');
    $pdf->Cell(0,3,'Cash Basis',0,1);

    $pdf->SetX(95);
    $pdf->Cell(15);
    $pdf->Cell(5,3,'',1,0,'C');
    $pdf->Cell(0,3,'Installment Basis',0,1);

    $pdf->SetX(95);
    $pdf->SetFont('Arial','',6);
    $pdf->Cell(0,3,'Enrollment Good Only For This Semester',0,1,'C');

    $pdf->Rect(95,72.5,60,9);

    $pdf->SetXY(95,81.5);
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(36,3.5,'Amount Paid','R',0);
    $pdf->Cell(24,3.5,'','R',1);
    
    $pdf->SetX(95);


    $pdf->Cell(36,3.5,'','R,B',0);
    $pdf->Cell(24,3.5,'Cashier','R,B',1,'C');

    $pdf->Cell(0,1,'',1,1);

    $pdf->Cell(22,3,'Checked by:','L',0,'C');
    $pdf->Cell(22,3,'Total Loads/Units','L',0,'C');
    $pdf->Cell(38,3,'Verified by:','L,R',1,'C');

    $pdf->Cell(22,3,'','L',0);
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(22,6,'','L',0,'C');
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(38,3,'','L,R',1);

    $pdf->Cell(22,3,'Adviser','L',0,'C');
    $pdf->Cell(22);
    $pdf->Cell(38,3,'Dean/Chairperson','L,R',1,'C');

    $pdf->Cell(82,5,'CHANGE OF SUBJECT/LOAD',1,1,'C');

    $pdf->Cell(33,5,'Subject/s Added',1,0,'C');
    $pdf->Cell(8,5,'Units',1,0,'C');
    $pdf->Cell(33,5,'Subject/s Dropped',1,0,'C');
    $pdf->Cell(8,5,'Units',1,1,'C');

    $pdf->Cell(33,5,'',1,0,'C');
    $pdf->Cell(8,5,'',1,0,'C');
    $pdf->Cell(33,5,'',1,0,'C');
    $pdf->Cell(8,5,'',1,1,'C');

    $pdf->Cell(33,5,'',1,0,'C');
    $pdf->Cell(8,5,'',1,0,'C');
    $pdf->Cell(33,5,'',1,0,'C');
    $pdf->Cell(8,5,'',1,1,'C');

    $pdf->Cell(33,5,'',1,0,'C');
    $pdf->Cell(8,5,'',1,0,'C');
    $pdf->Cell(33,5,'',1,0,'C');
    $pdf->Cell(8,5,'',1,1,'C');

    $pdf->SetXY(95,90.5);
    $pdf->SetFont('Arial','B',7);
    $pdf->Cell(0,5,'ACCOUNTING STAMP & REMARKS',0,1);
    

    $pdf->Rect(95,89.5,60,34);

    $pdf->SetXY(13,123);

    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,8,'ACCOUNTING\'S COPY',0,1,'C');
    $pdf->Image('../../assets/img/peso.png',95,85,4,4);

$pdf ->Output();
?>