<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>一夕如环后台管理页</title>
  <link rel="stylesheet" href="./layui/css/layui.css">
	<link rel="stylesheet" href="style.css">
	<style>
		#submitbtn {
			display: block;
			margin: 0 auto;
		}
		#serachbtn {
			display: block;
			margin: 0 auto;
		}
		#adminhbtn {
			display: block;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<h1 align="center">添加人员信息</h1>
	<br />
	<hr />
	<form class="layui-form" action="add.php" method="post">
  <div class="layui-form-item">
    <label class="layui-form-label">姓名</label>
    <div class="layui-input-block">
      <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入姓名" class="layui-input">
    </div>
  </div>
		<div class="layui-form-item">
    <label class="layui-form-label">性别</label>
    <div class="layui-input-block">
      <input type="radio" name="sex" value="男" title="男" checked="">
      <input type="radio" name="sex" value="女" title="女">
    </div>
  </div>
    <div class="layui-form-item">
    <label class="layui-form-label">身份证号码</label>
    <div class="layui-input-block">
      <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入身份证号码" class="layui-input">
    </div>
  </div>
		  <div class="layui-form-item">
    <label class="layui-form-label">学号</label>
    <div class="layui-input-block" >
      <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入学号" class="layui-input">
    </div>
  </div>
		  <div class="layui-form-item">
    <label class="layui-form-label">班级</label>
    <div class="layui-input-block">
      <select name="interest" lay-filter="aihao">
        <option value="" selected=""></option>
        <option value="0">环境类2001班</option>
        <option value="1">环境类2002班</option>
        <option value="2">环境类2003班</option>
        <option value="3">环境类2004班</option>
        <option value="4">环境类2005班</option>
		<option value="4">环境类2006班</option>
		<option value="4">环境类2007班</option>
		<option value="4">环境类2008班</option>
      </select>
    </div>
  </div>
		  <div class="layui-form-item">
    <label class="layui-form-label">住宿信息</label>
    <div class="layui-input-block">
      <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入住宿信息" class="layui-input">
    </div>
  </div>
		  <div class="layui-form-item">
    <label class="layui-form-label">班主任</label>
    <div class="layui-input-block">
      <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入班主任" class="layui-input">
    </div>
  </div>
		  <div class="layui-form-item">
    <label class="layui-form-label">班主任联系方式</label>
    <div class="layui-input-block">
      <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入班主任联系方式" class="layui-input">
    </div>
  </div>
<button type="submit" class="layui-btn layui-btn-primary" id="submitbtn">添加</button>
</form>
	<br />
	<hr />
	<br />
	<br />
	<br />
	<br />
	<br />
	
	<h1 align="center">身份证查找学生</h1>
	<br />
	<hr />
<form class="layui-form" action="adminsearch.php" method="post">
    <div class="layui-form-item">
    <label class="layui-form-label">身份证号码</label>
    <div class="layui-input-block">
      <input type="text" name="shengfenzhenghaoma" lay-verify="title" autocomplete="off" placeholder="请输入身份证号码" class="layui-input">
    </div>
  </div>
<button type="submit" class="layui-btn layui-btn-primary" id="serachbtn">查找</button>
</form>
		<br />
	<hr />
	<br />
	<br />
	<br />
	<br />
	<br />
	<h1 align="center">姓名查找学生</h1>
	<br />
	<hr />
<form class="layui-form" action="adminsearchname.php" method="post">
    <div class="layui-form-item">
    <label class="layui-form-label">姓名</label>
    <div class="layui-input-block">
      <input type="text" name="xingming" lay-verify="title" autocomplete="off" placeholder="请输入姓名" class="layui-input">
    </div>
  </div>
<button type="submit" class="layui-btn layui-btn-primary" id="serachbtn">查找</button>
</form>
	
	<h1 align="center">修改管理员密码</h1>
	<br />
	<hr />
	<br /><br /><br />
	
	<form class="layui-form" action="adminadmin.php" method="post">
    <div class="layui-form-item">
    <label class="layui-form-label">新密码</label>
    <div class="layui-input-block">
      <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入新密码" class="layui-input">
    </div>
  </div>
		 <div class="layui-form-item">
    <label class="layui-form-label">验证码</label>
    <div class="layui-input-block">
      <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入验证码" class="layui-input">
    </div>
  </div>
<!--<button type="submit" class="layui-btn layui-btn-primary" id="adminhbtn1">获取验证码</button>-->
<button type="submit" class="layui-btn layui-btn-primary" id="adminhbtn">确定修改</button>
</form>
		<br />
	<hr />
	<br />
	<br />
	<br />
	<br />
	<br />
	
	
	<h5 align="center" class="copyright">©一夕如环2020</h5>
<script src="./layui/layui.js" charset="utf-8"></script>
<script>
layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
  
  //日期
  laydate.render({
    elem: '#date'
  });
  laydate.render({
    elem: '#date1'
  });
  
  //创建一个编辑器
  var editIndex = layedit.build('LAY_demo_editor');
 
  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length < 5){
        return '标题至少得5个字符啊';
      }
    }
    ,pass: [
      /^[\S]{6,12}$/
      ,'密码必须6到12位，且不能出现空格'
    ]
    ,content: function(value){
      layedit.sync(editIndex);
    }
  });
  
  //监听指定开关
  form.on('switch(switchTest)', function(data){
    layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
      offset: '6px'
    });
    layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
  });
  
  //监听提交
  form.on('submit(demo1)', function(data){
    layer.alert(JSON.stringify(data.field), {
      title: '最终的提交信息'
    })
    return false;
  });
 
 
  
  //表单取值
  layui.$('#LAY-component-form-getval').on('click', function(){
    var data = form.val('example');
    alert(JSON.stringify(data));
  });
  
});
</script>
	
</body>
</html>