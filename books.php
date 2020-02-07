<?php
session_start();
$username=$_SESSION['uname'] ;
if (!isset($username)) 
{
	header('location:books.php');
}
include('dbconnect/connection.php');

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>product details</title>
	<link rel="stylesheet" type="text/css" href="css/lib.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/mdb.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <link rel="stylesheet prefetch" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalized.min.css">
  <link rel="stylesheet prefetch" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.8/typicons.min.css">
</head>
<body>
	 <style >
    	
    body{
      background-image: url(image/0.jpg);
    }
    
  </style>
	<!-- Section -->
	<style >
		.div1{
			height: 90px;
			width: 100%;
			background: pink;
			border: 2px solid red;
			
		}
		.flo1{
			float:left;
			margin-right: 50px;
			margin-top: 10px;
			border: 2px solid red;
		}
		
	</style>
<section>	
<div class="div1 flo1">
	<div class="flo1">
		<div class="flo1"> Admin Name:<?php echo $username ?></div>
		<div class="flo1"> <button> LOGOUT</button></div>
	</div>
	<div class="flo1">
		<div > <button type="button" class="btn btn-unique"><a href="addbooks.php"><i class="fas fa-wifi pr-2" aria-hidden="true"> <a href="addbooks.php" ></i>ADD BOOKS</a></button></a></div>
	</div>
</div>
</section>

<div class="container">
	<table class="table table-bordered">
		<tr>
			<td> <button type="button" class="btn btn-indigo "><i class="far fa-user pr-2" aria-hidden="true"></i>BOOKID</button></td>

			<td> <button type="button" class="btn btn-indigo "><i class="far fa-user pr-2" aria-hidden="true"></i>BOOKNAME</button></td>
			<td> <button type="button" class="btn btn-indigo "><i class="far fa-user pr-2" aria-hidden="true"></i>BOOKAUTHOR</button></td>
			<td> <button type="button" class="btn btn-indigo "><i class="far fa-user pr-2" aria-hidden="true"></i>SUBJECT</button></td>
			<td> <button type="button" class="btn btn-indigo "><i class="far fa-user pr-2" aria-hidden="true"></i>BRANCH</button></td>
			<td> <button type="button" class="btn btn-indigo "><i class="far fa-user pr-2" aria-hidden="true"></i>STATUS</button></td>

			
		</tr>
		<?php
			$sql = "select * from `books`";
			$result = mysql_query($sql);
			while($row= mysql_fetch_array($result))

			{
			?>
		<tr>
			<td>
				<?php echo $row[0]; ?> </td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
			<td><?php echo $row[5]; ?></td>
			
			<td>
				<a href="addproduct.php?uid=<?php echo $row[0];?>"><button>Edit</button>
				<a href="del.php?uid=<?php echo $row[0];?>"><button>Delete</button></a>	
			</td>
			
			
			
			
		</tr>
		<?php
	}
	?>
	</table>

	
</div>
</body>
</html>