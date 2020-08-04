<?php 

require_once("function/all.php");
is_logged_in('edit-event.php');
if(!isset($_GET['id'])){
    header("Location: index.php");
} elseif(isset($_GET['id'])){
    $events = get_event_by_id($_GET['id']);
}
    
if(isset($_POST['name'])){
    if($_POST['fyear'] != 0){
        $dfrom = $_POST['fday'] . "-" . $_POST['fmonth'] . "-" . $_POST['fyear'];
    }else{
        $dfrom = $_POST['fdate'];
    }
    if($_POST['tyear'] != 0){
        $dto = $_POST['tday'] . "-" . $_POST['tmonth'] . "-" . $_POST['tyear'];
    } else{
        $dto = $_POST['sdate'];
    }
    $no = 5;
    if(isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] != "" ){
        if(isset($_FILES["images"]) && $_FILES["images"]["tmp_name"] != ""){

            update_event($_POST['id'], $_POST['name'], $_POST['location'], $_POST['place'], $_POST['category'], $_POST['fprice'], $_POST['tprice'], $dfrom, $dto, $_FILES["image"]['name'], $_FILES["image"]["tmp_name"], $_FILES["images"]["name"], $_FILES["images"]["tmp_name"], "../site/images/");
            
        }else{

            update_event($_POST['id'], $_POST['name'], $_POST['location'], $_POST['place'], $_POST['category'], $_POST['fprice'], $_POST['tprice'],   $dfrom, $dto, $_FILES["image"]['name'], $_FILES["image"]["tmp_name"], $no, $_POST['oimg2'], "../site/images/");
        
        }
    }else{
        if(isset($_FILES["images"]) && $_FILES["images"]["tmp_name"] != ""){
        
            update_event($_POST['id'], $_POST['name'], $_POST['location'], $_POST['place'], $_POST['category'], $_POST['fprice'], $_POST['tprice'], $dfrom, $dto, $no, $_POST['oimg1'], $_FILES["images"]['name'], $_FILES["images"]["tmp_name"], "../site/images/");

        }else{

            update_event($_POST['id'], $_POST['name'], $_POST['location'], $_POST['place'], $_POST['category'], $_POST['fprice'], $_POST['tprice'], $dfrom, $dto, $no, $_POST['oimg1'], $no, $_POST['oimg2'], $no);
        
        }
    }

    header('Location: index.php');
};



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Event</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form class="edit-form" action="edit-event.php" method="POST" enctype="multipart/form-data">
        <h2>edit Event</h2>
        <input type="hidden" name="id" required autocomplete="off" value="<?php echo $events['id'] ?>">
        <div class="input-field">
            <input type="text" name="name" required autocomplete="off" value="<?php echo $events['ename'] ?>">
            <label for="name">Name...</label>
            <span></span>
        </div>

        <div class="input-field">
            <input type="text" name="location" required autocomplete="off" value="<?php echo $events['elocation'] ?>">
            <label for="location">Location...</label>
            <span></span>
        </div>

        <div class="input-field">
            <input type="text" name="place" required autocomplete="off" value="<?php echo $events['eplace'] ?>">
            <label for="place">Place...</label>
            <span></span>
        </div>

        <div class="input-field">
            <input type="text" name="category" required autocomplete="off" value="<?php echo $events['ecategory'] ?>">
            <label for="category">Category...</label>
            <span></span>
        </div>

        <div class="input-field price-field">
            <input type="text" name="fprice" required autocomplete="off" value="<?php echo $events['pfrom'] ?>">
            <label for="fprice">Price from...</label>
            <span></span>
        </div>

        <div class="input-field price-field">
            <input type="text" name="tprice" required autocomplete="off" value="<?php echo $events['pto'] ?>">
            <label for="tprice">Price to...</label>
            <span></span>
        </div>

        <div class="fselect">
            <h4>From </h4>
            <div class="input-field select">
                <select name="fyear" id="fyear" class="date" onchange="showHideMonthF()">
                    <option value="0"></option>
                </select>
                <label>Year...</label>
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
                <label>Month...</label>
                <span></span>
            </div>

            <div class="input-field select select-day">
                <select name="fday" id="fday">
                    <option value="0"></option>
                </select>
                <label>Day...</label>
                <span></span>
            </div>
        </div>

        <div class="sselect">
            <h4>To</h4>
            <div class="input-field select">
                <select name="tyear" id="tyear" class="date" onchange="showHideMonthT()">
                    <option value="0"></option>
                </select>
                <label>Year...</label>
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
                <label>Month...</label>
                <span></span>
            </div>

            <div class="input-field select tselect-day">
                <select name="tday" id="tday">
                    <option value="0"></option>
                </select>
                <label>Day...</label>
                <span></span>
            </div>
        </div>

        <h4>First Image</h4>
        <div class="input-field upload">
            <input type="file" name="image" class="image">
        </div>

        <h4>Second Image</h4>
        <div class="input-field upload">
            <input type="file" name="images" class="image">
        </div>

        <input name="oimg1" type="hidden" value="<?php echo $events['img']; ?>">
        <input name="oimg2" type="hidden" value="<?php echo $events['imgs']; ?>">
        <input name="fdate" type="hidden" value="<?php echo $events['dfrom']; ?>">
        <input name="sdate" type="hidden" value="<?php echo $events['dto']; ?>">

        <section class="fix"></section>

        <button type="submit" name="add">Save</button>
        <a href="index.php"><button type="button" name="button">Event List</button></a>
        <section class="fix"></section>
    </form>

    <script src="js/main.js"></script>
</body>

</html>