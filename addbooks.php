<?php
include('dbconnect/connection.php');
if(isset($_GET['uid']))
{

$id = $_GET['uid'];
 $esql= "select * from `library` where `id` = '$id'";
$esql = mysql_query($esql);
$erow  = mysql_fetch_array($esql);

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD BOOK </title>
</head>
<body>
	<table border="2" align="center">
		<form>
			<th colspan="2">ADD BOOKS</th>
			<tr>
				<td>BOOK ID</td>
				<td><input type="number" name=""></td>
			</tr>
			<tr>
				<td>BOOK NAME</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>BOOK AUTHOR</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>SUBJECT</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>BRANCH</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>STATUS</td>
				<td><input type="text" name=""></td>
			</tr>
			<th colspan="2"><input type="submit" name=""></th>
		</form>
	</table>

</body>
</html>