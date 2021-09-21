<?php
    include 'link.php';
    $from_email=$_GET['from_email'];
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/style.css">
    <title>Cash Transaction</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>
                    Transact Money<a class="btn btn-primary m-5" href="transhist.php">ALL Transaction History</a>
                </h1>
                <form class="m-4 p-4" method="POST">
                    <div class="form-group mt-3">
                        <select name="from" id="from" class="form-control" required>
                                
                                <?php
                                    include 'conn.php';
                                        if($from_email != "")
                                        {
                                            ?>
                                           <option value="<?php echo $id;?>"><?php echo $from_email;?></option>
                                             <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <option value="">From</option>
                                            <?php
                                            $select="SELECT * FROM customer";
                                            $query = mysqli_query($con,$select);
                                            while($name= mysqli_fetch_assoc($query))
                                            {             
                                                ?>
                                                <option value="<?php echo $name['id']?>"><?php echo $name['email'];?></option>
                                                <?php  
                                            }
                                        }
                                            ?>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <select name="to" id="to" class="form-control" required>
                            <option value="">To</option>
                                <?php
                                for($i=1;$i<=12;$i++)
                                {
                                    $query="select * from customer where id=$i";
                                    $conqu = mysqli_query($con,$query);
                                    $name= mysqli_fetch_assoc($conqu);
                                    if($conqu)
                                    {
                            ?>
                            <option value="<?php echo $name['id']?>"><?php echo $name['email']?></option>
                            <?php  
                            }
                        }
                            ?>
                        </select>
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text" id="basic-addon1">Rs.</span>
                        <input type="number" name="amount" class="form-control" placeholder="Amount to Transfer" required>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" name="transfer" class="btn btn-primary" style="text-align:center;">Transfer</button>
                    </div>
                   
                </form>
               
            </div>
        </div>
    </div>
    <?php
        if(isset($_POST['transfer'])){
            $from = $_POST['from'];
            $to = $_POST['to'];
            $amt=$_POST['amount'];
            if($amt > 0)
            {
                $balquery="select * from customer where id=$from";
                $query=mysqli_query($con,$balquery);
                $fetch = mysqli_fetch_assoc($query);
                $balance = $fetch['balance'];
                $from_email=$fetch['email'];
                $from_person=$fetch['name'];
                if ($amt <= $balance)
                {
                    $balance =$balance - $amt;
                    $cq=mysqli_query($con,"select * from customer where id=$to");
                    $get=mysqli_fetch_assoc($cq);
                    $bal = $get['balance'];
                    $to_email = $get['email'];
                    $to_person = $get['name'];
                    $bal = $bal + $amt;
                    $frm_upd=mysqli_query($con,"UPDATE `customer` SET `balance`=$balance WHERE `id`=$from");
                    if($frm_upd)
                    {
                        $upd="UPDATE `customer` SET `balance`=$bal WHERE `id`=$to";
                        $update=mysqli_query($con,$upd);
                        if($update)
                        {
                            $ins="INSERT INTO `transaction_history`(`from_person`,`from_email`,`to_email`, `to_person`, `amount`) VALUES ('$from_person','$from_email','$to_email','$to_person',$amt)";
                            $in=mysqli_query($con,$ins);
                            if($in)
                            {
                                echo "<script>
                                        alert('Transfer Successful');
                                        </script>";
                            }
                            else{
                                echo "<script>
                                alert('Transfer Failed');
                                window.location.href = 'transaction.php';
                                </script>";  
                            }
                        }
                    }
                }
                else{
                    echo "<script>
                    alert('Insufficient Balance');
                    window.location.href = 'transaction.php';
                    </script>";
                }
            }
            else{
                echo "<script>
                        alert('Amount should be more than 0');
                    </script>"; 
            }
        }
    ?>
</body>
</html>