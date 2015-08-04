<?php include('header.php'); 

if(!isset($_SESSION['admin_user_id']))
	{
		include("../login.php");
	}
else{ 

?>
  <style type="text/css">
      
      
      h1, h3 {
        margin: 0;
        padding: 0;
        font-weight: normal;
      }
      
      a {
        color: #000000;
        font-weight: bold;
        padding-left: 20px;
      }
      
      /*div#container {
        width: 580px;
        margin: 100px auto 0 auto;
        padding: 20px;
        background: #000;
        border: 1px solid #1a1a1a;
      }*/
      
      /* HOVER STYLES */
      div#pop-up {
        display: none;
        position: absolute;
        width: 280px;
        padding: 10px;
        background: #eeeeee;
        color: #000000;
        border: 1px solid #1a1a1a;
        font-size: 90%;
      }
    </style>
<div class="container-fluid" id="pcont">	
					
		<div class="cl-mcont">
		
			<div class="row">
				<div class="col-md-12">
					<div class="block-flat">
						<div class="header">							
							<h3><strong>FOLLOW UP</strong></h3>
						</div>
						<div class="content">
							<div class="table-responsive">
								<table class="table table-bordered" id="datatable" >
									<thead>
										<tr>
											<th><strong>DATE</strong></th>
											<th><strong>SERVICE PROVIDER</strong></th>
											<th><strong>SERVICE REQUESTED</strong></th>
											<th><strong>BUSINESS PLANNING</strong></th>
											<th><strong>COUNSELOR</strong></th>
											<th><strong>MWBE</strong></th>
											<th><strong>ACTION</strong></th>
											
										</tr>
									</thead>
									<tbody>
										<?php 
									 		//echo "SELECT id,firstname,lastname,email,cell,address FROM user ORDER BY id DESC";

									 		$followuplist=mysql_query("SELECT * FROM followup ORDER BY id DESC"); 

									 		while($followuprow=mysql_fetch_array($followuplist)){

									 		//print_r($clientrow);

									 		//foreach($clientrow as $ckey=>$cvalue){
									 		?>
												<tr class="odd gradeX">
													<td><?php echo $followuprow['date']; ?></td>
													<td><?php echo $followuprow['servicepro']; ?></td>
													<td><?php echo $followuprow['servreq']; ?></td>
													<td><?php echo $followuprow['bplan']; ?></td>
													<td><?php echo $followuprow['counselor']; ?> 
													<a href="#" id="trigger" title="<?php echo $followuprow['counselor']; ?>" style="float:right;">Read More..</a>
													</td>
													<td><?php echo $followuprow['mplan']; ?></td>
													 <!-- HIDDEN / POP-UP DIV -->
												      
													<td><?php if($followuprow['status']=='open'){ ?>
													<a href="newquery.php?qid=<?php echo $followuprow['id']; ?>">OPEN</a>
													<?php }else{echo $followuprow['status'];}?>
													</td>
													<!--<td>
														<!--<a href="../scripts/followuppdf.php?followup_id=<?php //echo $followuprow['id'];?>" style="text-decoration:none; float:right;">PDF</a>-->
													<!--</td>-->
														
												</tr>

										<?php }?>
									</tbody>
								</table>	
													
							</div>
						</div>
					</div>				
				</div>
			 </div>
		  </div>
		</div> 
	<?php } include('footer.php'); ?>
	  <script type="text/javascript">
      $(function() {
        var moveLeft = 10;
        var moveDown = 10;
        
        $('a#trigger').hover(function(e) {
          $('div#pop-up').show();
          //.css('top', e.pageY + moveDown)
          //.css('left', e.pageX + moveLeft)
          //.appendTo('body');
        }, function() {
          $('div#pop-up').hide();
        });
        
        $('a#trigger').mousemove(function(e) {
          $("div#pop-up").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
        });
        
      });
    </script>