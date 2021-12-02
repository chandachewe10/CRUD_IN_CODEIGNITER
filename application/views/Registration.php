<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD::PRACTICE</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<style>
#email,#username,#password{
    width: 300px;
        height: 45px;
        
        border-radius: 30px;
       
        font-size: 12px;
        font-style: italic;
        padding: 0 10px; 
}

</style>


</body>
    </html>
    <?php
echo form_open("insert",['id'=>'user']);
?>
<?= '<center>';?>
<?= "<div class='btn btn-danger'>";?>
<?= validation_errors()?>
<?= "</div><br>"?>
<?= set_value('name')?>


 
<?= form_label('Email','email');?>
<?= "<br><br>";?>
       
 <?= form_input(['name'=>'email','type'=>'text', 'id'=>'email']); ?>

<?= "<br><br>";?>

<?= form_label('Password','password');?>
<?= "<br><br>";?>
<?= form_input(['name'=>'password','type'=>'password', 'id'=>'password']);?>


<?= "<br><br>";?>
<?= form_label('Username','username');?>
<?= "<br><br>";?>
<?= form_input(['name'=>'username','type'=>'text', 'id'=>'username']);?>

<?= "<br><br>";?>

<?= form_submit('btnSubmit','Submit',['class'=>'btn btn-success','style'=>'text-align: center;']);?>


<?= form_close();?>

<?= '</center>';?>

