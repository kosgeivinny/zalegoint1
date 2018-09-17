<!DOCTYPE html>
<html>
<head>
    <title>
        Login
    </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">

</head>
<body>
<div class="container" align="center">
<form action="login_connect.php" method="POST">
    <br />
    <h3><b><u> Login </u></b></h3>
    <div class="form-group col-2">
        <label>Username: </label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group col-2">
        <label>Password: </label>
        <input type="password" name="pwd" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" name="login" class="btn btn btn-success"> Login </button>
        <a href="registration.php" class="btn btn-primary col-sm-"> Register</a>
    </div>
</form>
</div>
</body>
</html>