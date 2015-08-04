<!--start emp report-->
  <table width="96%" style="//border:1px solid red;">
    <thead>
	<tr style="font-size:14px;">
      <th style="text-align:left; color:#000; background-color:#FFF; border-right:2px solid #8E9CA1;"><strong style="margin-left:3px;">First Name</strong></th>
      <th style="text-align:left; color:#000; background-color:#FFF; border-right:2px solid #8E9CA1;"><strong style="margin-left:3px;">Last Name</strong></th>
      <th style="text-align:left; color:#000; background-color:#FFF; border-right:2px solid #8E9CA1;"><strong style="margin-left:3px;">Phone Number</strong></th>
      <th style="text-align:left; color:#000; background-color:#FFF; border-right:2px solid #8E9CA1;"><strong style="margin-left:3px;">Purpose of the visit</strong></th>
      <th style="text-align:left; color:#000; background-color:#FFF; border-right:2px solid #8E9CA1;"><strong style="margin-left:3px;">Member interested yes/no</strong></th>
      <th style="text-align:left; color:#000; background-color:#FFF; border-right:2px solid #8E9CA1;"><strong style="margin-left:3px;">Business Name</strong></th>
      <th style="text-align:left; color:#000; background-color:#FFF; border-right:2px solid #8E9CA1;"><strong style="margin-left:3px;">Type of business</strong></th>
      <th style="text-align:left; color:#000; background-color:#FFF; border-right:2px solid #8E9CA1;"><strong style="margin-left:3px;">Services of products</strong></th>
      <th style="text-align:left; color:#000; background-color:#FFF; border-right:2px solid #8E9CA1;"><strong style="margin-left:3px;">Counselor notes</strong></th>
      <th style="text-align:left; color:#000; background-color:#FFF; border-right:2px solid #8E9CA1;"><strong style="margin-left:3px;">Counselor Name</strong></th>
    </tr>
  </thead>
  <tbody>
    <?php
    session_start();

    include('../config.php');

	if(isset($_GET['fromdate'])){
		$intakefromdate     = $_GET['fromdate'];
		$intaketodate       = $_GET['todate'];
		
		if($_GET['fromdate']!='' && $_GET['todate']!=''){
			$intakefromdate1    = $intakefromdate;
			$mod_date 			= strtotime($intaketodate."+ 1 days");
			$intaketodate1    	= date("Y-m-d", $mod_date);
	}else{
		$intakefromdate1  = $_GET['fromdate'];
		$mod_date = strtotime($_GET['todate']."+ 1 days");
		$intaketodate1    = date("Y-m-d", $mod_date);
	}
    $typeofbusiness  = '';
	$services_needed = '';
	if($intakefromdate=='' && $intaketodate==''){$dateRange='';}else{$dateRange= " AND created_date BETWEEN '$intakefromdate1' AND '$intaketodate1'";}
		$clientlogQuery	= mysql_query("SELECT intk.id,intk.first_name,intk.last_name,intk.telephone,intk.services_needed,intk.services_need_other_in,intk.membership_want,intk.business_name,intk.typeofbusiness,intk.typeofbusiness_other_in,intk.products_offered,intk.counselor_notes,intk.counselor_name,intk.created_date,intk.time_spent,(SELECT username FROM user as usr WHERE usr.id=intk.user_id ) as cname FROM intake as intk INNER JOIN userprojects as up ON intk.id=up.clientid WHERE 1".$dateRange);
		$clientslog=mysql_num_rows($clientlogQuery);
		if($clientslog>0){
			while($intakevalues = mysql_fetch_array($clientlogQuery)){ 
			
			if(!empty($intakevalues['services_needed'])){
				$services_needed[] = $intakevalues['services_needed'];
			}	
			if(!empty($intakevalues['services_need_other_in'])){
				$services_needed[] = $intakevalues['services_need_other_in'];
			}
			
			if(!empty($intakevalues['typeofbusiness'])){
				$typeofbusiness[] = $intakevalues['typeofbusiness'];
			}	
			if(!empty($intakevalues['typeofbusiness_other_in'])){
				$typeofbusiness[] = $intakevalues['typeofbusiness_other_in'];
			}
	?>
			<tr class="odd gradeX" style="font-size:14px;">
			  <td style="text-align:left; padding-left:5px;"><?php echo $intakevalues['first_name']; ?></td>
			  <td style="text-align:left; padding-left:5px;"><?php echo $intakevalues['last_name']; ?></td>
			  <td style="text-align:left; padding-left:5px;"><?php echo $intakevalues['telephone']; ?></td>
			  <td style="text-align:left; padding-left:5px;"><?php if(!empty($services_needed)){ echo implode(',',$services_needed); } ?></td>
			  <td style="text-align:left; padding-left:5px;"><?php echo $intakevalues['membership_want']; ?></td>
			  <td style="text-align:left; padding-left:5px;"><?php echo $intakevalues['business_name']; ?></td>
			  <td style="text-align:left; padding-left:5px;"><?php if(!empty($typeofbusiness)){ echo implode(',',$typeofbusiness); } ?></td>
			  <td style="text-align:left; padding-left:5px;"><?php echo $intakevalues['products_offered']; ?></td>
			  <td style="text-align:left; padding-left:5px;"><?php echo $intakevalues['counselor_notes']; ?></td>
			  <td style="text-align:left; padding-left:5px;"><?php echo $intakevalues['counselor_name']; ?></td>
			</tr>
	<?php 
			}
		}else{
	?>
			<tr class="odd gradeX">
			  <td style="text-align:center; font-size:28px; color:#005580; font-weight:bold;" colspan="4"><?php echo "No Record Found!";?></td>
			</tr>
	<?php
		}
  
  
   }?>
 </tbody>      
  </table>
<!--end emp report-->
<?php    if($clientslog>0)
   { 
   ?>
<a href="scripts/logspdf.php?fromdate=<?php echo $intakefromdate1;?>&todate=<?php echo $intaketodate1;?>"><strong>DOWNLOAD PDF</strong></a>
<?php
}
?>