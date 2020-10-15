<?php 

?>
<?php include_once 'dbconfig.php'; ?> 
<?php include_once 'header.php'; ?> 

<div class="container">
    <a href="add-data.php" class="btn btn-large btn-info">
        <i class="glyphicon glyphicon-plus"></i> &nbsp; Adauga
    </a>
</div>
<br />
<div class="container"> 
   
	<table class='table table-bordered table-responsive'> 
        <tr>
            <th>Nr.</th>
            <th>Nume </th>
            <th>Prenume</th>
            <th>Email</th>
            <th>Telefon</th>
            <th colspan="2" align="center">Actiuni</th>
        </tr>
        <?php    
		  $crud->dataview("SELECT * FROM tbl_users"); 
	    ?>
    </table> 
</div>
<?php include_once 'footer.php'; ?>