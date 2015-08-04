
<style type="text/css">    
.label
    {
        font-family: Verdana;
        font-size: medium;
        font-weight: bold;
        color: #000000;
    }
.click
    {
        font-family: Verdana;
        font-size: medium;
        font-weight: bold;
        color: #000000;
        padding:300px;
    }

.Title
    {
        font-family: Verdana;
        font-size: large;
        font-weight: bold;
        color: #FF9900;
    }
    .scrollevent{

     /* overflow-y:auto;*/
    }
#Button1
    {
        width: 64px;
         font-family: Verdana;
        font-size: medium;
        font-weight: bold;
        background-color:Teal;
        color:#FFF;
    }
.black_overlay
	{
	  display: none;
	  position: absolute;
	  top: 0%;
	  left: 0%;
	  width: 100%;
	  height: 100%;
	  background-color: black;
	  z-index:1001;
	  -moz-opacity: 0.8;
	  opacity:.80;
	  filter: alpha(opacity=80);
	}
.white_content 
	{
	  display: none;
	  position: absolute;
	  top: 25%;
	  left: 25%;
	  width: 50%;
	  height: 50%;
	  padding: 16px;
	  border: 16px solid #33ccff;
	  background-color: white;
	  z-index:1002;
	  /*overflow: auto;*/
	}
.aa{
  display: none;
}
.ff
{
  display: none;
}
.aaa{
  display: block;
}
.listcolor
{
  color:#000000;
  text-transform: uppercase;
  font-size: 10px;

}
.listtextcolor
{
  font-size: 12px;
}
</style>		

<?php 
    $con=mysql_connect("localhost","root","C@ps1MYSQL");
    if(!$con)
    {
    die('could not connect'.mysql_error());
    }
    $db='NYWCC';
    mysql_select_db($db);

    function explodeX( $delimiters, $string )
    {
        
        return explode( chr( 1 ), str_replace( $delimiters, chr( 1 ), $string));
    }
    

/*function checkStringText($str) {
  // checks proper syntax
  //if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/" , $firstname)) {
  //Removes white space, null, tabs, new lines from both sides
  trim($str);
  // Strips HTML Tags
  strip_tags($str);
  if(preg_match("/^[0-9]+:[X-Z]+$/D",$str)) {
    echo "special char found!";
  }
}*/


    $search       = $_REQUEST['clients'];
  
    $exploded     = explode(',',$search);

    $filtersearch = $exploded;

    $count        = sizeof($filtersearch);

    
       if($count==3){

          $firstname    = trim($filtersearch[0]);
          $lastname     = trim($filtersearch[1]);
          $cellno       = trim($filtersearch[2]);

          $searchquery  = " AND firstname='".$firstname."' AND lastname='".$lastname."' AND cellno='".$cellno."'";
       }
       else if($count==2){

          $firstname  = trim($filtersearch[0]);
          $lastname   = trim($filtersearch[1]);

          $searchquery  = " AND firstname='".$firstname."' AND lastname='".$lastname."'";  
       }
       else if(is_string($search) || is_numeric($search)){

            $ssn      = trim($filtersearch[0]);
            $removesn  = preg_replace('/[^0-9]/','',$ssn);

            if(is_string($ssn)){$searchquery= " AND firstname='".$ssn."' OR lastname='".$ssn."'";}
            if(is_numeric($removesn)){$searchquery= " AND ssn='".$removesn."' OR cellno ='".$removesn."'";}  
       }

  if($search)
  {
   //echo "SELECT id,firstname,lastname,homephone,cellno,ssn,address1,description,duration,member_date FROM intake WHERE 1".$searchquery;
    
  	$checkclientexist=mysql_query("SELECT id,firstname,lastname,homephone,cellno,ssn,address1,description,duration,member_date FROM intake WHERE 1".$searchquery);

    $num_rows=mysql_num_rows($checkclientexist);
  	if($num_rows>0)
  	{
      while($clientExists=mysql_fetch_array($checkclientexist))
      {
		    $cid 	     =$clientExists['id'];
		    $firstname =$clientExists['firstname'];
		    $lastname  =$clientExists['lastname'];
		    $homephone =$clientExists['homephone'];
		    $cellno    =$clientExists['cellno'];
		    $ssn       =$clientExists['ssn'];
		    $address   =$clientExists['address1'];
		    $memberdate=$clientExists['member_date'];
		    $duration  =$clientExists['duration'];
		    $descriptn =$clientExists['description'];
  	  }
//        echo "SELECT id,(SELECT visitdate FROM followupform2 WHERE clientid='".$cid."') as lastvisit FROM followup WHERE clientid='".$cid."'";

    $Alreadyclientexists =  mysql_query("SELECT id,(SELECT visitdate FROM followupform2 WHERE clientid='".$cid."') as lastvisit FROM followup WHERE clientid='".$cid."'");

    $nrows       			   = mysql_num_rows($Alreadyclientexists);

    while($lastvisitdt= mysql_fetch_array($Alreadyclientexists)){$lastdate=$lastvisitdt['lastvisit'];}

    if($nrows==0){
?>
<p>Last Visited: <?php if(isset($lastdate)){echo $lastdate;} ?></p> 
<div class="span12 row" style="margin-top:80px;color:#fff;">  
<div class="span2 row">
  <center><a id="showfolowup1" style="color:#ffffff;">
          <img src="img/followup.png" title="View Intake Details"  width="25" height="25"/>Followup1
          </a>
    </center>
</div>
<div class="span8 row" id="editintakeview"> 
  <table class="table table-striped" style="width:1000px;">
    <tr>
      <th class="listcolor">Firstname</th>
      <th class="listcolor">Lastname</th>
      <th class="listcolor">Cellno</th>
      <th class="listcolor">Description</th>
      <th class="listcolor">Duration</th>
      <th class="listcolor">Action</th>
    </tr>
    <tr>
      <td class="listtextcolor"><?php if($firstname){echo $firstname;} ?></td>
      <td class="listtextcolor"><?php if($lastname){echo $lastname;} ?></td>
      <td class="listtextcolor"><?php if($cellno){echo $cellno;} ?></td>
      <td class="listtextcolor"><?php if($descriptn){echo $descriptn;} ?></td>
      <td class="listtextcolor"><?php if($duration){echo $duration;} ?></td>
      <td class="listtextcolor">
        <a href="#" id="loadintakeForm" style="display:block;color:#ffffff;">
          <img src="img/plus.png" title="View Intake Details"  width="20" height="20"/>
        </a>
      </td>
    </tr>
  </table>
</div>
</div>
<!--<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>-->

  <div class="span12 row aa scrollevent" style="margin-top:-20px;" id="firstfollowupformdiv">
    <div class="span12 row" id="follow2_err" style="font-size:12px; font-weight:bold;color:red;" align="center"></div>
       <form class="" name="followupform1" id="followupform1" method="POST" style="margin-top:0px;margin-left:-70px;width:1165px;">
        <div class="hero-unit" style="min-height:230px;">
          <div class="span12">

          <div class="row">
  	        <div class="span5">
    	          <label>Date:</label>
    	        </div>
              <div class="span7">
                <input type="hidden" name="clientID" id="clientID" value="<?php if(isset($cid)){echo $cid;} ?>">
                <input type="text" name="fdate" id="fdate" class="pull-left">
                <span id="spanf1name" style="color:blue;margin-left:30px;font-size:12px;" class="pull-left"></span>
              </div>
          </div>

            <div class="row">
              <div class="span5">
                <label>Name of Service Provider:</label>
              </div>
              <div class="span7">
                <input type="text" name="servicepro" id="servicepro" class="pull-left">
                <span id="spanserv" style="color:blue;margin-left:20px;font-size:12px;" class="pull-left"></span>
              </div>
            </div>

              <div class="row">
              <div class="span5">
                <label>Service Requested:</label>
              </div>
              <div class="span7">
                <input type="text" name="servicereq" id="servicereq" class="pull-left">
                <span id="spanservreq" style="color:blue;margin-left:20px;font-size:12px;" class="pull-left"></span>
              </div>
              </div>


              <div class="row">
              <div class="span5">
                <label>Assistance provided in Person / Phone / Online:</label>
              </div>
              <div class="span7">
                <input type="text" name="assist" id="assist" class="pull-left">
                <span id="spanassist" style="color:blue;margin-left:20px;font-size:12px;" class="pull-left"></span>
              </div>
              </div>


              <div class="row">
              <div class="span5">
                <label>Type of Assistance Provided:</label>
              </div>
              <div class="span7">
                <input type="text" name="typeassist" id="typeassist" class="pull-left">
                <span id="spantypeassist" style="color:blue;margin-left:20px;font-size:12px;" class="pull-left"></span>
              </div>
              </div>


        </div>  
      </div>

        <h4>Business Planning</h4>
        <br>
        <div class="hero-unit" style="min-height:160px;">
            <div class="span12">
              
              <div class="row">
              <div class="span5">
                <label>Business Plan:</label>
              </div>
              <div class="span7">
                <input type="text" name="bplan" id="bplan" class="pull-left">
                <span id="spanbplan" style="color:blue;margin-left:20px;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
              <div class="span5">
                <label>Marketing Plan:</label>
              </div>
              <div class="span7">
                <input type="text" name="mplan" id="mplan" class="pull-left">
                <span id="spanmplan" style="color:blue;margin-left:20px;font-size:12px;" class="pull-left"></span>
              </div>
              </div>


              <div class="row">
              <div class="span5">
                <label>Financial Plan:</label>
              </div>
              <div class="span7">
                <input type="text" name="fplan" id="fplan" class="pull-left">
                <span id="spanfplan" style="color:blue;margin-left:20px;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
              <div class="span5">
                <label>Other:</label>
              </div>
              <div class="span7">
                <input type="text" name="bpother" id="bpother" class="pull-left">
                <span id="spanbother" style="color:blue;margin-left:20px;font-size:12px;" class="pull-left"></span>
              </div>
              </div>


            </div>
        </div>

        <h4>Business Development</h4>
        <br>
        <div class="hero-unit" style="min-height:260px;">
            <div class="span12">
              
              <div class="row">
              <div class="span5">
                <label>Commercial Leasing:</label>
              </div>
              <div class="span7">
                <input type="text" name="commercial" id="commercial" class="pull-left">
                 <span id="spancomm" style="color:blue;margin-left:20px;font-size:12px;" class="pull-left"></span>
              </div>
              </div>


              <div class="row">
              <div class="span5">
                <label>Contract / Agreement:</label>
              </div>
              <div class="span7">
                <input type="text" name="contr" id="contr" class="pull-left">
                 <span id="spancontr" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
              <div class="span5">
                <label>Purchasing of Equipment / Merchandise:</label>
              </div>
              <div class="span7">
                <input type="text" name="equip" id="equip" class="pull-left">
                 <span id="spanequip" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
              <div class="span5">
                <label>Social media:</label>
              </div>
              <div class="span7">
                <input type="text" name="social" id="social" class="pull-left">
                 <span id="spansocial" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
              <div class="span5">
                <label>Marketing and Selling:</label>
              </div>
              <div class="span7">
                <input type="text" name="market" id="market" class="pull-left">
                <span id="spanmarket" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>


              <div class="row">
              <div class="span5">
                <label>Exporting / Importing:</label>
              </div>
              <div class="span7">
                <input type="text" name="expimp" id="expimp" class="pull-left">
                <span id="spanexp" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
              <div class="span5">
                <label>Other:</label>
              </div>
              <div class="span7">
                <input type="text" name="otherbd" id="otherbd" class="pull-left">
                <span id="spanbdother" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

            </div>
        </div>

        <h4>Business Registration</h4>
        <span id="spanbreg" style="color:blue;font-size:12px;" class="pull-left"></span>
        <br>
        <div class="hero-unit" style="min-height:100px;">
            <div class="span12">
              
              <div class="row">
                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="breg[]" id="ein" value="ein">EIN</label>
                </div>

                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="breg[]" id="sale" value="sale">Sales Tax</label>
                </div>

                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="breg[]" id="sole" value="sole">Sole Proprietor</label>
                </div>
              </div>

              <div class="row">
                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="breg[]" id="partner" value="partner">Partnership</label>
                </div>

                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="breg[]" id="incorp" value="incorp">Certificate of Incorporation</label>
                </div>

                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="breg[]" id="auth" value="auth">Certificate of Authority</label>
                </div>
              </div>

              <div class="row">
                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="breg[]" id="permit" value="permit">Permit</label>
                </div>  
                
                <div class="span4">              
                  <label class="checkbox">
                  <input type="checkbox" name="breg[]" id="license" value="license">License</label>
                </div>

                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="breg[]" id="food" value="food">Food Handlers Certificate</label>
                </div>
              </div>
              
              <div class="row">
                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="breg[]" id="vendor" value="vendor">Vendor Registration</label>
                </div>

                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="breg[]" id="businessothers" value="bregothers">Others</label>
                </div>
              </div>
            
            </div>
        </div>

        <h4>MWBE Certification</h4>
        <span id="spanmwbe" style="color:blue;font-size:12px;" class="pull-left"></span>
        <br>
        <div class="hero-unit" style="min-height:100px;">
            <div class="span12">
              
              <div class="row">
                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="mwbecert[]" id="city" value="city">City</label>
                </div>

                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="mwbecert[]" id="state" value="state">State</label>
                </div>

                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="mwbecert[]" id="federal" value="federal">Federal</label>
                </div>
              </div>

              <div class="row">
                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="mwbecert[]" id="port" value="port">Port Authority</label>
                </div>

                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="mwbecert[]" id="dormitory" value="dormitory">Dormitory Authority</label>
                </div>

                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="mwbecert[]" id="school" value="school">School of Construction</label>
                </div>
              </div>

              <div class="row">
                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="mwbecert[]" id="nynj" value="nynj">NY/NJ Purchasing Council Others</label>
                </div>  
                
                <div class="span4">              
                  <label class="checkbox">
                  <input type="checkbox" name="mwbecert[]" id="mwbeothers" value="mwbeothers">Others</label>
                </div>
              </div>
        </div>
        </div>

        <h4>Financing/Loan</h4>
        <br>
        <div class="hero-unit" style="min-height:530px;">
            <div class="span12">
              
              <div class="row">
                <div class="span4">
                <label>Financing institution with contact info:</label>
              </div>
              <div class="span4">
                <input type="text" name="fininfo" id="fininfo">
              </div>
              <div class="span4">
                <span id="spanfin" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
                <div class="span4">
                <label>Amount Requested:</label>
              </div>
              <div class="span4">
                <input type="text" name="amtreq" id="amtreq">
              </div>
              <div class="span4">
                <span id="spanamtreq" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              
              <div class="row">
                <span id="spanamtreq" style="color:blue;font-size:12px;" class="pull-left"></span>
                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="finloan[]" id="decline" value="decline">Decline</label>
                </div>

                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="finloan[]" id="approved" value="approved">Approved</label>
                </div>

                <div class="span4">
                  <label class="checkbox">
                  <input type="checkbox" name="finloan[]" id="pending" value="pending">Pending</label>
                </div>
              </div>

              <div class="row">
                <div class="span4 row">
                <label>Bonding entity:</label>
              </div>
              <div class="span4 row">
                <input type="text" name="bondentity" id="bondentity">
              </div>
              <div class="span4 row">
                <span id="spanbond" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
                <div class="span4 row">
                <label>Amount:</label>
              </div>
              <div class="span4 row">
                <input type="text" name="bondamt" id="bondamt">
              </div>
              <div class="span4 row">
                <span id="spanbondamt" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
                <div class="span4 row">
                <label>Bidding for Contract entity:</label>
              </div>
              <div class="span4 row">
                <input type="text" name="bidentity" id="bidentity">
              </div>
              <div class="span4 row">
                <span id="spanbidentity" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
                <div class="span4 row">
                <label>Bidding for Contract amount:</label>
              </div>
              <div class="span4 row">
                <input type="text" name="bidamt" id="bidamt">
              </div>
              <div class="span4 row">
                <span id="spanbidamt" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
                <div class="span4 row">
                <label>Bidding for Contract Awarded:</label>
              </div>
              <div class="span4 row">
                <input type="radio" name="bidyes" id="bidyes" value="Yes">Yes
                &emsp;<input type="radio" name="bidno" id="bidno" value="No">No
              </div>
              <div class="span4 row">
                <span id="spanbidaward" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
                <div class="span4 row">
                <label>Proposal writing entity:</label>
              </div>
              <div class="span4 row">
                <input type="text" name="pentity" id="pentity">
              </div>
              <div class="span4 row">
                <span id="spanpentity" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
                <div class="span4 row">
                <label>Proposal writing amount:</label>
              </div>
              <div class="span4 row">
                <input type="text" name="pamt" id="pamt">
              </div>
              <div class="span4 row">
                <span id="spanpamt" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
                <div class="span4 row">
                <label>Proposal writing awarded:</label>
              </div>
              <div class="span4 row">
                <input type="radio" name="pyes" id="pyes" value="Yes">Yes
                &emsp;<input type="radio" name="pno" id="pno" value="No">No
              </div>
              <div class="span4 row">
                <span id="spanpaward" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
                <div class="span4">
                <label>Other Technical Assistance:</label>
              </div>
              <div class="span4">
                <input type="text" name="techass" id="techass">
              </div>
              <div class="span4">
                <span id="spantechass" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
                <div class="span4 row">
                <label>Counselor Notes:</label>
              </div>
              <div class="span4 row">
                <textarea rows="3" placeholder="counselor notes" name="counslornotes" id="counslornotes"></textarea>
              </div>
              <div class="span4 row">
                <span id="spancounselor" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
            </div>
      </div>
      </div>


      <h4>Economic Impact</h4>
        <br>
        <div class="hero-unit" style="min-height:180px;">
            <div class="span12">
              
              <div class="row">
                <div class="span4 row">
                  <label>Economic Impact:</label>
                </div>
              <div class="span4 row">
                <select name="impact" id="impact">
                <option>--Select--</option>
                <option value="new business created">new business created</option>
                <option value="existing business saved">existing business saved</option>
                <option value="business became sustainable">business became sustainable</option>
                <option value="business expanded">business expanded </option>
                <option value="business increased clientele">business increased clientele</option>
                <option value="business increased sales">business increased sales</option>
                <option value="business increase revenues">business increase revenues</option>
                <option value="business increased profits">business increased profits</option>
                <option value="business created X new number of jobs">business created X new number of jobs</option>
                <option value="business retained x number of jobs">business retained x number of jobs</option>
                <option value="business lost x number of jobs">business lost x number of jobs</option>
                </select>
              </div>

            <div class="span4 row">
            <span id="spanimpact" style="color:blue;font-size:12px;" class="pull-left"></span>
            </div>
            <div class="span4 row">
              <input type="submit" name="followupsubmit" id="followupsubmit" class="btn btn-large" style="height:42px;" value="Submit">
            </div>
            </div>
          </div>
        </div>        
  	  </form> 
</div>
</div>
<?php }else{?>
<p style="font-size:14px;font-weight:bold;">Last Visited:<b><?php if(isset($lastdate)){echo $lastdate;} ?></b></p>
 <div class="span12 row" style="margin-left:-50px; margin-top:80px;">
  <div class="hero-unit" style="min-height:190px;">
      <div class="span12 row">
    <?php
    //echo "SELECT counselor,reply,status FROM followup WHERE clientid='".$cid."' ORDER BY id DESC";
    $getFollowupQuery   = mysql_query("SELECT counselor,reply,status FROM followup WHERE clientid='".$cid."' ORDER BY id DESC");
    while($queryrow     = mysql_fetch_array($getFollowupQuery))
    {
     // print_r($queryrow);
    ?>

   <table class="table table-striped" style="width:800px;">
    <tr>
      <!-- <th class="listcolor">Reason For Visit</th> -->
      <th class="listcolor">Posted Query</th>
      <th class="listcolor">Reply</th>
      <th class="listcolor">Status</th>
    </tr>
    <tr>
      <!-- <td class="listtextcolor"><?php //echo $queryrow['reasonforvisit'];?></td> -->
      <td class="listtextcolor"><?php echo $queryrow['counselor']; ?></td>
      <td class="listtextcolor"><?php echo $queryrow['reply']; ?></td>
      <td class="listtextcolor"><?php if($queryrow['status']=='replied'){echo "closed";}?></td> 
    </tr>
  </table>
 
 <?php }?>
 </div>
 </div>
 </div>
<div class="span4 row">
  <center><a href="#" class="showhide" id="showfollowup2" style="color:#ffffff;">Followup2</a></center>
</div>
<div class="span12 row ff scrollevent" style="margin-top:-50px;" id="followupform2div">
    <form method="POST" action="scripts/followup2.php"  id="followupform2"  style="margin-top:70px;margin-left:-50px;width:1165px;">
        <div class="hero-unit" style="min-height:190px;">
          <div class="span12">
            <div class="span12 row" id="followvalidation_errors" style="font-size:12px;font-weight:bold;color:red;" align="center"></div>
            
            <div class="row">
            <div class="span4 date_div">
              <label>Date:</label>
            </div>
            <div class="span4">
              <input type="hidden" name="clientID" id="clientID" value="<?php if(isset($cid)){echo $cid;} ?>">
              <input type="text" name="followup2date" id="followup2date">
            </div>
            <div class="span4">
                <span id="spanf2date" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
            </div>

            <div class="row">
            <div class="span4 row">
              <label>Name:</label>
            </div>
            <div class="span4 row">
              <input type="text" name="clientname" id="clientname">
            </div>
            <div class="span4 row">
                <span id="spanf2name" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
            </div>

            <div class="row">
            <div class="span4 row">
              <label>Telephone:</label>
            </div>
            <div class="span4 row">
              <input type="text" name="telephone" id="telephone">
            </div>
            <div class="span4 row">
                <span id="spanf2tel" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
            </div>

            <div class="row">
            <div class="span4 row">
              <label>Business Name:</label>
            </div>
            <div class="span4 row">
              <input type="text" name="bname" id="bname">
            </div>
            <div class="span4 row">
                <span id="spanf2bname" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
            </div>
          </div>  
        </div>

          <h4>Reason for Visit / Call</h4>
          <span id="spanf2reason" style="color:blue;font-size:12px;" class="pull-left"></span>
          <br>
          <div class="hero-unit" style="min-height:130px;">
          
              <div class="span12">           
                <div class="row">
                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="bcounsel" value="bcounsel">One-On-One Business Counseling</label>
                  </div>

                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="govtreg" value="govtreg">Government Regulations</label>
                  </div>

                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="promotion" value="promotion">Marketing/Promotion</label>
                  </div>
                </div>

                <div class="row">
                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="networking" value="networking">Networking</label>
                  </div>

                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="financing" value="financing">Financing</label>
                  </div>

                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="expimp" value="expimp">Export/Import</label>
                  </div>
                </div>

                <div class="row">
                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="hra" value="hra">Human Resources Assistance</label>
                  </div>  
                  
                  <div class="span4">              
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="profdev" value="profdev">Professional Development</label>
                  </div>

                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="bplandev" value="bplandev">Business Plan Development</label>
                  </div>
                </div>
                
                <div class="row">
                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="proc" value="proc">Procurement/Government Contracts</label>
                  </div>

                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="certification" value="certification">Certification</label>
                  </div>

                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="bregistration" value="bregistration">Business Registration</label>
                  </div>
                </div>

                <div class="row">              
                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="training" value="training">Training</label>
                  </div>

                  <div class="span4">
                    <label class="checkbox">
                    <input type="checkbox" name="breason[]" id="others" value="others">Other</label>
                  </div>              
                </div>          
              </div>
            </div>

            <div class="hero-unit" style="min-height:230px;">
              <div class="span12">
              <div class="row">
              <div class="span4">
                <label>Counselor's Notes:</label>
              </div>
              <div class="span4">
                <textarea id="counselnotes" name="counselnotes" rows='3' cols='7'></textarea>
              </div>
              <div class="span4">
                <span id="spanf2counselor" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>
              

              <div class="row">
              <div class="span4 row">
                <label>Time Spent:</label>
              </div>
              <div class="span4 row">
                <input type="text" id="timespent" name="timespent">
                <select name="timetype" id="timetype">
                  <option value="select">--Select--</option>
                  <option value="hrs">Hrs</option>
                  <option value="mins">Mins</option>
                  <option value="secs">Secs</option>
              </select>
              </div> 
              <div class="span4 row">
                <span id="spanf2time" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div>
              </div>

              <div class="row">
              <div class="span4 row">
                <label>Client's Signature:</label>
              </div>  
              <div class="span4 row">
                <input type="text" id="sign" name="sign">
              </div>
              <div class="span4 row">
                <span id="spanf2clientsign" style="color:blue;font-size:12px;" class="pull-left"></span>
              </div> 
              </div>
			         
              
              <div class="span4 row">

              </div>


              <div class="span4 row">
                <input type="submit" name="followupformsubmit" id="followupformsubmit" class="btn btn-large" style="height:42px;" value="Submit">
              </div>  

            </div> 
            </div>           
          </form>
        </div>  
            <?php   }         
          }      	
      } 
  ?>
    
    <div class="span12 row aa" id="IntakeformLoad" style="margin-top:20px;">

      <div class="span12 row" id="intake_update_validate_msg"></div>
      <div class="span12 row" id="itform_err" style="font-size:12px;font-weight:bold;color:blue;" align="center"></div>
      <form class=""  name="Intakform" id="InTakeeForm" method="POST" style="margin-top:0px;margin-left:-100px;width:1165px;">
        <div class="hero-unit" style="min-height:470px;">
          <div class="span12">
            <input type="hidden" name="id" id="intakeid" value="<?php echo $cid; ?>">
            <div class="span4 row">
                <label>Firstname</label>
              </div>
              <div class="span4 row">
                <input type="hidden" name="clientID" id="clientID" value="<?php if(isset($cid)){echo $cid;} ?>">
                <input type="text" name="firstname" id="itfirstname" value="<?php echo $firstname; ?>">
              </div>
              <div class="span4 row">
                <label>Lastname</label>
              </div>
              <div class="span4 row">
                <input type="text" name="lastname" id="itlastname" value="<?php echo $lastname; ?>">
              </div>
              <div class="span4 row">
                <label>Homephone</label>
              </div>
              <div class="span4 row">
                <input type="text" name="homephone" id="ithomephone" value="<?php echo $homephone; ?>">
              </div>
              <div class="span4 row">
                <label>Cell No</label>
              </div>
              <div class="span4 row">
                <input type="text" name="workphone" id="itworkphone" value="<?php echo $cellno; ?>">
              </div>
              <div class="span4 row">
                <label>SSN</label>
              </div>
              <div class="span4 row">
                <input type="text" name="ssn" id="itssn" value="<?php echo $ssn; ?>">
              </div>
              <div class="span4 row">
                <label>Address1</label>
              </div>
               <div class="span4 row">
                <textarea name="address" id="itaddress"><?php echo $address; ?></textarea>
              </div>
               <div class="span4 row">
                <label>Member Date</label>
              </div>
              <div class="span4 row">
                <input type="text" name="memberdate" id="itmemberdate" value="<?php echo $memberdate; ?>">
              </div>
              <div class="span4 row">
                <label>Description</label>
              </div>
              <div class="span4 row">
                <textarea name="description" id="itdescription"><?php echo $descriptn; ?></textarea>
              </div>
              <div class="span4 row">
                <label>Duration</label>
              </div>
               <div class="span4 row">
                <input type="text" name="duration" id="itduration" value="<?php echo $duration; ?>">
              </div>
              <br>
              <div class="span4 row">

              </div>
              <div class="span4 row">
                <input type="submit" name="intakeformsubmt" id="intakeformsubmt" class="btn btn-large" style="height:42px;" value="Save">
              </div>  
        </div>  
      </div>
      </form>
    </div>