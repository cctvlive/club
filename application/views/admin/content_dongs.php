<?php if($url=='add'){?>
				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">  系统设置</a>
							</li>
							<li class="active">基础设置</li>
						</ul><!-- .breadcrumb -->
						
						
					<div class="page-content">
						<div class="page-header">
							<h1>
								基础设置
								<small>
									<i class="icon-double-angle-right"></i>
									设置详情
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						
						
									
										
							<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_dongs/dongs_data'); ?>" role="form">

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">活动名称</label>

										<div class="col-sm-9">
											<input name="dongs_name" data-rel="tooltip" type="text" id="form-field-1" placeholder="" title="请输入网站全称" data-placement="bottom" />
											
										</div>
									</div>
									
										
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-input-file-2">活动图片</label>
												<div class="col-sm-3">
										 <input name="dongs_img" type="file" id="id-input-file-2"  /> 
												</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3">seo标题</label>

										<div class="col-sm-9">
											<input name="dongs_seotitle" data-rel="tooltip" type="text" id="form-field-3" placeholder="" title="请输入网站关键字" data-placement="bottom" />
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">seo关键词</label>

										<div class="col-sm-9">
											<input name="dongs_seokey" data-rel="tooltip" type="text" id="form-field-4" placeholder="" title="请输入版权设置" data-placement="bottom" />
										
										</div>
									</div>
																
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">seo描述</label>

										<div class="col-sm-9">
											<input name="dongs_miaoshu" data-rel="tooltip" type="text" id="form-field-5" placeholder="" title="请输入全站推送内容" data-placement="bottom" />
											
										</div>
									</div>
									


									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-7">活动详情</label>

										<div class="col-sm-9">
											<input name="dongs_content" data-rel="tooltip" type="text" id="form-field-7" placeholder="" title="请输入活动详情" data-placement="bottom" />
											
										</div>
									</div>

								
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												提交
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>
									
									</form>
								</div>
						 </div>
						 </div>
						 </div>
						 </div>

<?php }elseif($url=='status'){?>
	
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
											恭喜您，审核操作成功
											<i class="icon-ok icon-animated-wrench bigger-125"></i>
											!
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_dongs')."/list/"?>" class="btn btn-grey">
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
										怎么搞的，审核操作失败
											<i class="icon-bolt icon-animated-wrench bigger-125"></i>
											!快去请救兵吧！
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_dongs')."/list/"?>" class="btn btn-grey">
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
<?php } }elseif($url=='dongs_data'){?>
	
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
											恭喜您，添加成功
											<i class="icon-ok icon-animated-wrench bigger-125"></i>
											!
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_dongs')."/list/"?>" class="btn btn-grey">
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
										怎么搞的，添加失败, 请检查活动名称是否存在
											<i class="icon-bolt icon-animated-wrench bigger-125"></i>
											!快去请救兵吧！
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_dongs')."/add/"?>" class="btn btn-grey">
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
<?php } }elseif($url=='list'){?>
<div class="main-content">
	<div class="page-content">
	
	<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">活动列表</h3>
									
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>活动名称</th>
														<th>seo标题</th>
														<th>seo关键词</th>
														
														<th>状态</th>

														<th>
															<i class=" bigger-110 hidden-480"></i>
															操盘
														</th>
														
														<th class="hidden-480">操作</th>

														
													</tr>
												</thead>

												<tbody>
												<?php foreach ($dongs_list->result_array() as $dongs_list){ ?>
													<tr>
														<td class="center">
															<!-- <label>
																<input  type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label> -->
														</td>

														<td>
															<a style='text-decoration:none;' href="<?php echo site_url('home/content_dongs')."/details/".$dongs_list['dongs_id'];?>"><?php echo $dongs_list['dongs_name'];?></a>
														</td>
														
														<td>
														<?php echo substr($dongs_list['dongs_seotitle'], 0,12);?>
														</td>
														
														<td class="hidden-480"><?php echo $dongs_list['dongs_seokey'];?></td>
														<?php if ($dongs_list['dongs_status']==1){?>
														<td class="hidden-480" ><span class="label label-sm label-warning">未通过审核</span></td>
														<?php }else{?>
														<td class="hidden-480" ><span class="label label-sm label-success">已通过审核</span></td>
														<?php }?>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $dongs_list['dongs_user'];?></span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-info">
																	<i class="icon-eye-open bigger-120"></i><a  style='text-decoration:none;color:#FFFFFF'href="<?php echo site_url('home/content_dongs')."/details/".$dongs_list['dongs_id'];?>">查看</a>
																</button>

																<button class="btn btn-xs btn-inverse">
																	<i class="icon-edit bigger-120"></i><a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_dongs')."/edit/".$dongs_list['dongs_id'];?>">修改</a>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i><a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_dongs')."/del/".$dongs_list['dongs_id'];?>">删除</a>
																</button>
																<?php if ($dongs_list['dongs_status']==1){?>
																<button class="btn btn-xs btn-danger">
																<i class="icon-lock  bigger-120"></i><a  style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_dongs')."/check/".$dongs_list['dongs_id'];?>">审核</a>
																</button>	
																<?php }else{?>	
																<button class="btn btn-xs btn-success">
																<i class="icon-unlock  bigger-120"></i><a  style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_dongs')."/check/".$dongs_list['dongs_id'];?>">审核</a>
																</button>	
																<?php }?>
															</div>

														</td>
													</tr>
<?php }?>
												
												</tbody>
											</table>
										</div>
									</div>
								</div>

							
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
				
													
													
										
					
	<?php }elseif($url=='check'){?>
		<div >
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<a  class="btn btn-sm pull-right badge-success" style='text-decoration:none;color:#FFFFFF'href="<?php echo site_url('home/content_dongs/list');?>">返回</a>
													审核操作
												</div>
											</div>
										<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_dongs/status'); ?>" role="form">
											<div class="modal-footer no-margin-top">
											<label class=" inline pull-left">
													<small class="muted">审核状态:</small>
													<input id="id-button-borders" checked="checked" name="status" type="checkbox" class="ace ace-switch ace-switch-5">
													<span class="lbl"></span>
											</label>
												
												<input  name="dongs_id" type="hidden" value="<?php echo $check_id['dongs_id'];?>" />
												<button  class="btn btn-sm btn-danger pull-right" type="submit"  ><i class="icon-ok"></i>提交</button>
											</div>
										</form>
										<div class="center">
											<?php if ($check_id['dongs_status']==1){?> 
											<a class="btn btn-danger">当前状态：未通过审核</a>
											<?php }if ($check_id['dongs_status']==2){?>
											<a class="btn btn-success">当前状态：已通过审核</a>
											<?php }?>
											
											
											
										</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
	<?php }elseif($url=='details'){
		
	//print_r($select_dongs_id);
	?>
	<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller">
											<span class="blue bigger-125">
												
												活动详情
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller">
											发布人：<?php echo $select_dongs_id['dongs_user'];?>
										</h3>
										<h3 class="lighter smaller">
											活动名称：<?php echo $select_dongs_id['dongs_name']; ?>
										</h3>
										<h3 class="lighter smaller">
											活动seo标题：<?php echo $select_dongs_id['dongs_seotitle']; ?>
										</h3>
										<h3 class="lighter smaller">
											活动seo关键词：<?php echo $select_dongs_id['dongs_seokey']; ?>
										</h3>
										<h3 class="lighter smaller">
											活动描述：<?php echo $select_dongs_id['dongs_miaoshu']; ?>
										</h3>
										<h3 class="lighter smaller">
											活动内容：<?php echo $select_dongs_id['dongs_content']; ?>
										</h3>

										
											<?php if ($select_dongs_id['dongs_status']==1){?>
											<h3 class="lighter smaller">状态：未通过审核 </h3>
											<?php }else{?>
											<h3 class="lighter smaller">状态：已通过审核 </h3>
											<h3 class="lighter smaller">审核人：<?php echo $select_dongs_id['dongs_check_user']; ?> </h3>
											<?php }?>
										
										<h3 class="lighter smaller">
											创建时间：<?php echo $select_dongs_id['dongs_time'];?>
										</h3>
										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_dongs')."/list/"?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>
											<a href="<?php echo site_url('home/content_dongs')."/edit/".$select_dongs_id['dongs_id'];?>" class="btn btn-primary">
												<i class="icon-edit"></i>
												修改
											</a>
											
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
	
	<?php 
	}elseif($url=='edit'){?>
		
		<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_dongs/updata'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												
												活动修改
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller ">
											活动 名称：<input name="dongs_name" data-rel="tooltip" value="<?php echo $select_dongs_id['dongs_name']; ?>" type="text" id="form-field-4" placeholder="<?php echo $select_dongs_id['dongs_name']; ?>" title="请输入版权设置" data-placement="bottom" />
											
										</h3>
										<h3 class="lighter smaller ">
											活动 标题：<input name="dongs_seotitle" data-rel="tooltip" value="<?php echo $select_dongs_id['dongs_seotitle']; ?>" type="text" id="form-field-4" placeholder="<?php echo $select_dongs_id['dongs_seotitle']; ?>" title="请输入seo标题" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											活动关键词：<input name="dongs_seokey" data-rel="tooltip" value="<?php echo $select_dongs_id['dongs_seokey']; ?>" type="text" id="form-field-4" placeholder="<?php echo $select_dongs_id['dongs_seokey']; ?>" title="请输入seo关键词" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											活动 描述：<input name="dongs_miaoshu" data-rel="tooltip" value="<?php echo $select_dongs_id['dongs_miaoshu']; ?>" type="text" id="form-field-4" placeholder="<?php echo $select_dongs_id['dongs_miaoshu']; ?>" title="请输入描述" data-placement="bottom" />
										</h3>
										<h3 class="lighter smaller ">
											活动 内容：<input name="dongs_content" data-rel="tooltip" value="<?php echo $select_dongs_id['dongs_content']; ?>" type="text" id="form-field-4" placeholder="<?php echo $select_dongs_id['dongs_content']; ?>" title="请输入内容" data-placement="bottom" />
										</h3>
										<input name="dongs_id"  type="hidden"  data-placement="bottom" value="<?php echo $select_dongs_id['dongs_id']; ?>" />
										
										<hr>
										
										
										<div class="space"></div>

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
	
	<?php }elseif($url=='del'){
	if($delstatus==TRUE){
		?>
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
											恭喜您，删除成功
											<i class="icon-ok icon-animated-wrench bigger-125"></i>
											!
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_dongs')."/list/"?>" class="btn btn-grey">
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
											怎么搞的，删除失败
											<i class="icon-bolt icon-animated-wrench bigger-125"></i>
											!快去请救兵吧！
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_dongs')."/list/"?>" class="btn btn-grey">
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
		
		<?php }}elseif($url=='updata'){
	if($updatastatus==TRUE){
		?>
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
											恭喜您，修改成功
											<i class="icon-ok icon-animated-wrench bigger-125"></i>
											!
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_dongs')."/list/"?>" class="btn btn-grey">
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
<?php }}else{?>
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
											怎么搞的，修改失败
											<i class="icon-bolt icon-animated-wrench bigger-125"></i>
											!快去请救兵吧！
										</h3>

										<div class="space"></div>

										

										<hr>
										<div class="space"></div>

										<div class="center">
											<a href="<?php echo site_url('home/content_dongs')."/list/"?>" class="btn btn-grey">
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