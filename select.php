<html>
	<head>
	
	<meta charset="utf-8">
	<title>Select Bootstraps</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="asset/bootstrap/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="asset/css/bootstrap.min.js"></script>
	</head>
<body>
	
<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
//public function select($table, $rows = '*', $join = null, $where = null,
//$order = null, $limit = null){
$db->select('products'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
//echo "<pre>";
//print_r($res);
?>
<a href="frm_insert.php" class="btn btn-success btn-lg text-right" role="button">
<span class="glyphicon glyphicon-plus"></span> Insert</a>
<table class="table table-hover" >
			<tr>
				<td><strong>prod_id</strong></td>
				<td><strong>vend_id</strong></td>
				<td><strong>prod_name</strong></td>
				<td><strong>prod_price</strong></td>
				<td><strong>prod_desc</strong></td>
				<td><strong>#</strong></td>
				<td><strong>#</strong></td>
				
			</tr>
			
<?php
	
foreach($res as $key => $value){?>
		<tr>
			<td><?=$value['prod_id']?></td>
			<td><?=$value['vend_id']?></td>
			<td><?=$value['prod_name']?></td>
			<td><?=$value['prod_price']?></td>
			<td><?=$value['prod_desc']?></td>
			<td><a href="frm_edit.php?prod_id=<?=$value['prod_id']?>">Edit</a></td> 
			<td><a href="delete.php?prod_id=<?=$value['prod_id']?>">Delete</a></td> 
		</tr>
		
		
		<?php
}
?>
</table>
</body>
</html>