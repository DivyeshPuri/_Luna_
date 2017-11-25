<?php
 
session_start();
$currTable= $_SESSION['data'];
for( $i=0; $i<10; $i++){
	$currTable = $_SESSION['data'][$i];

//var_dump($currTable);
$conn = new mysqli('localhost', 'root', '','eventmanage');  
//mysqli_select_db($conn, 'EmployeeDB');  
  
$setSql = "SELECT register.name,register.email,register.college,register.mobile_no,".$currTable.".event1,".$currTable.".event2,".$currTable.".event3,".$currTable.".event4 FROM register INNER JOIN ".$currTable." ON register.email=".$currTable.".email  ";
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader =  "name"  . "\t" . "email" . "\t" . "college" . "\t" ."mobile number" . "\t" . "event1" . "\t" . "event2" . "\t" ."event3" . "\t". "event4" . "\t"; 
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {   
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  }
?> 
