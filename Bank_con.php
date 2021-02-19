<?php

$host="localhost";
$user="root";
$pw="";
$db="bank_employees";

$con=mysqli_connect($host, $user, $pw, $db);

$sql = "SELECT emp_id, emp_name, emp_email, emp_photo, bank_name, branch_name
FROM employee
INNER JOIN bank_branch ON employee.bank_branch_branch_id = bank_branch.branch_id
INNER JOIN bank ON bank.bank_id = bank_branch.bank_bank_id";

$result=mysqli_query($con,$sql);

$output_array = array();

foreach($result as $row) {
    $output_array[] =$row;
}

echo json_encode( $output_array );

?>