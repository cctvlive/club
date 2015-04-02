<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title;?></title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1><?php echo $title;?></h1>

	<div id="body">
	<form action="<?php echo  site_url("login/create");?>"  method="post" >
		<p><?php echo $title;?></p>
		<code>用户名：<input type="text" name="name" value=""   maxlength="12"></code>

		<p>请输入密码</p>
		<code>密码：<input type="password" name="password" value=""   maxlength="22"></code>

		<p>会员自定义id：</p>
		<code>会员id：<input type="text" name="uuid" value="" maxlength="11"></code>
		
		<p>会员手机</p>
		<code>会员手机：<input type="text" name="iphone" value=""   maxlength="11">
		<input type="button"  value="发送验证码"   >
		</code>
		
		
		<p>会员手机验证码</p>
		<code>会员手机验证码：<input type="text" name="iphone_code" value=""   maxlength="6"></code>
		
		<p>用户地址：</p>
		<code>用户地址：<input type="text" name="add" value="" maxlength="32"></code>
		
		<p>用户qq：</p>
		<code>用户qq：<input type="text" name="qq" value="" maxlength="12"></code>
		
		<p>用户邮箱：</p>
		<code>用户邮箱：<input type="email" name="email" value="" maxlength="32"></code>
		
		<p>用户生日：</p>
		<code>用户生日：<input type="text" name="birthday" value=""></code>
		
		<p>用户微信：</p>
		<code>用户微信：<input type="text" name="weixin" value="" maxlength="11"></code>
		
		<p>用户所在地：</p>
		<code>用户所在地：<input type="text" name="cty" value="" maxlength="32"></code>
		
		<p>用户性别：</p>
		<code>用户性别：<input type="text" name="sex" value="" maxlength="2"></code>
		
		<p>用户车型：</p>
		<code>用户车型：<input type="text" name="models_c" value="" maxlength="12"></code>
		
		<p>用户车辆原产地：</p>
		<code>用户车辆原产地：<input type="text" name="source" value="" maxlength="12"></code>
		
		<p>用户车辆购买时间：</p>
		<code>用户车俩购买时间：<input type="time" name="buy_time" value=""></code>
		
		<p>用户车辆首保公里数：</p>
		<code>用户车辆首保公里数：<input type="number" name="fist_insurance_k" value="" maxlength="11"></code>
		
		<p>用户目前已用公里数：</p>
		<code>用户目前已用公里数：<input type="number" name="currently_km" value="" maxlength="11"></code>
		
		<p>用户保养次数：</p>
		<code>用户保养次数：<input type="text" name="maintenance_times" value="" maxlength="5"></code>
		
		<p>用户车辆颜色：</p>
		<code>用户车辆颜色：<input type="text" name="color_c" value="" maxlength="12"></code>
		
		<p>用户车辆内饰颜色：</p>
		<code>用户车辆内饰颜色：<input type="text" name="interior_colors" value="" maxlength="12"></code>
		
		<p>用户车牌号：</p>
		<code>用户车牌号：<input type="text" name="license_plate_number" value="" maxlength="11"></code>
		
		<p>用户车险保单号：</p>
		<code>用户车险保单号：<input type="number" name="Auto_insurance_single_number" value="" maxlength="32"></code>
		
		<p>用户车险公司：</p>
		<code>用户车险公司：<input type="text" name="auto_insurance_company" value="" maxlength="32"></code>
		
		
		<p>邀请码：</p>
		<code>邀请码：<input type="number" name="invitation_code" value=""maxlength="6"></code>
		
		<p>用户账号绑定：</p>
		<code>用户账号绑定：<input type="text" name="account_binding" value="" maxlength="20"></code>
		
		<p>用户收货地址：</p>
		<code>用户收货地址：<input type="text" name="shipping_address" value="" maxlength="32"></code>
		
		<p>用户支付宝：</p>
		<code>用户支付宝：<input type="text" name="alipay" value="" maxlength="22"></code>
		
		<p>用户自定义密保问题：</p>
		<code>用户自定义密保问题：<input type="text" name="security_question" value="" maxlength="32"></code>
		
		<p>用户密保答案：</p>
		<code>用户密保答案：<input type="text" name="secret_security_answer" value="" maxlength="22"></code>
		
		
			
		
		
		
		<p><input type="submit" name="登陆">｜<input type="reset" name="刷新"></p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	</form>
</div>

</body>
</html>