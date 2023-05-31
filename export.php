<?php  
$con = new mysqli("localhost","uiboinfo_matrimony","Tech@1admin","uiboinfo_matrimony");
if(isset($_GET["mobile_no"])){
  $mobile_no = $_GET["mobile_no"];
 
}
// mysqli_select_db($conn, 'uiboinfo_nadarmembership');  
$sql = "SELECT name, father_name, age, district, mobile_no, rasi, najathiram, lakunam FROM register WHERE mobile_no = '$mobile_no' ";  
$res=$con->query($sql);
$i=0;
$row=$res->fetch_assoc();

 $mobile_no=$row["mobile_no"];

$setRec = mysqli_query($con, $sql);  
$columnHeader = '';  
$columnHeader = "Name" . "\t" . "Father Name" . "\t" . "Age" . "\t" . "District" . "\t" . "Mobile" . "\t"  . "Rasi" . "\t" . "Najathiram" . "\t"  . "Lakunam" . "\t";   
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
header("Content-Disposition: attachment; filename=expense_report.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 