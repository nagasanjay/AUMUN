<!DOCTYPE html>

<html>
    <head>
        <title>AUMUN</title>	
		<link href="css/contact.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/tab_icon.png">
		
        <script>
                function change()
                {
                    document.getElementById('contact_button').className = 'active';
                    document.getElementById('navigation_div').style.backgroundImage='None';
                    document.getElementById('logo_div').style.backgroundImage='None';
                    document.getElementById('header_logo').style.backgroundImage='None';
                    document.getElementById('header_logo3').style.backgroundImage='None';
                }
            
        </script> 
        
        <?php 
            
            if(isset($_POST['submit']))
            {
                $to = "reuelsam@gmail.com"; // this is your Email address
                $from = $_POST['email']; // this is the sender's Email address
                $name = $_POST['name'];
                $subject = "AUMUN Contact Form submission";
                //$subject2 = "Copy of your form submission";
                $message = "Name:".$name . "\n" . "Email:" .$from. "\n" . "Message: " . $_POST['message'];
                //$email_body = "Name: $name.\n"."Email: $from.\n"."Message: $_POST['message'].\n";
                //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

                $headers = "From:" . $from;
                //$headers2 = "From:" . $to;
                mail($to,$subject,$message,$headers);
                //($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                $alert_message =  "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
                
                echo "<script type='text/javascript'>alert('$alert_message');</script>";
                // You can also use header('Location: thank_you.php'); to redirect to another page.
            }
?>
        
    </head>
    
    <body onload="change()">
    
        <?php include 'header.php' ?>
        
        <div class="page-wrapper">
            
            <div class="bgimg">                                                
                <div class="caption">
                    
                </div>
            </div>
            
            
            <div class="contact-art">
                <!img class="art" src="images/Contact/contact_us1.png">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.388986189686!2d80.2331881146456!3d13.010883090830163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8f64332436e5f%3A0xb6f3e0a8c0889229!2sAnna%20University!5e0!3m2!1sen!2sin!4v1570463546607!5m2!1sen!2sin" width="100%" height="390" frameborder="0" style="border:1px solid black;" allowfullscreen=""></iframe>
            </div>    
            
            <div class="contact_form">
                <form action="" id="contact_form" method="POST" autocomplete="off">
                    
                    <input name="name" type="text" class="form-control" id="name" required>
                    <span class="name-label" id="name-label">Name*</span>
                    <br />
                    
                    <input name="email" type="email" class="form-control" id="email" required>
                    <span class="email-label" id="email-label">Email*</span>
                    <br />
                    
                    <textarea name="message" class="form-control" row="4" required></textarea>
                    <span class="message-label" id="message-label">Message*</span>
                    <br />
                    
                    <input type="submit" name="submit" class="form-control-submit" value="SEND MESSAGE">
                    
                </form>
                
            </div>
            

            
        </div>    
        
        <?php include 'footer.php' ?>
    </body>
</html>