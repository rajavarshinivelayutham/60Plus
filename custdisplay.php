<?php
include_once('config.php');
$result = mysqli_query($conn, "SELECT * FROM customer_details");
// if(isset($_GET['id'])){
//   $id=$_GET['id'];
//   $delete=mysqli_query($conn,"DELETE * FROM customer_details where id='$id'");
//   if($delete)
//   {
//     header("location:custdisplay.php");
//     die();
//   }
// }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
      
    <title>
    CUSTOMER DISPLAY
    </title>
    <style>
     
      table{  
                border-collapse: collapse;  
                width: 95%;                   
           }  
           table th{  
                background-color: firebrick;  
                color: #fff;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: #080710;  
                font-size: 1em;  
                text-align: center;  
           }
      </style>
    <table align:"center" border:"1px"  style="width:600px;line-height:60px;">
            <tr><th colspan="4">customer records</th></tr>
            <t>
            <th>id</th>
            <th>patient_name</th>
            <th>phone_no</th>
           <th>gender</th>
           <th>patients_condition</th>
           <th>patients_complaints</th>
         
           <th>date</th>
           <th>noofdays</th>
           <th>address</th>
           <th>landmark</th>
           <th>pincode</th>
           <th>state</th>
           <th>location</th>
           <th>other_places</th>
           <th>age</th>
           <th>weight</th>
           <th>healthcare_services</th>
           <th>homedoctor_visit</th>
           <th>homenurse_visit</th>
           <th>homephysiotherapist_visit</th>
           <th>medicine_services</th>
           <th>caretender_services</th>
           <th>homesafety_services</th>
           <th>food_services</th>
           <th>fam_name</th>
           <th>fam_number</th>
           <th>relationship</th>
           <th>country</th>
           <th>email</th>
           <th>delete</th>
           <th>update</th>
          
           
           



        </t>
           <?php
              while($rows=mysqli_fetch_assoc($result))
             {
                ?>
                <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['patient_name'] ?></td>
                    <td><?php echo $rows['phone_no'] ?></td>
                    <td><?php echo $rows['gender'] ?></td>
                    <td><?php echo $rows['patients_condition'] ?></td>
                    <td><?php echo $rows['patients_complaints'] ?></td>
                    <td><?php echo $rows['date'] ?></td>
                    <td><?php echo $rows['no_of_days'] ?></td>
                    <td><?php echo $rows['address'] ?></td>
                    <td><?php echo $rows['landmark'] ?></td>
                    <td><?php echo $rows['pincode'] ?></td>
                    <td><?php echo $rows['state'] ?></td>
                    <td><?php echo $rows['location'] ?></td>
                    <td><?php echo $rows['other_places'] ?></td>
                    <td><?php echo $rows['age'] ?></td>
                    <td><?php echo $rows['weight'] ?></td>
                    <td><?php echo $rows['healthcare_services'] ?></td>
                    <td><?php echo $rows['homedoctor_visit'] ?></td>
                    <td><?php echo $rows['homenurse_visit'] ?></td>
                    <td><?php echo $rows['homephysiotherapist_visit'] ?></td>
                    <td><?php echo $rows['medicine_services'] ?></td>
                    <td><?php echo $rows['caretender_services'] ?></td>
                    <td><?php echo $rows['homesafety_services'] ?></td>
                    <td><?php echo $rows['food_services'] ?></td>
                    <td><?php echo $rows['fam_name'] ?></td>
                    <td><?php echo $rows['fam_number'] ?></td>
                    <td><?php echo $rows['relationship'] ?></td>
                    <td><?php echo $rows['country'] ?></td>
                    <td><?php echo $rows['email'] ?></td>
                  <td><a href="custdisplay.php?de=<?php echo $rows['id'];?>">delete</a></td>
                  <!-- <a href="?id?a=<php echo $rows ['id'];?>"> -->
                  <td><a href="update.php?a=<?php echo $rows['id'];?>">edit</a></td>


                </tr>
                <?php
          }
          ?>
    </table>
   
        
    <?php
include_once('config.php');
  
 if(isset($_GET['de']))
 {
       $a_id=$_GET['de'];
       
       $result = mysqli_query($conn, "SELECT * FROM customer_details");
       $rows=mysqli_fetch_assoc($result);
      //  $id= $rows['id'];
       $query="DELETE from customer_details where id='$a_id' ";
       $query_run=mysqli_query($conn,$query);
       if($query_run)
       {
              echo 
              "<script> alert('data deleted') </script>";
       }
       else
       {
              echo 
              "<script> alert('data not deleted') </script>";
       }
 }
 
?>
