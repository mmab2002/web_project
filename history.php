<?php
	include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>transfer history</title>
	<style type="text/css">
		.table{
			width: 1000px;
		}
	</style>
</head>
<body>
	<?php
$query="SELECT * FROM history";
$data=mysqli_query($conn,$query);
$rows=mysqli_num_rows($data);
//if($rows>0){
//     foreach($data as $row){
//        echo $row['sno'];
//     }
// }

if($rows!=0){
    ?>
    <center>
    	<h1>Transcation History</h1>
	<table class="table table-bordered table-dark table-hover" border="true" width="80%">
		<thead>
			<tr>
				<th width="5%">sno</th>
				<th width="25%">debit person name</th>
				<th width="25%">credit person name</th>
				<th width="25%">amount</th>
			</tr>
		</thead>
		<tbody>
			<?php
    while($res=mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$res['sno']."</td>
                <td>".$res['outname']."</td>
                <td>".$res['inname']."</td>
                <td>".$res['amount']."</td>
            </tr>";    }
}
else{
    echo "error";
}
?>
		</tbody>
	</table>
</center>
</body>
</html>