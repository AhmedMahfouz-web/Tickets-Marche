<?php 
    $conn = mysqli_connect("localhost", "root", "123456", "ticketsmarchgroupb");

    $q = "SELECT * FROM events";

    $result = mysqli_query($conn, $q);
    $resultII = mysqli_query($conn, $q);
    $resultIII = mysqli_query($conn, $q);
    $resultIV = mysqli_query($conn, $q);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page - Ticketsmarche</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- --- Start Page --- -->
    <main>

        <!-- --- Start Section --- -->
        <div class="section">
            <p>Note: This Website is built for education purpose and Copyright &copy; to <a href='https://www.ticketsmarche.com' target="_blank">ticketsmarche.com</a></p>
            <p>Go to <a href="../backend"><button>Admin Panel</button></a></p>
        </div>
        <!-- --- End Section --- -->

        <!-- --- Start Navbar --- -->
        <header>
            <a class="logo" href="index.php" title="TicketsMarche"><img src="images/TME.svg" alt="TicketsMarche.com"></a>
            <input type="text" id="header-search" placeholder="Search events, artists, venues...">
            <button id="menu-phone"><i class='fas fa-bars'></i></button>
            <button type="button" id="search-btn"><i class="fas fa-search"></i></button>
            <div class="phone-menu">
                <ul>
                    <li><a href="#" title="Arab">عربي</a></li>
                    <li><a href="#" title="Locate Our Outlet"><i class="fas fa-map-marker-alt"></i></a></li>
                    <li><a href="#" title="Personal Info"><i class="far fa-user-circle"></i></a></li>
                    <li><a href="#" title="Checkout"><i class="fas fa-shopping-bag"></i></a></li>
                    <li><button id="menu" onclick="navMenu()" href="" title="Menu"><i class='fas fa-bars'></i></button></li>
                </ul>            
                <!-- --- Start Nav Menu --- -->
                <div class="nav-menu">
                    <div>
                        <p>That’s everything we’ve got</p>
                        <a href="pages/tickets.php" title="All Tickets on Sale">
                            <h1>All Tickets on Sale</h1>
                        </a>
                        <a href="#" title="Hot Events">
                            <h1>Hot Events</h1>
                        </a>
                        <a href="#" title="Locate Our Outlet">
                            <h1>Locate Our Outlet</h1>
                        </a>
                        <a href="#" title="Ticket Your Event">
                            <h1>Ticket Your Event</h1>
                        </a>
                        <a href="#" title="FAQs">
                            <h1>FAQs</h1>
                        </a>
                    </div>
                    <div>
                        <p>Tickets Marche</p>
                        <a href="pages/tickets.php" title="About us">
                            <h1>About us</h1>
                        </a>
                        <a href="#" title="Our Policies">
                            <h1>Our Policies</h1>
                        </a>
                        <a href="#" title="Contact Us">
                            <h1>Contact Us</h1>
                        </a>
                        <a href="#" title="Careers">
                            <h1>Careers</h1>
                        </a>
                        <p>Need Help?</p>
                        <h1><i class="fas fa-headset"></i>
                            16826/+202
                            24637000
                        </h1>
                        <p class="show">10am - 10pm / Everyday</p>
                    </div>
                </div>
                <!-- --- End Nav Menu --- -->
            </div>
        </header>
        <!-- --- End Navbar --- -->

        <!-- ---- Start Slider ---- -->
       
        <div class="slider">
            <?php while ($events = mysqli_fetch_assoc($result)) { ?>
            <div class="myslides">
                <img src="images/<?php echo $events['img']?>">

                <div class="details">
                    <div class="date">
                        <div class="from">
                            <p>Date From</p>
                            <p><?php echo $events["dfrom"]?></p>
                        </div>
                        <div class="to">
                            <p>To</p>
                            <p><?php echo $events["dto"]?></p>
                        </div>
                        <section class="fix"></section>
                    </div>
                    <div class="info">
                        <p><?php echo $events["ecategory"]?></p>
                        <p><?php echo $events["ename"]?></p>
                    </div>

                    <button class="buy">Buy It <i class="fas fa-long-arrow-alt-right"> </i></button>

                </div>
            </div>

            <?php   }?>
        </div>
        <!-- ---- End Slider ---- -->

        <section class="fix"></section>
        
        <!-- ---- Start Today's Plans ---- -->
        <div class="plans">
            <h1>What plans today?</h1>
            <p>Explore and book all exclusive events</p>
            <div>
                <?php 
                for ($i = 0; $i < 4; $i++) {
                    $events = mysqli_fetch_assoc($resultII) ;?> 
                <a href="#" title="<?php echo $events["ename"]?>">
                    <div class="book">
                        <div class="head">
                        <?php echo $events["ename"]?>
                        </div>
                        <img src="images/<?php echo $events['imgs']; ?>">
                        <button class="buy">Book Now <i class="fas fa-long-arrow-alt-right"></i></button>
                        <span>
                            <?php echo $events["dfrom"] . " / " . $events["dto"] . "<br>" .
                             "Ticket Range " . $events["pfrom"] . " - " . $events["pto"] . " EGP"; ?>
                            <!-- Date1 - Date2 br Ticket Range fprice - tprice EGP -->
                        </span>
                    </div>
                </a>
                <?php }?>
            </div>
            <a class="show-me" href="pages/tickets.php">SHOW MORE EVENTS</a>
            <img src="images/Hamaki.jpg">
        </div>
        <!-- ---- End Today's Plans ---- -->

        <!-- ---- Start Events ---- -->
        <div class="events">
            <div class="left-events">
                <h1>All tickets on Sale</h1>
                <p>Make this part of your plan</p>
                <div>
                    <?php 
                    for ($i = 0; $i < 8; $i++) {
                        $events = mysqli_fetch_assoc($resultIII); ?> 
                    <a href="#">
                        <div class="book">
                            <img src="images/<?php echo $events["imgs"]?>">
                            <div class="head">
                                <?php echo $events["ename"] . "<br>" . $events["dfrom"] . " / " . $events["dto"]; ?>
                            </div>
                            <span>
                                <?php echo $events["eplace"] . "<br>" . "Starting From EGP " . $events['pfrom'] . " - " . $events['pto']; ?>
                            </span>
                        </div>
                    </a>
                    <?php }?>
                </div>
                <section class="fix"></section>
                <a class="show-me" href="pages/tickets.php">SHOW MORE EVENTS</a>
            </div>
            <div class="right-events">
                <h1>Hot Events</h1>
                <p>If any of these is your plan, hurry up!</p>
                <div>
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $events = mysqli_fetch_assoc($resultIV); ?> 
                    <a href="#">
                        <div class="book">
                            <img src="images/<?php echo $events["imgs"]?>">
                            <div class="head">
                                <?php echo $events["ename"] . "<br>" . $events["dfrom"] . " / " . $events["dto"]; ?>
                            </div>
                            <span>
                                <?php echo $events["eplace"] . "<br>" . "Starting From EGP " . $events['pfrom'] . " - " . $events['pto']; ?>
                            </span>
                        </div>
                    </a>
                    <?php }?>
                </div>
                <section class="fix"></section>
                <a class="show-me" href="pages/tickets.php">SHOW MORE EVENTS</a>
            </div>
        </div>

        <section class="fix"></section>
        <!-- ---- End Events ---- -->

        <!-- ---- Start Footer ---- -->
        <footer>
            <div>
                <img src="images/TME_footer.png">
                <ul>
                    <li><a href="pages/tickets.php">All Tickets on Sale</a></li>
                    <li><a href="#">Hot Events</a></li>
                    <li><a href="#">Locate Out Outlet</a></li>
                    <li><a href="#">Ticket Your Event</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Our Polices</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
                <div>
                    <p>Need Help, Call Now</p>
                    <p><i class="fas fa-headset"></i> 16826/+202 24637000</p>
                    <p>10am - 10pm / Everyday</p>
                </div>
                <section class="fix"></section>
            </div>
            <div>
                <p>&copy; TicketsMarche.com 2019 - <a href="#">Privacy Policy</a></p>
                <button class="buy">EMAIL SUBSCRIBE HERE <i class="fas fa-long-arrow-alt-right"> </i></button>
                <a class="a" href="#"><i class="fab fa-twitter"></i></a>
                <a class="a" href="#"><i class="fab fa-facebook-f"></i></a>
                <section class="fix"></section>
            </div>
        </footer>
        <!-- ---- End Footer ---- -->

    </main>

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/mob.js"></script>
</body>

</html>