<?php


require_once ('connect.php');
$sql = "SELECT * FROM admin";
$result = mysqli_query($db_con, $sql);
$output ='<table>
<tr>
<th align = "center">id</th>
<th align = "center">name</th>
<th align = "center">email</th>
<th align = "center">dept</th>
<th align = "center">qlf</th>
<th align = "center">age</th>


</tr>';
while ($excel = mysqli_fetch_assoc($result)) 
{
    $output.='<tr>
    <th align = "center">'.$excel['id'].'</th>
    <th align = "center">'.$excel['name'].'</th>
    <th align = "center">'.$excel['email'].'</th>
    <th align = "center">'.$excel['dept'].'</th>
	    <th align = "center">'.$excel['qlf'].'</th>
			    <th align = "center">'.$excel['age'].'</th>
    
    </tr>';
}
$output.='</table>';
header('Content-Type:aplication/xls');
header('Content-Disposition:attachment;filename=exceladmin.xls');
echo $output;
?>