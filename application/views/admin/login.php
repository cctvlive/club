
	<style type="text/css">
	.tip{width: 120px; color:#478fca; line-height: 36px; font-weight: bold;height: 36px; bloc}
	label span select{width: 110px;}
	.input-car{height: 34px; border: 1px solid #d5d5d5; padding-left: 6px; width: 160px;}
	#signup-box2{width:630px;}
	.form-control{min-width:150px;}
	＃signup-box2{left:－110％;}
	</style>
	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-leaf green"></i>
									<span class="red"><?php echo $admin_1;?></span>
									<span class="white"><?php echo $admin_2;?></span>
								</h1>
								<h4 class="blue">&copy; <?php echo $admin_3;?></h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												<?php echo $user_please;?>
											</h4>

											<div class="space-6"></div>

											<form action="<?php echo  site_url("admin/check_login");?>" method="post" >
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="name" placeholder="<?php echo $input_name?>" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="<?php echo $input_password?>" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"><?php echo $input_password?></span>
														</label>

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="icon-key"></i>
															<?php echo $login;?>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<!--  --><div class="social-or-login center">
												<span class="bigger-110"><?php echo $login_using;?></span>
											</div>

											<!--<div class="social-login center">
												<a class="btn btn-primary">
													<i class="icon-facebook"></i>
												</a>

												<a class="btn btn-info">
													<i class="icon-twitter"></i>
												</a>

												<a class="btn btn-danger">
													<i class="icon-google-plus"></i>
												</a>
											</div>  -->
										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
													<i class="icon-arrow-left"></i>
													<?php echo $forgot_my_password;?>
												</a>
											</div>

											<div>
												<a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
													<?php echo $submit;?>
													<i class="icon-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="icon-key"></i>
												<?php echo $refresh_password;?>
											</h4>

											<div class="space-6"></div>
											<p>
												<?php echo $user_email;?>
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="icon-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="icon-lightbulb"></i>
															<?php echo $send_me;?>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /widget-main -->

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												<?php echo $to_login;?>
												<i class="icon-arrow-right"></i>
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="icon-group blue"></i>
												<?php echo $user_new;?>
											</h4>

											<div class="space-6"></div>
											<p> <?php echo $your_data;?></p>

											<form action="<?php echo  site_url("admin/create");?>"  method="post" >
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" name="email" placeholder="Email" />
															<i class="icon-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="name" placeholder="<?php echo $input_name;?>" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="<?php echo $input_password;?>" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password1" placeholder="<?php echo $input_password2;?>" />
															<i class="icon-retweet"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="QQ" class="form-control" name="QQ" placeholder="<?php echo $QQ;?>" />
															<i class="icon-comment"></i>
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="birthday" class="form-control" name="birthday" placeholder="<?php echo $birthday;?>" />
															<i class="icon-gift"></i>
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="wechat" class="form-control" name="wechat" placeholder="<?php echo $wechat;?>" />
															<i class="icon-comments"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="province" class="form-control" name="province" placeholder="<?php echo $province;?>" />
															<i class="icon-globe"></i>
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="sex" class="form-control" name="sex"  placeholder="<?php echo $sex;?>" />
															<i class="icon-user"></i>
														</span>
													</label>
													<!-- <label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															<?php //echo $i_accept;?>
															<a href="#"><?php //echo $user_agreement;?></a>
														</span>
													</label> -->

													<div class="space-24"></div>

													
													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="icon-refresh"></i>
															<?php echo $refresh;?>
														</button>

														<div>
															<a href="#" onClick="show_box('signup-box2'); return false;" class="user-signup-link">
																<button type="button" class="width-65 pull-right btn btn-sm btn-success">
																<?php echo $next;?>
																<i class="icon-arrow-right"></i>
																</button>
															</a>
														</div>
													</div>
													
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												<i class="icon-arrow-left"></i>
												<?php echo $to_login;?>
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /signup-box -->
								
							<div id="signup-box2" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="icon-group blue"></i>
												 继续完善注册信息
											</h4>

											<div class="space-6"></div>
											<p> 请完善具体信息 </p>

											<form>
												<fieldset>
													
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<span class="tip">车型选择:</span>
															<select>
																<option>请选择车型</option>
															</select>

															<select>
																<option>请选择车系</option>
															</select>

															<select>
																<option>请选择排量</option>
															</select>

															<select>
																<option>请选择年份</option>
															</select>
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<span class="tip">购车时间:</span>
															<input type="date" class="input-car" name="data"  placeholder="购车时间" />

														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<span class="tip">首保公里数:</span>
															<input type="sex" class="input-car" name="sex"  placeholder="首保公里数" />
															<span style="float:right;">
															<span class="tip">目前公里数:</span>
															<input type="sex" class="input-car" name="sex"  placeholder="目前公里数" />
															</span>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<span class="tip">保 单 号:</span>
															<input type="sex" class="input-car" name="sex"  placeholder="保单号" />
															<span style="float:right;">
															<span class="tip">投保公司:</span>
															<input type="sex" class="input-car" name="sex"  placeholder="投保公司" />
															</span>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<span class="tip">车身颜色:</span>
															<input type="sex" class="input-car" name="sex"  placeholder="车身颜色" />
															<span style="float:right;">
															<span class="tip">内饰颜色:</span>
															<input type="sex" class="input-car" name="sex"  placeholder="内饰颜色" />
															</span>
														</span>
													</label>


													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<span class="tip">保养次数:</span>
															<input type="sex" class="input-car" name="sex"  placeholder="保养次数" />
															<span style="float:right;">
															<span class="tip">邀请码:</span>
															<input type="sex" class="input-car" name="sex"  placeholder="邀请码" />
															</span>
														</span>
													</label>

												

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="icon-refresh"></i>
															重置
														</button>
															<a href="#" onClick="show_box('signup-box3'); return false;" class="user-signup-link">
																<button type="button" class="width-65 pull-right btn btn-sm btn-success">
																继续
																<i class="icon-arrow-right"></i>
																</button>
															</a>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" onClick="show_box('signup-box'); return false;" class="back-to-login-link">
												<i class="icon-arrow-left"></i>
												返回上一步
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /signup-box -->

								<div id="signup-box3" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="icon-group blue"></i>
												 请耐心的继续完善注册信息
											</h4>

											<div class="space-6"></div>
											<p> 请输入验证信息 </p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<span class="tip">真实姓名：</span>
															<input type="text" class="input-car" placeholder="真实姓名" />
															
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<span class="tip">手机:</span>
															<input type="sex" class="input-car" name="sex"  placeholder="手机" />
															<a class="but" value="">获取验证码</a>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<span class="tip">输入验证码:</span>
															<input type="sex" class="input-car" name="sex"  placeholder="验证码" />
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															我接受
															<a href="#">用户协议</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="icon-refresh"></i>
															重置
														</button>

														<button type="button" class="width-65 pull-right btn btn-sm btn-success">
															注册
															<i class="icon-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" onClick="show_box('signup-box2'); return false;" class="back-to-login-link">
												<i class="icon-arrow-left"></i>
												返回上一步
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /signup-box -->
								
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->


