<!DOCTYPE html>

<html>
    <head>
        <title>AUMUN</title>	
		<link href="css/register.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/tab_icon.png">
		    
        
        <script>
            
                
            
                function change()
                {
                    document.getElementById('register_button').className = 'active';
                    document.getElementById('navigation_div').style.backgroundImage='None';
                    document.getElementById('logo_div').style.backgroundImage='None';
                    document.getElementById('header_logo').style.backgroundImage='None';
                    document.getElementById('header_logo3').style.backgroundImage='None';
                    
                    //Whichever registration is open, comment the respective line out
                    document.getElementById('disec_button').innerHTML='Not Open';
                    document.getElementById('unhsc_button').innerHTML='Not Open';
                    document.getElementById('unhrc_button').innerHTML='Not Open';
                    document.getElementById('aippm_button').innerHTML='Not Open';
                    document.getElementById('ip_button').innerHTML='Not Open';
                }
                
        </script>    
        
    </head>
    
    <body onload="change()">
    
        <?php include 'header.php' ?>
        
        
        
        
        
        
        
        
        <div class="page-wrapper">
            

            <div class="bgimg">                                                
                <div class="caption">
                    <span class="border" style="background-color: black; opacity: 0.9;color: #f7f7f7;">Register</span>
                </div>
            </div>
        
            
            <div class="all_register">
                
                <div class="disec_register" id="register_box">
                    <center>
                    <h1>DISEC</h1>
                    <button id="disec_button" class="register_button">Register Now</button>
                    </center>
                </div> 
                
                <div class="unhrc_register" id="register_box">
                    <center>
                    <h1>UNHRC</h1>
                    <button id="unhrc_button" class="register_button">Register Now</button>
                    </center>
                </div> 
                
                <div class="unhsc_register" id="register_box">
                    <center>
                    <h1>UNHSC</h1>
                    <button id="unhsc_button" class="register_button">Register Now</button>
                    </center>
                </div>
                
                <div class="aippm_register" id="register_box">
                    <center>
                    <h1>AIPPM</h1>
                    <button id="aippm_button" class="register_button">Register Now</button>
                    </center>
                </div>
                
                <div class="ip_register" id="register_box">
                    <center>
                    <h1>International Press</h1>
                    <button id="ip_button" class="register_button">Register Now</button>
                    </center>
                </div>
                
                <div class="eb_register" id="register_box">
                    <center>
                    <h1>Executive Board</h1>
                    <button class="register_button" id="eb_button" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSdyAuXwIolbPe_WkJNALmbG58PlixZlUdJBFR6GD1VNLhQLXg/viewform','_blank')">Register Now</button>
                    </center>
                </div>
                
            </div>    
        
        
        
            
            
            
            
        
        </div>
        
        
        
        
        <br /><br /><br />
        
        
        <?php include 'footer.php' ?>
        
    </body>
</html>    