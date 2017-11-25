<?php  
  
$conn = new mysqli('localhost', 'root', '','eventmanage');  
//mysqli_select_db($conn, 'EmployeeDB');  
  
$setSql = "SELECT * FROM register"; 
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader = "id" . "\t" . "name" . "\t". "email" . "\t" . "password" . "\t" . "college" . "\t" ."mobile number" . "\t" ; 
  
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
header("Content-Disposition: attachment; filename=User_Detail_Report.xls");
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?> 
