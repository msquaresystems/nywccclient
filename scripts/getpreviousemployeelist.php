 <h4 style="font-size:14px; font-weight:bold; width:1000px;">PREVIOUS EMPLOYEE DETAILS</h4>
<table style="width:1000px; border:1px solid #FFFFFF; font-size:12px;">
                    <tr style="border:1px solid #FFFFFF;">
                      <th class="listcolor" style="border:1px solid #FFFFFF;">Firstname</th>
                      <th class="listcolor" style="border:1px solid #FFFFFF;">Lastname</th>
                      <th class="listcolor" style="border:1px solid #FFFFFF;">Address</th>
                      
                    </tr>
                     <?php 
                        include('dbcon.php');
                        $clientid=$_GET['cntid'];


                      $count_userproj1 = mysql_query("SELECT up.previous_userid,up.uid,usr.id,usr.firstname,usr.physical_address,usr.lastname FROM user as usr INNER JOIN userprojects as up ON usr.id=up.previous_userid WHERE up.clientid='".$clientid."'");

                      $numrows        = mysql_num_rows($count_userproj1);

                      if($numrows >0){
                      while($user1=mysql_fetch_array($count_userproj1))
                      {
                         
                        // $firstname1  = $userprojnotify1['firstname'];
                       //  $address1     = $userprojnotify1['address'];
                       //  $lastname1    = $userprojnotify1['lastname'];
                      // print_r($userprojnotify);
                      
                      ?>
                    <tr>
                      <td class="listtextcolor" style="border:1px solid #FFFFFF;"><?php echo $user1['firstname']; ?></td>
                      <td class="listtextcolor" style="border:1px solid #FFFFFF;"><?php echo $user1['lastname']; ?></td>
                      <td class="listtextcolor" style="border:1px solid #FFFFFF;"><?php echo $user1['physical_address']; ?></td>
                      
                    </tr>
                     <?php } } else {?>
                      <tr><td colspan="3">No Employees Found.</td></tr>

                     <?php } ?>
                  </table>