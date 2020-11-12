<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>E-CAD</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<script type="text/javascript" href = "assets/scripts/js.js"></script>

</head>
<body>
    <div id = "soonDiv">
        <label id = "soonH">COMING <br/>SOON !</label><br/><br/><br/>
        <label id = "soonH2">INTERNET CAFES NOW, INTERNATIONAL ARENA LATER.</label>
        <span id = "soonButton" onclick="this.parentElement.style.display='none';">EXPLORE PREVIEW</span>
    </div>
<header id = "headerDiv">
<div id = "headerLeft"></div>
	<div id = "headerRight">
    <a href = "#centerHome"><span class = "headerSpan">HOME</span></a>
    <a href = "#gamesContainer"><span class = "headerSpan">eSPORTS</span></a>
    <a href = "#footer"><span class = "headerSpan">CONTACT US</span></a>
    <a href = "<?php echo base_url()."login"; ?>" target="_blank"><span class = "headerSpan">LOGIN</span></a>
	</div>
</header>
<div id = "centerDiv">
	
    <!-- Home contents -->
	<div id = "centerHome">
		<span id = "centerLogo">eSPORT ACADEMY</span>
        <div id = "centerContent">
            <div id = "content">
                <h6 class = "contentHeader">eSPORT ACADEMY </h6>
                <div class = "contentBody"> 
                    <p>Esports (also known as electronic sports, e-sports, or eSports) is a form of sport competition using video games. 
                        Esports often takes the form of organized, multiplayer video game competitions, particularly between professional players, individually or as teams.  
                        Although organized competitions have long been a part of video game culture, these were largely between amateurs until the late 2000s, when participation by professional gamers and spectatorship in these events through live streaming saw a large surge in popularity.
                    </p> 

                    <p>eSPORTS are growing so fast in this generation and so was their price pools. Here, at <b>eSPORT ACADEMY</b>, we offer training to imporve ones skill in varius types of e-games, such as, Multiplayer Online Battle Arena (MOBA), First-Person and Third-Person Shooters, Fighting Games, and many more. The course includes strategies, in-game analysis, day-to-day game training, etc.</p> 
                    
                </div>
            </div>
        </div>
       
	</div>

    <!-- games content -->
    <div id = "gamesContainer">
    
        <div class = "gameDiv">
            <div class = "gameContentLeft">
            <div class = "gamecontent">
                <h6 class = "gamecontentHeader">MULTIPLAYER ONLINE BATTLE ARENA</h6>
                <div class = "gamecontentBody"> 
                    <p>
                    Multiplayer online battle arena (MOBA) is a subgenre of strategy video games in which each player controls a single character with a set of unique abilities that improve over the course of a game and which contribute to the team's overall strategy. 
                    The ultimate objective is for each team to destroy their opponents' main structure, located at the opposite corner of the battlefield. 
                    However, MOBA games can have other victory conditions, such as defeating every player on the enemy team. 
                    Players are assisted by computer-controlled units that periodically spawn in groups and march forward along set paths toward their enemy's base, which is heavily guarded by defensive structures. 
                    This type of multiplayer online video games originated as a subgenre of real-time strategy, though MOBA players usually do not construct buildings or units. 
                    Moreover, there are examples of MOBA games that are not considered real-time strategy games, such as Dota 2, and League of Legends. 
                    The genre is seen as a fusion of real-time strategy, role-playing, and action games.
                        <a href = "<?php echo base_url()."login"; ?>" target="_blank"><span class = "showmore">LEARN MORE >></span></a>
                    </p>
                       
                </div>
            </div>
            </div>

            <img id = 'gameimg1' class = 'gameimg' src = "assets/images/moba1.jpg" style = "top: 50px; right: 27%;"/>
            <img id = 'gameimg2' class = 'gameimg' src = "assets/images/moba2.jpg" style = "top: 75px; right: 5%;"/>
            <img id = 'gameimg3' class = 'gameimg' src = "assets/images/moba3.jpg" style = "top: 475px; right: 20%;"/>
        </div>

        <div class = "gameDiv1">
            <div class = "gameContentCenter">
            <div class = "gamecontent1">
                <h6 class = "gamecontentHeader1">First-Person Shooters</h6>
                <div class = "gamecontentBody1"> 
                    <p>
                    First-person shooter (FPS) is a video game genre centered on gun and other weapon-based combat in a first-person perspective; that is, the player experiences the action through the eyes of the protagonist. 
                    The genre shares common traits with other shooter games, which in turn makes it fall under the heading action game. 
                    Since the genre's inception, advanced 3D and pseudo-3D graphics have challenged hardware development, and multiplayer gaming has been integral.
                    Like most shooter games, first-person shooters involve an avatar, one or more ranged weapons, and a varying number of enemies. 
                    Because they take place in a 3D environment, these games tend to be somewhat more realistic than 2D shooter games, and have more accurate representations of gravity, lighting, sound and collisions. 
                    First-person shooters played on personal computers are most often controlled with a combination of a keyboard and mouse. This system has been claimed as superior to that found in console games, 
                    which frequently use two analog sticks: one used for running and sidestepping, the other for looking and aiming. It is common to display the character's hands and weaponry in the main view, with a heads-up display showing health, ammunition and location details. 
                    Often, it is possible to overlay a map of the surrounding area.
                        <a href = "<?php echo base_url()."login"; ?>" target="_blank"><span class = "showmore">LEARN MORE >></span></a>
                    </p>
                       
                </div>
            </div>
            </div>
        </div>

        <div class = "gameDiv2">
            <div class = "gameContentLeft2">
            <div class = "gamecontent2">
                <h6 class = "gamecontentHeader">FIGHTING GAMES</h6>
                <div class = "gamecontentBody"> 
                    <p>
                    A fighting game is a video game genre based around close combat between a limited number of characters, in a stage in which the boundaries are fixed. 
                    The characters fight each other's until they defeat their opponents or the time expires. The matches typically consist of several rounds, in an arena, with each player character having different abilities but each is relatively viable to choose. 
                    Players must master techniques such as blocking, counter-attacking, and chaining attacks together into "combos". Starting in the early 1990s, most fighting games allowed the player to execute special attacks by performing specific input combinations. The fighting game genre is related to but distinct from beat 'em ups, which involve large numbers of enemies against the human player.
                        <a href = "<?php echo base_url()."login"; ?>" target="_blank"><span class = "showmore">LEARN MORE >></span></a>
                    </p>
                       
                </div>
            </div>
            </div>

            <img class = 'gameimg2'  src = "assets/images/tkn.jpeg" style = ""/>
        </div>


        <div style = "position: relative; top: 0px;left: 0px;width:100%;height: 20px;background-color:transparent;padding: 10px;letter-spacing: 3px;">
        <a href = "<?php echo base_url()."login"; ?>" target="_blank"><span class = "showall">>>> &nbsp;&nbsp;&nbsp;LEARN MORE? CLICK HERE&nbsp;&nbsp;&nbsp; <<<</span></a>
        </div>
        <div id = "footer">
        <span style = "position:relative;top: 35px;">Contact Us Through</span><br/>
        <img class = 'icn' src = "assets/images/fb.png" style = "margin-top: 50px;padding: 3px" width = "30px" height ="30px" />
        <img class = 'icn' src = "assets/images/tw.png" style = "margin-top: 50px;padding: 3px" width = "30px" height ="30px" />
        <img class = 'icn' src = "assets/images/in.png" style = "margin-top: 50px;padding: 3px" width = "30px" height ="30px" />
        <img class = 'icn' src = "assets/images/ig.png" style = "margin-top: 50px;padding: 3px" width = "30px" height ="30px" /><br/>
        <span class = "icn">@ t a m a g o</span>
        </div>

        
    </div>
    
</div>


</body>
</html>
<script type="text/javascript" >


window.onscroll = function() {scrollFunction()};

var centerLogo = document.getElementById("centerLogo");
var centerContent = document.getElementById("centerContent");
var gameContent1 = document.getElementById("gameimg1");
var gameContent2 = document.getElementById("gameimg2");
var gameContent3 = document.getElementById("gameimg3");

function scrollFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    centerLogo.style.width = "294px";
    centerLogo.style.left = "100px";
    centerLogo.style.top = "300px";
    centerContent.style.opacity = "1";
    if(document.body.scrollTop > 700 || document.documentElement.scrollTop > 700){
        gameContent1.style.top = "160px";
        gameContent1.style.opacity = "1";
        
        gameContent2.style.top = "275px";
        gameContent2.style.opacity = "1";
        gameContent2.style.transition = "0.5s";

        gameContent3.style.top = "475px";
        gameContent3.style.opacity = "1";
        gameContent3.style.transition = "0.8s";
    }else{
        gameContent1.style.top = "0px";
        gameContent1.style.opacity = "0";
        
        gameContent2.style.top = "0";
        gameContent2.style.opacity = "0";

        gameContent3.style.top = "0";
        gameContent3.style.opacity = "0";
    }
  }else {
    centerLogo.style.width = "705.04px";
    centerLogo.style.left = "calc((100% - 705.94px)/2)";
    centerLogo.style.top = "250px";
    centerContent.style.opacity = "0";
  }

}

</script>