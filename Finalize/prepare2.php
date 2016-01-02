<?php

$con= mysqli_connect("127.0.0.1","root","","final")or die("ERROR to connect");
mysqli_select_db($con,'final')or die("error to select");



$sql="ALTER TABLE z_projects DROP ACS_JobID";
mysqli_query($con,$sql)or die(mysqli_error($con));


$sql="ALTER TABLE z_projects DROP ACS_JobNumber";
mysqli_query($con,$sql)or die(mysqli_error($con));


$sql="ALTER TABLE z_projects DROP ACS_ContractorName";
mysqli_query($con,$sql)or die(mysqli_error($con));

$sql="ALTER TABLE z_projects DROP MRP_ProjectID";
mysqli_query($con,$sql)or die(mysqli_error($con));

$sql="ALTER TABLE z_contractors DROP Access_ID";
mysqli_query($con,$sql)or die(mysqli_error($con));

$sql="ALTER TABLE z_contractors DROP MRP_ContractorID";
mysqli_query($con,$sql)or die(mysqli_error($con));

$sql="ALTER TABLE z_mrp_requests DROP Access_MRPid";
mysqli_query($con,$sql)or die(mysqli_error($con));

$sql="ALTER TABLE z_mrp_requests DROP Access_ProjectID";
mysqli_query($con,$sql)or die(mysqli_error($con));

$sql="ALTER TABLE z_mrp_requests DROP Access_ContractorID";
mysqli_query($con,$sql)or die(mysqli_error($con));

mysqli_select_db($con,'test_demo')or die("error to select");
$sql="DROP TABLE z_bidder_mrp_request_join,z_contact,z_contact_type,z_contractors,z_members,z_mrp_approved_hours,z_mrp_requests,z_mrp_request_parent_hours,z_mrp_request_scope_join,z_projects,z_project_contact_join,z_project_contractor_join,z_project_visit,z_project_visit_stage_join,z_project_visit_user_id_join,z_request_child_hours";
 mysqli_query($con,$sql)or die(mysqli_error($con));


?>