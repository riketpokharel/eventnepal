<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book ticket</title>
    <link rel="stylesheet" href="css/Styleform.css">
  
</head>
<body>
   <div class="main">
       <div class="book">
           <h2>Fill The Form here..</h2>
           <form action="dbconnect.php" id="Form" method="POST">
               <Label>First Name:</Label><br>
         <input type="text" name="fname" id="Name" placeholder="Enter Your First Name....">
         <br><br>

         <label >Last Name:</label> <br>
         <input type="text" name="lname" id="Name" placeholder="Enter Your Last Name"><br><br>
         <label>Total Number Of Passenger:</label><br>
         <input type="number" name="noofpass" id="Name" placeholder="Total Traveller... "><br><br>
          <label >Leaving From</label><br>
          <input type="text" name="lfrom" id="Name" placeholder="Leaving place..."><br><br>
          <label >Destination</label><br>
          <input type="text" name="destination" id="Name" placeholder="Where You Going..?">
          <br><br>
          <label>Travel Date</label><br>
          <input type="date" name="tdate" id="Name"><br><br>
          <label>Select Shift</label>
          <br><br>
          &nbsp;
          
          <input type="Radio" name="choose" id="Day">
          <label>Day</label>
          &nbsp;
       
          <input type="Radio" name="choose" id="Night">
          <label>Night</label>
          &nbsp;
          
          <input type="Radio" name="choose" id="Both">
          <label>Both</label><br><br>
       
        <button type="submit" id="Bookbutton" name="Tbook">Book Now</button>
       <button type="reset" id="cancle">Cancle</button>

         
        
        </form>
        </div>
   </div>
    
</body>
</html>