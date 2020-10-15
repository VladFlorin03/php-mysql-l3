<?php


include_once 'dbconfig.php'; 
if(isset($_POST['btn-save'])){ 
	$fname = $_POST['first_name']; 
	$lname = $_POST['last_name'];
	$email = $_POST['email_id'];
	$contact = $_POST['contact_no'];
	if($crud->create($fname,$lname,$email,$contact)){ 
        header("Location: add-data.php?inserted");   
    }else{                                           
		header("Location: add-data.php?failure");   
	}}
?>
<?php include_once 'header.php'; ?>
<?php
if(isset($_GET['inserted'])){ 
	?>
    <div class="container">
	   <div class="alert alert-info">
        Inserat cu succes! 
	   </div>
	</div>
    <?php
}else if(isset($_GET['failure'])){ 
	?>
    <div class="container">
	   <div class="alert alert-warning">
       Eroare la insert!
	   </div>
	</div>
    <?php
    }
?>

<div class="container">
	<form method='post'>
    <table class='table table-bordered'>
        <tr>
            <td>Nume</td><td><input type='text' name='first_name' class='form-control' required></td>
        </tr>
        <tr>
            <td>Prenume</td><td><input type='text' name='last_name' class='form-control' required></td>
        </tr>
        <tr>
            <td>Email</td><td><input type='text' name='email_id' class='form-control' required></td>
        </tr>
        <tr>
            <td>Telefon</td><td><input type='text' name='contact_no' class='form-control' required></td>
        </tr>
        <tr>
            <td colspan="2">
           
            <button type="submit" class="btn btn-primary" name="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Creare</button>
            
            <a href="index.php" class="btn btn-large btn-success" style="float: right;">
            <i class="glyphicon glyphicon-backward"></i> &nbsp;Return</a>
            </td>
        </tr>
    </table>
</form>
</div>
<?php include_once 'footer.php'; ?>