
<!DOCTYPE html>
<html>

  <head>
      <meta charset="utf-8">
  </head>

  <style>

  body{
    width: 500px;
  }


  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  </style>

<body>



<h3>Profressor</h3>

<div>

  <form action="profressor_insert.php" method="post" enctype="multipart/form-data" id="form1">

    <label for="name_title">Name title</label>
    <input type="text" id="name_title" name="name_title">

    <label for="first_name">First Name</label>
    <input type="text" id="first_name" name="first_name" required>

    <label for="last_name">Last Name</label>
    <input type="text" id="plname" name="last_name" required>

    <label for="email">Email</label>
    <input type="text" id="email" name="email" required>

    <label for="pexpert">Expert</label>
    <input type="text" id="expert" name="expert" required>


    <input type="submit" value="Add" id="submit" name="submit">
  </form>
  </div>

</body>
</html>
