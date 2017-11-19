<!-- ========================================= MAIN ========================================= -->
<main id="contact-us" class="inner-bottom-md">

    <div class="container">
        <div class="row">
            <?php
            if(isset($_POST['save'])){
                $nama=$_POST['name'];
                $email=$_POST['email'];
                $subjek=$_POST['subject'];
                $pesan=$_POST['message'];
            $sql="INSERT INTO contact(kdkontak, nama, email, subjek, pesan, status) VALUES('','$nama','$email','$subjek','$pesan',0)";
                $masuk=mysql_query($sql) or die(mysql_error());
                if($masuk){
                    echo '<meta http-equiv="refresh" content="0; url=?page=contact">';
                }
            }
            ?>
            <div class="col-md-8">
                <section class="section leave-a-message">
                    <h2 class="bordered">Contact Us</h2>
                    <form id="contact-form" class="contact-form cf-style-1 inner-top-xs" method="post" action="">
                        <div class="row field-row">
                            <div class="col-xs-12 col-sm-6">
                                <label>Your Name*</label>
                                <input class="le-input" name="name" required>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <label>Your Email*</label>
                                <input class="le-input" name="email" required>
                            </div>
                        </div>
                        <!-- /.field-row -->

                        <div class="field-row">
                            <label>Subject</label>
                            <input type="text" class="le-input" name="subject" required>
                        </div>
                        <!-- /.field-row -->

                        <div class="field-row">
                            <label>Your Message</label>
                            <textarea rows="8" class="le-input" name="message" required></textarea>
                        </div>
                        <!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" name="save" class="le-button huge">Send Message</button>
                        </div>
                        <!-- /.buttons-holder -->
                    </form>
                    <!-- /.contact-form -->
                </section>
                <!-- /.leave-a-message -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
                <section class="our-store section inner-left-xs">
                    <h2 class="bordered">Our Store</h2>
                    <address>
                        Jalan PB Sudirman 114 <br/>
                        Jember, Jawa Timur <br/>
                        Indonesia
                    </address>
                    <h3>Hours of Operation</h3>
                    <ul class="list-unstyled operation-hours">
                        <li class="clearfix">
                            <span class="day">Monday:</span>
                            <span class="pull-right hours">12-6 PM</span>
                        </li>
                        <li class="clearfix">
                            <span class="day">Tuesday:</span>
                            <span class="pull-right hours">12-6 PM</span>
                        </li>
                        <li class="clearfix">
                            <span class="day">Wednesday:</span>
                            <span class="pull-right hours">12-6 PM</span>
                        </li>
                        <li class="clearfix">
                            <span class="day">Thursday:</span>
                            <span class="pull-right hours">12-6 PM</span>
                        </li>
                        <li class="clearfix">
                            <span class="day">Friday:</span>
                            <span class="pull-right hours">12-6 PM</span>
                        </li>
                        <li class="clearfix">
                            <span class="day">Saturday:</span>
                            <span class="pull-right hours">12-6 PM</span>
                        </li>
                        <li class="clearfix">
                            <span class="day">Sunday</span>
                            <span class="pull-right hours">Closed</span>
                        </li>
                    </ul>
                </section>
                <!-- /.our-store -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</main>
<!-- ========================================= MAIN : END ========================================= -->
    