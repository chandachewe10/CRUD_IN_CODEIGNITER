<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter Crud tutorial on codesource.io</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container mt-4">
<h1>Codeigniter Crud Practice</h1>
</head>
<body>
    <center>
        <form action="<?php echo base_url('index.php/updateuser/'.$id);?>" method="POST" >
<div class="shadow-lg p-3 mb-5 bg-white rounded">
  <label for="new password">New Password</label>
  <input type="password" name="password">
  <button class="btn btn-success"> Submit </button>  
</form>
</div>

</center>
</body>
</html>