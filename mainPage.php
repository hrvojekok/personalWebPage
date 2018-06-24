<?php
session_start();

?>
    
    
<!DOCTYPE html>
<head>
<title>Hrvoje Kokošarević</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="design.css">
</head>



<!-- ####################BODY################################# -->
<body>

<header>
</br>
    <h1>Welcome to my personal web page
    <?php if(isset($_SESSION['username'])) {echo $_SESSION['username']; } ?>!</h1>
    <p>My name is <b>Hrvoje Kokošarević</b> and  I am a first year Graduate student on FERIT, Osijek.</p>
</br>



<!-- #######################Navigation bar###################-->
<nav class="navbar navbar-inverse">
        <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span></a>
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>    
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="#Link1"><span class="glyphicon glyphicon-zoom-in"></span> About</a></li>
                <li><a href="#Link2"><span class="glyphicon glyphicon-briefcase"></span> Work experience</a></li>
                <li><a href="#Link3"><span class="glyphicon glyphicon-align-left"></span> GitHub</a></li>
                <li><a href="#Link5"><span class="glyphicon glyphicon-picture"></span> Gallery</a></li>
                <li><a href="#Link4"><span class="glyphicon glyphicon-user"></span> Social pages</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="register.php"><span class="glyphicon glyphicon-inbox"></span> Register to contact me</a></li>
            </ul> 
        </div>
    </div>
</nav>
</header>


<section>
    <h2 id="Link1">About me</h2>
    <p1> I am a first year Graduate student on Faculty of Electrical Engineering, Computer Science and Information Technologies Osijek, course Electrical engineering, branch: Communications and Informatics, elective block: Network Technology. Where I received a bachelor's degree, titled: Overview of algorithms for increasing the spatial resolution of the video signal, with doc.dr.sc. Mario Vranješ and dr.sc. Denis Vranješ. </p>
    <a href="https://zir.nsk.hr/islandora/object/etfos%3A1619">~ Link to my bachelors thesis ~</a>

    <h2 id="Link2">Work experience</h2>
    <p2>I attended Ericsson Nikola Tesla Summer Camp 2017 (project “Smart Ericsson Internet of Things City Transport Service”). It was a great experience for me because that was my first encounter with actual real-world industry problems. I had an opportunity to apply my theoretical knowledge from college on a realworld problem, as well as to learn to work in a team. </p>

    <h2 id="Link3">Github</h2>
    <a href="https://github.com/hrvojekok?tab=repositories">~ Link to my GitHub repositories ~</a>



    <h2 id="Link5">Gallery</h2>
   
        <img src="pic1.jpg" >
    
        <img src="pic2.jpg" >
 
        <img src="pic3.jpg" >
   
        <img src="pic4.jpg">
   

    <h2 id="Link4">Social pages</h2>
    <div><a href="https://www.linkedin.com/in/hrvoje-koko%C5%A1arevi%C4%87-653bb6164/">~ LinkedIn ~</a></div>
    <div><a href="https://www.facebook.com/hrvoje.kokosarevic">~ Facebook ~</a></div>
    <div><a href="register.php"><span class="glyphicon glyphicon-inbox"></span> Contact me</a></div>

<<<<<<< HEAD:mainPage.php




    <div align="right"><h4> <?php if(isset($_SESSION['username'])) {echo 'Username: '; echo $_SESSION['username']; } else { echo 'You are not logged in'; echo '<a href="login.php"></br>Click here to log in </a>'; } ?> </h4>
    <?php if(!isset($_SESSION['username'])) {echo ''; } else { echo '<a href="logout.php">Logout from this webpage</a>'; }?>
    
=======
    <div align="right"><h4>User: <?php echo $_SESSION['username']; ?></h4>
    <a href="logout.php">Logout from this webpage</a>
>>>>>>> f84211651a3091a8837036532219703de1a4e9f6:mainPage.php
    </div>
</section>

</body>