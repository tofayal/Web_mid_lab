<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REGISTRATION</title>
</head>
<body>
<form action="sign_in.php">
  <fieldset style="width:0px">
    <legend>REGISTRATION</legend>
    <label for="id">Id</label><br>
    <input type="text" id="id" name="id"><br>
    <label for="password">Password</label><br>
    <input type="password" id="password" name="password"><br>
    <label for="c_password">Confirm Password</label><br>
    <input type="password" id="c_password" name="c_password"><br>
    <label for="Name">Name</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="user">User Type</label><br>
    
    <input type="radio" id="user" name="user" value="">
   <label for="user">User</label>
   <input type="radio" id="admin" name="admin" value="">
  <label for="admin">Admin</label><br>
    
    <input type="submit" value="Sign Up">
    <a href="sign_in.php">Sign In</a>
  </fieldset>
</form>
</body>
</html>