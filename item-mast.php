
<div class="content-wrapper ">
    <?php
require 'dbcon.php';
include_once'header.php';
  
?>




<div class="panel to">
<div>

    <div class="panel-heading btn btn-info">
        <span class="panel-title">item_mast table</table></table></span>
    </div>
    <div class="panel-body col-lg-7">
        <table class="table table-striped  " >
            <thead style="background:skyblue; padding-left:200px;">
            <br>
            <?php

$sql = "SELECT*from `item_mast`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
            <tr ><th>PRO_ID</th><th>PRO_NAME</th><th>PRO_PRICE</th><th>PRO_COM</th></tr></thead>";
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo"<tbody>
        <tr>
    <td> ".$row["PRO_ID"]."</td>
    <td> ".$row["PRO_NAME"]."</td>
    <td> ".$row["PRO_PRICE"]."</td>
    <td>".$row["PRO_COM"]."</td>
        </tr>";
    }
    echo "    
    </tbody>
</table>
";
}

else{ echo "0 results";
    }

    $conn->close();
    ?>
         
         </div></div> </div></div> </div></div>

</div>
<!-- /.content-wrapper -->
          <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="http://facebook.com/igwelevy/messages">Hi-td</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version LK</b> 
    
  </footer>


</body>
</html>
<?php
  include 'index.html';
  ?> 
  </div>