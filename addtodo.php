<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=date]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.button2 {
  background-color: white; 
  color: black; 
  width:10%;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form   method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>ADD </h1>
    
    <hr>

    <label for="title"><b>Title</b></label>
    <input type="text" placeholder="title" name="title" required>

    <label for="date"><b>Deadline </b></label>
    <input type="Date"  name="date" required>

    
 

    <div class="clearfix">
	  <button onclick="document.location = 'gramiksha.php'" type="button" class="cancelbtn">Clear</button>
      <button type="submit" class="signupbtn"  name='submit'>Submit</button>
    </div>
  </div>
</form>
<button onclick="document.location = 'displaytodo.php'"  class="button button2">Next Page</button>
					<?php
if(isset($_POST['submit']))
{$title=$_POST['title'];

$date=$_POST['date'];

$conn= new mysqli('localhost:3307','root','','demo') ;

if(!$conn)
{die("connection failed:".mysqli_connect_error());
}
$sql="INSERT INTO `todo` (`title`,`date`) VALUES ('$title','$date')";

if (mysqli_query($conn,  $sql))
{echo"<h1>new record created</h1>";
}

}
?>

</body>
</html>
