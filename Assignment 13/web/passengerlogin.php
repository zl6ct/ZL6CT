<?php 
	session_start();
    $con=mysqli_connect('localhost','root','');
	
	if($con) {
		echo 'link ok';
	}else {
		echo 'error';
	}
 
	$db_selected = mysqli_select_db($con,"uber"); 
	if (!$db_selected) 
	{ 
	 	die ("Can\'t use yxz : " . mysql_error()); 
	} 
 
	//执行MySQL查询-设置UTF8格式
	mysqli_query($con,"SET NAMES utf8"); 	
	
	$P_IDnumber = $_POST['username'];
	$Password=$_POST['password'];
	$db_P_IDnumber=NULL;
	$db_password=NULL;
		
	$sql="select * from passenger where P_IDnumber='$P_IDnumber'";
	$result = mysqli_query($con, $sql);
	
	while($row=mysqli_fetch_array($result)){
		$db_P_IDnumber=$row["P_IDnumber"];
		$db_password=$row["Password"];
	}

	if(is_null($db_P_IDnumber)){
	?>
	<script>
	alert("查无此人！");
	window.location.href="passengerlogin.html";
	</script>
	<?php	
		}
	else{
		if($db_password!=$Password){

	?>

	<script>
	alert("密码错误！");
	window.location.href="passengerlogin.html";

	</script>        
	<?php
		}
	else{
		$_SESSION["P_IDnumber"]=$P_IDnumber;
		$_SESSION["code"]=mt_rand(0,100000);//record
	?>
	<script>
	window.location.href="passengerindex.html";
	</script>  
	<?php
		}
	}
	mysqli_close($con);
	?>



