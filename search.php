
<?php
$arr=$_POST;
$i=0;
foreach($arr as $value){
	$info[$i]=$value;
	$i++;
}
//var_dump($info);
$name=$info[1];
$id=$info[2];
echo '<img src="http://ftp6267045.host108.abeiyun.cn/images/giflogo.gif" alt="logo演绎" title="logo演绎" width=100%>';
echo "<p>你好，{$name}！欢迎来到华北电力大学环境科学与工程系，下面是你的信息：</p>"."<br />";
echo "<div>";
//echo "<br />";
echo "<hr/>";
echo "<h4>姓名：{$name}</h4>";
echo "<h4>性别：#</h4>";
echo "<h4>学号：############</h4>";
echo "<h4>班级：环境类202#班2</h4>";
echo "<h4>住宿信息：##楼##室##号</h4>";
echo "<h4>班主任：###</h4>";
echo "<h4>班主任联系方式：0312-########</h4>";
echo "<hr/>";
echo "</div>";
//echo '<img src="/images/welcome.png" alt="logo演绎" width=100%>';
echo '<h5 align="center" class="copyright">©一夕如环2020</h5>'
?>

<!doctype html>
<html>
<head>
<link rel="icon" href="http://ftp6267045.host108.abeiyun.cn/images/logo.ico" type="image/x-icon">
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<script type="text/javascript" src="./index_files/jquery-2.2.4.min.js.下载"></script>
<script type="text/javascript" src="./index_files/fetch.min.js.下载"></script>
<script type="text/javascript" src="./index_files/twt.fetch.min.js.下载"></script>
<script type="text/javascript" src="./index_files/twt.script.min.js.下载"></script>
<script type="text/javascript" src="./index_files/twt.header.sidebar.min.js.下载"></script>
<script type="text/javascript" src="./index_files/script.min.js.下载"></script>
	<style>
		p {
			text-indent: 2em;
			font-size: 20px;
			color: cadetblue;
		}
		div {
			width: 70%;
			margin: 0 auto;
		}
		h3 {
			color: blue;
			font-weight: 400;
			text-align: center;
			
		}
	</style>
<meta charset="utf-8">
<title>查询结果</title>
</head>
	
<body>
<!--	<img src="/images/welcome.png" alt="欢迎关注一夕如环" title="欢迎关注一夕如环" width=100%>-->
</body>
</html>