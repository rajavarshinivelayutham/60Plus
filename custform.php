
<?php 
require "config.php";
if(!empty($_SESSION["user"])){
  $users = $_SESSION["user"];
  $result = mysqli_query($conn, "SELECT * FROM login WHERE username = '$users'");
  $row = mysqli_fetch_assoc($result);
}
if (isset($_POST["submit"]))
{
  $name=$_POST["fname"];
  $phnumber=$_POST["phnumber"];
  $complaints=$_POST["complaint"];
  $address=$_POST["address"];
  $location=$_POST["locations"];
  $healthcare=$_POST["service"];
  $healthcare1=implode(" , ",$healthcare);
  $medicine=$_POST["med"];
  $medicine1=implode(" , ",$medicine);
  $caretender=$_POST["care"];
  $caretender1=implode(" , ",$caretender);
  $homesafety=$_POST["home"];
  $homesafety1=implode(" , ",$homesafety);
  $foodservice=$_POST["food"];
  $foodservice1=implode(" , ",$foodservice);
  $famname=$_POST["famname"];
  $famnumber=$_POST["famnumber"];
  $relationship=$_POST["relationship"];
  $email=$_POST["email"];
  $landmark=$_POST["land"];
  $pincode=$_POST["pinnum"];
  $pincode=$_POST["pinnum"];
  $gender=$_POST["gender"];
  $patientcondition=$_POST["condition"];
   $patientcondition1=implode(" , ",$patientcondition);
   
  $query="insert into customer_details values( '','$name','$phnumber','$complaints','$address','$location','$healthcare1','$medicine1','$caretender1','$homesafety1','$foodservice1','$famname','$famnumber','$relationship','$email','$landmark','$pincode','$gender','$patientcondition1')";
  mysqli_query($conn,$query);
  if($query)
  {
    echo
    "<script> alert('Query Submitted'); </script>";
  }
  else{
    echo
    "<script> alert('Not Submitted'); </script>";
  }
  
}
  

 // $query1 = mysqli_query($conn,"SELECT * FROM customer_details");


//  $query1 = $mysqli->query($conn,"SELECT * FROM customer_details");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

<title>css example</title>
<meta charset="utf-g">
<style>
body {
  background-color:  #AFDBD5;
}
.heading
{
  font-size: 25px;

}
.headings
{
 font-size: 18px;
}
label
{
font-size: 18px;
}
textarea
{
  width: 40%;
  height: 130px;
  border-radius: 15px;
}
input[type=text] {
  width:20%;
  padding: 12px 20px;
  margin: 8px 0;
  border-radius: 22px;
}
input[type=tel] {
  width:20%;
  padding: 12px 20px;
  margin: 8px 0;
  border-radius: 22px;
}

input[type=number] {
  width:20%;
  padding: 12px 20px;
  margin: 8px 0;
  border-radius: 22px;
}
input[type=mail] {
  width:20%;
  padding: 12px 20px;
  margin: 8px 0;
  border-radius: 22px;
}
button {
  width:10%;
  padding: 12px 20px;
  margin: 8px 0;
  border-radius: 22px;
}
#loc
{
  width:23%;
  padding: 12px 20px;
  margin: 8px 0;
  border-radius: 22px;
}
input[type=checkbox]{
            transform : scale(2);
        }

</style>
</head>
<body>
<!-- <h1 class="heading">USER INPUT FORM </h1><br><br> -->
<table>
<form action="" method="POST">

<fieldset>
<legend id ="head" class="heading"><b>PERSONAL PARTICULAR</b></legend>

<i class="fas fa-user-circle" style="font-size:24px"></i>
<label for="name" >NAME</label><BR><br>
<input type="text" id="name" name="fname" required ><BR><BR>

<i class="fa fa-phone" style="font-size:24px"></i>
<label for="no" >PHONENUMBER</label><br><br>
<input type="tel" id="no" name="phnumber" required><BR><BR>

<i class="fas fa-restroom	" style="font-size:24px"></i>
<label for="gen" >GENDER</label><br><br>
<input type="radio" id="html" name="gender" value="male">
<label for="html">Male</label><br>
<input type="radio" id="css" name="gender" value="female">
<label for="css">Female</label><br><br> 

<i class="fa-solid fa-users-medical" style="font-size:24px"></i>
<label for="comp">PATIENTS CONDITION</label><br><br>
<input type="checkbox" id="act" name="condition[]" value="Active">
<label for="act" >Active</label><br><br>
<input type="checkbox" id="bed" name="condition[]" value="Bedridden">
<label for="bed" >Bedridden</label><br><br>
<input type="checkbox" id="pnh" name="condition[]" value="Partially need help">
<label for="pnh" >Partially need help</label><br><br>

<i class="far fa-clipboard" style="font-size:24px"></i>
<label for="comp">PATIENTS COMPLAINTS</label><br><br>
<textarea id="comp" name="complaint" placeholder="Make your complaints here.." style="height:200px" required></textarea><br><br>

<i class="fa fa-address-card" style="font-size:24px"></i>
<label for="text">ADDRESS</label><br><br>
<textarea id="text" name="address" cols="50" rows="5" required placeholder=" Enter your address"></textarea><br><br>

<i class='fas fa-landmark' style='font-size:24px'></i>
<label for="lan" >LANDMARK<label><br><br>
<input type="text" id="lan" name="land" required><BR><BR>

<i class="fa fa-map-pin" style="font-size:24px"></i>
<label for="pinno" >PINCODE<label><br><br>
<input type="number" id="pinno" name="pinnum" required><BR><BR>

<i class="fa fa-map-marker" style="font-size:24px"></i>
<label for="loc" >LOCATION</label><br><br>
<select id="loc" name="locations">
<option> Chennai </option>
<option>Trichy</option>
<option>Coimbatore</option>
<option>Madurai</option>
<option>Bangalore</option>
<option>Hyderabad</option>
<option>Kerala</option>
</select><br><br>



<i class="fas fa-user-plus" style="font-size:24px"></i>
<label for="ag"  >AGE</label><br><br>
<input type="text" id="ag" name="age" required><BR><BR>
 
<i class="fa fa-weight" style="font-size:24px"></i>
<label for="wtg" >WEIGHT</label><br><br>
<input type="number" id="wtg" name="weight" required><BR><BR>

</fieldset><br><br>
<i class="fa fa-medkit" style="font-size:24px"></i>
<label for="wtg" ><b>REQUIREMENTS</b></label><br><br>


<fieldset>
<legend id ="head" class="heading"><b>HOME HEALTHCARE SERVICE</b></legend>
<input type="checkbox" id="hdv" name="service[]" value="Home Doctor Visit">
<label for="hdv" >Home Doctor Visit &ensp;</label>
<input type="checkbox" id="hnv" name="service[]" value="Home Nurse Visit">
<label for="hnv" >Home Nurse Visit &ensp;</label>
<input type="checkbox" id="hpv" name="service[]" value="Home Physiotherapist Visit">
<label for="hpv" >Home Physiotherapist Visit &ensp;</label>
<input type="checkbox" id="odc" name="service[]" value="Online Doctor Consultaion">
<label for="odc" >Online Doctor Consultation &ensp;</label>
<input type="checkbox" id="hbc" name="service[]" value="Home Blood Collection">
<label for="hbc">Home Blood Collection &ensp;</label>

</fieldset>

<fieldset>
<legend id ="head" class="heading"><b>MEDICINE SERVICE</b></legend>
<input type="checkbox" id="mrc" name="med[]" value="Medical Record Maintenance">
<label for="mrc" >Medical Record Maintenance &ensp;</label>
<input type="checkbox" id="mi" name="med[]" value="60+ Medical Insurance">
<label for="mi" >60+ Medical Insurance &ensp;</label>
<input type="checkbox" id="mds" name="med[]" value="Monthly Medicines Home Delivery on subscriptions">
<label for="mds" >Monthly Medicines Home Delivery on subscriptions &ensp;</label>
</fieldset>

<fieldset>
<legend id ="head" class="heading"><b>CARETENDERS</b></legend>
<input type="checkbox" id="cs" name="care[]" value="Caretenders Services">
<label for="cs" >Caretenders Services &ensp;</label>
<input type="checkbox" id="es" name="care[]" value="Errand Services">
<label for="es" >Errand Services &ensp;</label>
<input type="checkbox" id="cs" name="care[]" value="Concierge Services">
<label for="lang" >Concierge Services &ensp;</label>
<input type="checkbox" id="pae" name="care[]" value="Personal Attendant For Elderly">
<label for="pae" >Personal Attendant For Elderly &ensp;</label>
</fieldset>


<fieldset>
<legend id ="head" class="heading"><b>HOME SAFETY SERVICES</b></legend>
<input type="checkbox" id="msf" name="home[]" value="Making Home Senior Friendly">
<label for="msf" >Making Home Senior Friendly &ensp;</label>
<input type="checkbox" id="pm" name="home[]" value="Property  Management">
<label for="pm" >Property Management &ensp;</label>
</fieldset>

<fieldset>
<legend id ="head" class="heading"><b>FOOD SERVICES</b></legend>
<input type="checkbox" id="ng" name="food[]" value="Nutrition Guide for 60+">
<label for="ng" >Nutrition Guide for 60+ &ensp;</label>
<input type="checkbox" id="cd"  name="food[]" value="Customized diet food and home delivery">
<label for="cd" >Customized diet food and home delivery &ensp;</label>
</fieldset>

<fieldset>
<legend id ="head" class="heading"><b>PATIENTS FAMILY DETAILS</b></legend>

<i class="fas fa-user-circle" style="font-size:24px"></i>
<label for="pname" >NAME</label><BR><br>
<input type="text" id="pname" name="famname" required><BR><BR>

<i class="fa fa-phone" style="font-size:24px"></i>
<label for="pno" >NUMBER</label><br><br>
<input type="tel" id="pno" name="famnumber" required><BR><BR>

<i class="fas fa-user-plus" style="font-size:24px"></i>
<label for="relation" >RELATIONSHIP</label><br><br>
<input type="text" id="relation" name="relationship" required><BR><BR>

<i class="fa fa-envelope" style="font-size:24px"></i>
<label for="mailid" >MAIL</label><br><br>
<input type="mail" id="mailid" name="email" required><BR><BR>


<button type="submit" name="submit">SUBMIT</button>

<!-- <button type="submit" id="dis" onclick="display()">DISPLAY</button> -->

 
       

       
      

  
 




</form>
</table>  
<a href="logout.php"><button>logout</button></a>



</body>
</html> 
