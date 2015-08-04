<style type="text/css">
.member{
  position:relative;
}
</style>      
<!-- Intake Form -->
<div class="container">
    <hr>
    <h4></h4>
    <br>
        <div class="hero-unit" style="height:auto; overflow:hidden; position:relative; display:block;">
            <div class="span12">
                <div class="span8 row" style="width:100%"> 
                  <table style="width:1000px; border:1px solid #FFFFFF; font-size:12px;">
                    <tr style="border:1px solid #FFFFFF;">
                      <th class="listcolor" style="border:1px solid #FFFFFF;">Clientname</th>
                      <th class="listcolor" style="border:1px solid #FFFFFF;">Physical Address</th>
                      <th class="listcolor" style="border:1px solid #FFFFFF;">Cellno</th>
                      <th class="listcolor" style="border:1px solid #FFFFFF;">Action</th>
                    </tr>
                     <?php 

                      $count_userproj = mysql_query("SELECT intk.id,intk.first_name,intk.last_name,intk.physical_address1,intk.physical_address2,intk.telephone FROM intake as intk INNER JOIN userprojects as up ON intk.id=up.clientid WHERE up.uid='".$_SESSION['id']."' AND up.status='open'");
                      $numrows        = mysql_num_rows($count_userproj);
                      if($numrows!=0){
                      while($userprojnotify=mysql_fetch_array($count_userproj))
                      {
                         $uprojtotal  = $numrows;
                         $uprojcid    = $userprojnotify['first_name']." ".$userprojnotify['last_name'];
                         $address     = $userprojnotify['physical_address1']."<br />".$userprojnotify['physical_address2'];
                         $phone       = $userprojnotify['telephone'];
                      // print_r($userprojnotify);
                      
                      ?>
                    <tr>
                      <td class="listtextcolor" style="border:1px solid #FFFFFF;"><?php echo $uprojcid; ?></td>
                      <td class="listtextcolor" style="border:1px solid #FFFFFF;"><?php echo $address; ?></td>
                      <td class="listtextcolor" style="border:1px solid #FFFFFF;"><?php echo $phone; ?></td>
                      <td class="listtextcolor" style="border:1px solid #FFFFFF;"><a href="#" onClick="getPreviousEmployeeDetails(<?php echo $userprojnotify['id'];?>);" title="View Previous Employee Details">Previous Employee</a></td>
                    </tr>
                     <?php } } else {?>
                      <tr><td colspan="3">No Clients Found.</td></tr>

                     <?php } ?>
                  </table>
            </div>
        </div>  
        <div style="margin-top:80px;">

        <div class="span12">
          <div class="span8 row" style="width:100%"> 
            <div id="PreviousEmployeelist">
                 
            </div> 
          </div>
       </div>
       </div>
      </div> 
	  
	  <div style=" height:80px; background-color:#81B56B;">
			<div style="float:right;">
				<a href="http://www.msquaresystems.com/" target="_blank"><p style=" margin-right:20px; margin-top:5px; margin-bottom:0px;background-attachment: scroll;background-clip: border-box;background-color: rgba(0, 0, 0, 0); background-image: url('img/m2systems_logo.png'); background-origin: padding-box; background-repeat: no-repeat; background-size: 200px auto; height:48px; width:200px;"></p></a>
				<p style=" margin-right:20px;margin-bottom:0px; font-size:13px; color:#000;">powered by M-Square Systems Inc.</p>
			</div>
	</div>
    
        
      
</div>
<script type="text/javascript" src="js/validate.js"></script>