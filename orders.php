<div classs="content-wrapper ">
<?php
require 'dbcon.php';
  include_once'header.php';
  
?>





<div class="panel to">
<div>
    <div class="panel-heading btn btn-info">
        <span class="panel-title">Order table</table></table></span>
    </div>
    <div class="panel-body col-lg-7">
        <table class="table table-striped">
        <thead style="background:skyblue; padding-left:200px;">
            <br>
            <?php

$sql = "SELECT*from `orders`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
            <tr ><th>ord_no</th><th>purch_amt</th><th>ord_date</th><th>customer_id</th><th>salesman_id</th></tr></thead>";
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo"<tbody>
        <tr>
    <td> ".$row["ord_no"]."</td>
    <td> ".$row["purch_amt"]."</td>
    <td> ".$row["ord_date"]."</td>
    <td>".$row["customer_id"]."</td>
    <td> ".$row["salesman_id"]."</td>
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
      <b>Version</b> 
    
  </footer>


</body>
</html>
<?php
  include 'index.html';
  ?> 
  </div>