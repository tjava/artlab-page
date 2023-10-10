<?php session_start();?>
<!doctype html>
<html lang="en">
    <?php include 'layout/header.php'; ?>


    <body>

        <!-- Header -->
        
        <?php include 'layout/nav.php'; ?>

        <!--End Header -->


        <!-- Main Container -->
        <div>
            <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.9626890718623!2d6.53006687548221!3d9.598481190487345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104c710bc9afd29d%3A0x76561f0734593f30!2sKpakungu%20Roundabout%20Minna!5e0!3m2!1sen!2sus!4v1693501411569!5m2!1sen!2sus"></iframe>
            <br />
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <h4>Find us at:</h4>
                    <p class="block-author"> Kpakugu roundabout Adjacent Supreme water,</p>
                    <p>Minna Niger State Nigeria.</p>
                    <p>WhatsApp: +234 818 496 7181</p>
                    <em class="block-author">Email: artlab.ng@gmail.com </em> <br>
                    <br>
                </div>
                <div class="col-sm-8 col-md-8">
                    <div style="color:green;"><?php echo $_SESSION['send_status']; $_SESSION['send_status'] = ''; ?></div>
                    <div class="feedback-form">
                        
                        <div id="contact-response"></div>
            
                        <form action="functions/save_contact.php" method="post" id="contact-form">
                            <fieldset>
                                <div class="form-group form-group-fullname">
                                    <label class="control-label" for="fullname">NAME *</label>
                                    <input type="text" class="form-control" name="name" id="fullname" placeholder="Enter Your Name" required>
                                </div>
                                <div class="form-group form-group-email">
                                    <label class="control-label" for="email">E-MAIL *</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your E-Mail" required>
                                </div>
                                <div class="form-group form-group-message">
                                    <label class="control-label" for="message">MESSAGE *</label>
                                    <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
                                </div>           
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
            
    <!--End Main Container -->


    <!-- Footer -->
    <?php include 'layout/footer.php'; ?>

  </body>
</html>
