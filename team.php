<!DOCTYPE html>

<html>
    <head>
        <title>AUMUN</title>	
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/team.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/tab_icon.png">
		
        <!script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        
        <script>
            function change()
                {
                    document.getElementById('ourteam_button').className = 'active';
                    document.getElementById('navigation_div').style.backgroundImage='None';
                    document.getElementById('logo_div').style.backgroundImage='None';
                    document.getElementById('header_logo').style.backgroundImage='None';
                    document.getElementById('header_logo3').style.backgroundImage='None';
                }
            /*
                $(function() {
                    $(window).on("scroll", function() {
                        if($(window).scrollTop() > 390) 
                        {
                            $(".nav_header").addClass("active_scroll");
                        }
                        else 
                        {
                            //remove the background property so it comes transparent again (defined in your css)
                            $(".nav_header").removeClass("active_scroll");
                        }
                    });
                });
            */
                
        </script>    
        
    </head>
    
    <body onload="change()">
    
        
        <?php include 'header.php' ?>
        
        
        
        
        
        
        
        
        <div class="page-wrapper">
            

            <div class="bgimg">                                                
                <div class="caption">
                    <span class="border" style="background-color: black; opacity: 0.9;color: #f7f7f7;">Our Team</span>
                </div>
            </div>
            
            <div id="s_general" class="members">
                <center><h1>Secretary General</h1></center>
                <hr />
                <figure>
                    <img class="member_img" src="images/Team/vineeth3.png">
                    <figcaption>Vineeth Ajith John<br />
                         
                    </figcaption>
                </figure> 
            </div>   
            
            <br />
            
            <div id="d_general" class="members">
                <center><h1>Director General</h1></center>
                <hr />
                <figure>
                    <img class="member_img" src="images/Team/anushri.jpg">
                    <figcaption>Anushri Eswaran<br />
                                
                    </figcaption>
                </figure>  
            </div> 
            
            <br />
            
            <div id="ds_general" class="members">
                <center><h1>Deputy Secretary General</h1></center>
                <hr />
                <figure>
                    <img class="member_img" src="images/Team/raghav.JPG" >
                    <figcaption>Raghav Swaminathan<br />
                                
                    </figcaption>
                </figure>  
            </div>   
            
            <br />
            
            <div id="d_general" class="members">
                <center><h1>Chargé d’affaires</h1></center>
                <hr />
                <figure>
                    <img class="member_img" src="images/Team/dipti.jpg" style="width: 260px;">
                    <figcaption>Dipti Ravi<br />
                                
                    </figcaption>
                </figure>  
            </div>  
            
            <div id="d_general" class="members">
                <center><h1>Chief Advisor</h1></center>
                <hr />
                <figure>
                    <img class="member_img" src="images/Team/abullais.jpg">
                    <figcaption>Syed Abullais<br />
                                
                    </figcaption>
                </figure>  
            </div> 
            
            <div id="coo" class="members">
                <center><h1>Chief Of Operations</h1></center>
                <hr />
                <figure>
                    <img class="member_img" src="images/Team/akash.jpg">
                    <figcaption>Akash Pillai<br />
                                
                    </figcaption>
                </figure>  
            </div> 
            
            <div id="usg_tech" class="members">
                <center><h1>USG Technology and Design</h1></center>
                <hr />
                <figure class="multi_member">
                    <img class="member_img" src="images/Team/reuel3.jpg" style="width: 225px; height: 230px;">
                    <figcaption>Reuel Samuel Sam<br />
                                
                    </figcaption>
                </figure> 
                
                <figure class="multi_member">
                    <img class="member_img" src="images/Team/sukrith.jpg">
                    <figcaption>Sukrith Sriram<br />
                                
                    </figcaption>
                </figure> 
                
                <figure class="multi_member">
                    <img class="member_img" src="images/Team/agastya.jpg" style="width: 230px">
                    <figcaption>Agastya Deshraju<br />
                                
                    </figcaption>
                </figure> 
                
            </div>  
            
            <div id="usg_marketing" class="members">
                <center><h1>USG Marketing</h1></center>
                <hr />
                <figure>
                    <img class="member_img" src="images/Team/samhita.JPG">
                    <figcaption>Samhita Miriyala<br />

                    </figcaption>
                </figure>  
            </div>
            
            <div id="usg_pr" class="members">
                <center><h1>USG Public Relations</h1></center>
                <hr />
                <figure class="multi_member">
                    <img class="member_img" src="images/Team/anjali.jpg">
                    <figcaption>Anjali V. Kumar<br />
                                
                    </figcaption>
                </figure> 
                
                <figure class="multi_member">
                    <img class="member_img" src="images/Team/asg.jpg">
                    <figcaption>Aditya Sengupta<br />
                                
                    </figcaption>
                </figure>
            </div>
            
            <div id="usg_finance" class="members">
                <center><h1>USG Finance</h1></center>
                <hr />
                <figure>
                    <img class="member_img" src="images/Team/prem.jpg">
                    <figcaption>Prem Kumar<br />
                                
                    </figcaption>
                </figure>  
            </div>
            
            <div id="usg_policy" class="members">
                <center><h1>USG Policy</h1></center>
                <hr />
                <figure>
                    <img class="member_img" src="images/Team/aparna.png" style="width: 250px">
                    <figcaption>Aparna Sivanandam<br />
            
                    </figcaption>
                </figure>  
            </div>
            
            <div id="usg_dr" class="members">
                <center><h1>USG Delegate Relations</h1></center>
                <hr />
                <figure class="multi_member">
                    <img class="member_img" src="images/Team/ramela.JPG">
                    <figcaption>Ramela Kennedy<br />
                                
                    </figcaption>
                </figure> 
                
                <figure class="multi_member">
                    <img class="member_img" src="images/Team/ashwath.jpg">
                    <figcaption>Ashwathram Saravanan<br />
                               
                    </figcaption>
                </figure>
            </div>
            
            
                <!USG SPONSOR EXCLUDED>
            
            
            
            <div id="usg_tech" class="members">
                <center><h1>USG Logistics</h1></center>
                <hr />
                <figure class="multi_member">
                    <img class="member_img" src="images/Team/ainesh.jpg">
                    <figcaption>Ainesh Ramachandran<br />
        
                    </figcaption>
                </figure> 
                
                <figure class="multi_member">
                    <img class="member_img" src="images/Team/siva.jpg" style="width:235px;">
                    <figcaption>Sivakumar Sankareswaran<br />
                            
                    </figcaption>
                </figure> 
                
                <figure class="multi_member">
                    <img class="member_img" src="images/Team/abhishek.jpg">
                    <figcaption>Abhishek Subramanian<br />
                                
                    </figcaption>
                </figure> 
                
            </div>
            
            
            
            
        
            
   
        
        
        
            
            
            
            
        
        </div>
        
        
        
        
        <br /><br /><br />
        
        
<!~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~FOOTER~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~>
        
        <?php include 'footer.php' ?>
        
    </body>
</html>    