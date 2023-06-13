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
  $gender=$_POST["gender"];
  $patientcondition=$_POST["condition"];
  $patientcondition1=implode(" , ",$patientcondition);
   $complaints=$_POST["complaint"];
  $date=date('d-m-y',strtotime($_POST['dates']));
  $daymon=$_POST["daymon"];
  $address=$_POST["address"];
  $landmark=$_POST["land"];
  $pincode=$_POST["pinnum"];
  $state=$_POST["states"];
  $location=$_POST["locations"];
  $other=$_POST["other-option"];
  $age=$_POST["age"];
   $weight=$_POST["weight"];
   $healthcare=$_POST["service"];
  $healthcare1=implode(" , ",$healthcare);
  $timeservice=$_POST["timeservice"];
   $timeservice1=implode(" , ",$timeservice);
   $timeservice2=$_POST["timeservice2"];
   $timeservice3=implode(" , ",$timeservice2);
   $timeservice4=$_POST["timeservice4"];
   $timeservice5=implode(" , ",$timeservice4);
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
  $country=$_POST["country"];
  $email=$_POST["email"];
                     //storing the values in database
 $query="insert into customer_details values( '','$name','$phnumber','$gender','$patientcondition1','$complaints','$date','$daymon','$address','$landmark','$pincode','$state','$location','$other','$age','$weight','$healthcare1','$timeservice1','$timeservice3','$timeservice5','$medicine1','$caretender1','$homesafety1','$foodservice1','$famname','$famnumber','$relationship','$country','$email')";
  mysqli_query($conn,$query);
  if($query)
  {
    echo
    "<script> alert('Form Submitted'); </script>";
  }
  else{
    echo
    "<script> alert('Not Submitted'); </script>";
  }
  header("Location:custdisplay.php");
}
  



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-g">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<title>CUSTOMER FORM</title>

<style>
  body{
    font-family:Perpetua;
  }
   .content {
            display: none;
        }

.form-center {
      display: block;  
      margin: auto;	    
      width: 40%;
      padding: 40px;
   
      box-shadow: 0 10px 25px lightblue; 
      background-color: hsl(180, 100%, 90%);
     
      }

       input[type="text"]{
  font-family: Arial, sans-serif; 
  font-size: 25px; 
  line-height: 1.5;
  width:470px;
  height:45px;
  
       }
  input[type="tel"]{
  font-family: Arial, sans-serif; 
  font-size: 25px; 
  line-height: 1.5; 
  width:470px;
  height:45px;

}
input[type="date"]{
  font-family: Arial, sans-serif; 
  font-size: 20px; 
  line-height: 1.5; 
  width:470px;
  height:45px;

}
input[type="email"]{
  font-family: Arial, sans-serif; 
  font-size: 20px; 
  line-height: 1.5; 
  width:470px;
  height:45px;

}
input[type="number"]{
  font-family: Arial, sans-serif; 
  font-size: 20px; 
  line-height: 1.5; 
  width:470px;
  height:45px;
}

  select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
     
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 6px);
      }
      
	  
      input:hover, select:hover, textarea:hover {
      box-shadow: 0 0 5px 0 #095484;
      } 
	  
 
 
  

label {
  font-size: 15px;
  font-weight: bold;
  color: #333;
  position: relative;
  top: -3px;
} 
 #log{
  
  position:relative; left:700px; top:-65px;
 
}
   

 


 
</style>
</head>
<body>

                              <!-- FORM CREATION  -->
<table>
  
  <div class="form-center">
<form action="" method="POST" >
                         <!-- CUSTOMER DETAILS SECTION -->

<h1 style="color:#000066;"><center>CUSTOMER DETAILS FORM</center></h1>
<div class="item">
<i class="fas fa-user-circle" style="font-size:24px ;color:#000066;"></i>
<label for="name" style="font-size:20px ;color:#000066;" >NAME</label><BR><br> 
<!-- <p >NAME</p><BR><br> -->
<div class="item">
<input type="text" id="name" name="fname" pattern="[A-Za-z]+" onsubmit="return validateName()" required ><BR><BR>
</div>


<i class="fa fa-phone" style="font-size:24px ;color:#000066;"></i>
<label for="no" style="font-size:20px ;color:#000066;">PHONENUMBER</label><br><br>
<div class="item">
<!-- <p>PHONE NUMBER </p> -->
<input type="text" id="no" name="phnumber"  pattern ="[0-9]{10}" onsubmit="return validateNumber()" required ><BR><BR>
</div> 


<div class="question">
<i class="fas fa-restroom	" style="font-size:24px ;color:#000066;"></i>
<label for="gen" style="font-size:20px ;color:#000066;">GENDER</label><br><br> 
<!-- <p>GENDER</p> -->
<div class='question-answer'>
<div>
<input type="radio" id="html" name="gender" value="male">
<label for="html" style="font-size:20px ;">Male</label><br><br></div>
<div>
<input type="radio" id="css" name="gender" value="female">
<label for="css" style="font-size:20px ;">Female</label><br><br> </div></div></div>


                         <!-- PATIENTS CONDITIONS SECTION -->

<div class="questions">
<i class="fas fa-wheelchair" style="font-size:24px ;color:#000066;"></i>

<label for="comp" style="font-size:20px ;color:#000066;">PATIENTS CONDITION</label><br><br>
<div class="checks">
<input type="checkbox" id="act" name="condition[]" value="Active">
<label for="act" style="font-size:20px ;">Active</label><br><br></div>
<div class="checks1">
<input type="checkbox" id="bed" name="condition[]" value="Bedridden">
<label for="bed" style="font-size:20px ;" >Bedridden</label><br><br></div>
<div class="checks2">
<input type="checkbox" id="pnh" name="condition[]" value="Partially need help">
<label for="pnh" style="font-size:20px ;">Partially need help</label><br><br></div></div>
<div class="item">


<div>
<i class="far fa-clipboard" style="font-size:24px ;color:#000066;"></i>
<label for="comp" style="font-size:20px ;color:#000066;">PATIENTS ISSUES</label><br><br>
<textarea id="comp" name="complaint" placeholder="Make your complaints here.." style="height:200px" required></textarea><br><br>
</div></div>

<div class="item">
<i class="fas fa-calendar-alt" style="font-size:24px ;color:#000066;"></i>
<label for="datee" style="font-size:20px ;color:#000066;">DATE</label><br><br>
<input type="date" name="dates" value="date" required/><br><br>
</div>

<div class="item">
<i class="far fa-calendar-check" style="font-size:24px ;color:#000066;"></i>
<label for="days" style="font-size:20px ; color:#000066;">NO OF DAYS/MONTH</label><br><br>
<input type="text" id="days" name="daymon" /><br><br>
</div>
          
<div class="item">
<i class="fa fa-address-card" style="font-size:24px ;color:#000066;"></i>
<label for="text" style="font-size:20px ;color:#000066;">ADDRESS</label><br><br>
<textarea id="text" name="address" cols="50" rows="5" required placeholder=" Enter your address"></textarea><br><br>

<div class="item">
<div class="city-item">
<i class='fas fa-landmark' style="font-size:24px ; color:#000066;"></i>
<label for="lan" style="font-size:20px ; color:#000066;">LANDMARK<label><br><br>
<input type="text" id="lan" name="land" required><BR><BR>

<i class="fa fa-map-pin" style="font-size:24px ;color:#000066;"></i>
<label for="pinno" style="font-size:20px ;color:#000066;">PINCODE<label><br><br>
<input type="number" id="pinno" name="pinnum" required><BR><BR>
</div></div></div>

                            <!-- STATE AND CITY SECTION --->

<i class="fas fa-map-marked-alt	" style="font-size:24px ;color:#000066;"></i>
<strong><label for="select-options" style="font-size:20px ;color:#000066;">STATE</label></strong><br><br>
		<select id="select-options" name="states">
		<option value="states">Select a state</option>
		<option value="TamilNadu">TamilNadu</option>
		<option value="Pondicherry">Pondicherry</option>
		<option value="Kerala">Kerala</option>
		<option value="Karnataka">Karnataka</option>
		<option value="West Bengal">West Bengal</option>
        <option value="Maharashtra">Maharashtra</option>
		<option value="Delhi">Delhi</option>
		<option value="Andhra Pradesh">Andhra Pradesh</option>
		<option value="Telangana">Telangana</option>
		</select>

<br><br><i class="fa fa-map-marker" style="font-size:24px ;color:#000066;"></i>
<strong><label for="select-option" style="font-size:20px ;color:#000066;">LOCATION</label></strong><br><br>
		<select id="select-option" name="locations" onchange="showInputField()">
		<option value="option-0">Select a city</option>
		
		<optgroup label="TAMILNADU">

		<option value="Chennai">Chennai</option>
		<option value="Coimbatore">Coimbatore</option>
		<option value="Madurai">Madurai</option>
		<option value="Trichy">Trichy</option>
		<option value="Vellore">Vellore</option>
        <option value="Sivagangai">Sivagangai</option>
		<option value="Tirpur">Tirpur</option>
		<option value="Thanjavur">Thanjavur</option>
		<option value="Salem">Salem</option>
		<option value="Erode">Erode</option>
		<option value="Thirunelveli">Thirunelveli</option>
		<option value="Thoothukudi">Thoothukudi</option></optgroup>
		
	    <optgroup label="KERALA">

		<option value="Thiruvanathapuram">Thiruvanathapuram</option>
		<option value="Palakadu">Palakadu</option>
		<option value="Calicut/kozhikode">Calicut/kozhikode</option>
		<option value="Kanur">Kanur</option>
		<option value="Kochin">Kochin</option>
		<option value="Kolam">Kolam</option>
	    <option value="Allappy">Allappy</option>
	    <option value="Thrissur">Thrissur</option>
		<option value="Thiruvalla">Thiruvalla</option></optgroup>
		
		<optgroup label="KARNATAKA">

		<option value="Bangalore">Bangalore</option>
		<option value="Mangaluru">Mangaluru</option>
		<option value="Mysore">Mysore</option></optgroup>
		
	    <optgroup label="WEST BENGAL">

		<option value="Kolkata">Kolkata</option></optgroup>
		
		<optgroup label="MAHARASHTRA">

        <option value="Mumbai">Mumbai</option>
		<option value="Pune">Pune</option>
		<option value="Nashik">Nashik</option></optgroup>
		
		<optgroup label="ANDHRA PRADESH">

		<option value="Vijayawada">Vijayawada</option>
		<option value="Amaravadhi">Amaravadhi</option>
		<option value="Guntur">Guntur</option>
		<option value="Tirupati">Tirupati</option></optgroup>
		
		<optgroup label="TELANGANA">

		<option value="Hydreabad">Hydreabad</option>
		<option value="Secunderabad">Secunderabad</option></optgroup>
		
		<option value="Pondicherry"><b>Pondicherry</b></option>
		<option value="Delhi"><b>Delhi</b></option>

		<option value="other">Other</option>
		</select>

<div id="input-field-container" style="display:none;">
<label for="other-option">Please specify:</label>
<input type="text" id="other-option" name="other-option">
</div>

                  <!--- AGE,WEIGHT AND REQUIREMENTS SECTION --->


<div class="item">
<i class="fas fa-user-plus" style="font-size:24px ;color:#000066;"></i>
<label for="ag" style="font-size:20px ;color:#000066;">AGE</label><br><br>
<input type="text" id="ag" name="age" required><BR><BR></div>
 
<div class="item">
<i class="fa fa-weight" style="font-size:24px ;color:#000066;"></i>
<label for="wtg"style="font-size:20px ;color:#000066;">WEIGHT</label><br><br>
<input type="number" id="wtg" name="weight" required><BR><BR></div>

<div class="item">
 <div>
<i class="fa fa-medkit" style="font-size:24px ;color:#000066;"></i>
<label for="wtg"  style="font-size:20px ;color:#000066;"><b>REQUIREMENTS</b></label><br><br>
<legend id ="head" class="heading" style="font-size:17px ;color:#000066;"><b>HOME HEALTHCARE SERVICE</b></legend>
<input type="checkbox" class="checkbox" name="service[]" id="hdv" data-target="div1" value="Home doctor visit"><b>Home Doctor Visit</b><br>
<div id="div1" class="content">
    <div class="checkbox-cont">
        <input type="checkbox"  id="mjs" name="timeservice[]" value="24HRS/ MALE JUNIOR SPECIALIST" >24 hrs/Male Junior Specialist<br>
        <input type="checkbox" id="mss" name="timeservice[]" value="12HRS/MALE SENIOR SPECIALIST">12 hrs/Male Senior Specialist<br>
        <input type="checkbox" id="fjs" name="timeservice[]" value="24HRS/FEMALE JUNIOR SPECIALIST">24 hrs/Female Junior Specialist<br>
        <input type="checkbox" id="fss" name="timeservice[]" value="12HRS/FEMALE SENIOR SPECIALIST">12 hrs/Female Senior Specialist<br>
        <input type="checkbox"id="otv" name="timeservice[]" value="ONE TIME VISIT"> One Time Visit

    </div>
</div>

<input type="checkbox" class="checkbox" name="service[]" data-target="div2" value="Home nurse visit"><b>Home Nurse Visit</b><br>
<div id="div2" class="content">
    <div class="checkbox-cont">
        <input type="checkbox"  name="timeservice2[]" value="24HRS/ MALE JUNIOR SPECIALIST">24 hrs/Male Junior Specialist<br>
        <input type="checkbox"  name="timeservice2[]" value="12HRS/MALE SENIOR SPECIALIST">12 hrs/Male Senior Specialist<br>
        <input type="checkbox"  name="timeservice2[]" value="24HRS/FEMALE JUNIOR SPECIALIST">24 hrs/Female Junior Specialist<br>
        <input type="checkbox"  name="timeservice2[]" value="12HRS/FEMALE SENIOR SPECIALIST">12 hrs/Female Senior Specialist<br>
        <input type="checkbox"  name="timeservice2[]" value="ONE TIME VISIT"> One Time Visit
     </div>
    </div>

<input type="checkbox" class="checkbox" name="service[]" data-target="div3" value="Home Physiotherapist Visit"><b>Home Physiotherapist Visit</b><br>
<div id="div3" class="content">
    <div class="checkbox-cont">
        <input type="checkbox"  name="timeservice4[]" value="MALE JUNIOR SPECIALIST">Male Junior Specialist<br>
        <input type="checkbox"  name="timeservice4[]" value="MALE SENIOR SPECIALIST">Male Senior Specialist<br>
        <input type="checkbox"  name="timeservice4[]" value="FEMALE JUNIOR SPECIALIST">Female Junior Specialist<br>
        <input type="checkbox"  name="timeservice4[]" value="FEMALE SENIOR SPECIALIST">Female Senior Specialist<br>
</div>
</div><BR>

<legend id ="head" class="heading" style="font-size:17px ;color:#000066;"><b>HOME HEALTHCARE OTHER SERVICES</b></legend>

<input type="checkbox" id="odc" name="service[]" value="Online Doctor Consultaion">
<label for="odc">Online Doctor Consultation&ensp;</label><br>
<input type="checkbox" id="hbc" name="service[]" value="Home Blood Collection">
<label for="hbc">Home Blood Collection &ensp;</label><br>
<input type="checkbox" id="non" name="service[]" value="None">
<label for="non">None &ensp;</label><br><br>
</div> 
</div>

<div class="item">
<legend id ="head" class="heading" style="font-size:17px ;color:#000066;"><b>MEDICINE SERVICE</b></legend>
<input type="checkbox" id="mrc" name="med[]" value="Medical Record Maintenance">
<label for="mrc" >Medical Record Maintenance &ensp;</label><br>
<input type="checkbox" id="mi" name="med[]" value="60+ Medical Insurance">
<label for="mi" >60+ Medical Insurance &ensp;</label><br>
<input type="checkbox" id="mds" name="med[]" value="Monthly Medicines Home Delivery on subscriptions">
<label for="mds" >Monthly Medicines Home Delivery on subscriptions &ensp;</label><br>
<input type="checkbox" id="non1" name="med[]" value="None">
<label for="non1">None &ensp;</label><br><br>
</div>


<div class="item">
<legend id ="head" class="heading" style="font-size:17px ;color:#000066;"><b>CARETENDERS</b></legend>
<input type="checkbox" id="cs" name="care[]" value="Caretenders Services">
<label for="cs" >Caretenders Services &ensp;</label><br>
<input type="checkbox" id="es" name="care[]" value="Errand Services">
<label for="es" >Errand Services &ensp;</label><br>
<input type="checkbox" id="cs" name="care[]" value="Concierge Services">
<label for="lang" >Concierge Services &ensp;</label><br>
<input type="checkbox" id="pae" name="care[]" value="Personal Attendant For Elderly">
<label for="pae" >Personal Attendant For Elderly &ensp;</label><br>
<input type="checkbox" id="non2" name="care[]" value="None">
<label for="non1">None &ensp;</label><br><br>
</div>



<div class="item">
<legend id ="head" class="heading" style="font-size:17px ;color:#000066;"><b>HOME SAFETY SERVICES</b></legend>
<input type="checkbox" id="msf" name="home[]" value="Making Home Senior Friendly">
<label for="msf" >Making Home Senior Friendly &ensp;</label><br>
<input type="checkbox" id="pm" name="home[]" value="Property  Management">
<label for="pm" >Property Management &ensp;</label><br>
<input type="checkbox" id="non3" name="home[]" value="None">
<label for="non3">None &ensp;</label><br><br>
</div>


<div class="item">
<legend id ="head" class="heading" style="font-size:17px ;color:#000066;"><b>FOOD SERVICES</b></legend>
<input type="checkbox" id="ng" name="food[]" value="Nutrition Guide for 60+">
<label for="ng" >Nutrition Guide for 60+ &ensp;</label><br>
<input type="checkbox" id="cd"  name="food[]" value="Customized diet food and home delivery">
<label for="cd" >Customized diet food and home delivery &ensp;</label><br>
<input type="checkbox" id="non4" name="food[]" value="None">
<label for="non4">None &ensp;</label><br>
</div><br><br>

                       <!--- PATIENTS FAMILY DETAILS SECTION --->

<legend id ="head" class="heading" style="font-size:20px ;color:#000066;"><b>PATIENT'S FAMILY DETAILS</b></legend><br><br>
<div class="item">
<i class="fas fa-user-circle" style="font-size:17px ;color:#000066;"></i>
<label for="pname"  style="font-size:17px ;color:#000066;">NAME</label><BR><br>
<input type="text" id="pname" name="famname" required pattern="[A-Za-z]+" onsubmit="return validateName1()"><BR><BR>
</div>
<div class="item">
<i class="fa fa-phone" style="font-size:17px ;color:#000066;"></i>
<label for="pno" style="font-size:17px ;color:#000066;">NUMBER</label><br><br>
<input type="text" id="pno" name="famnumber" pattern ="[0-9]{10}" onsubmit="return validateNumber1()"  required ><BR><BR></div>

<div class="item">
<i class="fas fa-user-plus" style="font-size:17px ;color:#000066;"></i>
<label for="relation"style="font-size:17px ;color:#000066;" >RELATIONSHIP</label><br><br>
<input type="text" id="relation" name="relationship" required><BR><BR></div>

<div class="item">
<i class="fas fa-user-plus" style="font-size:17px ;color:#000066;"></i>
<label for="country"style="font-size:17px ;color:#000066;" >COUNTRY</label><br><br>
<input type="text" id="country" name="country" required><BR><BR></div>


<div class="item">
<i class="fa fa-envelope" style="font-size:17px ;color:#000066;"></i>
<label for="mailid" style="font-size:17px ;color:#000066;">MAIL</label><br><br>
<input type="email" id="mailid" name="email" onsubmit="return validateEmail()"  required><BR><BR></div>


  <div class="item"><button type="submit" name="submit" style="background-color:  Blue De France ; font-size : large; border-radius:3px">SUBMIT</button></div>


</form>
</div>
</table>  
<a href="logout.php"><button type="submit" id="log"   style="background-color: Blue De France ; font-size : large; border-radius:3px">LOGOUT</button></a>
 
                      <!-- JAVASCRIPT AND JQUERY SECTION --->
                      <!--VALIDATION-->
<script>
  //STORING MULTIPLE VALUES IN CHECKBOX
    $(document).ready(function() {
        $('.checkbox').click(function() {
            var targetDiv = $('#' + $(this).data('target'));
            var checkboxes = targetDiv.find('input[type="checkbox"]');
            
            if ($(this).is(':checked')) {
            targetDiv.show();
            } else {
            targetDiv.hide();
            checkboxes.prop('checked', false);
            }
        });
    });
</script>
<script type="text/javascript">
	function showInputField() {
  var selectBox = document.getElementById("select-option");
  var inputField = document.getElementById("input-field-container");
  if (selectBox.value == "other") {
    inputField.style.display = "block";
  }

  else {
    inputField.style.display = "none";
  } 
  
}


function validateEmail() {
  const email = document.getElementById("mailid").value;
  const emailRegex =/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert("Invalid email address");
    return false;
  }
  return true;
}


function validateName() {
      var nameInput = document.getElementById("name");
      var name = nameInput.value.trim();

      // Regular expression pattern to allow only alphabets and spaces
      var pattern = /^[A-Za-z ]+$/;

      if (!pattern.test(name)) {
        nameInput.setCustomValidity("Please enter a valid name.");
        nameInput.reportValidity();
        return false;
      }

      return true;
    }
function validateNumber() {
  const phoneNumber = document.getElementById("phno").value;
  const phoneNumberRegex = /^[0-9]{10}$/;
  if (!phoneNumberRegex.test(phoneNumber)) {
    alert("Invalid phone number. Please enter a 10-digit number.");
    return false;
  }
  return true;
} 
function validateNumber1() {
  const phoneNumber = document.getElementById("pno").value;
  const phoneNumberRegex = /^[0-9]{10}$/;
  if (!phoneNumberRegex.test(phoneNumber)) {
    alert("Invalid phone number. Please enter a 10-digit number.");
    return false;
  }
  return true;
} 
	function validateName1() {
      var nameInput = document.getElementById("pname");
      var name = nameInput.value.trim();

      // Regular expression pattern to allow only alphabets and spaces
      var pattern = /^[A-Za-z ]+$/;

      if (!pattern.test(name)) {
        nameInput.setCustomValidity("Please enter a valid name.");
        nameInput.reportValidity();
        return false;
      }

      return true;
    }

   


</script>
</body>
</html>