	<?php
	include("../includes/dbcon.php");

	require_once('htmlpdffile/html2fpdf.php');

	$client_id		=	$_GET['client_id'];

	$clientdetails	= 	mysql_query("SELECT id,client_name,business_name,addr,contact,client_loc,b_profile,member,service_area,b_course FROM intake WHERE id='".$client_id."'");



	if($client_id!='')
	{

	while($clientdtails=mysql_fetch_array($clientdetails)){
		//echo '121221';

		$cname 		=	$clientdtails['client_name'];
		$bname 		=	$clientdtails['business_name'];
		$address 	=	$clientdtails['addr'];
		$contact 	=	$clientdtails['contact'];
		$bprofile 	=	$clientdtails['b_profile'];
		$member 	=	$clientdtails['member'];
		$memberdat 	=	$clientdtails['member_date'];
		$serviceare = 	$clientdtails['service_area'];
		$title		=	$clientdtails['title'];
		$descrp		=	$clientdtails['description'];
		$time		=	$clientdtails['time'];
		$duratn		=	$clientdtails['duration'];
		$fname		=	$clientdtails['id'];


		

	}


	//$pdfc	="<div id='intake'><h3><center></center></h3>";
	$pdfc  =  "<table align='center' width=50% height='auto' style='border:2px solid #c3c3c3; padding-top:-150px;'><tr><td colspan=2 align='center'><h2>CLIENT INTAKE DETAILS</h2></td></tr><br>";
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>NAME</h3></td><td>".$cname."</td></tr><br>";
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>BUSINESS NAME</h3></td><td>".$bname."</td></tr><br>";		
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>ADDRESS</h3></td><td>".$address."</td></tr><br>";
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>CONTACT DETAILS</h3></td><td>".$contact."</td></tr><br>";
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>DEMOGRAPHICS</h3></td><td>".$location."</td></tr><br>";
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>BUSINESS PROFILE</h3></td><td>".$bprofile."</td></tr><br>";
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>MEMBER</h3></td><td align=left>".$member."</td></tr><br>";
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>MEMBER DATE</h3></td><td align=left>".$memberdat."</td></tr><br>";
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>SERVICE AREA</h3></td><td align=left>".$serviceare."</td></tr><br>";
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>TITLE</h3></td><td align=left>".$title."</td></tr><br>";
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>DESCRIPTION</h3></td><td align=left>".$descrp."</td></tr><br>";
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>TIME</h3></td><td align=left>".$time."</td></tr><br>";
	$pdfc .=  "<tr><td align='left' style='line-height: 10px;font-size: 14px;'><h3>DURATION</h3></td><td align=left>".$duratn."</td></tr><br>";
	$pdfc .=  "</table>";
	//$pdfc .="</div>";
	 //echo $pdfc; 
	 $stringData = $pdfc; 		   		  
	 $myFile =  $cname.".html";  
	 $fh = fopen($myFile, 'w') or die("can't open file");
	 fwrite($fh, $stringData);   
	 fclose($fh);  
	 $htmlFile = $myFile;
	 $buffer = file_get_contents($myFile); 
	 $pdf=new HTML2FPDF();  
	 $pdf->AddPage(); 
	 $pdf->WriteHTML($buffer);
	 $pdffilenm = $cname.".pdf";
	 $pdf->Output($pdffilenm); 

	header('Pragma: public'); 	// required
	header('Expires: 0');		// no cache
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime ($pdffilenm)).' GMT');
	header('Cache-Control: private',false);
	header('Content-Type: application/pdf');
	header('Content-Disposition: attachment; filename="'.basename($pdffilenm).'"');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: '.filesize($pdffilenm));	// provide file size
	header('Connection: close');
	readfile($pdffilenm);		// push it out
	unlink($myFile);
	exit();

	
	}
?>
