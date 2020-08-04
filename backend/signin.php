<?php
  include_once("function/all.php");
  is_logged_in('sign-in');
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
    <title>Sign in</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <?php if(isset($error)){echo "<p class='error'>" . $error . "</p>" ;  } ; ?>
    <form action="signin.php" method="post" id="signin-form">
      <h2>Sign in</h2>
      <div class="input-field">
        <input type="text" name="username" required autocomplete="off">
        <label class="normal" for="username">Username...</label>
        <span></span>
      </div>
      <div class="input-field">
        <input type="password" name="password" required autocomplete="off"> 
        <label class="normal" for="password">Password...</label>
        <span></span>
      </div>
      <button type="submit">Sign in:</button>
      <section class="fix"></section>
      <a class="back" href="signup.php">don't have account?</a>
      <section class="fix"></section>
    </form>
  </body>

</html>
