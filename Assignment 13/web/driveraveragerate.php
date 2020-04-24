<?php 
	session_start();
    $con=mysqli_connect('localhost','root','');
	

 
	$db_selected = mysqli_select_db($con,"uber"); 
	if (!$db_selected) 
	{ 
	 	die ("Can\'t use yxz : " . mysql_error()); 
	} 
 
	//执行MySQL查询-设置UTF8格式
	mysqli_query($con,"SET NAMES utf8"); 	
	
	$D_IDnumber = $_POST['username'];
	$Password=$_POST['password'];
	$db_D_IDnumber=NULL;
	$db_password=NULL;
		
	$sql="select * from driver where D_IDnumber='$D_IDnumber'";

	<?php
		}
	}
	mysqli_close($con);
	?>



