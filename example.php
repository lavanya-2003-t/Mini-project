<html>
    <head></head>
<body>
    <?php
     
     //create connection
     $con= mysqli_connect('127.0.0.1','root','');
     //SELECT DATABASE
     mysqli_select_db($con,'project');
     
     
  //SELECT QUERY
  $sql="SELECT * FROM form1";
  //EXECUTE THE QUERY
  $records=mysqli_query($con,$sql);

    ?>
    <table>
        <tr>
            <th>Name of the student</th>
            <th>Subject1</th>
            <th>Subject2</th>
            <th>Subject3</th>
            <th>Subject4</th>
            <th>Subject5</th>
            <th>Subject6</th>
/            <th>Pass</th>
            <th>Fail</th>
            <th>Absent</th>

            

        </tr>
        <?php
         while($row=mysqli_fetch_array($records))
         {
            echo"<tr>
           <form action='update1.php' method=post>";
            echo"<td><input  type=text name=pname value='".$row['Name of the student']."'></td>";
            echo"<td><input  type= text name=subject1 value='".$row['Subject1']."'></td>";
            echo"<td><input  type= text name=subject2 value='".$row['Subject2']."'></td>";
            echo"<td><input  type= text name=subject3 value='".$row['Subject3']."'></td>";
            echo"<td><input  type= text name=subject4 value='".$row['Subject4']."'></td>";
            echo"<td><input  type= text name=subject5 value='".$row['Subject5']."'></td>";
            echo"<td><input  type= text name=subject6 value='".$row['Subject6']."'></td>";
            echo"<td><input  type= text name=Pass value='".$row['pass']."'></td>";
            echo"<td><input  type= text name=fail value='".$row['Fail']."'></td>";
            echo"<td><input  type= text name=absent value='".$row['Absent']."'></td>";
           
            echo"<input type=hidden name=sno value='".$row['s.no']."'>";
            echo"<td><input type=submit>";
            echo"</form>
             </tr>";
         }
        ?>
    </table>
    </body>
</html>  
<?php
?>