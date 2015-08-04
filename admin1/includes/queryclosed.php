<?php 

include('header.php'); 

if(isset($_POST['queryreply']))
{

    $queryid    =   $_POST['queryid'];
    $reply      =   trim($_POST['replyclient']);

   // echo "UPDATE followupform2 SET reply='".$reply."' WHERE id='".$queryid."'";

    $replyQuery =   mysql_query("UPDATE followupform2 SET reply='".$reply."', status='replied' WHERE id='".$queryid."'");

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
              <h4><strong>Client Query</strong></h4>
            </div>
            <div class="content">
            <?php
            if(isset($_GET['qid']))
              {

                $queryid      = $_GET['qid'];

                $replyQuery   = mysql_query("SELECT id,f2_clientname,f2_breason,f2_counselnotes,reply FROM followupform2 WHERE id='".$queryid."'");

                while($postquery=mysql_fetch_array($replyQuery))
                {
             ?>
                        <form class="form-horizontal group-border-dashed" name="querypost" action="#" style="border-radius: 0px;" method="POST">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Client Name</label>
                            <div class="col-sm-6">
                               <input type="text" class="form-control" name="f2_clientname" id="f2_clientname" style="width:200px;" value="<?php echo $postquery['f2_clientname'];?>">
                               <input  type="hidden" name="queryid" id="queryid" value="<?php echo $queryid; ?>">
                             </div>
                           </div>
                           <div class="form-group">
                            <label class="col-sm-3 control-label">Reason For Visit</label>
                            <div class="col-sm-6">
                                <textarea name="f2_breason" id="f2_breason" class="form-control" style="width:200px;" ><?php $postquery['f2_breason']; ?></textarea>
                            </div>
                           </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Counselor Notes</label>
                            <div class="col-sm-6">   
                              <textarea class="form-control" name="f2_counselnotes" id="f2_counselnotes" style="width:200px;"><?php echo $postquery['f2_counselnotes'];?></textarea>         
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
                               <input type="submit" class="btn btn-primary" name="queryreply" id="queryreply" style="width:170px;" value="REPLY">  
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
<?php include('footer.php'); ?>