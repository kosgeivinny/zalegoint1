<!DOCTYPE html>
<html>
<head>
    <title>
        Registration page
    </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">

</head>
<body>
<div class="container" align="">
    <div class="well">
<form method="POST" action="registration_connect.php">
    <br />
        <h3>
            <b>
                <u>
        Sign Up
                </u>
            </b>
        </h3>
    <div class="row">
    <div class="form-group col-2">
    <label>
        First Name:
    </label>
    <input type="text" name="firstname" class="form-control" required/>
    </div>
    <div class="form-group col-2">
    <label>
        Last Name:
    </label>
    <input type="text" name="lastname" class="form-control" required/>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-2">
    <label>
        Username:
    </label>
    <input type="text" name="username" class="form-control" required/>
    </div>
    <div class="form-group col-2">
    <label>
        Password:
    </label>
    <input type="password" name="pwd" class="form-control" required/>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary col-sm-">Register</button>
        <a href="login.php" class="btn btn-success col-sm-"> Login</a>
        </div>
    </div>

</form>
    </div>
</div>
</body>
</html>