<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<body>

<style>
h2
{
}
table {
  font-family: arial, sans-serif;
  border: 1px solid black;
 border-collapse: collapse;
  width: 70%;
}

td, th {
  border: 1px solid black;
 border-collapse: collapse;
  text-align: center;
  margin: 5px; 
  padding: 5px;
}

tr {
  background-color: white;
}
a {
  text-decoration: right;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}
.previous {
  background-color:black;
  color: white;
}
.submit {

background-color: black;
color: white;
}
.next {

  background-color: black;
  color: white;
}
</style>
<center>
  <h2 >Month & Year Of Exam:                    </h2>
  <h2 &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp>Percentage of Students passed in all subjects:                 </h2>

<table>
<br>
<br>
<br>
<br>
<thead>

<tr>
<th> failure in 1 subject</th>
<th> <b>failure  in 2 subjects</b></th>
<th> <b> failure  in 3 subjects</b></th>
<th>  <b>failure  in 4 subjects</b></th>
<th>  <b>failure  in 5 subjects</b></th>
<th> <b> failure  in all subjects</b></th>
<th> Actions</th>
</tr>
</thead>
<tbody>
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
    $sql="SELECT * FROM universityform2";
    $result=$connection->query($sql);

    if(!$result){
  die("invalid query:".$connection->error);
    }
    //read data from each row
    while($row=$result->fetch_assoc()){
     
    echo "<tr>
    <td>".$row["failure in 1 subject"]."</td>
    <td>".$row["failure in 2 subject"]."</td>
    <td>".$row["failure in 3 subject"]."</td>
    <td>".$row["failure in 4 subject"]."</td>
    <td>".$row["failure in 5 subject"]."</td>

    <td>".$row["failure in 6 subject"]."</td>
    
    <td>
    <a  class='btn btn-primary btn-sm' href='form1.php'>Update</a>
      <a  class='btn btn-danger btn-sm' href='delete'>Delete</a>
    </td> 
    </tr>";
  }
?>



</tbody>
</table>
</center>
<br> 
<br>
<br>
<br>
<br>

<br>
<br><b>&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CLASS ADVISOR &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspHOD/CSE
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp PRINCIPAL </b>
<br><br>
<br>
<br>
 &nbsp &nbsp &nbsp <a href="universityform1.php" class="previous"> Previous</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="#"class="submit">Submit</a>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="universityform3.php" class="next">Next </a> &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp 


</body>
</body>
</html>