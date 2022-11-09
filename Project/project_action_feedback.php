<?php

    $nama = $_POST['nama']; 

    $email = $_POST['email'];



?> 

<html> 
    <head> 
        <title>SenpaiNime</title>
    
        <!--link css-->
        <link rel="stylesheet" href="style_homepage.css">

         <!--Link Font Font Awesome-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
        <!-- Link Box Icon -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <!-- Link Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        </head> 
        <body>
        <nav class="navbar item">
        <i class='bx bx-menu icon'></i>
        
        <ul class="menu">
            <li><a href="Project_homepage.html">Home</a></li>
        </ul>
    </nav>
        <hr>
        <br>
        <?php 
            echo "<p>Terima kasih ".$nama. " telah memberikan masukan. </p>";

        ?>
        <br>
        <hr>
 
