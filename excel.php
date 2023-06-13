<?php
require "config.php";
//FORM CREATION OF PATIENT-DETAILS AND STORING IN EXCEL

if (isset($_POST["submit"]))
{
  $name=$_POST["pname"];
  $dob=date('d-m-y',strtotime($_POST['dob']));
  $age=$_POST["age"];
  $gender=$_POST["gender"];
  $phno=$_POST["phno"];
  $weight=$_POST["weight"];
  $paaddress=$_POST["paaddress"];
  $disease=$_POST["disease"];
  $disease1=implode(",",$disease);
  $illness=$_POST["illness"];
  $diseasename=$_POST["diseasename"];
  $medicinename=$_POST["medicinename"];
  $doctorname=$_POST["doctorname"];
  $specialist=$_POST["specialist"];
  $timing=$_POST["timing"];
  $diseasename1=$_POST["diseasename1"];
  $medicinename1=$_POST["medicinename1"];
  $doctorname1=$_POST["doctorname1"];
  $specialist1=$_POST["specialist1"];
  $timing1=$_POST["timing1"];
  $operation=$_POST["operation"];
  $docdetails=$_POST["doctordetails"];
  $docname=$_POST["docname"];
  $hospital=$_POST["hospital"];
  $dphno=$_POST["dphno"];
  $address=$_POST["address"];
  $apparatus=$_POST["apparatus"];
  $apparatus1=implode(",",$apparatus);
        //STORING DATAS IN DATABASE
  $query="insert into patient_details values( '','$name','$dob','$age','$gender','$phno','$weight','$paaddress','$disease1','$illness','$diseasename','$medicinename','$doctorname','$specialist','$timing','$diseasename1','$medicinename1','$doctorname1','$specialist1','$timing1','$operation','$docdetails','$docname','$hospital','$dphno','$address','$apparatus1')";
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

} 
  
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>
        PATIENT FORM
    </title>
 
    <style>
 
        /* Styling the Body element i.e. Color,
        Font, Alignment */
        body {
            background-color: #05c46b;
            font-family: Verdana;
            text-align: center;
        }
 
        /* Styling the Form (Color, Padding, Shadow) */
        form {
            background-color: #fff;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
 
        /* Styling form-control Class */
        .form-control {
            text-align: left;
            margin-bottom: 25px;
        }
 
        /* Styling form-control Label */
        .form-control label {
            display: block;
            margin-bottom: 10px;
        }
 
        /* Styling form-control input,
        select, textarea */
        .form-control input,
        .form-control select,
        .form-control textarea {
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            padding: 10px;
            display: block;
            width: 95%;
        }
 
        /* Styling form-control Radio
        button and Checkbox */
        .form-control input[type="radio"],
        .form-control input[type="checkbox"] {
            display: inline-block;
            width: auto;
        }
 
        /* Styling Button */
        button {
            background-color: #05c46b;
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            font-size: 21px;
            display: block;
            width: 100%;
            margin-top: 50px;
            margin-bottom: 20px;
        }
        .form-control input[type="checkbox"] {
            display: inline-block;
            width: auto;
        }
        i{
          position:absolute;
          bottom:-320px;
          left:700px;
        }
        #medup
        {
          position:absolute;
          right:1070px;

        }
        #medupdate
        {
          position:absolute;
          bottom:-320px;
          left:730px;
        }
    </style>
</head>
  
<body>
  
    <!-- Create Form -->
    <form id="form" action="" method="POST">
 
        <!-- Details -->
        <div class="form-control">
          <b>  <label for="name" >
                Name
            </label></b>
 
            <!-- Input Type Text -->
            <input type="text"
                   id="name" name="pname"
                   placeholder="Enter your name" pattern="[A-Za-z]+" onsubmit="return validateName()" required  >
        </div>
  
        <div class="form-control">
          <b>  <label for="dob" >Date of Birth </label> </b>
            <!-- Input Type dob-->
            <input type="date" id="dob" value="dob" placeholder="Enter your dob" name="dob" required >
        </div>
        <div class="form-control">
           <b> <label for="age" >Age </label> </b>
            <!-- Input Type dob-->
            <input type="number" id="age" value="age" onmousemove = "FindAge()"  name="age" required >
        </div>

        <div class="form-control">
           <b> <label for="gen">Gender</label> </b>
            <input type="radio" id="male" name="gender" value="male">Male
            <input type="radio" id="female" name="gender" value="female">Female
    </div>

        <div class="form-control">
           <b> <label for="phno" > 
                Phone Number
                </b> </label>
 
            <!-- Input Type Text -->
            <input type="text"
                   id="phno" name="phno"
                   placeholder="Enter your Phone number" pattern ="[0-9]{10}" onsubmit="return validateNumber()" required  >
        </div>

        <div class="form-control">
          <b>  <label for="weight" > 
                Weight
                </b></label>
 
            <!-- Input Type Text -->
            <input type="text"
                   id="weight"
                   placeholder="Enter your weight" name="weight" required>
        </div>
        <div class="form-control">
          <b>  <label for="paddress">
                Patient's Address
                </b> </label>
 
            <!-- multi-line text input control -->
            <textarea name="paaddress" id="medicine" placeholder = "Enter Patients Address" >
            </textarea>
        </div>
        <div class="form-control">
            <b><label> PATIENT'S DISEASE </label></b>
            <!-- Input Type Checkbox -->
            <label for="inp-21">
                <input type="checkbox"
                       name="disease[]" value="Blood Pressure">Blood Pressure</input></label>
            <label for="inp-22">
                <input type="checkbox"
                       name="disease[]" value="Diabetes">Diabetes</input></label>
			      <label for="inp-23">
                <input type="checkbox"
                       name="disease[]" value="Arthritis">Arthritis</input></label>
            <label for="inp-24">
                <input type="checkbox"
                       name="disease[]" value="Cancer">Cancer</input></label>
            <label for="inp-25">
                <input type="checkbox"
                       name="disease[]" value="Heart Disease">Heart Disease</input></label>
            <label for="inp-26">
                <input type="checkbox"
                       name="disease[]" value="Kidney Disease">Kidney Disease</input></label>
			      <label for="inp-27">
                <input type="checkbox"
                       name="disease[]" value="Liver Disease">Liver Disease</input></label>
            <label for="inp-28">
                <input type="checkbox"
                       name="disease[]" value="Neurological Disorders">Neurological Disorders</input></label>
            <label for="inp-29">
                <input type="checkbox"
                       name="disease[]" value="Lung Disease">Lung Disease</input></label>
            <label for="inp-30">
                <input type="checkbox"
                       name="disease[]" value="Bleeding Disorders">Bleeding Disorders</input></label>
			      <label for="inp-31">
                <input type="checkbox"
                       name="disease[]" value="Asthma">Asthma</input></label>
            <label for="inp-32">
                <input type="checkbox"
                       name="disease[]" value="Ulcer">Ulcer</input></label>
                       <label for="inp-32">
               
                       
    <b> <label for="feedback-text">Other Illness </label> </b>
    <textarea id="feedback-text" name="illness" placeholder="PLease enter if any" ></textarea>
  </div> 
  <label id="medupdate"><b>Medicine updates</b></label><br><br>
	<div onclick="showme('widget');" id="geeks">
  
    <i class="fa fa-plus-circle"></i>
</div>
<div id="widget" style="display:none;">
    
    <label for="det1">Disease name
</label>
    <input type="text" id="det1" name="diseasename"><br><br>

    <label for="det2">Medicine name
</label>
    <input type="text" id="det2" name="medicinename"><br><br>

    <label for="det3">Doctor name
</label>
    <input type="text" id="det3" name="doctorname"><br><br>

    <label for="det4">Specialist 
</label>
    <input type="text" id="det4" name="specialist"><br><br>

    <label for="det5">Timing
</label>
    <input type="text" id="det5" name="timing"><br><br>

    <label for="det1">Disease name
</label>
    <input type="text" id="det6" name="diseasename1"><br><br>

    <label for="det2">Medicine name
</label>
    <input type="text" id="det7" name="medicinename1"><br><br>

    <label for="det3">Doctor name
</label>
    <input type="text" id="det8" name="doctorname1"><br><br>

    <label for="det4">Specialist 
</label>
    <input type="text" id="det9" name="specialist1"><br><br>

    <label for="det5">Timing
</label>
    <input type="text" id="det10" name="timing1"><br><br>

    
</div>

		
		 <div class="form-control">
           <b> <label for="comment">
                Please list any operations you had and the dates of each
            </label> </b>
 
            <!-- multi-line text input control -->
            <textarea name="operation" id="comment"
                placeholder = "Please mention if any">
            </textarea>
        </div>
     

        <div class="form-control">
  <b><label for="feedback">Do you take any regular checkups</label></b>
  <input type="radio" id="yes" name="doctordetails" value="yes"> Yes</input><br>
  <input type="radio" id="no" name="doctordetails"    value="no"> No</input><br>

  <div class="form-control">
    <div id="feedback-textbox" style="display: none;">

           <b> <label for="Doc name" >
                Doctor Name
            </label></b>
 
            <!-- Input Type Email-->
            <input type="text"
                   id="Doc name" name="docname"
                   placeholder="Enter Doctor name" />
				   

            <b><label for="clinic" >
                Hospital/Clinic Name
            </label></b>
 
            <!-- Input Type Email-->
            <input type="text"
                   id="clinic"
                   placeholder="Enter  Hospital/Clinic Name" name="hospital" />
        			   
        <div class="form-control">
            <b><label for="years" >
                Phone Number
            </label></b>
 
            <!-- Input Type Text -->
            <input type="text"
                   id="dphno" name="dphno"
                   placeholder="Enter your Phone Number" />
        </div>
   <b> <label for="feedback-text">Hospital Address</label> </b>
    <textarea id="feedback-text" name="address" placeholder="Enter your address" ></textarea>
    <div class="form-control">
            <b><label> Medical Apparatus at Home</label></b>
            <!-- Input Type Checkbox -->
            <label for="inp-17">
                <input type="checkbox"
                       name="apparatus[]" value="Glucometer">Glucometer</input></label>
            <label for="inp-18">
                <input type="checkbox"
                       name="apparatus[]" value="Thermometer">Thermometer  </input></label>
			<label for="inp-19">
                <input type="checkbox"
                       name="apparatus[]" value="BP Machine Checker">BP Machine Checker</input></label>
            <label for="inp-20">
                <input type="checkbox"
                       name="apparatus[]" value="None">None</input></label>
            
		</div>
  </div>
  </div>
 </div>


    
            
	

   <button type="submit" value="submit" name="submit" >Submit</button> 
      
    
       
   <script>
  //STORING MULTILPLE VALUES IN CHECKBOX
    function showme(id) {
        var gfg = document.getElementById(id);
        var GFG = document.getElementById("geeks");
        if (gfg.style.display == 'block') {
            gfg.style.display = 'none';
            GFG.innerHTML =
                '<i class="fa fa-plus-circle"></i>';
        } else {
            gfg.style.display = 'block';
            GFG.innerHTML =
                '<i class="fa fa-plus-circle"></i>';
        }
    }
  //VALIDATION FOR FORM
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

    const feedbackTextbox = document.getElementById("feedback-textbox");
const radioButtons = document.getElementsByName("doctordetails");

function toggleFeedbackTextbox() {
  feedbackTextbox.style.display = (radioButtons[0].checked ) ? "block" : "none";
}

for (let i = 0; i < radioButtons.length; i++) {
  radioButtons[i].addEventListener("change", toggleFeedbackTextbox);
}

//AUTOMATIC CALCULATION AGE
function FindAge() {
    var day = document.getElementById("dob").value;
    var DOB = new Date(day);
    var today = new Date();
    var Age = today.getTime() - DOB.getTime();
    Age = Math.floor(Age / (1000 * 60 * 60 * 24 * 365.25));
    document.getElementById("age").value = Age;
}

</script>
</body>
</html>