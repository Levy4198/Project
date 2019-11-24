<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to browser pages
header("location: login2.php");
exit;
?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="http://facebook.com/igwelevy/messages">Hi-td.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 
    </div>
  </footer>