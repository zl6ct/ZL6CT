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
	
	$D_IDnumber = $_SESSION["D_IDnumber"];
	$license_plate = $_POST['license_plate'];


    $sql="DELETE FROM car WHERE D_IDnumber='$D_IDnumber' and license_plate= '$license_plate' ";
	   $result=mysqli_query($con,$sql);  
   
        if($result===true){  
            echo  "<script type='text/javascript'>alert('register success');</script>";  
        }else{  
            echo "<script type='text/javascript'>alert('register fail');</script>".$sql;  
        }  
          

	
/*$sql = "SELECT * FROM Driver";
$result = mysqli_query($con, $sql);
	
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["D_IDnumber"]. "<br>";
    }
} else {
    echo "0 结果";
}*/
mysqli_close($con);
?>
    <script>
	window.location.href="index.html";
	</script>
