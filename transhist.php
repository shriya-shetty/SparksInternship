<?php
    include 'link.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/style.css">
    <title>Transaction History</title>
</head>
<body>
    <h1>Transaction History</h1>
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Amount Transferred</th>
      <th scope="col">Date Time</th>
    </tr>
  </thead>
  <tbody>
      <?php
      include 'conn.php';
        $select="SELECT * FROM transaction_history";
        $squery = mysqli_query($con,$select);
        while($view = mysqli_fetch_assoc($squery))
        {
      ?>
    <tr>
      <th scope="row"><?php echo $view['id'];?></th>
      <td><?php echo $view['from_person'];?></td>
      <td><?php echo $view['to_person'];?></td>
      <td><?php echo $view['amount'];?></td>
      <td><?php echo date('M j g:i A', strtotime($view["insert_time"]));?></td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
</body>
</html>