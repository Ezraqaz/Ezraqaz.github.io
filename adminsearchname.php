<?php
echo '<img src="http://ftp6267045.host108.abeiyun.cn/images/giflogo.gif" alt="logo演绎" title="logo演绎" width=100%>';
//var_dump($_POST['personalid']);
$xingming=$_POST['xingming'];
//$arr=$_POST;
//$i=0;
//foreach($arr as $value){
//	$info[$i]=$value;
//	$i++;
//}
////var_dump($info);
//$name=$info[1];
//$id=$info[2];
$con=mysqli_connect("127.0.0.1","sfydb_6267045","YTw757601031","sfydb_6267045");
mysqli_set_charset($con,"utf8");
if(!$con){
	exit('Could not connect:'.mysql_error());
}
//else{
//	echo "连接数据库成功";
//}
mysqli_select_db($con,"sfydb_6267045");

$result=mysqli_query($con,"SELECT * FROM students2019 WHERE Name=$xingming");

while($row=mysqli_fetch_array($result)){
	$name=$row["Name"];
	$Personalid=$row["Id"];
	$gender=$row["Gender"];
	$studentid=$row["StudentId"];
	$class=$row["Class"];
	$room=$row["Lou"].$row["Room"].'室'.$row["Bed"].'床';
	$bzr=$row["Bzr"];
	$bzrcall=$row["BzrCall"];
}

//if($_POST["xingming"]!=$name){ 
//    echo "<script>alert('查无此人！');location='admin.php'</script>";
//	exit();
//    }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<script type="text/javascript" src="./layui/layui.all.js"></script>
<script type="text/javascript" src="./layui/layui.js"></script>
<link rel="stylesheet" href="./layui/css/modules/code.css">
<link rel="stylesheet" href="./layui/css/modules/laydate/default/laydate.css">
<link rel="stylesheet" href="./layui/css/modules/layer/default/layer.css">
<link rel="stylesheet" href="./layui/css/layui.css">
<link rel="stylesheet" href="./layui/css/layui.mobile.css">
<link rel="stylesheet" href="style.css">
<link rel="icon" href="http://ftp6267045.host108.abeiyun.cn/images/logo.ico" type="image/x-icon">
	<style>
		#wentifankui {
			width: 40%;
			display: block;
/*			align:center;*/
			margin: auto;
		}
	</style>
<title>查询结果</title>
</head>

<body>
       
   </table>   
         
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
  <legend>查询结果</legend>
</fieldset>  
 
<table class="layui-table" lay-even="" lay-skin="row">
  <colgroup>
    <col width="150">
    <col width="150">
    <col width="200">
    <col>
  </colgroup>
  <thead>
    <tr>
      <th>姓名</th>
		<?php
		echo "<th>{$name}</th>";
		?>
    </tr> 
  </thead>
  <tbody>
    <tr>
      <td>性别</td>
      
		<?php 
		  echo "<td>{$gender}</td>";
		  ?>
		
    </tr>
    <tr>
      <td>学号</td>
      <?php 
		  echo "<td>{$studentid}</td>";
		  ?>
    </tr>
    <tr>
      <td>班级</td>
      <?php 
		  echo "<td>{$class}</td>";
		?>
    </tr>
    <tr>
      <td>住宿信息</td>
      <?php 
		  echo "<td>{$room}</td>";
		?>
    </tr>
    <tr>
      <td>班主任</td>
      <?php 
		  echo "<td>{$bzr}</td>";
		  ?>
    </tr>
	  <tr>
      <td>班主任联系方式</td>
      <?php 
		  echo "<td>{$bzrcall}</td>";
		  ?>
    </tr>
	  </tr>
<!--
	  <tr>
      <td>查询用时</td>
      <td></td>
    </tr>
-->
  </tbody>
</table>  
              
    <script src="//res.layui.com/layui/dist/layui.js" charset="utf-8"></script>
	<blockquote class="layui-elem-quote">
  欢迎来到环工系，我们为你准备了新生攻略：
  <a class="layui-btn layui-btn-normal" href="http://mp.weixin.qq.com/mp/homepage?__biz=MzUzNzU4Nzg1Ng==&hid=5&sn=6f846fb44d486d82f804d5f12357bc74&scene=18#wechat_redirect
" target="_blank">点击查看</a>
<!--		<button type="button" class="layui-btn layui-btn-danger">警告按钮</button>-->
		
	</blockquote> 
	<br />
	<a href="erro.html" class="layui-btn layui-btn-danger" id="wentifankui">问题反馈</a>
	<img src="http://ftp6267045.host108.abeiyun.cn/images/welcome.png" alt="欢迎关注一夕如环" title="欢迎关注一夕如环" class="gifqrcode" width=100%>
<!--	<div class="qrcode">-->
<!--		<img src="http://ftp6267045.host108.abeiyun.cn/images/qrcode.jpg" alt="qrcode" title="qrcode">-->
<!--	</div>-->
	<br />
	<br />
	<br />
	<h5 align="center" class="copyright">©一夕如环2020</h5>
	
</body>
</html>
<?php
mysqli_close($con);
?>