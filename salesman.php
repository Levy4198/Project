
<div class="content-wrapper ">
<?php
require 'dbcon.php';
  include_once'header.php';
  
?>





<div class="panel to">
<div>
    <div class="panel-heading btn btn-info">
        <span class="panel-title">Salesman tables<table></table></span>
    </div>
    <div class="panel-body col-lg-7">
        <table class="table table-striped  " >
            <thead style="background:skyblue; padding-left:200px;">
            <br>
            <?php

$sql = "SELECT*from `Salesman`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
            <tr ><th>salesman_id</th><th>name</th><th>city</th><th>commission</th></tr></thead>";
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo"<tbody>
        <tr>
    <td> ".$row["salesman_id"]."</td>
    <td> ".$row["name"]."</td>
    <td> ".$row["city"]."</td>
    <td>".$row["commission"]."</td>
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
    </div>
  </footer>


</body>
</html>
<?php
  include 'index.html';
  ?> 
  </div>