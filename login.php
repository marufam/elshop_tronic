<?php
if(isset($_POST['signin'])){
    $a=$_POST['email'];
    $b=$_POST['password'];

    $sql=mysql_query("select * from pelanggan where username='$a' or email='$a' and password='$b' and status='Ya'") or die (mysql_error());
    $c=mysql_num_rows($sql);
    $dat=mysql_fetch_array($sql);

    if($c==1){
        $_SESSION['pel']=$dat['kdpel'];
        $_SESSION['pel_username']=$dat['username'];
        $_SESSION['pel_nama']=$dat['nama'];
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
//        echo "<script>alert('Login Sukses');</script>";
    }else{
//        echo "<script>alert('Login Gagal');</script>";
        echo '<meta http-equiv="refresh" content="0; url=index.php">';
    }
}

if(isset($_POST['signup'])){
    $a=buatkode("pelanggan","PL");
    $b=$_POST['name'];
    $c=$_POST['gender'];
    $d=$_POST['address'];
    $e=$_POST['email'];
    $f=$_POST['username'];
    $g=$_POST['password'];
    $h="Tidak";

    $sql="INSERT INTO pelanggan(kdpel, nama, jk, alamat, email, username, password, status) values('$a','$b','$c','$d','$e','$f','$g','$h')";
    $masuk=mysql_query($sql) or die (mysql_error());


    if($masuk){
       echo "<div class='pull-right'>Registrasi success</div>";
    }else{
        echo "Registrasi failed";
    }
}
?>
<main id="authentication" class="inner-bottom-md">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <section class="section sign-in inner-right-xs">
                    <h2 class="bordered">Sign In</h2>

                    <p>Hello, Please Sign In Here</p>

                    <form role="form" class="login-form cf-style-1" method="post">
                        <div class="field-row">
                            <label>Email</label>
                            <input type="text" class="le-input" name="email" required>
                        </div>
                        <!-- /.field-row -->

                        <div class="field-row">
                            <label>Password</label>
                            <input type="password" class="le-input" name="password" required >
                        </div>
                        <!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge" name="signin">Sign In</button>
                        </div>
                        <!-- /.buttons-holder -->
                    </form>
                    <!-- /.cf-style-1 -->

                </section>
                <!-- /.sign-in -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
                <section class="section register inner-left-xs">
                    <h2 class="bordered">Create New Account</h2>

                    <p>Create your own Tronic account</p>

                    <form role="form" class="register-form cf-style-1" method="post">
                        <div class="field-row">
                            <label>Name</label>
                            <input type="text" class="le-input" name="name" required>
                        </div>
                        <div class="field-row">
                            <label>Gender</label>
                            <select name="gender" required class="le-input">
                                <option value=""> -Select- </option>
                                <option value="Male"> Male </option>
                                <option value="Female"> Female </option>
                            </select>
                        </div>
                        <div class="field-row">
                            <label>Address</label>
                            <textarea name="address" class="le-input" cols="30" rows="4" required></textarea>
                        </div>
                        <div class="field-row">
                            <label>Email</label>
                            <input type="email" class="le-input" name="email" required>
                        </div>
                        <div class="field-row">
                            <label>Username</label>
                            <input type="text" class="le-input" name="username" required>
                        </div>
                        <div class="field-row">
                            <label>Password</label>
                            <input type="text" class="le-input" name="password" required>
                        </div>
                        <!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge" name="signup">Sign Up</button>
                        </div>
                        <!-- /.buttons-holder -->
                    </form>
                </section>
                <!-- /.register -->

            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</main>
    