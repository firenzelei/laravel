<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/admins/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/admins/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/admins/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/admins/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/admins/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>{{$title}}</title>

</head>
<body>
<article class="page-container">
	<form action="/admin/user" method="post" class="form form-horizontal" id="form-member-add" enctype="multipart/form-data">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="adminName" name="uname">
			</div>
		</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>初始密码:</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="password" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="upwd">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码:</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="password" class="input-text" autocomplete="off"  placeholder="确认新密码" id="password2" name="upwd2">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别:</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="radio-box">
				<input name="sex" type="radio" id="sex-1" checked value="m">
				<label for="sex-1">男</label>
			</div>
			<div class="radio-box">
				<input type="radio" id="sex-2" name="sex" value="w">
				<label for="sex-2">女</label>
			</div>
		</div>
	</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="" id="phone" name="phone">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="@" name="email" id="email">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">头像:</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">

				<input type="file" name="profile" class="">
				</span> </div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>状态:</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="status" type="radio" id="sex-1" checked value="0">
					<label for="sex-1">启用</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="status" value="1">
					<label for="sex-2">禁用</label>
				</div>
			</div>
		</div>

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				{{ csrf_field() }}
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/admins/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/admins/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/admins/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/admins/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript" src="/admins/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/admins/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/admins/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/admins/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-member-add").validate({
		rules:{
			adminName:{
				required:true,
				minlength:4,
				maxlength:16
			},
			password:{
				required:true,
			},
			password2:{
				required:true,
				equalTo: "#password"
			},
			sex:{
				required:true,
			},

			adminRole:{
				required:true,
			},
			
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		// submitHandler:function(form){
		// 	//$(form).ajaxSubmit();
		// 	var index = parent.layer.getFrameIndex(window.name);
		// 	//parent.$('.btn-refresh').click();
		// 	parent.layer.close(index);
		// }
	});
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>