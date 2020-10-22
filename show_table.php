<?php
      require 'connectdb.php';
      $q = "SELECT * FROM profressor";
      $result = mysqli_query($dbcon,$q);
?>

<!DOCTYPE html>
<html>

  <head>
      <meta charset="utf-8">
  </head>

  <style>
  table {
          border-collapse: collapse;
          width: 100%;
          }

    th, td {
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
    background-color: #4CAF50;
    color: white;
    }
    a:link, a:visited {
      background-color: #4CAF50;
      color: white;
      padding: 14px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
    }

    a:hover, a:active {
      background-color: red;
    }
  </style>

<body>

  <div>
      <table style="500px">
        <tr>
          <th>ProfressorID</th>
          <th>NameTitle</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Expert</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>

        <tr>
          <th>ProfressorID</th>
          <th>NameTitle</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>Expert</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        ?>

        <tr>
          <td><?php echo $row['pro_id'];?></td>
          <td><?php echo $row['name_title'];?></td>
          <td><?php echo $row['first_name'];?></td>
          <td><?php echo $row['last_name'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['expert'];?></td>
          <td><a href="profressor_update_form.php?pro_id=<?php echo $row['pro_id'];?>">edit</a></td>
          <td><a href="profressor_delete.php?pro_id=<?php echo $row['pro_id'];?>">delete</a></td>
        </tr>

        <?php
        }
          mysqli_free_result($result);
          mysqli_close($dbcon);

        ?>
  </div>
  <div>
    <br>
    <a href="form.php">insert</a>
    <br>
  <div>
</body>
</html>
