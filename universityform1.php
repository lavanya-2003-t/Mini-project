<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<style>

table {
border-collapse: collapse;
width: 100%;
text-align: center;
}

table, tr, td, th {
border: 1px solid black;
}

th {
vertical-align: top;
}

td:empty:after {
content: "\00a0"; /* HTML entity of &nbsp; */

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
</head>
<body>
<center><h1>University Examination Result Analysis</h1></center>
<h2>Name of the Course: B.E/B.TECH                    </h2>
<table align="center" width="100%" border="1" cellspacing="0" cellpadding="0">
<thead>
<tr>
<th rowspan="2" align="center" valign="top">Register NO</th>
<th rowspan="2" align="center" valign="top">Name of the Student</th>
<th colspan="9" align="center" valign="top">Marks  Subject wise </th>
<th rowspan="2" align="center" valign="top"> Number of the Subject failed</th>
<th rowspan="2" align="center" valign="top">previous university arrear</th>
<th rowspan="2" align="center" valign="top"> Actions</th>
</tr>
<tr>
<th align="center" valign="top">Subject1</th>
<th align="center" valign="top">Subject2</th>
<th align="center" valign="top">Subject3</th>
<th align="center" valign="top">Subject4</th>
<th align="center" valign="top">Subject5</th>
<th align="center" valign="top">Subject6</th>
<th align="center" valign="top">Lab1</th>
<th align="center" valign="top">Lab2</th>
<th align="center" valign="top"> Lab3</th>
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
    $sql="SELECT * FROM universityform1";
    $result=$connection->query($sql);

    if(!$result){
  die("invalid query:".$connection->error);
    }
    //read data from each row
    while($row=$result->fetch_assoc()){
     
    echo "<tr>
    <td contenteditable='true'>".$row["Register NO"]."</td>
    <td contenteditable='true'>".$row["Name of the Student"]."</td>
    <td contenteditable='true'>".$row["Subject1"]."</td>
     <td contenteditable='true'>".$row["Subject2"]."</td>
     <td contenteditable='true'>".$row["Subject3"]."</td>
     <td contenteditable='true'>".$row["Subject4"]."</td>
     <td contenteditable='true'>".$row["Subject5"]."</td>
     <td contenteditable='true'>".$row["Subject6"]."</td>
     <td contenteditable='true'>".$row["Lab1"]."</td>
     <td contenteditable='true'>".$row["Lab2"]."</td>
    <td contenteditable='true'>".$row["Lab3"]."</td>
    <td contenteditable='true'>".$row["Number of the Subject failed"]."</td>
    <td contenteditable='true'>".$row["previous university arrear"]."</td>
    <td>
    <a  class='btn btn-primary btn-sm' href='universityform1.php'>Update</a>
      <a  class='btn btn-danger btn-sm' href='delete'>Delete</a>
    </td> 
    </tr>";
  }
?>
</tbody>





</table>
<br>
<br>
<br>
<br>
<b>&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CLASS ADVISOR &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspHOD/CSE
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   PRINCIPAL </b>
<br>
<br>
<br>
<br>
 &nbsp &nbsp &nbsp <a href="index2.html" class="previous"> Previous</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  <a href="#"class="submit">Submit</a>&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="universityform2.php" class="next">Next </a>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp  </a>
&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 


</body></html>