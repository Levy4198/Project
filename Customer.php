
<div classs="content-wrapper ">
<?php
require 'dbcon.php';
  include_once'header.php';
  
?>





<div class="panel to">
  <div>

    <div class="panel-heading btn btn-info">
        <span class="panel-title">Customer table<table></table></span>
    </div>
    <div class="panel-body col-lg-7">
        
        <table class="table table-striped">
            <thead style="background:skyblue; padding-left:200px;">
            <br>
<?php

$sql = "SELECT*from `customer`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
            <tr ><th>customer_id</th><th> cust_name</th><th>city</th><th>grade</th><th> salesman_id</th></tr></thead>";
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo"<tbody>
        <tr>
    <td> ".$row["customer_id"]."</td>
    <td> ".$row["cust_name"]."</td>
    <td> ".$row["city"]."</td>
    <td>".$row["grade"]."</td>
    <td>".$row["salesman_id"]."</td>
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

    
    </dv></dv></dv></dv></dv></dv>

    </dv>
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
  </dv>