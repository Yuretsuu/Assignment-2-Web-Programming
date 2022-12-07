<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <script src="../JS/navBar.js" type="text/JavaScript" defer></script>
    <script src="../JS/showSlides.js" type="text/JavaScript" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Liz Quach, Souleman Robleh">
    <meta name="email" content="quac0042@algonquinlive.com">
    <meta name="date" content="2022-11-13">
    <title>Webpage</title>
</head>
    

<body>
    <!-- Hamburger icon-->
    <div id="menu-nav">
        <div id="menu-bar" onclick="menuOnClick()">
          <div id="bar1" class="bar"></div>
          <div id="bar2" class="bar"></div>
          <div id="bar3" class="bar"></div>
        </div>
        <nav class="nav" id="nav">
            <!-- Specific elements in the nav bar will have dropdowns. Nav bar will disappear on scroll down. Scroll up- nav will appear-->
            <div class="navbar">
                <ul>
                    <li><a href="../Webpages/About-Us.php">Home</a></li>
                    <li><a href="../Cart/form.php">Order</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Background for popup hamburger -->
    <div class="menu-bg" id="menu-bg"></div>

    <div class="container">
        <!-- About Us Section -->
            <!-- Set display to flex -->
            <div class="gallery-about">
                <!-- Have images float left, as well as padding from the bottom of the viewscreen -->
                <div class="left-column slideshow-container">
                    <!-- Picture gallery(auto) of interior of Parle -->

                    <div class="slideshow">
                         <img src="../images/parle.jpg" class= "porthole" alt="restaurant">
                    </div>

                    <div class="slideshow">
                         <img src="../images/parle2.jpeg" alt="restaurant">
                    </div>

                    <div class="slideshow">
                         <img src="../images/parle3.jpg" alt="restaurant">
                    </div>

                    <div class="slideshow">
                         <img src="../images/parle4.jpg" alt="restaurant">
                    </div>

                    <div class="slideshow">
                         <img src="../images/parle5.jpg" alt="restaurant">
                    </div>

                    <div class="slideshow">
                         <img src="../images/parle6.jpg" alt="restaurant">
                    </div>

                    <div class="slideshow">
                         <img src="../images/parle7.jpg" alt="restaurant">
                    </div>

                    <div class="slideshow">
                         <img src="../images/parle8.jpg" alt="restaurant">
                    </div>

                    <div class="slideshow">
                         <img src="../images/parle9.jpg" alt="restaurant">
                    </div>

                    <div class="slideshow">
                         <img src="../images/parle10.jpg" alt="restaurant">
                    </div>

                    <div class="slideshow">
                         <img src="../images/parle11.jpg" alt="restaurant">
                    </div>

                    <div class="slideshow">
                         <img src="../images/parle12.jpg" alt="restaurant">
                    </div>
                </div>
                <!-- Have text float right -->
                <div class="right-column">
                    <p>A fresh new take on Vietnamese cuisine. A handcrafted & family recipe powered kitchen - from our table to yours.</p>
                    <!-- This will link to form.html page -->
                    <a href="../Cart/form.php" class="button-link">Order pickup</a>
                </div>     
            </div>
        </div>
    </div>

    <!-- Second Page -->
    <div class="container">
        <div class="mapContainer">
            <h1>Resturant location</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.010842178356!2d-75.69348878444366!3d45.42928277910064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce051063cbad25%3A0xc3cabb71127425bc!2sParle%20by%20Viet%20Fresh-%20Vietnamese%20Restaurant%20Ottawa-%20Best%20Pho%20in%20Ottawa!5e0!3m2!1sen!2sca!4v1670214396463!5m2!1sen!2sca"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="right-text">
            <!-- Underline headers (find a design) -->
            <h4>Location</h4>
            <p>Come visit us! We are situated right in the Ottawa's Byward Market.</p>
            <p>313 Dalhousie St, Byward Market, Ottawa, Ontario, Canada</p>
            <h4>Hours</h4>
            <!-- Make sure this is formatted vertically exactly like how the texts are formatted right now. -->
            <p>Monday-Friday: 4PM to 12AM <br> Weekends: 11AM to 12AM
            </p>
        </div>
    </div>
    </div>
        <footer class="footer">
            <!-- Content to be determined -->
            313 Dalhousie St, Byward Market, Ottawa, Ontario, Canada
            <br>
            Hours
                <!-- Make sure this is formatted vertically exactly like how the texts are formatted right now. -->
                Monday-Friday: 4PM to 12AM <br>
                    Weekends: 11AM to 12AM
                
        </footer>
</body>
