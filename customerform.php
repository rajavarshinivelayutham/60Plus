<html lang="en" dir="ltr">
<html>
  <head>
  <meta charset="utf-8">
  <title>customer form</title>
   
</head>
  <body>
  <div class="container">
  <form>
     
    <label for="fname">Name</label><br>
    <input type="text" id="fname" name="name">

     <label for="no">Number</label>
     <input type="number" id="no" name="no1" >

     <label for="comp">Patients complaints</label>
    <textarea id="comp" name="complaint" placeholder="Make your complaints here.." style="height:200px"></textarea>

    <label for="require">Requirements</label>
    <label for="doc">Home Doctor Visit </label>
    <input type="checkbox" id="doc" name="doctor">
     
    <label for="nur">Home Nurse Visit </label>
    <input type="checkbox" id="nur" name="nurse">

    <label for="ther">Home Physiotherapist Visit </label>
    <input type="checkbox" id="ther" name="therapist">

    <label for="ther">Online Doctor Consultation</label>
    <input type="checkbox" id="ther" name="therapist">
   

    <input type="submit" value="Submit">

  </form>
</div>
</body>
</html>