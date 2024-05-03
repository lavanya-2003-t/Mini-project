
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

table, tr, td, th
 {
  border: 1px solid black;
}

th 
{
  vertical-align: top;
}

td:empty:after 
{
   /* HTML entity of &nbsp; */
   td_column: none;
   td_rows:none;
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
  <?php
  //connect with mysql
$connection=mysqli_connect("localhost","root",'',"project");

 //select query
 $sql="SELECT * FROM form1";
 //execute the query
 $result=$connection->query($sql);
?>
<h2>INTERNAL RESULT ANALYSIS :&nbsp<select id="mySelect">
  <option value='1'>1</option>

  <option value='2'>2</option>
  <option value='3'>3</option>
</select></h2>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

<br><br>
<table class="table" align="center" width="100%" border="1" cellspacing="1" cellpadding="0">
<thead>
  <tr>
<th rowspan="2" align="center" valign="top">s.no</th>
<th rowspan="2" align="center" valign="top">Register No</th>
<th rowspan="2" align="center" valign="top">Name of the Student</th>
<th rowspan="2" align="center" valign="top">Community</th>
<th rowspan="2" align="center" valign="top">MQ\GQ</th>
<th rowspan="2" align="center" valign="top">D\HS</th>
<th rowspan="2" align="center" valign="top">T/E</th>
<th colspan="6" align="center" valign="top">Marks Scored is the Subject </th>
<th colspan="3" align="center" valign="top"> Number of the Subject</th>
<th rowspan="2" align="center" valign="top">Actions</th>

  </tr>
 
<tr>
    <th contenteditable="true">Subject1</th>
    <th contenteditable="true">Subject2</th>
    <th contenteditable="true">Subject3</th>
    <th contenteditable="true">Subject4</th>
    <th contenteditable="true">Subject5</th>
    <th contenteditable="true">Subject6</th>
    <th contenteditable="true">pass</th>
    <th contenteditable="true">Fail</th>
    <th contenteditable="true">Absent</th>
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
    $sql="SELECT * FROM form1";
    $result=$connection->query($sql);

    if(!$result){
  die("invalid query:".$connection->error);
    }
    //read data from each row
    while($row=$result->fetch_assoc()){
    
    echo "<tr>
    <form action='update.php' method='post'>
       <td>".$row["s.no"]."</td>
    <td>".$row["Register No"]."</td>
    <td>".$row["Name of the student"]."</td>
    <td>".$row["Community"]."</td>
    <td>".$row["MQ\GQ"]."</td>
    <td>".$row["D\HS"]."</td>
    <td>".$row["T/E"]."</td>
    <td contenteditable='true'>".$row["Subject1"]."</td>
    <td contenteditable='true'>".$row["Subject2"]."</td>
    <td contenteditable='true'>".$row["Subject3"]."</td
    <td contenteditable='true'>".$row["Subject4"]."</td>
    <td contenteditable='true'>".$row["Subject5"]."</td>
    <td contenteditable='true'>".$row["Subject6"]."</td>
    <td contenteditable='true'>".$row["pass"]."</td>
    <td contenteditable='true'>".$row["Fail"]."</td>
    <td contenteditable='true'>".$row["Absent"]."</td>
  <td></td>

    <td>
    <a  class='btn btn-primary btn-sm' href='intform1.php' type='update'>update</a>
      <a  class='btn btn-danger btn-sm'href='#' type='delete'>Delete</a>
    </td> 
    </tr>";
  }
?>
</tbody>





  

  
</table>
<br>
<br>
 <a href="index2.html" class="previous"> Previous</a>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="#"class="submit">Submit</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp <a href="form2.php" class="next">Next </a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp


 

</html>