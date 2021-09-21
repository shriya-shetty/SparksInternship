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
    <title>Customers List</title>
</head>
<body>
    <h1>Customers List</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Balance</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
      <?php
      include 'conn.php';
        $query="SELECT * FROM `customer`";
        $squery = mysqli_query($con,$query);

        while($view = mysqli_fetch_assoc($squery))
        {
      ?>
    <tr>
      <th scope="row"><?php echo $view['id']?></th>
      <td><?php echo $view['name']?></td>
      <td><?php echo $view['email']?></td>
      <td><?php echo $view['balance']?></td>
      <td><a class="btn btn-primary" href="single.php?id=<?php echo $view['id'];?>">View</a></td>
    </tr>
    <?php
            }
    ?>
  </tbody>
</table>
</body>
</html>