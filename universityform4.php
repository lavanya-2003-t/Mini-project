<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<style>
  table,
 th,
 td
{
     border:1px solid black;
     border-collapse:collapse;
   }
a {
  text-decoration: right;
  display: inline-block;
  padding: 8px 16px;
}

a:hover
 {
  background-color: #ddd;
  color: black;}
.previous
 {
  background-color:black;
  color: white;
}
.submit {

background-color: black;
color: white;
}
.cancel {

  background-color: black;
  color: white;
}
</style>
</head>
<body>
<h3>YEAR & SEMESTER   :</h3>
<h3>MONTH & YEAR OF EXAM :</h3>
     <h3> percentage of students passed in all subjects:<b>25/25=100%</b></h3>
<br>
<br>
 <center> <table style="width:80%">
 <tr>
    <th style="width:25%"><h3> RANK</h3></th>
    <th style="width:35%"><h3>NAME OF THE STUDENT</h3></th>
    <th style="width:25%"><h3> TOTAL </h3></th>
    <th>Actions</th>
</tr>
<?php
      error_reporting(0); 
    $servername="localhost";
    $username="root";
    $password="";
    $database="project";
    //create connection
    $connection= new mysqli($servername,$username,$password,$database);

    // check connection
    if($connection->connect_error){
      die("connection failed:".$connection->error);
    }
    //read all rows from database table
    $sql="SELECT * FROM universityform4";
    $result=$connection->query($sql);

    if(!$result){
  die("invalid query:".$connection->error);
    }
    //read data from each row
    while($row=$result->fetch_assoc()){
        echo "<tr>
        <td contenteditable='true'>".$row["RANK"]."</td>
        <td contenteditable='true'>".$row["NAME OF THE STUDENT"]."</td>
        <td contenteditable='true'>".$row["TOTAL"]."</td>
        <td>
    <a  class='btn btn-primary btn-sm' href='form1.php'>Update</a>
      <a  class='btn btn-danger btn-sm' href='delete'>Delete</a>
    </td> 
    </tr>";
  }
?>
</tbody>
     

 
    </table></center>

<br> 
<br>
<br>
<br>
<br>
<body><b>&nbsp&nbsp&nbsp &nbsp  &nbsp CLASSADVISOR &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbspHOD/CSE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   &nbsp &nbsp PRINCIPAL</b>
<br>
<br>

<br> <a href="universityform3.php" class="previous"> Previous</a>
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp <a href="#"class="submit">Submit</a> &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="index3.html" class="cancel">Cancel</a>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp  &nbsp 

  	</div></center>
</body>
</html>