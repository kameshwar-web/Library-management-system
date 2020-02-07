<?php
$conn = mysql_connect('localhost','root','rootwdp');
if(!$conn)
{
	echo "Your Database Not Connected";
}

	mysql_select_db('library');

?>