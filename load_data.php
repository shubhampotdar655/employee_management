<?php
include_once("db_connect.php");
// $sql_query = "SELECT id, name, description, date_created FROM project_list LIMIT 200";
$sql_query="SELECT project_list.id, Concat(users.firstname,' ',users.lastname) as firstname, project_list.name, project_list.description, project_list.date_created
FROM project_list
INNER JOIN users ON project_list.manager_id=users.id;";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
$developers_record = array();
while( $developer = mysqli_fetch_assoc($resultset) ) {
	$developers_record[] = $developer;
}
$developer_data = array(
	"sEcho" => 1,
"iTotalRecords" => count($developers_record),
"iTotalDisplayRecords" => count($developers_record),
  "aaData"=>$developers_record);

echo json_encode($developer_data);
exit;
?>