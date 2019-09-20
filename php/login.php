<?php
/*Login form for Transit Webb. Copyright 2019, Baugh Holding Company, All Rights Reserved
Written and maintained by Alan Webb. Support and bug reports go to support@transitwebb.com*/
//Login form
//include \php\human.php;
//include \php\account.php;
/*session_start()
if (password_verify())
    {echo "Hello"
    else die "Password not found."
    }
*/
?>

<html charset="UTF-8" name="viewport">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS include -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <!--Body of page containing login form-->
    <div class="container">
        <img src="../saferide.jpg" class="img-responsive" alt="Safe Ride" style="width:33%;height:auto">
        <h2>Please log in to your account</h2>
        <form method="post" action="">
            <div class="form-group">
                <label>Account Name:</label><input class="form-control form-control-sm" type="text" id="accountname" formaction="post" />
                <label>Password:</label><input class="form-control form-control-sm" type="text" id="password" formaction="post" />
                <small>Account name and password are required</small><br />
                <input class="btn btn-secondary" type="submit" value="Cancel"> <input class="btn btn-primary" type="submit" value="Login">
            </div>
        </form>
    </div> 
  </body>
</html>