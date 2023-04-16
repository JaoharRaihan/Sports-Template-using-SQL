<?php
include("database.php");

$db= $conn;
$tableName="bd_cricket_team_match_results_odi";
$columns= ['COL_1', 'COL_2','COL_3','COL_4','COL_5','COL_6'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
    if(empty($db)){
     $msg= "Database connection error";
    }elseif (empty($columns) || !is_array($columns)) {
     $msg="columns Name must be defined in an indexed array";
    }elseif(empty($tableName)){
      $msg= "Table Name is empty";
   }else{
   
   $columnName = implode(", ", $columns);
   $query = "SELECT ".$columnName." FROM $tableName ORDER BY COL_6 DESC LIMIT 10";

   $result = $db->query($query);
   
   if($result== true){ 
    if ($result->num_rows > 0) {
       $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
       $msg= $row;
    } else {
       $msg= "No Data Found"; 
    }
   }else{
     $msg= mysqli_error($db);
   }
   }
   return $msg;
   }
   
?>