<?php
include('connect.php');

$output= array();
$sql = "SELECT * FROM user";

$totalQuery = mysqli_query($conn,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'ign',
	2 => 'firstname',
	3 => 'lastname',
	4 => 'position',
    5 => 'link',
    6 => 'games',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE ign like '%".$search_value."%'";
    $sql .= " OR games like '%".$search_value."%'";
	$sql .= " OR firstname like '%".$search_value."%'";
	$sql .= " OR lastname like '%".$search_value."%'";
	$sql .= " OR position like '%".$search_value."%'";
    $sql .= " OR link like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY firstname asc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($conn, $sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	
	$sub_array[] = $row['ign'];
    $sub_array[] = $row['games'];
	$sub_array[] = $row['firstname'];
	$sub_array[] = $row['lastname'];
	$sub_array[] = $row['position'];
	$sub_array[] = '<a href="'.$row['link'].'" class="viewlink"><img src="fbicon.png" class="img-fluid img-thumbnail" width="40" height="40"></a>';
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm editbtn" >Edit</a>  <a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
