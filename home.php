<?php
session_start();

// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// If the user is logged in, you can display a welcome message or any other content here
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title> Home </title>

</head>
<body>

    <header>

        <nav>

            <img class="logo" src="images/PAWADISE.png" alt="Logo">

            <ul>
                <li class="nav_links"> <a class="home" href="home.php"> HOME </a> </li>
                <li class="nav_links"> <a class="about_us" href="aboutus.php"> ABOUT US </a> </li>
                <li class="nav_links"> <a class="adopt" href="adopt.php"> ADOPT </a> </li>
                <li class="nav_links"> <a class="donate" href="donate.php"> DONATE </a> </li>
                <li class="nav_links"> <a class="logout" href="logout.php"> LOGOUT </a> </li>
            </ul>

        </nav>

    </header>
    
    <main>

        <section class="section_1">

            <div class="banner">
                <p> OUR MISSION IS TO RESCUE </p>
            </div>
            
            <div class="home_parag">
                <p class="home_parag1">
                    "OUR DREAM IS THAT ONE DAY, WE WON'T HAVE TO."
                </p>

                <p class="home_parag2"> ABOUT US </p>

                <p class="home_parag3">
                    Founded in October 2018 by Cheryll Lapides and Mozart Dela Cruz, because of dogs on deathrow scheduled to be killed by gunshot, Pawadise Foundation Inc. is a non-profit organization dedicated to the rescue, rehabilitation and rehoming of abused and neglected animals.
                    Pawssion Project began in Bacolod, armed simply with a lot of hope, courage and the unwavering support of a few good friends. After that first pound rescue, numerous reports poured in one after another, which eventually led to the opening of a second shelter in Bulacan in mid 2019. 
                    Since then, the journey has led Pawssion Project to more than 2000 rescues, and thankfully over 1000 rehomed animals.
                </p>
            </div>

            <div class="home_donate_wrapper">
                <a class="home_donate" href=""> DONATE </a>
            </div>

            <div class="home_banner">
                <p> 640 <br> SHELTERED </p>
                <p> 2500 <br> RESCUED </p>
                <p> 3800 <br> SPAYED & NEUTURED</p>
                <p> 1050 <br> REHOMED </p>
            </div>

        </section>

        <section class="section_2">
            <img src="images/rescue_dog_3.jpg" alt="">

            <div class="section2_parag" >
                <p>OUR SHELTER SERVE AS A HOME TO ATLEAST 600 RESCUES WHO WERE ONCE HOMELESS, ABUSED, NEGLECTED AND ON DEATHROW.</p>
            </div>

            <div class="section2_button">
                <a href="Adopt.php"> ADOPT NOW </a>
            </div>

        </section>

    </main>

    <footer>

        <div class="footer">
            <img class="logo_2" src="images/PAWADISE.png" alt="Logo">

            <div class="footer_parag">
                <p class="f_parag_1"> Pawadise Foundation INC.</p>
                <p class="f_parag_2">Bulacan Shelter: 1429 Paradise 1, Purok 7 Tungkong Mangga, SJDM, Bulacan</p>
                <p class="f_parag_4">info@pawadise.org</p>
            </div>
            
        </div>


    </footer>

</body>
</html>