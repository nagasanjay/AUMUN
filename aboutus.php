<!DOCTYPE html>

<html>
    <head>
        <title>AUMUN</title>	
		<link href="css/aboutus.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/tab_icon.png">
		
        <script>
                function change()
                {
                    document.getElementById('about_button').className = 'active';
                    document.getElementById('navigation_div').style.backgroundImage='None';
                    document.getElementById('logo_div').style.backgroundImage='None';
                    document.getElementById('header_logo').style.backgroundImage='None';
                    document.getElementById('header_logo3').style.backgroundImage='None';
                }
                
        </script>    
        
    </head>
    
    <body onload="change()">
    
        <?php include 'header.php' ?>
        
        
        
        
        
        
        
        <div class="page-wrapper">
            

            <div class="bgimg">                                                
                <div class="caption">
                    <span class="border" style="background-color: black; opacity: 0.9;color: #f7f7f7;">About Us</span>
                </div>
            </div>
        
            
            <div class="about">
                <label class="about_caption">The Host: Anna University </label>
                <br />
                <img class="img_about" src="images/About/au_logo.png">
                <div>
                    <p class="about_caption">Anna University is the one of the most reputed institutions in India. Located at the heart of Chennai is the College of Engineering, the principal college of Anna University boasts of a magnificent campus at one of the most prominent locations in the city – Guindy. With a rich history spanning over 225 years, CEG is one of the oldest colleges in the world. Ranked amongst the top 10 institutions in the country, this prestigious institution has produced many budding engineers and successful businessmen over the years.
                    True to its esteem, as an institution enriched with rich entrepreneurial culture, CEG even today stands as a beacon of light to
                    students who wish to be entrepreneurs.
                    The notable Alumni from this institution include Verghese Kurien (Amul), Venu Srinivisan(TVS), N Srinivasan (India Cements), M.Murugappa (Murugappa group) etc.</p>
                </div>    
            
            </div>
            
            <div class="about">
                <label class="about_caption">Centre of Entrepreneurship Development</label>
                <br />
                <img id="right_align" class="img_about" src="images/About/ced_logo.png">
                <div>
                    <p class="about_caption" id="left_allign">CED, Anna University provides one such platform that establishes links and interactions with industries belonging to several facets and educational institutions. With a view to inculcate entrepreneurial values among the student population, CED has been consistent in carrying out various programs for engineering students of the state by organizing in a diversified and eye-opening manner. Also, nurturing many budding and nascent startups under its banner , CED takes immense efforts in cultivating the spirit of entrepreneurship.</p>
                </div>    
            
            </div>
            
            <div class="about">
                <label class="about_caption">The Organising Team: Capitalize </label>
                <br />
                <img class="img_about" src="images/About/capitalize_logo.png">
                <div>
                    <p class="about_caption">Capitalize is the student run entrepreneurship cell of Anna university that aims to nurture entrepreneurial culture with the judicious combination of start-ups, corporates and the student community into one common  platform. Capitalize as a club, envisions to instill the perfect qualities in a leader , eventually enabling them to be the trailblazers of tomorrow. This club incubates ideas , no matter how miniscule or eccentric and extends immense support to equip these ideas with a successful front. Fortified with a core team of creative and bold minds , Capitalize challenges , tests and motivates its members to follow their goals and revolves around the ideals of innovation and leadership.</p>
                </div>    
            
            
            </div>
        
        
        
        
        
        
        </div>
        
        
        
        
        <br /><br /><br />
        
        
        <?php include 'footer.php' ?>
        
    </body>
</html>    