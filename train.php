<button><a href="logout.php">LOGOUT</a></button>
<?php
mysql_connect("localhost","root","");
mysql_select_db("railways");
$res="SELECT *FROM train";
$result=mysql_query($res);

?>
<table align="center" width="700px" border="1">
<tr>
<th>TRAIN NO.</th>
<th>TRAIN NAME</th>
<th>SOURCE</th>
<th>DESTINATION</th>
<th>ARRIVAL</th>
<th>DEPATURE</th>
<th>SEATS AVAILABLE</th>
<th>BOOK NOW</th>
</tr>
<?php
while($row=mysql_fetch_array($result))
{echo "<tr>";
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "<td>".$row[6]."</td>";
echo "<td>";
echo "<a>".BOOK."</a>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
