<!DOCTYPE html>

<html>
    <head>
        <title>AUMUN</title>	
		<link href="css/committee.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/tab_icon.png">
		
        <style>
            /*Once the executive board members are known, comment/remove this css part*/
            button#exec_board
            {
                display: none;
            }
            
        </style>
        
        
        <script>
                function change()
                {
                    document.getElementById('committee_button').className = 'active';
                    document.getElementById('navigation_div').style.backgroundImage='None';
                    document.getElementById('logo_div').style.backgroundImage='None';
                    document.getElementById('header_logo').style.backgroundImage='None';
                    document.getElementById('header_logo3').style.backgroundImage='None';
                }
            
                
                function pop_exec1()
                {
                    document.getElementById('exec1').style.display = 'block';
                }
                function close_exec_pop1()
                {
                    document.getElementById('exec1').style.display = 'none';
                }
            

                function open_pop1()
                {
                    document.getElementById('pop1').style.display = 'block';
                }
                function close_pop1()
                {
                    document.getElementById('pop1').style.display = 'none';
                }
            
            
                function pop_exec2()
                {
                    document.getElementById('exec2').style.display = 'block';
                }
                function close_exec_pop2()
                {
                    document.getElementById('exec2').style.display = 'none';
                }
            
            
                function open_pop2()
                {
                    document.getElementById('pop2').style.display = 'block';
                }
                function close_pop2()
                {
                    document.getElementById('pop2').style.display = 'none';
                }
            
            
                function pop_exec3()
                {
                    document.getElementById('exec3').style.display = 'block';
                }
                function close_exec_pop3()
                {
                    document.getElementById('exec3').style.display = 'none';
                }
            
            
                function open_pop3()
                {
                    document.getElementById('pop3').style.display = 'block';
                }
            
                function close_pop3()
                {
                    document.getElementById('pop3').style.display = 'none';
                }
            
            
                function pop_exec4()
                {
                    document.getElementById('exec4').style.display = 'block';
                }
                function close_exec_pop4()
                {
                    document.getElementById('exec4').style.display = 'none';
                }
            
            
                function open_pop4()
                {
                    document.getElementById('pop4').style.display = 'block';
                }
                function close_pop4()
                {
                    document.getElementById('pop4').style.display = 'none';
                }
            
                
                function pop_exec5()
                {
                    document.getElementById('exec5').style.display = 'block';
                }
                function close_exec_pop5()
                {
                    document.getElementById('exec5').style.display = 'none';
                }
            
            
            
                function open_pop5()
                {
                    document.getElementById('pop5').style.display = 'block';
                }
                function close_pop5()
                {
                    document.getElementById('pop5').style.display = 'none';
                }
            
            
        </script>    
        
    </head>
    
    <body onload="change()">
    
        <?php include 'header.php' ?>
        
        
        <div class="page-wrapper">
            
            <div class="bgimg">                                                
                <div class="caption">
                    <span class="border" >Committees</span>
                </div>
            </div>
            
        
            
            
            
            <div class="cards">
            <div class="flip-card1">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/Committees/disec.png"  alt="Avatar" style="width:300px;height:300px;background-color: transparent">
                    </div>
                
                    <div class="flip-card-back1">
                        <h1>Committee 1: DISEC</h1>
                        <p>Something and something</p>
                        <p>Information</p>
                        <button id="exec_board" class="button" onclick="pop_exec1()">Executive Board</button>
                        <br /> <br />
                        <button id="learnmore" class="button" onclick="open_pop1()">Learn More</button>
                    </div>
                </div>
            </div>
            
            <div id="exec1" class="exec_pop">
                <span class="close" onclick="close_exec_pop1()">&times;</span>
                <center><h1 class="popup_title">DISEC: Disarmament and International Security</h1></center>
                <img class="ip_popup" src="images/Team/stock_user.jpg">
                <center><h3 class="exec_name">Executive Board: Joe Frank Bob</h3></center>
                
            </div>    
                    
            <div id="pop1" class="pop">
                <span class="close" onclick="close_pop1()">&times;</span>
                <center><h1 class="popup_title">DISEC: Disarmament and International Security</h1></center>
                <img class="ip_popup" src="images/Committees/disec_white.png">
                <br />
                <center>
                <p class="popup_para" >United Nations General Assembly Disarmament and International Security, commonly known as the First Committee, is one of the 6 main committees of the General Assembly. The UNGA DISEC deals with disarmament, global challenges, and threats to peace that affect the international community. Its mandate encompasses all Disarmament and International Security issues within the scope of the Charter of the United Nations or relating to the powers and functions of any other organ of the United Nations. The committee works in cooperation with the United Nations Disarmament Commission and the Conference on Disarmament.</p>
                </center>
            </div>
   
            
            
            
            
            
        
            <div class="flip-card2">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/Committees/unhrc_logo.jpg" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                 
                    <div class="flip-card-back2">
                        <h1>Committee 2: UNHRC</h1>
                        <p>Something and something</p>
                        <p>Information</p>
                        <button id="exec_board" class="button" onclick="pop_exec2()">Executive Board</button>
                        <br /> <br />
                        <button id="learnmore" class="button" onclick="open_pop2()">Learn More</button>
                    </div>
                </div>
            </div>
            
            <div id="exec2" class="exec_pop">
                <span class="close" onclick="close_exec_pop2()">&times;</span>
                <center><h1 class="popup_title">UNHRC: United Nations Human Rights Commission</h1></center>
                <img class="ip_popup" src="images/Team/stock_user.jpg">
                <center><h3 class="exec_name">Executive Board: Joe Frank Bob</h3></center>
            </div>  

            <div id="pop2" class="pop">
                <span class="close" onclick="close_pop2()">&times;</span>
                <center><h1 class="popup_title">UNHRC: United Nations Human Rights Commission</h1></center>
                <img class="ip_popup" src="images/Committees/hrc_white.png">
                <br />
                <center>
                <p class="popup_para" >The Human Rights Council is an inter-governmental body within the United Nations system responsible for strengthening the promotion and protection of human rights around the globe and for addressing situations of human rights violations and making recommendations on them. It has the ability to discuss all thematic human rights issues and situations that require its attention throughout the year. The Council is made up of 47 United Nations Member States which are elected by the UN General Assembly.</p>
                </center>
            </div>
  
            
            
            
            
            
            
            <div class="flip-card3">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/Committees/unhsc_logo.jpg" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                
                    <div class="flip-card-back3">
                        <h1>Committee 3: UNHSC</h1>
                        <p>Something and something</p>
                        <p>Information</p>
                        <button id="exec_board" class="button" onclick="pop_exec3()">Executive Board</button>
                        <br /> <br />
                        <button id="learnmore" class="button" onclick="open_pop3()">Learn More</button>
                    </div>
                </div>
            </div>
            
            <div id="exec3" class="exec_pop">
                <span class="close" onclick="close_exec_pop3()">&times;</span>
                <center><h1 class="popup_title">UNHSC: United Nations Historical Security Council</h1></center>
                <img class="ip_popup" src="images/Team/stock_user.jpg">
                <center><h3 class="exec_name">Executive Board: Joe Frank Bob</h3></center>
            </div>      
                

            <div id="pop3" class="pop">
                <span class="close" onclick="close_pop3()">&times;</span>
                <center><h1 class="popup_title">UNHSC: United Nations Historical Security Council</h1></center>
                <img class="ip_popup" src="images/Committees/unhsc_white.png">
                <br />
                <center>
                <p class="popup_para" >One of the six principal organs of the United Nations, the Security Council is responsible for the maintenance of international peace and security; the admission of new member states to the United Nations, and approving any changes to the United Nations Charter. Through establishing international peacekeeping missions, imposing international sanctions, and authorising military action through resolutions; the Security Council is able to impose binding actions on member states, making it the most powerful UN institution. Consisting of fifteen members, the Security Council is a small body, and is dominated by the permanent five veto-wielding powers of China, France, Russia, the United Kingdom, and the United States. Always a high-profile institution, the United Nations Security Council is interesting to simulate, in both its present-day and historic contexts.</p>
                </center>
            </div>   
  
            
            
            
            
            
        
            <div class="flip-card4">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/Committees/aippm.png" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                
                    <div class="flip-card-back4">
                        <h1>Committee 4: AIPPM</h1>
                        <p>Something and something</p>
                        <p>Information</p>
                        <button id="exec_board" class="button" onclick="pop_exec4()">Executive Board</button>
                        <br /> <br />
                        <button id="learnmore" class="button" onclick="open_pop4()">Learn More</button>
                    </div>
                </div>
            </div>
                
            <div id="exec4" class="exec_pop">
                <span class="close" onclick="close_exec_pop4()">&times;</span>
                <center><h1 class="popup_title">AIPPM: All India Political Party Meet</h1></center>
                <img class="ip_popup" src="images/Team/stock_user.jpg">
                <center><h3 class="exec_name">Executive Board: Joe Frank Bob</h3></center>
            </div>      
            

            <div id="pop4" class="pop">
                <span class="close" onclick="close_pop4()">&times;</span>
                <center><h1 class="popup_title">AIPPM: All India Political Party Meet</h1></center>
                <img class="ip_popup" src="images/Committees/aippm_white.png">
                                <br />
                <center>
                <p class="popup_para" >Indian politics is an ever-evolving institution, that has gone from single-party dominance in the start to a multi-party system, and now finally to coalition politics. To reflect this diversity in ideology and to give all of these ideologies a platform, the All India Political Parties Meet was formed. The AIPPM is a forum for unrestricted debate, discussion, and deliberation, free from the legislative functions of the parliament. It usually acts as a meeting called before a session of the Parliament to decide upon an agenda. The agendas are usually controversial and divisive to ensure minimal time wastage in the Parliament.</p>
                </center>
            </div>    
  
            
            
            
            
            
            <div class="flip-card5">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="images/Committees/ip_logo.jpg" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                
                    <div class="flip-card-back5">
                        <h1>International Press</h1>
                        <p>Something and something</p>
                        <p>Information</p> 
                        <button id="exec_board" class="button" onclick="pop_exec5()">Executive Board</button>
                        <br /> <br />
                        <button id="learnmore" class="button" onclick="open_pop5()">Learn More</button>
                    </div>
                </div>
            </div>
                
            <div id="exec5" class="exec_pop">
                <span class="close" onclick="close_exec_pop5()">&times;</span>
                <center><h1 class="popup_title"> IP: International Press </h1></center>
                <img class="ip_popup" src="images/Team/stock_user.jpg">
                <center><h3 class="exec_name">Executive Board: Joe Frank Bob</h3></center>
            </div>  
            

            <div id="pop5" class="pop">
                <span class="close" onclick="close_pop5()">&times;</span>
                <center><h1 class="popup_title"> IP: International Press </h1></center>
                <img class="ip_popup" src="images/Committees/IP_white.png">
                <br />
                <center>
                <p class="popup_para" >This committee is the embodiment of the quote “The pen is mightier than the sword”. A Model UN simulation wouldn't be complete without the International Press, a committee of reporters and photojournalists who bring council proceedings to the attention of the general public. As delegates discuss and deliberate over conflicts and crises from around the globe, this committee is tasked with penning down each statement made by these diplomats and analyse the various foreign policy implications from the same. The International Press is the place where your words come to life and you’re provided with the opportunity to alter the course of debate in committee.</p>
                </center>
            </div>  
                
            </div>    
  
            
        </div>    
        
        
        
        
        
        
        
        
        <?php include 'footer.php' ?>
        
        
    </body>
</html>