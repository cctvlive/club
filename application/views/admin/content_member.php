<?php if($url=="adminadddata"){?>
		<?php if($status==true){ ?>
		<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="icon-random"></i>
												200
											</span>
											操作状态提示
										</h1>

										<hr>
										<h3 class="lighter smaller">
											恭喜您，操作成功
											<i class="icon-ok icon-animated-wrench bigger-125"></i>
											!
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>

											
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
		<?php }else{?>
			<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="icon-random"></i>
												000
											</span>
											操作状态提示：
										</h1>

										<hr>
										<h3 class="lighter smaller">
										怎么搞的，操作失败
											<i class="icon-bolt icon-animated-wrench bigger-125"></i>
											管理员已经存在，请检查！
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>

											
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
		<?php }?>
	<?php }elseif($url=="adminadd"){?>
		<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_member/admin/adminadddata'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												
												添加管理员
											</span>
											
										</h1>

										<hr>
										
											
									
														<div>
															<label for="form-field-select-1">
															<h3 class="lighter smaller ">
																<span style="width:170px; text-align:right; display:block; float:left;">管理员类型：</span>
																<span style=" padding-left:10px; float:left;">
															<select class="form-control" name="ugroup_id" id="form-field-select-1" style=" width:180px;">
																<option value="">&nbsp;</option>
																<?php foreach ($ugroup_data->result_array() as $ugroup_data ){ //print_r($club_data);?>
																<option value="<?php echo $ugroup_data['ugroupuid'];?>"><?php echo $ugroup_data['ugroupname'];?></option>
																
																<?php }?>

															</select></span>
																</label>
														</div>
														<div>
															<label for="form-field-select-2">
															<h3 class="lighter smaller ">
																<span style="width:170px; text-align:right; display:block; float:left;">归属俱乐部id：</span>
																<span style=" padding-left:10px; float:left;">
																	<select class="form-control" name="club_id" id="form-field-select-2" style=" width:180px;">
																		<option value="">&nbsp;</option>
																		<?php foreach ($club_data->result_array() as $club_data ){ //print_r($club_data);?>
																		<option value="<?php echo $club_data['club_id'];?>"><?php echo $club_data['club_name'];?></option>
																
																		<?php }?>
																
																	</select></span>
															
															
															</label>

															
														</div>
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">管理员名：</span>
											<span style=" padding-left:10px;"><input name="name" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">请输入密码：</span>
											<span style=" padding-left:10px;"><input name="passwd" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">再次输入密码：</span>
											<span style=" padding-left:10px;"><input name="password" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">管理员邮箱：</span>
											<span style=" padding-left:10px;"><input name="email" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>
										
										
							
										<div class="center">
										<button class="btn" type="submit">
												<i class="icon-arrow-left"></i>
												提交
											</button>
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
											
										</div>
									</div>
								</div>
						</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
	
	<?php }elseif($url=="ugroupadddata"){?>
		<?php if($status==true){ ?>
		<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="icon-random"></i>
												200
											</span>
											操作状态提示
										</h1>

										<hr>
										<h3 class="lighter smaller">
											恭喜您，操作成功
											<i class="icon-ok icon-animated-wrench bigger-125"></i>
											!
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>

											
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
		<?php }else{?>
			<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="icon-random"></i>
												000
											</span>
											操作状态提示：
										</h1>

										<hr>
										<h3 class="lighter smaller">
										怎么搞的，操作失败
											<i class="icon-bolt icon-animated-wrench bigger-125"></i>
											用户组已经存在，请检查！
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>

											
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
		<?php }?>
	<?php }elseif($url=="ugroupadd"){?>
		<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_member/ugroup/ugroupadddata'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												
												添加用户组
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller ">
											用户组：<input name="ugroupname" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>
										<hr>
										<h3 class="lighter smaller ">
											用户组id：<input name="ugroupuid" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>
										
										
							
										<div class="center">
										<button class="btn" type="submit">
												<i class="icon-arrow-left"></i>
												提交
											</button>
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
											
										</div>
									</div>
								</div>
						</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
	
	<?php }elseif($url=="clubadddata"){?>
		<?php if($status==true){ ?>
		<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="icon-random"></i>
												200
											</span>
											操作状态提示
										</h1>

										<hr>
										<h3 class="lighter smaller">
											恭喜您，操作成功
											<i class="icon-ok icon-animated-wrench bigger-125"></i>
											!
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>

											
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
		<?php }else{?>
			<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="icon-random"></i>
												000
											</span>
											操作状态提示：
										</h1>

										<hr>
										<h3 class="lighter smaller">
										怎么搞的，操作失败
											<i class="icon-bolt icon-animated-wrench bigger-125"></i>
											俱乐部名称已经存在，请检查！
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>

											
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
		<?php }?>
	<?php }elseif($url=="clubadd"){?>
		<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_member/club/clubadddata'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												
												添加俱乐部
											</span>
											
										</h1>

										<hr>
										
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">俱乐部名称：</span>
											<span style=" padding-left:10px;"><input name="club_name" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">俱乐部英文名：</span>
											<span style=" padding-left:10px;"><input name="english_name" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">俱乐部管理员：</span>
											<span style=" padding-left:10px;"><input name="club_manager" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>

										<!--<h3 class="lighter smaller ">
											优化描述：<input name="description" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											邀请码：<input name="invitation_code" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>-->

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">俱乐部logo：</span>
											<span style=" padding-left:10px;"><input type=file name=club_logo style="display: none;" onchange="ye.value=value">
												   <input name=ye style="color: #858585;border: 1px solid #d5d5d5;padding: 5px 4px;line-height: 1.2;font-size: 14px;font-family: inherit;"> 
												   <input type=button value="File" onclick=club_logo.click() style="border: 1px solid #d5d5d5;line-height: 1.8;font-size: 14px;font-family: inherit;"></span>
										</h3>

										<!--<h3 class="lighter smaller ">
											会员卡号：<input name="membership_number" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											短信验证开关：<input name="sms_verification" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											俱乐部模板皮肤：<input name="club_template_skin" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											CSS路径：<input name="css_path" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											俱乐部背景图片：<input name="club_background_image" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											邮箱验证开关：<input type="radio" /><input type="radio" name=""
										</h3>

										<h3 class="lighter smaller ">
											俱乐部推送信息：<input name="push_club" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											入会协议：<input name="membership_agreement" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											入会章程：<input name="enrollment_charter" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											关于俱乐部：<input name="about_club" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											俱乐部文化：<input name="club_culture" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											俱乐部荣誉：<input name="club_honours" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											俱乐部历程：<input name="club_history" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											俱乐部大事件：<input name="club_events" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											俱乐部新闻：<input name="club_news" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>

										<h3 class="lighter smaller ">
											联系俱乐部：<input name="contact_club" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
										</h3>-->
										
										<hr>
										
										
							
										<div class="center">
										<button class="btn" type="submit">
												<i class="icon-arrow-left"></i>
												提交
											</button>
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
											
										</div>
									</div>
								</div>
						</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
	
	<?php }elseif($url=="admindetails"){?>
		<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
					
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												管理员信息
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller ">
											管理员名称：<?php echo $user_list['name']; ?>
											
										</h3>
										<h3 class="lighter smaller ">
											邮箱：<?php echo $user_list['email']; ?>
										</h3>
										<h3 class="lighter smaller ">
											 所属用户组：<?php echo $user_list['ugroup_id']; ?>
										</h3>
										
										
										<hr>
										
										
										<div class="space"></div>

										<div class="center">
								
												
												<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>
											
											<a href="<?php echo site_url('home/content_member/admin/admineidt')."/".$user_list['admin_id']?>" class="btn btn-grey">
												<i class="icon-eidt bigger-110"></i>
												修改
											</a>
											
										</div>
									</div>
								</div>
						
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>

	
	<?php }elseif($url=="admineidt"){?>
	<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_member/admin/eidtdata'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												
												修改管理员信息
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller ">
											管理员名称： <?php echo $user_list['name']; ?>
											
										</h3>
										
										<h3 class="lighter smaller ">
											输入密码：<input name="passwd" data-rel="tooltip" value="<?php echo $user_list['passwd']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['passwd']; ?>" title="请输入seo标题" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											再次输入密码：<input name="password" data-rel="tooltip" value="" type="text" id="form-field-4" placeholder="" title="请输入seo标题" data-placement="bottom" />
										</h3>
										
										<h3 class="lighter smaller ">
											邮箱：<input name="email" data-rel="tooltip" value="<?php echo $user_list['email']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['email']; ?>" title="请输入seo标题" data-placement="bottom" />
									
		
										
		
										<input name="admin_id"  type="hidden"  data-placement="bottom" value="<?php echo $user_list['admin_id']; ?>" />
										<input name="ugroup_id"  type="hidden"  data-placement="bottom" value="<?php echo $user_list['ugroup_id']; ?>" />
										<hr>
										
										
							
										<div class="center">
										<button class="btn" type="submit">
												<i class="icon-arrow-left"></i>
												提交
											</button>
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
											
										</div>
									</div>
								</div>
						</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
	
	
	
	<?php }elseif($url=="clubdetails"){//echo "俱乐部详情"; ?>
	
	<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
					<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_member/member/eidtdata'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												俱乐部信息
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller ">
											俱乐部名：<?php echo $user_list['club_name']; ?>
											
										</h3>
										
									<input type="hidden" name="club_id" value="<?php echo $user_list['club_id']; ?>" />
										
										
										<div class="space"></div>

										<div class="center">
								
												
												<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>
											
											<a href="<?php echo site_url('home/content_member/member/clubeidt')."/".$user_list['club_id']?>" class="btn btn-grey">
												<i class="icon-eidt bigger-110"></i>
												修改
											</a>
											
										</div>
									</div>
								</div>
						</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>

	
	<?php }elseif($url=="details"){//echo "会员详情"; //个人会员详情?>
	
	<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
					
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												个人会员信息
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller ">
											会员名：<?php echo $user_list['name']; ?>
											
										</h3>
										<h3 class="lighter smaller ">
											邮箱：<?php echo $user_list['email']; ?>
										</h3>
										<h3 class="lighter smaller ">
											 所属用户组：<?php echo $user_list['ugroup']; ?>
										</h3>
										<h3 class="lighter smaller ">
											邮箱：<?php echo $user_list['email']; ?>
										</h3>
										<h3 class="lighter smaller ">
											手机：<?php echo $user_list['iphone']; ?>
										</h3>
										<h3 class="lighter smaller ">
											地址：<?php echo $user_list['uadd']; ?>
										</h3>
										<h3 class="lighter smaller ">
											微信：<?php echo $user_list['weixin']; ?>
										</h3>
										<h3 class="lighter smaller ">
											城市：<?php echo $user_list['cty']; ?>
										</h3>
										<h3 class="lighter smaller ">
											性别：<?php echo $user_list['sex']; ?>
										</h3>
										<h3 class="lighter smaller ">
											车型：<?php echo $user_list['models_c']; ?>
										</h3>
										<h3 class="lighter smaller ">
											原产地：<?php echo $user_list['source']; ?>
										</h3>
										<h3 class="lighter smaller ">
											首保公里数：<?php echo $user_list['First_insurance_k']; ?>
										</h3>
										<h3 class="lighter smaller ">
											目前公里数：<?php echo $user_list['Currently_km']; ?>
										</h3>
										<h3 class="lighter smaller ">
											保养次数：<?php echo $user_list['Maintenance_times']; ?>
										</h3>
										
										<h3 class="lighter smaller ">
											用户车辆颜色：<?php echo $user_list['Color_c']; ?>
										</h3>
										<h3 class="lighter smaller ">
											用户车辆内饰颜色：<?php echo $user_list['Interior_colors']; ?>
										</h3>
										<h3 class="lighter smaller ">
											用户车牌号：<?php echo $user_list['License_plate_number']; ?>
										</h3>
										<h3 class="lighter smaller ">
											用户车险保单号：<?php echo $user_list['Auto_insurance_single_number']; ?>
										</h3>
										<h3 class="lighter smaller ">
											用户车险公司：<?php echo $user_list['Auto_insurance_company']; ?>
										</h3>
										<h3 class="lighter smaller ">
											邀请码：<?php echo $user_list['Invitation_code']; ?>
										</h3>
										<h3 class="lighter smaller ">
											用户账号绑定：<?php echo $user_list['Account_binding']; ?>
										</h3>
										<h3 class="lighter smaller ">
											用户支付宝：<?php echo $user_list['Alipay']; ?>
										</h3>
										<h3 class="lighter smaller ">
											用户自定义密保问题：<?php echo $user_list['Security_question']; ?>
										</h3>
										<h3 class="lighter smaller ">
											用户密保答案：<?php echo $user_list['Secret_security_answer']; ?>
										</h3>
										
										<hr>
										
										
										<div class="space"></div>

										<div class="center">
								
												
												<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>
											
											<a href="<?php echo site_url('home/content_member/member/eidt')."/".$user_list['uid']?>" class="btn btn-grey">
												<i class="icon-eidt bigger-110"></i>
												修改
											</a>
											
										</div>
									</div>
								</div>
						
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>

	
	<?php }elseif($url=="eidtdata"){?>
		
		<?php if($status==true){ ?>
		<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="icon-random"></i>
												200
											</span>
											操作状态提示
										</h1>

										<hr>
										<h3 class="lighter smaller">
											恭喜您，操作成功
											<i class="icon-ok icon-animated-wrench bigger-125"></i>
											!
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>

											
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
		<?php }else{?>
			<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="icon-random"></i>
												000
											</span>
											操作状态提示：
										</h1>

										<hr>
										<h3 class="lighter smaller">
										怎么搞的，操作失败
											<i class="icon-bolt icon-animated-wrench bigger-125"></i>
											可能是两次密码不一致，请检查！
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>

											
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
		<?php }?>
	<?php }elseif($url=="eidt"){//echo "修改会员详情"; //个人会员详情?>
	
	<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_member/member/eidtdata'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												
												会员信息修改
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller ">
											会员名：<input name="name" data-rel="tooltip" value="<?php echo $user_list['name']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['name']; ?>" title="请输入版权设置" data-placement="bottom" />
											
										</h3>
										<h3 class="lighter smaller ">
											邮箱：<input name="qq" data-rel="tooltip" value="<?php echo $user_list['qq']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['qq']; ?>" title="请输入seo标题" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											用户生日：<input name="birthday" data-rel="tooltip" value="<?php echo $user_list['birthday']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['birthday']; ?>" title="请输入seo标题" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											 所属用户组：<input name="ugroup" data-rel="tooltip" value="<?php echo $user_list['ugroup']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['ugroup']; ?>" title="请输入seo标题" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											邮箱：<input name="email" data-rel="tooltip" value="<?php echo $user_list['email']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['email']; ?>" title="请输入seo标题" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											手机：<input name="iphone" data-rel="tooltip" value="<?php echo $user_list['iphone']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['iphone']; ?>" title="请输入seo关键词" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											地址：<input name="uadd" data-rel="tooltip" value="<?php echo $user_list['uadd']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['uadd']; ?>" title="请输入描述" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											微信：<input name="weixin" data-rel="tooltip" value="<?php echo $user_list['weixin']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['weixin']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											城市：<input name="cty" data-rel="tooltip" value="<?php echo $user_list['cty']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['cty']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											性别：<input name="sex" data-rel="tooltip" value="<?php echo $user_list['sex']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['sex']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											车型：<input name="models_c" data-rel="tooltip" value="<?php echo $user_list['models_c']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['models_c']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											原产地：<input name="source" data-rel="tooltip" value="<?php echo $user_list['source']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['source']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											首保公里数：<input name="First_insurance_k" data-rel="tooltip" value="<?php echo $user_list['First_insurance_k']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['First_insurance_k']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											目前公里数：<input name="Currently_km" data-rel="tooltip" value="<?php echo $user_list['Currently_km']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['Currently_km']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											保养次数：<input name="Maintenance_times" data-rel="tooltip" value="<?php echo $user_list['Maintenance_times']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['Maintenance_times']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											收货地址：<input name="Shipping_address" data-rel="tooltip" value="<?php echo $user_list['Shipping_address']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['Shipping_address']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										
										<h3 class="lighter smaller ">
											用户车辆颜色：<input name="Color_c" data-rel="tooltip" value="<?php echo $user_list['Color_c']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['Color_c']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											用户车辆内饰颜色：<input name="Interior_colors" data-rel="tooltip" value="<?php echo $user_list['Interior_colors']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['Interior_colors']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											用户车牌号：<input name="License_plate_number" data-rel="tooltip" value="<?php echo $user_list['License_plate_number']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['License_plate_number']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											用户车险保单号：<input name="Auto_insurance_single_number" data-rel="tooltip" value="<?php echo $user_list['Auto_insurance_single_number']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['Auto_insurance_single_number']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											用户车险公司：<input name="Auto_insurance_company" data-rel="tooltip" value="<?php echo $user_list['Auto_insurance_company']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['Auto_insurance_company']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											邀请码：<input name="Invitation_code" data-rel="tooltip" value="<?php echo $user_list['Invitation_code']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['Invitation_code']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											用户账号绑定：<input name="Account_binding" data-rel="tooltip" value="<?php echo $user_list['Account_binding']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['Account_binding']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											用户支付宝：<input name="Alipay" data-rel="tooltip" value="<?php echo $user_list['Alipay']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['Alipay']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											用户自定义密保问题：<input name="Security_question" data-rel="tooltip" value="<?php echo $user_list['Security_question']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['Security_question']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											用户密保答案：<input name="Secret_security_answer" data-rel="tooltip" value="<?php echo $user_list['Secret_security_answer']; ?>" type="text" id="form-field-4" placeholder="<?php echo $user_list['Secret_security_answer']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										
		
										<input name="uid"  type="hidden"  data-placement="bottom" value="<?php echo $user_list['uid']; ?>" />
										<input name="ugroup_id"  type="hidden"  data-placement="bottom" value="<?php echo $user_list['ugroup_id']; ?>" />
										<input name="club_id"  type="hidden"  data-placement="bottom" value="<?php echo $user_list['club_id']; ?>" />
										<hr>
										
										
							
										<div class="center">
										<button class="btn" type="submit">
												<i class="icon-arrow-left"></i>
												提交
											</button>
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
											
										</div>
									</div>
								</div>
						</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
	
	<?php }elseif($url=='del'){?>
		<?php if($status==TRUE){?>
		<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="icon-random"></i>
												200
											</span>
											操作状态提示
										</h1>

										<hr>
										<h3 class="lighter smaller">
											恭喜您，操作成功
											<i class="icon-ok icon-animated-wrench bigger-125"></i>
											!
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>

											
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
<?php }else{?>
		<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												<i class="icon-random"></i>
												000
											</span>
											操作状态提示
										</h1>

										<hr>
										<h3 class="lighter smaller">
										怎么搞的，操作失败
											<i class="icon-bolt icon-animated-wrench bigger-125"></i>
											!快去请救兵吧！
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_member/list/')."/$url_3"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>

											
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
<?php }?>
	<?php }elseif($url=='member'){//列表
	
		?>
		
		<div class="page-content">
						<div class="page-header">
							<h1>
								会员<small><i class="icon-double-angle-right"></i>列表</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

							
								
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														<th class="center">会员名称</th>
														<th class="hidden-480">所在组</th>
														<th class="hidden-480">所在俱乐部</th>
														<th class="hidden-480">操作</th>

													
													</tr>
												</thead>

												<tbody>
													<tr>
															<?php foreach ($user_list->result_array() as $user_list){ ?>
														<td>
															<a  href="<?php echo site_url('home/content_member')."/member/details/".$user_list['uid'];?>"><?php echo $user_list['name'];?></a>
														</td>
														<td>
															<?php echo $user_list['ugroup'];?>
														</td>
														<td>
															<?php echo $user_list['club_name'];?>
														</td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-warning">
																	<i class="icon-eye-open bigger-120"></i><a  style='text-decoration:none;color:#FFFFFF'href="<?php echo site_url('home/content_member')."/member/details/".$user_list['uid'];?>">查看</a>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i><a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_member')."/member/del/".$user_list['uid'];?>">删除</a>
																</button>
																
															</div>

														</td>
													</tr>
<?php }?>

												</tbody>
											</table>
										</div><!-- /.table-responsive -->
										
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							</div>
	
	<?php }elseif($url=='admin'){?>
		
		
		<div class="page-content">
						<div class="page-header">
							<h1>
								管理员
								<small>
									<i class="icon-double-angle-right"></i>
									列表
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

							
								
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														<th class="center">管理员名称</th>

														<th class="hidden-480">所在组</th>
														<th class="hidden-480">所在俱乐部</th>
														<th class="hidden-480">操作</th>

													
													</tr>
												</thead>

												<tbody>
													<tr>
															<?php foreach ($user_list->result_array() as $user_list){ ?>
														<td>
															<a style='text-decoration:none;' href="<?php echo site_url('home/content_member')."/admin/admindetails/".$user_list['admin_id'];?>"><?php echo $user_list['name'];?></a>
														</td>
														<td>
															<?php echo $user_list['ugroupname'];?>
														</td>
														<td>
															<?php echo $user_list['club_name'];?>
														</td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-warning">
																	<i class="icon-eye-open bigger-120"></i><a  style='text-decoration:none;color:#FFFFFF'href="<?php echo site_url('home/content_member')."/admin/admindetails/".$user_list['admin_id'];?>">查看</a>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i><a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_member')."/admin/del/".$user_list['admin_id'];?>">删除</a>
																</button>
																
															</div>

														</td>
													</tr>
<?php }?>

												</tbody>
											</table>
										</div><!-- /.table-responsive -->
										
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							</div>
	
	<?php }elseif($url=='club'){?>
			
		<div class="page-content">
						<div class="page-header">
							<h1>
								俱乐部
								<small>
									<i class="icon-double-angle-right"></i>
									列表
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

							
								
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														<th class="center">俱乐部名称</th>

														<!--  <th class="hidden-480">所在组</th>-->
														
														<th class="hidden-480">操作</th>

													
													</tr>
												</thead>

												<tbody>
													<tr>
															<?php foreach ($user_list->result_array() as $user_list){ ?>
														<td>
															<a style='text-decoration:none;' href="<?php echo site_url('home/content_member')."/club/clubdetails/".$user_list['club_id'];?>"><?php echo $user_list['club_name'];?></a>
														</td>
														
														
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-warning">
																	<i class="icon-eye-open bigger-120"></i><a  style='text-decoration:none;color:#FFFFFF'href="<?php echo site_url('home/content_member')."/club/clubdetails/".$user_list['club_id'];?>">查看</a>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i><a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_member')."/club/del/".$user_list['club_id'];?>">删除</a>
																</button>
																
															</div>

														</td>
													</tr>
<?php }?>

												</tbody>
											</table>
										</div><!-- /.table-responsive -->
										
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							</div>
	
	<?php }elseif($url=='ugroupeidt'){?>
		<?php echo "权限区";?>
	<?php }elseif($url=='ugroup'){?>
			<div class="page-content">
						<div class="page-header">
							<h1>
								 用户组
								<small>
									<i class="icon-double-angle-right"></i>
									列表
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

							
								
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														<th class="center">用户组名称</th>

														<!-- <th class="hidden-480">用户组权限</th> -->
														
														<th class="hidden-480">操作</th>

													
													</tr>
												</thead>

												<tbody>
													<tr>
															<?php foreach ($user_list->result_array() as $user_list){ ?>
														<td>
															<a style='text-decoration:none;' href="<?php echo site_url('home/content_member')."/ugroup/ugroupeidt/".$user_list['gid'];?>"><?php echo $user_list['ugroupname'];?></a>
														</td>
														
														
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-warning">
																	<i class="icon-eye-open bigger-120"></i><a  style='text-decoration:none;color:#FFFFFF'href="<?php echo site_url('home/content_member')."/ugroup/ugroupeidt/".$user_list['gid'];?>">查看</a>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i><a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_member')."/ugroup/del/".$user_list['gid'];?>">删除</a>
																</button>
																
															</div>

														</td>
													</tr>
<?php }?>

												</tbody>
											</table>
										</div><!-- /.table-responsive -->
										
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							</div>
	
	<?php }?>
	
	