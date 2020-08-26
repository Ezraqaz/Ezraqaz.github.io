<?php
$username=$_POST['username'];
$password=$_POST['password'];
$Username='admin';
$Password='YXRHylyn2020admin';

if($Username!=$username||$Password!=$password){ 
    echo "<script>alert('账号或密码错误，请重新输入！');location='adminlogin.html'</script>";
	exit();
    }
 else{
 
        echo "<script>alert('登录成功');location='admin.php'</script>";
    };
?>