<?php  
//export.php  
include 'db.php';


 $query = "SELECT * FROM card_activation order by 1 desc";
 $result = mysqli_query($con, $query);

 while($row=mysqli_fetch_assoc($result)){
 $html= '<table><tr>  
 <td > '.$sl.' </td>
 <td>'.$row["u_card"].'</td>  
 <td>'.$row["u_f_name"]  .$row["u_l_name"].'</td>  
 <td>'.$row["u_father"].'</td>  
 <td>'.$row["u_mother"].'</td>  
 <td>'.$row["u_aadhar"].'</td>  
 <td>'.$row["u_gender"].'</td> 
 <td>'.$row["u_birthday"].'</td>  
 <td>'.$row["u_email"].'</td>  
 <td>'.$row["u_phone"].'</td> 
 <td>'.$row["u_family"].'</td>  
 <td>'.$row["u_village"] .$row["u_police"] .$row["u_dist"] .$row["u_state"] .$row["u_pincode"].'</td>  
<td>'.$row["staff_id"].'</td>  
<td>'.$row["uploaded"].'</td>
</tr>'
 
 $html.='</table>';
 
    
  
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Surebuy_Data.xls');
  echo $output;
 

?>