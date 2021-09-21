<?php
include 'link.php';
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/style.css">
    <title>Customers Page</title>
</head>
<body>
    <?php
    $id=$_GET['id'];
    $select="Select * from customer where id=$id";
    $query=mysqli_query($con,$select);
    $details=mysqli_fetch_assoc($query);
    if($details)
    {
        $email = $details['email'];
        $id = $details['id'];
    ?>
    <div class="text-center">

        <h1>Name: <?php echo $details['name'];?></h1>
        <h4>Email: <?php echo $details['email'];?></h4>
        <h4>Current Balance: <?php echo $details['balance'];?></h4>
        <a class="btn btn-primary" href="transaction.php?from_email=<?php echo $email;?>&id=<?php echo $id;?>">Transfer</a>
        <?php
        }
        ?>
    </div>
      <?php
        $select="SELECT * FROM transaction_history where from_email='$email' ";
        $query = mysqli_query($con,$select);
        $rowcount=mysqli_num_rows($query);
        if($rowcount > 0)
        {
          //echo $rowcount;
        
      ?>
      <table class="table text-center">
        <h1>Transfer Records   
        </h1>
        
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Amount Transferred</th>
      <th scope="col">Date Time</th>
    </tr>
  </thead>
  <tbody> 
    <?php
    while($view = mysqli_fetch_assoc($query))
    {
    ?> 
    <tr>
      <th scope="row"><?php echo $view['id']?></th>
      <td><?php echo $view['to_person']?></td>
      <td><?php echo $view['amount']?></td>
      <td><?php echo $view['insert_time']?></td>
    </tr>
    <?php
            }
        }
            else{
                echo '<h1>No Transfer Records</h1>';
            }
    ?>
  </tbody>
</table>
</body>
</html>