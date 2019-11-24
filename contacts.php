
<div classs="content-wrapper ">

<head> 
    <style>
    body {
        font-family:Times New Roman, Times, serif;
        background-image : url("waterdrop.jpg");
        
    
    }
    .form {
        text-align : center;
    }
    
    </style>
 </head>
<br>
<form class="form" action="mail.php" method="POST">
<label for="name">Name: </label> <input type="text" name="name"><br><br>
<label for="email">Email: </label> <input type="text" name="email"><br><br>
<label for="phone">Phone: </label> <input type="text" name="phone"><br><br>

<label for="checkbox">Request Phone Call: </label>
Yes:<input type="checkbox" value="Yes" name="call">
No:<input type="checkbox" value="No" name="call"><br /><br>

<label for="website">Website</label><input type="text" name="website"><br><br>

<label for="priority">Priority</label>
<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br /><br>

<label for="type">Type: </label>
<select name="type" size="1">
<option value="update">Website Update</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">New Products</option>
</select>
<br /><br>

<label for="name">Message: </label>
<textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>

          <!-- /.content-wrapper -->
          <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="http://facebook.com/igwelevy/messages">Hi-td</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version LK</b> 
    </div>
  </footer>