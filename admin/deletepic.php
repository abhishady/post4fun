<?php
	require_once('../includes/main_functions.php');
	if(isset($_GET['id']))
	{
			global $con;
		$id=$_GET['id'];
		$query= "DELETE FROM picdetail where id=".$id;
		$res=mysqli_query($con,$query);
		if($res)
		{
			redirectTo("index.php?pageName=photos");

		}
		
	}
?>