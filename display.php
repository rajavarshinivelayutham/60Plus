<?php

//DISPLAYING AND DOWNLOADING IT IN EXCEL FORMAT
include_once('config.php');
$result = mysqli_query($conn, "SELECT * FROM patient_details");
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
      PATIENT DISPLAY
    </title>
    <style>
      table{
        width:100%;
        height: 300px;
      }
      </style>
    <table align="center" border="1px"  style="width=600px;line-height=60px;">
            <tr><th colspan="4">patient records</th></tr>
            <t>
            <th>id</th>
            <th>name</th>
            <th>date_of_birth</th>
            <th>age</th>
           <th>gender</th>
           <th>phno</th>
           <th>weight</th>
           <th>patient_address</th>
         <th>patient_disease</th>
           <th>other_illness</th>
           <th>disease_name</th>
           <th>medicine_name</th>
           <th>doctorname</th>
           <th>specialist</th>
           <th>timing</th>
           <th>disease_name1</th>
           <th>medicine_name1</th>
           <th>doctorname1</th>
           <th>specialist1</th>
           <th>timing1</th>
           <th>operation</th>

           
           <th>checkup</th>
           <th>doctor_name</th>
           <th>hospital</th>
           <th>doc_address</th>
           <th>doc_phno</th>
           <th>apparatus</th>


        </t>
           <?php
              while($rows=mysqli_fetch_assoc($result))
             {
              //DISPLAYING THE DETAILS OF PATIENTS IN OUTPUT
                ?>
                <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['patients_name'] ?></td>
                    <td><?php echo $rows['date_of_birth'] ?></td>
                     <td><?php echo $rows['age'] ?></td>
                     <td><?php echo $rows['gender'] ?></td>
                    <td><?php echo $rows['phno'] ?></td>
                    <td><?php echo $rows['weight'] ?></td>
                    <td><?php echo $rows['patient_address'] ?></td>
                    <td><?php echo $rows['patients_disease'] ?></td>
                  

                    <td><?php echo $rows['other_illness'] ?></td>

                  
                    <td><?php echo $rows['disease_name'] ?></td>
                    <td><?php echo $rows['medicine_name'] ?></td>
                    <td><?php echo $rows['doctorname'] ?></td>
                    <td><?php echo $rows['specialist'] ?></td>
                    <td><?php echo $rows['timing'] ?></td>
                    <td><?php echo $rows['disease_name1'] ?></td>
                    <td><?php echo $rows['medicine_name1'] ?></td>
                    <td><?php echo $rows['doctorname1'] ?></td>
                    <td><?php echo $rows['specialist1'] ?></td>
                    <td><?php echo $rows['timing1'] ?></td>
                    <td><?php echo $rows['operation'] ?></td>

                    <td><?php echo $rows['checkup'] ?></td>
                    <td><?php echo $rows['doc_name'] ?></td>
                    <td><?php echo $rows['hospital'] ?></td>
                    <td><?php echo $rows['doc_address'] ?></td>
                    <td><?php echo $rows['doc_phno'] ?></td>
                    <td><?php echo $rows['apparatus'] ?></td>




                </tr>
                <?php
          }
          ?>
    </table>
    <button type="submit" onclick="tableToCSV()">DOWNLOAD</button>
        </body>
        <script type="text/javascript">
          //DOWNLOADING THE FORM IN EXCEL SHEET
        function tableToCSV() {
 
            // Variable to store the final csv data
            var csv_data = [];
 
            // Get each row data
            var rows = document.getElementsByTagName('tr');
            for (var i = 0; i < rows.length; i++) {
 
                // Get each column data
                var cols = rows[i].querySelectorAll('td,th');
 
                // Stores each csv row data
                var csvrow = [];
                for (var j = 0; j < cols.length; j++) {
 
                    // Get the text data of each cell
                    // of a row and push it to csvrow
                    csvrow.push(cols[j].innerHTML);
                }
 
                // Combine each column value with comma
                csv_data.push(csvrow.join(","));
            }
 
            // Combine each row data with new line character
            csv_data = csv_data.join('\n');
 
            // Call this function to download csv file 
            downloadCSVFile(csv_data);
 
        }
 
        function downloadCSVFile(csv_data) {
 
            // Create CSV file object and feed
            // our csv_data into it
            CSVFile = new Blob([csv_data], {
                type: "text/csv"
            });
 
            // Create to temporary link to initiate
            // download process
            var temp_link = document.createElement('a');
 
            // Download csv file
            temp_link.download = "GfG.csv";
            var url = window.URL.createObjectURL(CSVFile);
            temp_link.href = url;
 
            // This link should not be displayed
            temp_link.style.display = "none";
            document.body.appendChild(temp_link);
 
            // Automatically click the link to
            // trigger download
            temp_link.click();
            document.body.removeChild(temp_link);
        }
    </script>
        </html>
