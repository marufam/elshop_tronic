<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        .tengah{
            margin:auto;
            width: 30%;
        }
    </style>
</head>
<body>
<div class="container">
    
    <div class="tengah">
    <form class="form-signin" method="post" action="valid.php">
        <h2 class="form-signin-heading">Silahkan Masuk</h2>
        <label  class="sr-only">Username</label>
        <input name="a" type="text"class="form-control" placeholder="Username...." required autofocus><br>
        <label class="sr-only">Password</label>
        <input name="b" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
    </div>
</div> <!-- /container -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>