
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/homeStyles1.css">
    <link rel="stylesheet" href="./styles/contactStyles.css">
    <link rel="stylesheet" href="./styles/eventsStyles.css">
    <link rel="stylesheet" href="./styles/aboutStyles.css">
</head>


<body>
    
    <div class="container">
        <header>
           
        </header>
        <nav>
            <ul>
                <li> <a class="logo" href="home1.php"><img class="logo" src="./img/reservi_logo.png" alt=""></a></li>
                <li><a class="navButtons" href="#home">Create</a></li>
                <li><a class="navButtons" href="#event">Events</a></li>
                <li><a class="navButtons" href="#contact">Contact</a></li>
                <li><a class="navButtons" href="#about">About</a></li>
            </ul>
            <ul class="login">
                <li><a class="navButtons" href="login.php">Login</a></li>
                <li><a class="navButtons" href="registration.php">SignUp</a></li>
            </ul>
        </nav>
        <section class="one" id="home">
            <table>
                <tr><td><h2>Create your event</h2></td></tr>         
                <tr><td>        <p>Reservi. number 1 in the world</p>
</td></tr>
<tr><td>        <button class="crebutton"><a href="craeteevent.html">CREATE</a></button>
</td></tr>
            </table>
        
    </section>
        
        <section class="two" id ="event">
            <div class="eventSection">
                <div class="eventElementsContainer">
                    <div class="eventElement">
                        <img class="eventImage">
                        <div class="eventTitle">abc</div>
                        <div class="eventDescription">this is the description of the event !</div>
                    </div>
                    <div class="eventElement">
                        <img class="eventImage">
                        <div class="eventTitle">dsers</div>
                        <div class="eventDescription">this is the description of the event !</div>
                    </div>
                    <div class="eventElement">
                        <img class="eventImage">
                        <div class="eventTitle">qdfqg</div>
                        <div class="eventDescription">this is the description of the event !</div>
                    </div>
                </div>
        </section>
        
        <section class="three" id="contact">
            <div class="main">
                <div class="contactTitle">
                        Contact
                </div>
                <div class="contactMain">
                    <b>Tel.</b> +216 22333444<br>
                    Reservi@gmail.com<br>
                    <b>LinkedIn.</b> Reservi Foundation<br>
                    <b>Location.</b> Rte manzel chaker Sfax
        
                </div>
            </div>
        </section>
        <section class="four" id ="about">
            <div class="main">
                <div class="aboutTitle">
                    About
                </div>
                <div class="aboutMain">
                    Welcome to <b>Reservi</b>, 
                    where RSVPing for real-world events is made easy. Created by Omar Bouattour and Mohamed Yassine Abid, our platform simplifies event registration, from conferences to social gatherings. Join us and make attending events effortless!
                </div>
            </div>
        </section>
    </div>
</body>
</html>