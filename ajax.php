<?php 
require_once('database.php');

//Ajax call for state where values are going to be fetch by country_id
if(isset($_POST['city_id'])&&!empty($_POST['city_id'])){
//echo $_POST['country_id'];exit;
 
$query = $db->query("SELECT * FROM hospital WHERE city_id = ".$_POST['city_id']." AND status = 1 ORDER BY hospital_name ASC");
$rowCount= $query->num_rows;

if($rowCount>0){
echo '<option value="">Select Hospital</option>';
while($row=$query->fetch_assoc()){

echo '<option value="'.$row['hospital_id'].'">'.$row['hospital_name'].'</option>';


}

}
else{

echo '<option value"">State Not Available</option>';

}
}



//Ajax call for city where values are going to be fetch by state_id
if(isset($_POST['hospital_id'])&&!empty($_POST['hospital_id'])){

$query=$db->query("SELECT * FROM hospital WHERE hospital_id=".$_POST['hospital_id']." AND status= 1 ORDER BY am_tot ASC");
$rowCount=$query->num_rows;

if($rowCount>0){
//echo '<option value="">Select City</option>';
echo '<input  type="text">';
while($row=$query->fetch_assoc()){

echo '<option value="'.$row['hospital_id'].'">'.$row['am_tot'].'</option>';


}

}
else{

echo '<option value"">City Not Available</option>';

}
}
?>











?>