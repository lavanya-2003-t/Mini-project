<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<style>
  table,
 th,
 td{
     border:2px solid black;
     border-collapse:collapse;
   }
a {
  text-decoration: right;
  display: inline-block;
  padding: 10px 16px;
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
<h3> Month & Year Of Exam:</h3>
<h3>percentage of students passed in all subjects: 25/25=100%</h3>


<table style="width:100%">
  <tr>
    <th><h3> S.NO</h3></th>
    <th><h3>Course ID</h3></th>
    <th> <h3>Name Of The Subject</h3></th>
    <th> <h3>APPEARED</h3></th>
    <th> <h3>PASSED</h3></th>
    <th><h3>FAILED</h3></th>
    <th><h3>STUDENT FAILED IN THIS SUBJECT ONLY </h3></th>
    <th><h3>STAFF HANDLED </h3></th>
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
    $sql="SELECT * FROM universityform3";
    $result=$connection->query($sql);

    if(!$result){
  die("invalid query:".$connection->error);
    }
    //read data from each row
    while($row=$result->fetch_assoc()){
     
    echo "<tr>
    <td>".$row["S.NO"]."</td>
    <td>".$row["Course ID"]."</td>
    <td>".$row["Name Of The Subject"]."</td>
    <td>".$row["APPEARED"]."</td>
    <td>".$row["PASSED"]."</td>
    <td>".$row["FAILED"]."</td>

    <td>".$row["STUDENT FAILED IN THIS  SUBJECT ONLY"]."</td>
    <td>".$row["STAFF HANDLED"]."</td>



    <td>
    <a  class='btn btn-primary btn-sm' href='form1.php'>Update</a>
      <a  class='btn btn-danger btn-sm' href='delete'>Delete</a>
    </td> 
    </tr>";
  }
?>
</tbody>
  
  
  
</table>
<br> <br>
<br>
<br>
<body><b>&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CLASS ADVISOR &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspHOD/CSE
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp PRINCIPAL </b>
<br><br>
<br>
<br>
 &nbsp &nbsp &nbsp <a href="universityform2.php" class="previous"> Previous</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp <a href="#"class="submit">Submit</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="universityform4.php" class="next">Next </a>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp 


  	</div></center>
</body>
</html>