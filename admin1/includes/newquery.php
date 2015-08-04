<?php include('header.php'); 

if(!isset($_SESSION['admin_user_id']))
  {
    
    include("../login.php");
    //include("includes/signup.php");
  }
else{ 


if(isset($_POST['newqueryreply']))
{

    $queryid    =   $_POST['queryid'];
    $reply      =   trim($_POST['replyclient']);

   // echo "UPDATE followupform2 SET reply='".$reply."' WHERE id='".$queryid."'";

    $replyQuery =   mysql_query("UPDATE followup SET reply='".$reply."', status='replied' WHERE id='".$queryid."'");

    if(mysql_affected_rows()==1)
    {

        echo "<script type='text/javascript'>alert('Replied Successfully');</script>";
    }

    }
?>

    <div class="container-fluid" id="pcont">
          
    <div class="cl-mcont">
    
      <div class="row">
        <div class="col-md-12">
          <div class="block-flat">
            <div class="header">              
              <h4><strong>New Client Query</strong></h4>
            </div>
            <div class="content">
            <?php
            if(isset($_GET['qid']))
              {

                $queryid      = $_GET['qid'];

                $replyQuery   = mysql_query("SELECT f.id,(SELECT CONCAT(`first_name`, ' ' ,`last_name`) FROM intake as ik WHERE ik.id=f.clientid) as cname,f.counselor,f.reply FROM followup as f WHERE f.id='".$queryid."'");

                while($postquery=mysql_fetch_array($replyQuery))
                {
             ?>
                        <form class="form-horizontal group-border-dashed" name="followquerypost" action="#" style="border-radius: 0px;" method="POST">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Client Name</label>
                            <div class="col-sm-6">
                               <input type="text" class="form-control" name="clientname" id="clientname" style="width:200px;" value="<?php echo $postquery['cname'];?>">
                               <input  type="hidden" name="queryid" id="queryid" value="<?php echo $queryid; ?>">
                             </div>
                           </div>
                           
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Counselor Notes</label>
                            <div class="col-sm-6">   
                              <textarea class="form-control" name="counselornotes" id="counselornotes" style="width:200px;"><?php echo $postquery['counselor'];?></textarea>         
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Reply</label>
                            <div class="col-sm-6">
                                 <textarea class="form-control" name="replyclient" id="replyclient" style="width:200px;">
                                    <?php if(isset($postquery['reply'])){echo $postquery['reply'];} ?>
                                 </textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                               <input type="submit" class="btn btn-primary" name="newqueryreply" id="newqueryreply" style="width:170px;" value="REPLY">  
                            </div>
                          </div>
                        </form>
                        <?php }}?>
                      </div>
                    </div>        
                </div>
            </div>
        </div>
    </div> 
<?php } include('footer.php'); ?>