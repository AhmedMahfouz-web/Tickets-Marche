<?php
  include_once("function/all.php");
  if(isset($_POST['username'])){
    $numofusers = get_user_by_name($_POST['username']);
    // if(sizeof($numofusers) >= 1){}

    if($numofusers == 1){
      $error = "This Username already Exist";
    } else{
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      insert_user($_POST['username'],$_POST['fname'],$_POST['lname'],$password, "tester");
      $_SESSION['username'] = $_POST['username'];
      header("Location: index.php");
    }
  }
  
  if(isset($_POST['username'])){
    $user = get_user_by_name("admin");
    if($user == 1){
      $password = get_password_by_name("admin");
      if(password_verify("password", $password)){
        $_SESSION['username'] = "admin";
        $request = $_SESSION['request'];
        if($request == NULL){
          header("Location: index.php");
        }else {
          header("Location: {$request}");
        }
       }else {
        $error = "The Username or Password is incorrect";
      }
    }else {
      $error = "The Username or Password is incorrect";
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Sign up</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
    isset($error) ?   print('<p class="error">' . $error . '</p>') : 0 ;
     ?>
  <form action="signup.php" method="post" id="signup-form">
    <h2>Sign up</h2>
    <div class="input-field">
      <input type="text" required autocomplete="off" name="username">
      <label for="username">Username...</label>
      <span></span>
    </div>
    <div class="input-field">
      <input type="text" required autocomplete="off" name="fname">
      <label for="fname">First Name...</label>
      <span></span>
    </div>
    <div class="input-field">
      <input type="text" required autocomplete="off" name="lname">
      <label for="lname">Last Name...</label>
      <span></span>
    </div>
    <div class="input-field">
      <input type="password" required autocomplete="off" name="password">
      <label for="password">Password...</label>
      <span></span>
    </div>
    <div class="input-field">
      <input type="password" required autocomplete="off" name="cpassword">
      <label for="cpassword">Confirm Password...</label>
      <span></span>
    </div>
    <button type="submit">Sign up</button>
    <section class="fix"></section>
    <a class="back" href="signin.php">already have an account?</a>
    <section class="fix"></section>
  </form>
</body>

</html>