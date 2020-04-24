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
	$P_IDnumber=$_SESSION["P_IDnumber"];
	$password = $_POST['password'];
	$credit_card_Number = $_POST['credit_card_Number'];
	$Fname = $_POST['Fname'];
	$Mname = $_POST['Mname'];
	$Lname = $_POST['Lname'];
	$Phonenumber = $_POST['Phonenumber'];
	
    $sql="UPDATE  passenger SET password='$password' , credit_card_Number='$credit_card_Number' , Fname='$Fname' ,
	Mname='$Mname' , Lname='$Lname' , Phonenumber='$Phonenumber' 	where P_IDnumber='$P_IDnumber'";
	
	   $result=mysqli_query($con,$sql);  
  
        if($result===true){  
            echo  "<script type='text/javascript'>alert('update success');</script>";  
        }else{  
            echo "<script type='text/javascript'>alert('update fail');</script>".$sql;  
        }  




/*$sql = "SELECT * FROM Driver";
$result = mysqli_query($con, $sql);
	
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["P_IDnumber"]. "<br>";
    }
} else {
    echo "0 结果";
}*/
mysqli_close($con);
?>
    <script>
	window.location.href="passengerindex.html";
	</script>
	