<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>road map.html</title>

    <a href="logout.php" >Logout</a>
</head>
<body >

 
   
    <center>
    <h1 style="color: red;">Technical Road-Map Syllabus</h1>
    </center>
    <p style="font-size: large;">Produst oriented approach that gives you the skills to build a <u style="color: red;"> Web Site For Business Company.</u></p>
    <h2 style="color: red;">CMS Track Categories:</h2>
    <ol>
        <li>Web Fundamentals</li>
        <li> Database</li>
        <li> Administration</li>
        <li> Software Development using PHP</li>
        <li> Content Management System</li>
        <li> Employability Skills</li>
    </ol>
    <div class="container" >
    <!-------- FIRST PART ----------->
    <div class="fir_part">
    <h2>Web Fundamentals</h2>
    <ul>
        <li>HTML CSS</li>
        <li> Java Script</li> 
    </ul>

    <h2>Content Management System</h2>
    <ul>
        <li>Wordpress</li>
        <li>Joomla</li>
    </ul>

    <h2>Administration</h2>
    <ul>
        <li>Introduction to Apache Web Server</li>
    </ul>
 
    </div>
   <!-------- SECOND PART ----------->
    <div class="sec_part">
        <h2>Software Development using PHP</h2>
        <ul>
            <li>PHP Programming Language</li>
        </ul>

    <h2>Database</h2>
    <ul>
        <li>MySQL Database</li>
    </ul> 
 

    <h2>Employability Skills</h2>
    <ul>
        <li>Effictive Comunication Skills</li>
        <li>Effictive Presentation Skills</li>
        <li>Interviewing Skills</li>
        <li>Freelancing skills</li>
    </ul> 
    </div>
</div>

     <p>For more details visit our <a href="https://www.iti.gov.eg/iti/home"> ITI </a> web site </p>
     <center>
        <a href=""> <p>Top</p>  </a>
     </center>
     <footer>
     <hr>
     <center>
        Copyright 2021 by Noha Salah &reg;. All Rights Reserved. 
     </center>
    </footer>
    
</body>
</div>
</html>
