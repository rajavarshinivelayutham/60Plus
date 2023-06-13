<?php
include_once('config.php');

if(isset($_GET['a'])){
   $a_id = $_GET['a']; 
   $edit_query = mysqli_query($conn, "SELECT * FROM `customer_details` WHERE id = $a_id");

   if(mysqli_num_rows($edit_query) > 0){
      while($fetch_edit = mysqli_fetch_assoc($edit_query)){
?>

<form id="co" action="" method="post" enctype="multipart/form-data">
  <!--UPDATING FORM DETAILS AND DISPLAYING-->
   <input type="hidden" name="id"  value="<?php echo $fetch_edit['id']; ?>">
                           <?php 
                              
                               
                              $query ="SELECT patient_name FROM customer_details";
                              $result = $conn->query($query);
                              if($result->num_rows> 0){ 
                                $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                              }
                          ?>
                            
                          <h1 style="color:#000066;">CUSTOMER DETAILS FORM</h1>
                          <label for="name" style="font-size:20px ;color:#000066;" >NAME</label><BR><br> 
                           <input type="text"    name="fname" value="<?php echo $fetch_edit['patient_name']; ?>"><br><br>

                           <label for="no" style="font-size:20px ;color:#000066;">PHONENUMBER</label><br><br>                     
                           <input type="text"  name="phnumber" value="<?php echo $fetch_edit['phone_no']; ?>"><br><br>

                           <label for="gen" style="font-size:20px ;color:#000066;">GENDER</label><br><br> 

                              <input type="radio" id="html" name="gender" value="male">
                              <label for="html" style="font-size:20px ;">Male</label><br><br></div>
                              <?php
                                 if($fetch_edit["gender"]=='male')
                                 {
                                    // echo "checked";
                                 }
                              ?>
                             
                              <input type="radio" id="css" name="gender" value="female">
                              <label for="css" style="font-size:20px ;">Female</label><br><br>
                              <?php
                                 if($fetch_edit["gender"]=='female')
                                 {
                                    // echo "checked";
                                 }
                              ?>

                            
     
                            <label for="datee" style="font-size:20px ;color:#000066;">DATE</label><br><br>
                           <input type="date" name="dates" value="<?php echo $fetch_edit['date']; ?>" /><br><br> 

                           <label for="comp" style="font-size:20px ;color:#000066;">PATIENTS ISSUES</label><br><br>
                            <textarea id="comp" name="complaint" placeholder="Make your complaints here.." style="height:200px"  value="<?php echo $fetch_edit['patients_complaints']; ?>"></textarea><br><br>

                           <label for="days" style="font-size:20px ; color:#000066;">NO OF DAYS/MONTH</label><br><br>
                           <input type="text" id="days" name="daymon" value="<?php echo $fetch_edit['no_of_days']; ?>"><br><br>

                           <label for="text" style="font-size:20px ;color:#000066;">ADDRESS</label><br><br>
                           <textarea id="text" name="address" cols="50" rows="5"  placeholder=" Enter your address" value="<?php echo $fetch_edit['address']; ?>"></textarea><br><br>

                           <label for="lan" style="font-size:20px ; color:#000066;">LANDMARK<label><br><br>
                           <input type="text" id="lan" name="land"  value="<?php echo $fetch_edit['landmark']; ?>"/><br><br>

                           <label for="pinno" style="font-size:20px ;color:#000066;">PINCODE<label><br><br>
                           <input type="number" id="pinno" name="pinnum" value="<?php echo $fetch_edit['pincode']; ?>"><BR><BR>

                           <strong><label for="select-options" style="font-size:20px ;color:#000066;">STATE</label></strong><br><br>
                           <select id="select-options" name="states">
                           <option value="states">Select a state</option>
                           <option value="TamilNadu">TamilNadu</option>
                           <?php
                                 if($fetch_edit["state"]=='TamilNadu')
                                 {
                                    // echo "select";
                                 }
                              ?>
                           <option value="Pondicherry">Pondicherry</option>
                           <?php
                                 if($fetch_edit["state"]=='Pondicherry')
                                 {
                                    // echo "select";
                                 }
                              ?>
                           <option value="Kerala">Kerala</option>
                           <?php
                                 if($fetch_edit["state"]=='Kerala')
                                 {
                                    // echo "select";
                                 }
                              ?>
                           <option value="Karnataka">Karnataka</option>
                           <?php
                                 if($fetch_edit["state"]=='Karnataka')
                                 {
                                    // echo "select";
                                 }
                              ?>
                           <option value="West Bengal">West Bengal</option>
                           <?php
                                 if($fetch_edit["state"]=='West Bengal')
                                 {
                                    // echo "select";
                                 }
                              ?>
                           <option value="Maharashtra">Maharashtra</option>
                           <?php
                                 if($fetch_edit["state"]=='Maharashtra')
                                 {
                                    // echo "select";
                                 }
                              ?>
                           <option value="Delhi">Delhi</option>
                           <?php
                                 if($fetch_edit["state"]=='Delhi')
                                 {
                                    // echo "select";
                                 }
                              ?>
                           <option value="Andhra Pradesh">Andhra Pradesh</option>
                           <?php
                                 if($fetch_edit["state"]=='Andhra Pradesh')
                                 {
                                    // echo "select";
                                 }
                              ?>
                           <option value="Telangana">Telangana</option>
                           <?php
                                 if($fetch_edit["state"]=='Telangana')
                                 {
                                    // echo "select";
                                 }
                              ?>
                           </select><br><br>

                           <select id="select-option" name="locations" onchange="showInputField()">
                                       <option value="option-0">Select a city</option>
                                       
                                       <optgroup label="TAMILNADU">
                                        
                                       <option value="Chennai">Chennai</option>
                                       <?php
                                             if($fetch_edit["location"]=='Chennai')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Coimbatore">Coimbatore</option>
                                       <?php
                                             if($fetch_edit["location"]=='Coimbatore')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Madurai">Madurai</option>
                                       <?php
                                             if($fetch_edit["location"]=='Madurai')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Trichy">Trichy</option>
                                       <?php
                                             if($fetch_edit["location"]=='Trichy')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Vellore">Vellore</option>
                                       <?php
                                             if($fetch_edit["location"]=='Vellore')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Sivagangai">Sivagangai</option>
                                       <?php
                                             if($fetch_edit["location"]=='Sivagangai')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Tirpur">Tirpur</option>
                                       <?php
                                             if($fetch_edit["location"]=='Tirpur')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Thanjavur">Thanjavur</option>
                                       <?php
                                             if($fetch_edit["location"]=='Thanjavur')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Salem">Salem</option>
                                       <?php
                                             if($fetch_edit["location"]=='Salem')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Erode">Erode</option>

                                       <?php
                                             if($fetch_edit["location"]=='Erode')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Thirunelveli">Thirunelveli</option>
                                       <?php
                                             if($fetch_edit["location"]=='Thirunelveli')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Thoothukudi">Thoothukudi</option>
                                       <?php
                                             if($fetch_edit["location"]=='Thoothukudi')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       </optgroup>
                                       <optgroup label="KERALA">

                                       <option value="Thiruvanathapuram">Thiruvanathapuram</option>
                                       <?php
                                             if($fetch_edit["location"]=='Thiruvanathapuram')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Palakadu">Palakadu</option>
                                       <?php
                                             if($fetch_edit["location"]=='Palakadu')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Calicut/kozhikode">Calicut/kozhikode</option>
                                       <?php
                                             if($fetch_edit["location"]=='Calicut/kozhikode')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Kanur">Kanur</option>
                                       <?php
                                             if($fetch_edit["location"]=='Kanur')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Kochin">Kochin</option>
                                       <?php
                                             if($fetch_edit["location"]=='Kochin')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Kolam">Kolam</option>
                                       <?php
                                             if($fetch_edit["location"]=='Kolam')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Allappy">Allappy</option>
                                       <?php
                                             if($fetch_edit["location"]=='Allapy')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Thrissur">Thrissur</option>
                                       <?php
                                             if($fetch_edit["location"]=='Thrissur')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Thiruvalla">Thiruvalla</option>
                                       <?php
                                             if($fetch_edit["location"]=='Thiruvalla')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       </optgroup>
                                       <optgroup label="KARNATAKA">

                                       <option value="Bangalore">Bangalore</option>
                                       <?php
                                             if($fetch_edit["location"]=='Bangalore')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Mangaluru">Mangaluru</option>
                                       <?php
                                             if($fetch_edit["location"]=='Mangaluru')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Mysore">Mysore</option>
                                       <?php
                                             if($fetch_edit["location"]=='Mysore')
                                             {
                                                // echo "select";
                                             }
                                          ?></optgroup>
                                       
                                       
                                       <optgroup label="WEST BENGAL">
                                          

                                       <option value="Kolkata">Kolkata</option>
                                       <?php
                                             if($fetch_edit["location"]=='Kolkata')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                    </optgroup>
                                       
                                       <optgroup label="MAHARASHTRA">

                                       <option value="Mumbai">Mumbai</option>
                                       <?php
                                             if($fetch_edit["location"]=='Mumbai')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Pune">Pune</option>
                                       <?php
                                             if($fetch_edit["location"]=='Pune')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Nashik">Nashik</option>
                                       <?php
                                             if($fetch_edit["location"]=='Nashik')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       </optgroup>
                                       <optgroup label="ANDHRA PRADESH">

                                       <option value="Vijayawada">Vijayawada</option>
                                       <?php
                                             if($fetch_edit["location"]=='Vijayawada')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Amaravadhi">Amaravadhi</option>
                                       <?php
                                             if($fetch_edit["location"]=='Amaravadhi')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Guntur">Guntur</option>
                                       <?php
                                             if($fetch_edit["location"]=='Guntur')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Tirupati">Tirupati</option>
                                       <?php
                                             if($fetch_edit["location"]=='Tirupati')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                    </optgroup>
                                       
                                       <optgroup label="TELANGANA">

                                       <option value="Hydreabad">Hydreabad</option>
                                       <?php
                                             if($fetch_edit["location"]=='Hydreabad')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Secunderabad">Secunderabad</option>
                                       <?php
                                             if($fetch_edit["location"]=='Secunderabad')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                    </optgroup>
                                       
                                       <option value="Pondicherry"><b>Pondicherry</b></option>
                                       <?php
                                             if($fetch_edit["location"]=='Pondicherry')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       <option value="Delhi"><b>Delhi</b></option>
                                       <?php
                                             if($fetch_edit["location"]=='Delhi')
                                             {
                                                // echo "select";
                                             }
                                          ?>

                                       <option value="other">Other</option>
                                       <?php
                                             if($fetch_edit["location"]=='Other')
                                             {
                                                // echo "select";
                                             }
                                          ?>
                                       </select><br><br>

                                       <label for="other-option">Please specify:</label>
                                       <input type="text" id="other-option" name="other-option" value="<?php echo $fetch_edit['other_places']; ?>"><br><br>

                           <label for="ag" style="font-size:20px ;color:#000066;">AGE</label><br><br>
                           <input type="text" id="ag" name="age" value="<?php echo $fetch_edit['age']; ?>"><BR><BR></div>
 
                           <label for="wtg"style="font-size:20px ;color:#000066;">WEIGHT</label><br><br>
                           <input type="number" id="wtg" name="weight"  value="<?php echo $fetch_edit['weight']; ?>"><BR><BR></div>
      

                           <h1 style="color:#000066;">PATIENT'S FAMILY DETAILS </h1>

                           <label for="pname"  style="font-size:17px ;color:#000066;">NAME</label><BR><br>
                           <input type="text" id="pname" name="famname"  value="<?php echo $fetch_edit['fam_name']; ?>" ><BR><BR>

                           <label for="pno" style="font-size:17px ;color:#000066;">NUMBER</label><br><br>
                        <input type="text" id="pno" name="famnumber" pattern ="[0-9]{10}"  value="<?php echo $fetch_edit['fam_number']; ?>"><BR><BR>

                        <label for="relation"style="font-size:17px ;color:#000066;" >RELATIONSHIP</label><br><br>
                        <input type="text" id="relation" name="relationship"  value="<?php echo $fetch_edit['relationship']; ?>"><BR><BR>

                         <label for="country"style="font-size:17px ;color:#000066;" >COUNTRY</label><br><br>
                        <input type="text" id="country" name="country" value="<?php echo $fetch_edit['country']; ?>"><BR><BR></div>

                        <label for="mailid" style="font-size:17px ;color:#000066;">MAIL</label><br><br>
                        <input type="email" id="mailid" name="email" value="<?php echo $fetch_edit['email']; ?>"><BR><BR></div>

      <br>
      <br>
      <input type="submit" value="UPDATE" class="updatee"  name="update" class="btn">
      <input type="reset" value="CANCEL" class="close-edit" class="option-btn">
      
   </form>

<?php
         };
      };
      echo "<script>document.querySelector('.editform').style.display = 'flex';</script>";
   };
   ?>

<?php
//CODE FOR UPDATING CUSTOMER FORM
 if(isset($_POST['update']))
 {
       $a_id=$_GET['a'];
       $name=$_POST['fname'];
       $phone_no=$_POST['phnumber'];
       $gender=$_POST['gender'];
       $date=$_POST['dates'];
       $complaints=$_POST['complaint'];
       $daymon=$_POST['daymon'];
       $address=$_POST['address'];
       $landmark=$_POST['land'];   
       $pincode=$_POST['pinnum'];
       $state=$_POST["states"];
       $location=$_POST["locations"];
       $other=$_POST["other-option"];
       $age=$_POST['age'];
       $weight=$_POST['weight'];
       $famname=$_POST['famname'];
       $famnumber=$_POST['famnumber'];
       $relationship=$_POST['relationship'];
       $country=$_POST['country'];
       $email=$_POST['email'];
       $result = mysqli_query($conn, "SELECT * FROM customer_details");
       $rows=mysqli_fetch_assoc($result);
       $id= $rows['id'];
       $query2="UPDATE customer_details SET patient_name='$name', phone_no='$phone_no',gender='$gender',patients_complaints='$complaints',date='$date',no_of_days='$daymon', address='$address',landmark='$landmark',pincode='$pincode',state='$state', location='$location',other_places='$other',age='$age',weight='$weight',fam_name='$famname',fam_number='$famnumber' ,relationship='$relationship',country='$country',email='$email' where id='$id' ";
       $query_run=mysqli_query($conn,$query2);
       if($query_run)
       {
              echo 
              "<script> alert('data updated') </script>";
       }
       else
       {
              echo 
              "<script> alert('data not updated') </script>";
              
              
       }
 }
 
?>
