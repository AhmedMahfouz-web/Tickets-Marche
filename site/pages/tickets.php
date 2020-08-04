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
    <title>All Tickets on Sale - Ticketsmarche</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="shortcut icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <!-- --- Start Page --- -->
    <main>

        <!-- --- Start Navbar --- -->
        <header>
            <a class="logo" href="../index.php" title="TicketsMarche"><img src="../images/TME.svg"
                    alt="TicketsMarche.com"></a>
            <input type="text" id="header-search" placeholder="Search events, artists, venues...">
            <button id="menu-phone"><i class='fas fa-bars'></i></button>
            <button type="button" id="search-btn"><i class="fas fa-search"></i></button>
            <div class="phone-menu">
                <ul>
                    <li><a href="#" title="Arab">عربي</a></li>
                    <li><a href="#" title="Locate Our Outlet"><i class="fas fa-map-marker-alt"></i></a></li>
                    <li><a href="#" title="Personal Info"><i class="far fa-user-circle"></i></a></li>
                    <li><a href="#" title="Checkout"><i class="fas fa-shopping-bag"></i></a></li>
                    <li><button id="menu" onclick="navMenu()" href="" title="Menu"><i class='fas fa-bars'></i></button>
                    </li>
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

        <!-- --- Start Tickets --- -->
        <div class="tickets">
            <div class="head">
                <h1>All Tickets on Sale</h1>
                <a href="../index.php"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
                <section class="fix"></section>
            </div>
            <?php while($events = mysqli_fetch_assoc($result)){?>
            <div class="info">
                <div class="left-img">
                    <img src="../images/<?php echo $events['imgs']?>">
                    <div><?php echo "From " . $events["dfrom"] . "<br>" . "to " . $events["dto"];?></div>
                </div>
                <div class="center">
                    <div class="center-left">
                        <div>
                            <p><?php echo $events["ecategory"]; ?></p>
                            <h2 class="b"><?php echo $events["ename"]; ?></h2>
                        </div>
                        <div>
                            <p>DATE</p>
                            <h2><?php echo $events["dfrom"] . " / " . $events["dto"]; ?></h2>
                        </div>
                    </div>
                    <div class="center-right">
                        <div>
                            <p>VENUE</p>
                            <h2><?php echo $events["eplace"] . ", " . "<span class='b'>" . $events["elocation"] . "</span>"; ?>
                            </h2>
                        </div>
                        <div>
                            <p>PRICE RANGE</p>
                            <h2><?php echo "From EGP " . $events["pfrom"] . " To EGP " . $events["pto"]; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="button">
                    <button class="buy">BOOK NOW <i class="fas fa-long-arrow-alt-right"> </i></button>
                </div>
                <section class="fix"></section>
            </div>
            <?php }?>
        </div>
        <!-- --- End Tickets --- -->

        <!-- ---- Start Footer ---- -->
        <footer>
            <div>
                <img src="../images/TME_footer.png">
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

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
    <script src="../js/mob.js"></script>
</body>

</html>