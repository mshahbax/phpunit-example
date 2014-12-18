<?php
$fileMapper = new File();

if(isset($_POST['submit'])){
	$data = array(
		'email' => $_POST['email'],
		'phone' => $_POST['phone'],
		'address' => $_POST['address'],
		'company' => $_POST['company'],
		);

	$fileMapper->saveToFile($data);
}

$resultSet = $fileMapper->getFromFile();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<title>Unit Testing Workshop</title>
</head>
 <body>
	<div style="width:500px; margin:0 auto;">	
		<div class="form login">
			<h1>Welcome Unit Testing</h1>
			<h2>Enter your data to save:</h2>
			<form accept-charset="UTF-8" action="" method="POST">
				<table border="1">
					<tr>
						<td><label for="">Email:</label></td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td><label for="">Phone:</label></td>
						<td><input type="text" name="phone"></td>
					</tr>
					<tr>
						<td><label for="">address:</label></td>
						<td><input type="text" name="address"></td>
					</tr>
					<tr>
						<td><label for="">company:</label></td>
						<td><input type="text" name="company"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" value="save"></td>
					</tr>
				</table>			
			</form>
	    </div>
	    <div class="listing" style=" margin-top: 43px;">
	    	<table border="1">
	    			<th>Email:</th>
	    			<th>Phone:</th>
	    			<th>Address:</th>
	    			<th>Company:</th>
	    			<?php if(!empty($resultSet)){ ?>
						<?php foreach($resultSet as $row){ ?>
						<tr>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td><?php echo $row['address']; ?></td>
							<td><?php echo $row['company']; ?></td>
						</tr>
						<?php }//endforeach?>
					<?php }else{ ?>
						<tr><td colspan="4"> No records</td></tr>
					<?php }//endif ?>
				</table>
	    </div>
    </div>
 </body>
</html>

