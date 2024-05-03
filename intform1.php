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
        
<th rowspan="2" align="center" valign="top">Name of the Student</th>
<th rowspan="2" align="center" valign="top">Community</th>
<th rowspan="2" align="center" valign="top">MQ\GQ</th>
<th rowspan="2" align="center" valign="top">D\HS</th>
<th rowspan="2" align="center" valign="top">T/E</th>
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
        <?php
         while($row=mysqli_fetch_array($records))
         {
            echo"<tr>
           <form action='update1.php' method=post>";
            echo"<td><input  type=text name=pname value='".$row['Name of the student']."'></td>";
            echo"<td><input  type=text name=p valcommunity='".$row['Community']."'></td>";
            echo"<td><input  type=text name=pmqgq value='".$row['MQ\GQ']."'></td>";
            echo"<td><input  type=text name=pte value='".$row['T/E']."'></td>";

            echo"<td><input  type=text name=pdhs value='".$row['D\HS']."'></td>";



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