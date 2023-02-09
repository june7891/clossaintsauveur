<?php      
// Include database configuration file  
require_once 'database_connection.php'; 
 
// Filter events by calendar date 
// $where_sql = ''; 
// if(!empty($_GET['start']) && !empty($_GET['end'])){ 
//     $where_sql .= " WHERE start BETWEEN '".$_GET['start']."' AND '".$_GET['end']."' "; 
// } 
 
// Fetch events from database 
$sql = "SELECT * FROM disponibilities"; 
$result = $con->query($sql);


$eventsArr = array(); 
if($result->num_rows > 0){ 
    while($row = $result->fetch_assoc()){ 
        array_push($eventsArr, $row); 
    } 
} 
 
// Render event data in JSON format 
echo json_encode($eventsArr);