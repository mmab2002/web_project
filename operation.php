<?php 
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Transfer Money
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body{
            background-color: #c4c4c4c4;
        }
        section{
            background-color: #fff;
            position:absolute;
            height: 50%;
            width: 50%;
            margin-left: 25%;
            margin-top: 10%;
            border-radius: 50px;
        }
        select{
            width: 150px;
        }
        .select{
            position: absolute;
            top:61%;
            left: 30%;
        }
        .transfer-button{
            position: absolute;
            top: 60%;
            left: 45%;
        }
        .custumer-data{
            width: 400px;
        }
        .btn{
            position: absolute;
            top: 10%;
            left: 120%;
        }
    </style>
</head>
<body>
    
    <!-- php start-->
<?php
$id= $_GET['sno'];
$name= $_GET['name'];
$emailid= $_GET['email'];
$bal1= $_GET['balance'];

?>
    <!--- end php-->
    <center>
    <section>
    <div class="panel">
    <div class="panel-header">
        <h2>Customer Details</h2>
        </div><hr>
        <div class="panel-body">
            <table class="custumer-data"><tr><td>
            <p>ID of Customer : </p></td>  <td><p><?php echo $id; ?></p></td></tr>
            <tr><td><p>Name of Customer :</p></td>     <td><p><?php echo $name; ?></p></td></tr>
            <tr><td><p>Email ID of Customer :</p></td> <td><p><?php echo $emailid; ?></p></td></tr>
            <tr><td><p>Balance :     </p></td>         <td><p><?php echo $bal1; ?></p></td></tr>
        </table>
        </div><hr>
    </div>
    <p>
    </center>
    
    
    <!--- form -->
   <form action="#" method="post">
    <div class="select">
    <label>
    Transfer Money To :
    </label>
    <br>
    <?php
    $query1="SELECT * FROM customer";
    $data1=mysqli_query($conn,$query1);
    $rows1=mysqli_num_rows($data1);
    
    ?>
   
    <select id='customer' name='name'>
        <option >none</option>
        <?php 
        while($res=mysqli_fetch_assoc($data1))
        {
                if($res['sno']!=$id)
                {
                echo "<option id='customer' value='".$res['name']."'>".$res['name']."</option>";
                }
                }
                ?>
        </select></div>
        <div class="transfer-button">
    <p>Enter The Amount :<br>
    <input type="text" id="bal" name="bal" placeholder="amount you want to transfer"><br><br>
    <input type="submit" name="submit" value="transfer money"class="btn btn-success" onclick="transfer()">
</p>
    </div>
    </form>
    </section>
    
    <?php
       if($_POST['submit']){
           $name_of_customer=$_POST['name'];
           
           $query2= "SELECT sno,currentbalance FROM customer WHERE name='$name_of_customer'";
           $data2=mysqli_query($conn,$query2);
           $rows2=mysqli_num_rows($data2);
          // echo $rows2;
           $res1=mysqli_fetch_assoc($data2);
           $bal2=$res1['currentbalance'];
           $id2=$res1['sno'];
           // echo $id2." ".$bal2;


           $transfer_amount=$_POST['bal'];
           //echo " ".$name_of_customer." ".$transfer_amount;
           

           $amount_deduct=$bal1-$transfer_amount;
          // echo " ".$amount_deduct;

            $amount_add=$bal2+$transfer_amount;
            //echo " ".$amount_add;

            echo "<script>
                 alert('you are transfering money ".$transfer_amount." to ".$name_of_customer." whose ID is ".$id2." from ".$name." account whose ID is ".$id."');
                  <script>";
            $query3="UPDATE customer SET currentbalance='$amount_deduct' WHERE sno='$id'";
            $query4="UPDATE customer SET currentbalance='$amount_add' WHERE sno='$id2'";
            $query5="INSERT INTO history (inname, outname, amount) VALUES ('$name_of_customer','$name','$transfer_amount')";
            $execute1=mysqli_query($conn,$query3);
            $execute2=mysqli_query($conn,$query4);
            $execute3=mysqli_query($conn,$query5);
           
?>
<script type='text/javascript'>
      function transfer(){
//          var x=document.getElementById('customer').value;
//          var n= document.getElementById('bal').value;
//          var a=parseInt(n);
//          console.log(x);
//          console.log(a);
//          var bal=".$bal.";
//          var y=bal-a;
//          console.log(bal);
        alert("done");  
      }
    </script>
<meta http-equiv="refresh" content="2 , url=http://localhost/Basic%20Banking%20System/customer.php"/s>
  <?php         
       }
       ?>
       
  
    
    


<!--<a href="http://localhost/Basic%20Banking%20System/customer.php/" onclick="window.open('http://localhost/Basic%20Banking%20System/customer.php/', '', 'width=620,height=450,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false;">https://www.python.org/</a>
-->
    </body>
</html>