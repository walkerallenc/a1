<!DOCTYPE html>
<html lang="en">
<head>
    <title>Assignment 1</title>
    <link rel="stylesheet" type="text/css" href="/css/acw.css" /> 
</head>
<body>
  <div class="h_one">
    <h1>Greetings!</h1>
  </div>
  <br />

  <div class="h_one">
    <img src='images/acw.jpg' alt='Christmas'>
  </div>
  <div class="h_two">
    <h2>My name is Allen C. Walker</h2>
  </div>
  <br />

<div>
  <p class="default1">I am a software developer working for a telecommunications company and I live on Cape Cod, Massachusetts.<br><br>My work experience has primarily been with Microsoft technologies such as C#, VB.net, VB6 & SQL Server.  For the last few years I've been supporting a project that <br>consists heavily of Oracle development and I'm currently designing and developing a dynamic C# web application that will provide a GUI for the back end processes<br>that have been developed.<br><br>
  I hope to gain some knowledge from this class to compliment my work experience in the area of<br>dynamic web application development.</p>   
</div>
<?php
   /////////////////////////////////////////////////////////////
   // reviewed sample code from sitepoint.com forum community //
   /////////////////////////////////////////////////////////////
   $aryQuotes = array("Is the glass half empty or is it half full?", 
                                  "Every morning you have two choices: Continue to sleep with your dreams, or wake up and chase them.", 
                                  "Our deepest fear is that we are powerful beyond measure.");
    shuffle($aryQuotes);
?>
  <div class="randomquote">
    <b>
       <?php echo $aryQuotes[0]; ?>
    </b>
  </div>
</body>

</html>