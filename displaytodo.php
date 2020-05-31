<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}
</style>
</head>
<body>

<h2>Display todo</h2>
<button onclick="document.location = 'addtodo.php'"  class="button button2">Previous Page</button>

<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
 <tr>
                       
<?php  $conn= new mysqli('localhost:3307','root','','demo');                  
$result = mysqli_query($conn, "SELECT * FROM todo");
				 while ($row = mysqli_fetch_array($result))
				 {     
				 $id=$row['id'];
				 
				
					 echo "<tr>";
                   
                  
                     

				 echo     "<td> " .$row['title'].  "</td>";

                          echo      "<td>".$row['date']."</td>";
						    echo      "<td> <form method='POST' > <button name='submit' class='button button3' value=".$row['id'].">DELETE</button></form></td>";

                      echo "</tr>";        

                       

    
 }
 
 if(isset($_POST['submit']))
{$id=$_POST['submit'];

$sql= "DELETE FROM `todo` WHERE `todo`.`id` = '$id'";
if (mysqli_query($conn,$sql))
{
}
}




?>
					

                 

 
</table>

</body>
</html>
                      

                    


                    

             