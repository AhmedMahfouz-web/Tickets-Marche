<?php 

require_once("function/all.php");
is_logged_in("new-event.php");
if(isset($_POST['name'])){
    $dfrom = $_POST['fday'] . "-" . $_POST['fmonth'] . "-" . $_POST['fyear'];
    $dto = $_POST['tday'] . "-" . $_POST['tmonth'] . "-" . $_POST['tyear'];
    $no = 5;
    if(isset($_FILES["photo"]) && $_FILES["photo"]["tmp_name"] != ""){
        if(isset($_FILES["photos"]) && $_FILES["photos"]["tmp_name"] != ""){
  
        new_event($_POST['name'],  $_POST['location'], $_POST['place'], $_POST['category'], $_POST['fprice'], $_POST['tprice'], $dfrom, $dto, $_FILES["photo"]["name"], $_FILES["photo"]["tmp_name"], $_FILES["photos"]["name"], $_FILES["photos"]["tmp_name"], "../site/images/");
            
        }else{

            new_event($_POST['name'],  $_POST['location'], $_POST['place'], $_POST['category'], $_POST['fprice'], $_POST['tprice'], $dfrom, $dto, $_FILES["photo"]["name"], $_FILES["photo"]["tmp_name"], $no, "noEventImg.png", "../site/images/");
        
        }
    }else{
        if(isset($_FILES["photos"]) && $_FILES["photos"]["tmp_name"] != ""){
        
            new_event($_POST['name'],  $_POST['location'], $_POST['place'], $_POST['category'], $_POST['fprice'], $_POST['tprice'], $dfrom, $dto, $no, "noEventImg.png", $_FILES["photos"]["name"], $_FILES["photos"]["tmp_name"], "../site/images/");
    
        }else{

            new_event($_POST['name'],  $_POST['location'], $_POST['place'], $_POST['category'], $_POST['fprice'], $_POST['tprice'], $dfrom, $dto, $no, "noEventImg.png", $no, "noEventImg.png", "../site/images/");
        
        }
    }

    header('Location: index.php');
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Event</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form method="POST" action="new-event.php" enctype="multipart/form-data">
        <h2>New Event</h2>

        <div class="input-field">
            <input type="text" name="name" required autocomplete="off">
            <label class="normal" for="name">Name...</label>
            <span></span>
        </div>

        <div class="input-field">
            <input type="text" name="location" required autocomplete="off">
            <label class="normal" for="location">Location...</label>
            <span></span>
        </div>

        <div class="input-field">
            <input type="text" name="place" required autocomplete="off">
            <label class="normal" for="place">Place...</label>
            <span></span>
        </div>

        <div class="input-field">
            <input type="text" name="category" required autocomplete="off">
            <label class="normal" for="category">Category...</label>
            <span></span>
        </div>

        <div class="input-field price-field">
            <input type="text" name="fprice" required autocomplete="off">
            <label class="normal" for="fprice">Price from...</label>
            <span></span>
        </div>

        <div class="input-field price-field">
            <input type="text" name="tprice" required autocomplete="off">
            <label class="normal" for="tprice">Price to...</label>
            <span></span>
        </div>

        <div class="fselect">
            <h4>From </h4>
            <div class="input-field select">
                <select name="fyear" id="fyear" class="date" onchange="showHideMonthF()">
                    <option value="0"></option>
                </select>
                <label class="normal">Year...</label>
                <span></span>
            </div>

            <div class="input-field select select-month">
                <select name="fmonth" id="fmonth" onchange="showHideDayF()">
                    <option value="0"></option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="Septemper">Septemper</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <label class="normal">Month...</label>
                <span></span>
            </div>

            <div class="input-field select select-day">
                <select name="fday" id="fday">
                    <option value="0"></option>
                </select>
                <label class="normal">Day...</label>
                <span></span>
            </div>
        </div>

        <div class="sselect">
            <h4>To</h4>
            <div class="input-field select">
                <select name="tyear" id="tyear" class="date" onchange="showHideMonthT()">
                    <option value="0"></option>
                </select>
                <label class="normal">Year...</label>
                <span></span>
            </div>

            <div class="input-field select tselect-month">
                <select name="tmonth" id="tmonth" onchange="showHideDayT()">
                    <option value="0"></option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="Septemper">Septemper</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <label class="normal">Month...</label>
                <span></span>
            </div>

            <div class="input-field select tselect-day">
                <select name="tday" id="tday">
                    <option value="0"></option>
                </select>
                <label class="normal">Day...</label>
                <span></span>
            </div>
        </div>

        <h4>First Image</h4>
        <div class="input-field upload">
            <input type="file" name="photo" class="image">
        </div>

        <h4>Second Image</h4>
        <div class="input-field upload">
            <input type="file" name="photos" class="image">
        </div>

        <section class="fix"></section>

        <button type="submit" name="add">Add</button>
        <a href="index.php"><button type="button" name="button">Events List</button></a>
        <section class="fix"></section>
    </form>

    <script src="js/main.js"></script>
</body>

</html>