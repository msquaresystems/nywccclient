	<?php
	include("../includes/dbcon.php");

	require_once('../htmlpdffile/html2fpdf.php');

	$followup_id		=	$_GET['followup_id'];

	$followupdetails	= 	mysql_query("SELECT id,date,servicepro,servreq,assist,type_assist,bplan,mplan,fplan,bothers,commercial,contract,equip,social,market_sell,exp_imp,otherbd,breg,mwbe,finfo,amt_req,decline,bondentity,bondamt,bidentity,bidamt,bidaward,pentity,pamt,paward,techass,counselor,eimpact FROM followup WHERE id='".$followup_id."'");



	if($followup_id!='')
	{

	while($follow_up=mysql_fetch_array($followupdetails)){
		//echo '121221';

		$fdate 		=	$follow_up['date'];
		$servicepro 		=	$follow_up['servicepro'];
		$servreq 	=	$follow_up['servreq'];
		$assist 	=	$follow_up['assist'];
		$type_assist 	=	$follow_up['type_assist'];
		$bplan 	=	$follow_up['bplan'];
		$mplan 	=	$follow_up['mplan'];
		$fplan = 	$follow_up['fplan'];
		$bothers		=	$follow_up['bothers'];
		$commercial		=	$follow_up['commercial'];
		$contract		=	$follow_up['contract'];
		$equip		=	$follow_up['equip'];
		$social		=	$follow_up['social'];
		$market_sell		=	$follow_up['market_sell'];
		$exp_imp		=	$follow_up['exp_imp'];
		$otherbd		=	$follow_up['otherbd'];
		$breg		=	$follow_up['breg'];
		$mwbe		=	$follow_up['mwbe'];
		$finfo		=	$follow_up['finfo'];
		$amt_req		=	$follow_up['amt_req'];
		$decline	=	$follow_up['decline'];
		$bondentity		=	$follow_up['bondentity'];
		$bondamt		=	$follow_up['bondamt'];
		$bidentity		=	$follow_up['bidentity'];
		$bidamt		=	$follow_up['bidamt'];
		$bidaward		=	$follow_up['bidaward'];
		$pentity	=	$follow_up['pentity'];
		$pamt		=	$follow_up['pamt'];
		$paward		=	$follow_up['paward'];
		$techass	=	$follow_up['techass'];
		$counselor		=	$follow_up['counselor'];
		$eimpact		=	$follow_up['eimpact'];
		}


	//$pdfc	="<div id='intake'><h3><center></center></h3>";
	$fpdfc  =  "<table align=center width=50% height='auto' style='border:2px solid #c3c3c3; padding-top:-150px;'><tr><td colspan=2  align=center><h2>Followup Details</h2></td></tr><br>";
	$fpdfc .=  "<tr><td align=left><h3>Date</h3></td><td>".$fdate."</td></tr><br>";
	$fpdfc .=  "<tr><td align=left><h3>Servicepro</h3></td><td>".$servicepro."</td></tr><br>";		
	$fpdfc .=  "<tr><td align=left><h3>Servicereq</h3></td><td>".$servreq."</td></tr><br>";
	$fpdfc .=  "<tr><td align=left><h3>Assistance</h3></td><td>".$assist."</td></tr><br>";
	$fpdfc .=  "<tr><td align=left><h3>Type of Assistance</h3></td><td>".$type_assist."</td></tr><br>";
	$fpdfc .=  "<tr><td align=left><h3>Business plan</h3></td><td>".$bplan."</td></tr><br>";
	$fpdfc .=  "<tr><td align=left><h3>Market plan</h3></td><td align=left>".$mplan."</td></tr><br>";
	$fpdfc .=  "<tr><td align=left><h3>Financial plan</h3></td><td align=left>".$fplan."</td></tr><br>";
	$fpdfc .=  "<tr><td align=left><h3>Business others</h3></td><td align=left>".$bothers."</td></tr><br>";
	$fpdfc .=  "<tr><td align=left><h3>Commercial</h3></td><td align=left>".$commercial."</td></tr><br>";
	$fpdfc .=  "<tr><td align=left><h3>Contract</h3></td><td align=left>".$contract."</td></tr><br>";
	$fpdfc .=  "<tr><td align=left><h3>Equip</h3></td><td align=left>".$equip."</td></tr><br>";
	$fpdfc .=  "<tr><td align=left><h3>Social</h3></td><td align=left>".$social."</td></tr><br>";
	$fpdfc .=  "</table>";
	//$pdfc .="</div>";
	 //echo $pdfc; 
	 $stringData = $fpdfc; 		   		  
	 $myFile =  "followup.html";  
	 $fh = fopen($myFile, 'w') or die("can't open file");
	 fwrite($fh, $stringData);   
	 fclose($fh);  
	 $htmlFile = $myFile;
	 $buffer = file_get_contents($myFile); 
	 $pdf=new HTML2FPDF();  
	 $pdf->AddPage(); 
	 $pdf->WriteHTML($buffer);
	 $pdffilenm = "followup.pdf";
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
