<div class="span4 row" style="float:left;margin-left:125px;">
<label><b>Lastname</b></label>
</div>
<div class="span4 row" style="float:left;margin-left:-185px;">
<?php 
    $con=mysql_connect("localhost","root","C@ps1MYSQL");
    if(!$con)
    {
    die('could not connect'.mysql_error());
    }
    $db='NYWCC';
    mysql_select_db($db);

    $ClientId 	= $_GET['cntid'];
        

	//echo "SELECT id,lastname,cellno,workphone,homephone FROM intake WHERE id ='".$ClientId."'";
    
    $getClientt = mysql_query("SELECT id,lastname FROM intake WHERE firstname ='".$ClientId."'");
    ?>
<select id="clientlastname" name="clientlastname">
	<option value="select"><--Select Lastname--></option>
	<?php
    $ltrows = mysql_num_rows($getClientt);
    if($ltrows>0){
	while($Clientdetailss = mysql_fetch_array($getClientt)){
	 ?>
	 <option value="<?php echo $Clientdetailss['lastname'];?>"><?php echo $Clientdetailss['lastname']; ?></option>
	<?php }}else{?>
    <option value="No">No Lastname Found.</option>
    <?php }?>
</select>
</div>
<div class="span3 row" style="margin-left:-90px;"><span id="search_err_lastname_msg" style="color:blue;font-size:12px;font-weight:bold;"></span></div>
<div class="span4 row" style="float:left;margin-left:125px;">
<label><b>Cell No</b></label>
</div>
<div class="span4 row" style="float:left;margin-left:-185px;">
<select id="clientcellno" name="clientcellno">
    <option value="select"><--Select Cell Number--></option>
    <?php
    $getCtt = mysql_query("SELECT id,cellno FROM intake WHERE firstname ='".$ClientId."'");
    $celrow = mysql_num_rows($getCtt);
    if($celrow>0)
    {
    while($Cellno = mysql_fetch_array($getCtt)){
     ?>
     <option value="<?php echo $Cellno['cellno'];?>"><?php echo $Cellno['cellno']; ?></option>
    <?php }}else{?>
    <option value="No">No Cell Number Found.</option>
    <?php }?>
</select>
</div>
<div class="span3 row" style="margin-left:-90px;"><span id="search_err_cell_msg" style="color:blue;font-size:12px;font-weight:bold;"></span></div>
<div class="span4 row" style="float:left;margin-left:125px;">
<label><b>Work Phone</b></label>
</div>
<div class="span4 row" style="float:left;margin-left:-185px;">
<select id="clientworkno" name="clientworkno">
    <option value="select"><--Select Work Phone--></option>
    <?php
    $getwkph = mysql_query("SELECT id,workphone FROM intake WHERE firstname ='".$ClientId."'");
    $wknows  = mysql_num_rows($getwkph);
    if($wknows>0){
    while($workph = mysql_fetch_array($getwkph)){
     ?>
     <option value="<?php echo $workph['workphone'];?>"><?php echo $workph['workphone']; ?></option>
    <?php }}else{?>
    <option value="No">No Workphone Found.</option>
    <?php } ?>
</select>
</div>
<div class="span3 row" style="margin-left:-90px;"><span id="search_err_workphone_msg" style="color:blue;font-size:12px;font-weight:bold;"></span></div>
<div class="span4 row" style="float:left;margin-left:125px;">
<label><b>Home Phone</b></label>
</div>
<div class="span4 row" style="float:left;margin-left:-185px;">
<select id="clienthomeno" name="clienthomeno">
    <option value="select"><--Select Home Phone--></option>
    <?php
    $gethomephone = mysql_query("SELECT id,homephone FROM intake WHERE firstname ='".$ClientId."'");
    $hprows       = mysql_num_rows($gethomephone);
    if($hprows>0){
    while($homeph = mysql_fetch_array($gethomephone)){
     ?>
     <option value="<?php echo $homeph['homephone'];?>"><?php if($homeph['homephone']!=''){ echo $homeph['homephone'];}else{echo "No Homephone Found.";} ?></option>
    <?php }}else{?>
    <option value="No">No Homephone Found.</option>
    <?php } ?>
</select>
</div>
<div class="span3 row" style="margin-left:-90px;"><span id="search_err_homephone_msg" style="color:blue;font-size:12px;font-weight:bold;"></span></div>
<div class="span4 row"></div>
 <div class="span4 row">
    <input type="submit" name="search" class="btn btn-large" style="height:40px;" value="search">   
</div>
<div class="span3 row"></div>