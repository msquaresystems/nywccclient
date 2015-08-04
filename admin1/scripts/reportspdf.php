<?php
	require('../../scripts/fpdf/fpdf.php');

	//create a FPDF object
	$pdf=new FPDF();

	//set document properties
	$pdf->SetAuthor('');
	$pdf->SetTitle('CLIENT REPORT');

	//set font for the entire document
	$pdf->SetFont('Helvetica','B',20);
	$pdf->SetTextColor(50,60,100);

	//set up a page
	$pdf->AddPage();

	//set initial y axis position per page
	$y_axis_initial = 45;

	//Set Row Height
	$row_height = 6;
	$y_axis = 50;

	//print column titles
	$y_axis = $y_axis + $row_height;
	
	include("../includes/dbcon.php");
	$user 			=	$_GET['uId'];
	$fromdate		=	$_GET['fromdate'];
	$todate			=	$_GET['todate'];
	if($user=='all'){$user='';}else{$user=" AND up.uid='".$user."'";}
    if($fromdate=='' && $todate==''){$dateRange='';}else{$dateRange= " AND created_date BETWEEN '$fromdate' AND '$todate'";}
    $reportsQuery = mysql_query("SELECT 
									up.clientid,
									c.first_name,
									c.last_name,
									c.telephone,
									c.services_needed,
									c.services_need_other_in,
									c.membership_want,
									c.business_name,
									c.typeofbusiness,
									c.typeofbusiness_other_in,
									c.products_offered,
									c.counselor_notes,
									c.counselor_name,
									c.created_date,
									c.time_spent,
									(SELECT ur.username FROM user as ur WHERE ur.id=up.uid) as username 
								FROM 
									intake as c 
								INNER JOIN 
									userprojects as up ON up.clientid=c.id WHERE 1 ".$user.$dateRange);

	//initialize counter
	$i = 0;

	//Set maximum rows per page
	$max = 20;

	//Set Row Height
	$row_height = 6;

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',5);
	$pdf->SetY($y_axis_initial);
	$pdf->SetX(10);
	$pdf->Cell(11,6,'First Name',1,0,'L',1);
	$pdf->Cell(11,6,'Last Name',1,0,'L',1);
	$pdf->Cell(14,6,'Phone Number',1,0,'L',1);
	$pdf->Cell(25,6,'Purpose of the visit',1,0,'L',1);
	$pdf->Cell(24,6,'Member interested yes/no',1,0,'L',1);
	$pdf->Cell(15,6,'Business name',1,0,'L',1);
	$pdf->Cell(25,6,'Type of business',1,0,'L',1);
	$pdf->Cell(25,6,'Services of products',1,0,'L',1);
	$pdf->Cell(25,6,'Counselor notes',1,0,'L',1);
	$pdf->Cell(16,6,'Counselor name',1,0,'L',1);
	
	$typeofbusiness_add  = '';
	$services_needed_add = '';

	while($row=mysql_fetch_array($reportsQuery))
	{
		$username = $row['username'];
		//If the current row is the last one, create new page and print column title
		if ($i == $max)
		{
			$pdf->AddPage();

			//print column titles for the current page
			$pdf->SetY($y_axis_initial);
			$pdf->SetX(10);
			$pdf->Cell(11,6,'First Name',1,0,'L',1);
			$pdf->Cell(11,6,'Last Name',1,0,'L',1);
			$pdf->Cell(14,6,'Phone Number',1,0,'L',1);
			$pdf->Cell(25,6,'Purpose of the visit',1,0,'L',1);
			$pdf->Cell(24,6,'Member interested yes/no',1,0,'L',1);
			$pdf->Cell(15,6,'Business name',1,0,'L',1);
			$pdf->Cell(25,6,'Type of business',1,0,'L',1);
			$pdf->Cell(25,6,'Services of products',1,0,'L',1);
			$pdf->Cell(25,6,'Counselor notes',1,0,'L',1);
			$pdf->Cell(16,6,'Counselor name',1,0,'L',1);
			
			//Go to next row
			$y_axis = $y_axis + $row_height;
			
			//Set $i variable to 0 (first row)
			$i = 0;
		}

		
		$pdf->SetY($y_axis);
		$pdf->SetX(10);
		
		if(!empty($row['services_needed'])){
			$services_needed[] = $row['services_needed'];
		}	
		if(!empty($row['services_need_other_in'])){
			$services_needed[] = $row['services_need_other_in'];
		}

		
		if(!empty($row['typeofbusiness'])){
			$typeofbusiness[] = $row['typeofbusiness'];
		}	
		if(!empty($row['typeofbusiness_other_in'])){
			$typeofbusiness[] = $row['typeofbusiness_other_in'];
		}

		if(!empty($services_needed)){ $services_needed_add = implode(',',$services_needed); } 
		if(!empty($typeofbusiness)){ $typeofbusiness_add = implode(',',$typeofbusiness); } 

		$pdf->Cell(11,6,$row['first_name'],1,0,'L',1);
		$pdf->Cell(11,6,$row['last_name'],1,0,'L',1);
		$pdf->Cell(14,6,$row['telephone'],1,0,'L',1);
		$pdf->Cell(25,6,$services_needed_add,1,0,'L',1);
		$pdf->Cell(24,6,$row['membership_want'],1,0,'L',1);
		$pdf->Cell(15,6,$row['business_name'],1,0,'L',1);
		$pdf->Cell(25,6,$typeofbusiness_add,1,0,'L',1);
		$pdf->Cell(25,6,$row['products_offered'],1,0,'L',1);
		$pdf->Cell(25,6,$row['counselor_notes'],1,0,'L',1);
		$pdf->Cell(16,6,$row['counselor_name'],1,0,'L',1);

		//Go to next row
		$y_axis = $y_axis + $row_height;
		$i = $i + 1;
	}
mysql_close($con);


//Output the document
$pdf->Output('reports/'.$username.'.pdf','F');
$pdf->Output('reports/'.$username.'.pdf','D');
	
?>
