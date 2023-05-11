<?php
require 'config.php';
if(!empty($_SESSION["user"])){
  header("Location: custform.php");
}
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["pass"];
  $result = mysqli_query($conn, "SELECT * FROM  login  WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["regist"] = true;
      $_SESSION["user"] = $row["username"];
      header("Location: custform.php");
     
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
    }
    else{
      echo
      "<script> alert('User Not Registered'); </script>";
    }

    
  }
  // else{
  //  echo
  //  "<script> alert('User Not Registered'); </script>";
  // }

?>
<!doctype html>
<html>
    <head>
      

     <!--<link type="text/css" rel="stylesheet" href="login.css"/> --->
     <link type="text/css" rel="stylesheet" href="header.css"/> 
     <link type="text/css" rel="stylesheet" href="footer.css"/> 

     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<style>
 html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
	  
      border: 5px solid #f1f1f1;
      position:absolute;
      bottom:160px;
      left:550px;
      background-color:white;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 20px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #8ebf42;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      h1 {
      text-align:center;
      font-size:18;
      color:black;

      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 30px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      color:black;
      }
	  .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
      
      }
      
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
      
      .heading
      {
        color:black;
      }
    }
  </style>
    

        <title>
            login page
   </title>
    </head>
    <body>
      
    <centre>
    <form action="" method="post">
    <h1>LOGIN FORM</h1>

    <div class="icon">

        <i class="fas fa-user-circle"></i>
      </div>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label  for="uname"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <label for="psw"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
      </div>
      <button type="submit" name="submit">Login</button>
      <!-- <tr><td><label  for="fname">NAME</label> <br><br>
        <input type="text" id="fname" name="username" required></td></tr>

        <tr><td><label  for="pwd">PASSWORD</label><br><br>
        <input type="password" id="pwd" name="pass" required></tr></td>
  
        <button type="submit" id="but" name="submit">LOGIN </button> -->
  </centre>
  <!-- </div> -->
     
</form>
</table>
<?php include_once('header.php') ?>
<?php include_once('footer.php') ?>
</body>


    </html>