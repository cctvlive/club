

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<?php if ($class=='index'){ echo '<li class="active" ><a href="?/index/index">';}else{echo '<li><a href="?/index/index">';}?>
							
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>

						<?php if ($class=='seting'){ echo '<li class="active" ><a href="?/index/seting">';}else{echo '<li><a href="?/index/seting">';}?>
							
						
								<i class=" icon-cogs"></i>
								<span class="menu-text"> 系统设置 </span>
								
							</a>
						</li>

						<?php if (@$list_dload=='content'){ echo '<li class="active" ><a href="＃" class="dropdown-toggle">';}else{echo '<li><a href="＃" class="dropdown-toggle">';}?>
							

								<i class="icon-desktop"></i>
								<span class="menu-text">内容管理 </span>

								<b class="arrow icon-angle-down"></b>
								
							</a>

							<ul class="submenu">
							
						<?php if ($class=='content_member'){ echo '<li class="active" ><a  class="dropdown-toggle">';}else{echo '<li><a  class="dropdown-toggle">';}?>
							
										<i class="icon-double-angle-right dropdown-toggle"></i>
										用户管理<b class="arrow icon-angle-down"></b></a>
										<ul class="submenu">
												<?php if ($class=='content_member'){ echo '<li class="active" ><a  style="text-decoration:none;" class="dropdown-toggle">';}else{echo '<li><a  class="dropdown-toggle">';}?>
						
													
														<i class="icon-double-angle-right "></i>
														会员管理
													<b class="arrow icon-angle-down"></b>
													</a>
													<ul class="submenu">
												

												<li>
													<a style='text-decoration:none;'  href="?/index/content_member/list/member">
														会员列表
													</a>				
												</li>

												<li>
													<a style='text-decoration:none;'  href="?/index/content_member/list/admin">
														管理员列表
													</a>
												</li>
												<li>
													<a style='text-decoration:none;' href="?/index/content_member/admin/adminadd">
														
														添加管理员
													</a>
													
												</li>
											</ul>
												
													
												</li>
												<li><a style='text-decoration:none;'  class="dropdown-toggle">
														<i class="icon-double-angle-right dropdown-toggle"></i>
														俱乐部管理	<b class="arrow icon-angle-down"></b>
													</a>
													<ul class="submenu">
												<li>
													<a style='text-decoration:none;' href="?/index/content_member/club/clubadd">
														添加俱乐部
													</a>	
												</li>
												
												<li>
													<a style='text-decoration:none;'  href="?/index/content_member/list/club">
														俱乐部列表
													</a>
												</li>

											</ul>
													
													
												</li>
												
												<li><a  style='text-decoration:none;' class="dropdown-toggle">
														<i class="icon-double-angle-right dropdown-toggle"></i>
														用户组管理	<b class="arrow icon-angle-down"></b>
													</a>
													<ul class="submenu">
												<li>
													<a style='text-decoration:none;' href="?/index/content_member/ugroup/ugroupadd">
														添加用户组
													</a>
												</li>

												<li>
													<a style='text-decoration:none;'  href="?/index/content_member/list/ugroup">	
														用户组列表
													</a>
												</li>
												
											</ul>
												
													
												</li>
		
												</li>
												
											</ul>
										
								</li>
								
								

							
						<?php if ($class=='content_dongs'){ echo '<li class="active" ><a  class="dropdown-toggle">';}else{echo '<li><a  class="dropdown-toggle">';}?>
										<i class="icon-double-angle-right"></i>
										活动管理
										<b class="arrow icon-angle-down"></b>
										<ul class="submenu">
										<li>
											<a style='text-decoration:none;' href="?/index/content_dongs/add">
												<i class="icon-plus"></i>
												添加活动
											</a>
										</li>
										<li>
											<a style='text-decoration:none;' href="?/index/content_dongs/list">
												<i class="icon-list"></i>
												活动列表
											</a>
										</li>
										
										</ul>
									</a>
								</li>

							
						<?php if ($class=='content_leave'){ echo '<li class="active" ><a  class="dropdown-toggle">';}else{echo '<li><a  class="dropdown-toggle">';}?>
				
										<i class="icon-double-angle-right"></i>
										留言管理
										<b class="arrow icon-angle-down"></b>
										<ul class="submenu">
									
										<li>
											<a style='text-decoration:none;' href="?/index/content_leave/list">
												<i class="icon-list"></i>
												留言列表
											</a>
										</li>
										<li>
											<a style='text-decoration:none;' href="?/index/content_leave/details">
												<i class="icon-eye-open"></i>
												留言详情
											</a>
										</li>
										
										</ul>
									</a>
								</li>

						<?php if ($class=='content_column'){ echo '<li class="active" ><a  class="dropdown-toggle">';}else{echo '<li><a  class="dropdown-toggle">';}?>
				
									
										<i class="icon-double-angle-right"></i>
										友情链接
										<b class="arrow icon-angle-down"></b>
										<ul class="submenu">
										<li>
											<a style='text-decoration:none;' href="?/index/content_column/add">
												<i class="icon-plus"></i>
												添加友情链接
											</a>
										</li>
										<li>
											<a style='text-decoration:none;' href="?/index/content_column/list">
												<i class="icon-list"></i>
												友情链接列表
											</a>
										</li>
										
										</ul>
									</a>
								</li>

									<?php if ($class=='content_ad'){ echo '<li class="active" ><a  class="dropdown-toggle">';}else{echo '<li><a  class="dropdown-toggle">';}?>
				
									
										<i class="icon-double-angle-right"></i>
										广告管理
										<b class="arrow icon-angle-down"></b>
										<ul class="submenu">
										<li>
											<a style='text-decoration:none;' href="?/index/content_ad/add">
												<i class="icon-plus"></i>
												添加广告
											</a>
										</li>
										<li>
											<a style='text-decoration:none;' href="?/index/content_ad/list">
												<i class="icon-list"></i>
												广告列表
											</a>
										</li>
										
										</ul>
									</a>
								</li>
								
						<?php if ($class=='content_order'){ echo '<li class="active" ><a  class="dropdown-toggle">';}else{echo '<li><a  class="dropdown-toggle">';}?>
				
										<i class="icon-double-angle-right"></i>
										订单管理
										<b class="arrow icon-angle-down"></b>
										<ul class="submenu">
										<li>
											<a style='text-decoration:none;' href="?/index/content_order/add">
												<i class="icon-plus"></i>
												添加订单
											</a>
										</li>
										<li>
											<a style='text-decoration:none;' href="?/index/content_order/list">
												<i class="icon-list"></i>
												订单列表
											</a>
										</li>
										<li>
											<a href="?/index/content_order/details">
												<i class="icon-eye-open"></i>
												订单详情
											</a>
										</li>
										
										<li>
											<a style='text-decoration:none;' href="?/index/content_order/edit">
												<i class="icon-pencil"></i>
												修改订单
											</a>
										</li>
										</ul>
									</a>
								</li>
						
						<?php if ($class=='content_mulu'){ echo '<li class="active" ><a  class="dropdown-toggle">';}else{echo '<li><a  class="dropdown-toggle">';}?>
				
										<i class="icon-double-angle-right"></i>

										目录管理
										
									</a>

									<ul class="submenu">
										<li>
											<a style='text-decoration:none;' href="?/index/content_mulu#">
												<i class="icon-leaf"></i>
												第一级
											</a>
										</li>

										<li>
											<a style='text-decoration:none;' href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												第四级
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
<!-- 
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 表格 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="tables.html">
										<i class="icon-double-angle-right"></i>
										简单 &amp; 动态
									</a>
								</li>

								<li>
									<a href="jqgrid.html">
										<i class="icon-double-angle-right"></i>
										jqGrid plugin
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 表单 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="form-elements.html">
										<i class="icon-double-angle-right"></i>
										表单组件
									</a>
								</li>

								<li>
									<a href="form-wizard.html">
										<i class="icon-double-angle-right"></i>
										向导提示 &amp; 验证
									</a>
								</li>

								<li>
									<a href="wysiwyg.html">
										<i class="icon-double-angle-right"></i>
										编辑器
									</a>
								</li>

								<li>
									<a href="dropzone.html">
										<i class="icon-double-angle-right"></i>
										文件上传
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="widgets.html">
								<i class="icon-list-alt"></i>
								<span class="menu-text"> 插件 </span>
							</a>
						</li>

						<li>
							<a href="calendar.html">
								<i class="icon-calendar"></i>

								<span class="menu-text">
									日历
									<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
										<i class="icon-warning-sign red bigger-130"></i>
									</span>
								</span>
							</a>
						</li>

						<li>
							<a href="gallery.html">
								<i class="icon-picture"></i>
								<span class="menu-text"> 相册 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-tag"></i>
								<span class="menu-text"> 更多页面 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="profile.html">
										<i class="icon-double-angle-right"></i>
										用户信息
									</a>
								</li>

								<li>
									<a href="inbox.html">
										<i class="icon-double-angle-right"></i>
										收件箱
									</a>
								</li>

								<li>
									<a href="pricing.html">
										<i class="icon-double-angle-right"></i>
										售价单
									</a>
								</li>

								<li>
									<a href="invoice.html">
										<i class="icon-double-angle-right"></i>
										购物车
									</a>
								</li>

								<li>
									<a href="timeline.html">
										<i class="icon-double-angle-right"></i>
										时间轴
									</a>
								</li>

								<li>
									<a href="login.html">
										<i class="icon-double-angle-right"></i>
										登录 &amp; 注册
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-file-alt"></i>

								<span class="menu-text">
									其他页面
									<span class="badge badge-primary ">5</span>
								</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="faq.html">
										<i class="icon-double-angle-right"></i>
										帮助
									</a>
								</li>

								<li>
									<a href="error-404.html">
										<i class="icon-double-angle-right"></i>
										404错误页面
									</a>
								</li>

								<li>
									<a href="error-500.html">
										<i class="icon-double-angle-right"></i>
										500错误页面
									</a>
								</li>

								<li>
									<a href="grid.html">
										<i class="icon-double-angle-right"></i>
										网格
									</a>
								</li>

								<li>
									<a href="blank.html">
										<i class="icon-double-angle-right"></i>
										空白页面
									</a>
								</li>-->
							</ul>
						</li>
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>