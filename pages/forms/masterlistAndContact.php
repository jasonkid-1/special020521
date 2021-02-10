<?php
require ('../fpdf/fpdf.php');
include '../../includes/session.php';

$server = 'localhost';
    $username = 'root';
    $password = '';
    $dbase = 'enrollment';

    $db = new mysqli($server, $username, $password, $dbase);

    date_default_timezone_set('Asia/Manila');


class PDF extends FPDF
{

// Page header

function Header()
{   
    // Logo(x axis, y axis, height, width)
    $this->Image('../../assets/img/logo.png',27,3,19,19);
    // font(font type,style,font size)
    $this->SetFont('Times','B',28);
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
    
    // //cell(width,height,text,border,end line,[align])
    $this->Cell(0,3,'#96 Bayanan, City of Bacoor, Cavite',0,0,'C');
    // Line break
    $this->Ln(4);
    $this->SetFont('Arial','B',12);
    // //cell(width,height,text,border,end line,[align])
    $this->Cell(0,4,'COLLEGE DEPARTMENT',0,0,'C');
    // Line break
    $this->Ln(8);
    $this->SetFont('Arial','B',14);
    // //cell(width,height,text,border,end line,[align])
    $this->Cell(0,6,'Master List',0,1,'C');
    $this->SetFont('Arial','B',10);
    $this->Cell(0,4,$_SESSION['active_sem'].' '.$_SESSION['active_acad'],0,1,'C');
    $this->Ln(5);

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

$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,"School of Computer Studies",0,1);
$pdf->Cell(0,3,"",0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,5,"Name",1,0);
$pdf->Cell(30,5,"Course",1,0);
$pdf->Cell(36,5,"Contact",1,0);
$pdf->Cell(30,5,"Year Level",1,1);
$pdf->SetFont('Arial','',9);
$x = 1;
$query = mysqli_query($db, "SELECT *,CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname FROM tbl_schoolyears 
                                  LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id
                                  where ay_id = '$_SESSION[active_acad]' and tbl_courses.department_id='3' and sem_id = '$_SESSION[active_sem]' and remark= 'Approved' ORDER BY lastname") or die(mysqli_error($db));
                                while ($row= mysqli_fetch_array ($query))
{   
    $pdf->Cell(6,5,$x,0,0);
    $pdf->Cell(100,5,strtoupper(utf8_decode($row['fullname'])),0,0);
    $pdf->Cell(30,5,$row['course_abv'],0,0);
    $pdf->Cell(36,5,$row['contact'],0,0);
    $pdf->Cell(30,5,$row['year_abv'],0,1);
    $x++;
}
$pdf ->AddPage();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,"School of Hospitality Management",0,1);
$pdf->Cell(0,3,"",0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,5,"Name",1,0);
$pdf->Cell(30,5,"Course",1,0);
$pdf->Cell(36,5,"Contact",1,0);
$pdf->Cell(30,5,"Year Level",1,1);
$pdf->SetFont('Arial','',9);
$x = 1;
$query = mysqli_query($db, "SELECT *,CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname FROM tbl_schoolyears 
                                  LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id
                                  where ay_id = '$_SESSION[active_acad]' and tbl_courses.department_id='6' and sem_id = '$_SESSION[active_sem]' and remark= 'Approved' ORDER BY lastname") or die(mysqli_error($db));
                                while ($row= mysqli_fetch_array ($query))
{   
    $pdf->Cell(6,5,$x,0,0);
    $pdf->Cell(100,5,strtoupper(utf8_decode($row['fullname'])),0,0);
    $pdf->Cell(30,5,$row['course_abv'],0,0);
    $pdf->Cell(36,5,$row['contact'],0,0);
    $pdf->Cell(30,5,$row['year_abv'],0,1);
    $x++;
    if ($x == '56') {
                # code...
                $pdf->AddPage();
                $pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,"School of Hospitality Management",0,1);
$pdf->Cell(0,3,"",0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,5,"Name",1,0);
$pdf->Cell(30,5,"Course",1,0);
$pdf->Cell(36,5,"Contact",1,0);
$pdf->Cell(30,5,"Year Level",1,1);
$pdf->SetFont('Arial','',9);
            }
}
$pdf ->AddPage();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,"School of Education",0,1);
$pdf->Cell(0,3,"",0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,5,"Name",1,0);
$pdf->Cell(30,5,"Course",1,0);
$pdf->Cell(36,5,"Contact",1,0);
$pdf->Cell(30,5,"Year Level",1,1);
$pdf->SetFont('Arial','',9);
$x = 1;
$query = mysqli_query($db, "SELECT *,CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname FROM tbl_schoolyears 
                                  LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id
                                  where ay_id = '$_SESSION[active_acad]' and tbl_courses.department_id='5' and sem_id = '$_SESSION[active_sem]' and remark= 'Approved' ORDER BY lastname") or die(mysqli_error($db));
                                while ($row= mysqli_fetch_array ($query))
{   
    $pdf->Cell(6,5,$x,0,0);
    $pdf->Cell(100,5,strtoupper(utf8_decode($row['fullname'])),0,0);
    $pdf->Cell(30,5,$row['course_abv'],0,0);
    $pdf->Cell(36,5,$row['contact'],0,0);
    $pdf->Cell(30,5,$row['year_abv'],0,1);
    $x++;
}
$pdf ->AddPage();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,"School of Bussiness Administration",0,1);
$pdf->Cell(0,3,"",0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,5,"Name",1,0);
$pdf->Cell(30,5,"Course",1,0);
$pdf->Cell(36,5,"Contact",1,0);
$pdf->Cell(30,5,"Year Level",1,1);
$pdf->SetFont('Arial','',9);
$x = 1;
$query = mysqli_query($db, "SELECT *,CONCAT(tbl_students.lastname, ', ', tbl_students.firstname, ' ', tbl_students.middlename)  as fullname FROM tbl_schoolyears 
                                  LEFT JOIN tbl_students ON tbl_students.stud_id = tbl_schoolyears.stud_id
                                  LEFT JOIN tbl_genders ON tbl_genders.gender_id = tbl_students.gender_id
                                  LEFT JOIN tbl_courses ON tbl_courses.course_id = tbl_schoolyears.course_id
                                  LEFT JOIN tbl_year_levels ON tbl_year_levels.year_id = tbl_schoolyears.year_id
                                  where ay_id = '$_SESSION[active_acad]' and tbl_courses.department_id='4' and sem_id = '$_SESSION[active_sem]' and remark= 'Approved' ORDER BY lastname") or die(mysqli_error($db));
                                while ($row= mysqli_fetch_array ($query))
{   
    $pdf->Cell(6,5,$x,0,0);
    $pdf->Cell(100,5,strtoupper(utf8_decode($row['fullname'])),0,0);
    $pdf->Cell(30,5,$row['course_abv'],0,0);
    $pdf->Cell(36,5,$row['contact'],0,0);
    $pdf->Cell(30,5,$row['year_abv'],0,1);
    $x++;
    if ($x == '56') {
                # code...
                $pdf->AddPage();
                $pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,"School of Bussiness Administration",0,1);
$pdf->Cell(0,3,"",0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,5,"Name",1,0);
$pdf->Cell(30,5,"Course",1,0);
$pdf->Cell(36,5,"Contact",1,0);
$pdf->Cell(30,5,"Year Level",1,1);
$pdf->SetFont('Arial','',9);
            }
}
$pdf ->Output();
?>