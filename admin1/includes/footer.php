</div>

  <script src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="../js/jquery.localisation-min.js"></script>
  <script type="text/javascript" src="../js/jquery.scrollTo-min.js"></script>
  <script type="text/javascript" src="../js/ui.multiselectuser.js"></script>
  <script type="text/javascript" src="../js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
  <script type="text/javascript" src="../js/jquery.sparkline/jquery.sparkline.min.js"></script>
  <script type="text/javascript" src="../js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
  <script type="text/javascript" src="../js/behaviour/general.js"></script>
  <script src="../js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
  <script type="text/javascript" src="../js/jquery.nestable/jquery.nestable.js"></script>
  <script type="text/javascript" src="../js/bootstrap.switch/bootstrap-switch.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  <script src="../js/jquery.select2/select2.min.js" type="text/javascript"></script>
  <script src="../js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
  <script type="text/javascript" src="../js/jquery.gritter/js/jquery.gritter.min.js"></script>
  <script type="text/javascript" src="../js/jquery.datatables/jquery.datatables.min.js"></script>
  <script type="text/javascript" src="../js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>
  <script type="text/javascript" src="../js/jquery.niftymodals/js/jquery.modalEffects.js"></script>   

    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables();
      });
    </script>

     </script>
     <script type="text/javascript">
    $(function(){
    //  $.localise('ui-multiselect', {/*language: 'en',*/ path: 'js/locale/'});
      $(".multiselect").multiselect();
      //$('#switcher').themeswitcher();
    });
  </script>
  <script type="text/javascript">
  function showClient(str)
  {
    //alert(str);
  if (str=="")
    {
    document.getElementById("Clientlist").innerHTML="";
    return;
    }
  if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
  else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        //alert(xmlhttp.responseText);

      document.getElementById("Clientlist").innerHTML=xmlhttp.responseText;
      document.getElementById("terminateduseR").style.display='none';
      }
    }
  xmlhttp.open("GET","../scripts/getclientlist.php?uid="+str,true);
  xmlhttp.send();
  }
</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="../js/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery.flot/jquery.flot.js"></script>
	<script type="text/javascript" src="../js/jquery.flot/jquery.flot.pie.js"></script>
	<script type="text/javascript" src="../js/jquery.flot/jquery.flot.resize.js"></script>
	<script type="text/javascript" src="../js/jquery.flot/jquery.flot.labels.js"></script>
  </body>
</html>
