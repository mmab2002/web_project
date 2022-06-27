<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>customer list</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style type="text/css">
             table{
                width: 1000px;
                margin-top: 20px;
             }
              body{
                 background-color: #c4c4c4;
             }
        </style>
    </head>
 <?php
$query="SELECT * FROM customer";
$data=mysqli_query($conn,$query);
$rows=mysqli_num_rows($data);
//if($rows>0){
//    foreach($data as $row){
//        echo $row['sno'];
//    }
//}

if($rows!=0){
    ?>
    <body>
        <div class="card-body">
            <center>
                <h1>Customer name</h1>
                <table class="table table-bordered table-dark table-hover" width="80%">
                <thead>
             <tr>
                <th width="5%">s.no</th>
                <th width="25%">name</th>
                <th width="25%">email</th>
                <th width="20%">balance</th>
                <th width="25%">Details</th>
                </tr>
                </thead>
            <?php
                while($res=mysqli_fetch_assoc($data))
                {
                 echo "<tbody><tr>
                            <td>".$res['sno']."</td>
                            <td>".$res['name']."</td>
                            <td>".$res['email']."</td>
                            <td>".$res['currentbalance']."</td>
                            <td><a href='operation.php?sno=$res[sno]&name=$res[name]&email=$res[email]&balance=$res[currentbalance]' class='btn             btn-success'>view/transfer money</a></td>
                     </tr></tbody>";    }
                 }
                    else{
                     echo "error";
                 }
                ?>
                </table>
            </center>
        </div>
     </body>
</html>