<?php
    require_once("function/all.php");
    is_logged_in("index.php");
    $result = get_event_by_name();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Events List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2 class="h2-table">Events List</h2>
    <a class="margin" href="function/logout.php"><button class="margin"><i class="fas fa-sign-out-alt"></i>
            Logout</button></a>
    <a class="margin" href="new-event.php"><button class="margin margina"><i class="far fa-calendar-plus"></i>
            Add</button></a>
    <a class="margin" href="../"><button class="margin margina"><i class="fas fa-home"></i> Back to Website</button></a>
    <table margin="0">
        <tr margin="0">
            <td>Tools</td>
            <td>Event ID</td>
            <td>Event Name</td>
            <td>Location</td>
            <td>Place</td>
            <td>Category</td>
            <td>Price From</td>
            <td>Price To</td>
            <td>Date From</td>
            <td>Date to</td>
            <td>Image</td>
            <td>Smaller Image</td>
        </tr>
        <?php while($event_info = mysqli_fetch_row($result)){ ?>
        <tr>
            <td><a href="edit-event.php?id=<?php echo $event_info[0]; ?>"><i class="far fa-edit"></i> Edit</a> - <a
                    href="delete.php?id=<?php echo $event_info[0]?>">Delete <i class="far fa-trash-alt"></i></a></td>

            <?php for ($i=0; $i < sizeof($event_info) - 2 ; $i++) { ?>
            <td margin="-5px"><?php echo $event_info[$i]; ?></td>
            <?php } ?>
            <td margin="-5px"><img src="../site/images/<?php echo $event_info[9]; ?>"
                    alt="<?php echo $event_info[9]; ?>" width="60px" height="50px"></td>
            <td margin="-5px"><img src="../site/images/<?php echo $event_info[10]; ?>"
                    alt="<?php echo $event_info[10]; ?>" width="40px" height="40px"></td>

        </tr>
        <?php } ?>
    </table>
</body>

</html>