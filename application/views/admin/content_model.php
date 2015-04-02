<?php	if($url=='add'){?>
 		
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
								<a href="#"> 车型管理</a>
							</li>
							<li class="active">添加车型</li>
						</ul><!-- .breadcrumb -->
						
						
					<div class="page-content">
						<div class="page-header">
							<h1>
								车型管理
								<small>
									<i class="icon-double-angle-right"></i>
									添加车型
								</small>
							</h1>
						</div><!-- /.page-header -->
						
							
							<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_column/adddata/status'); ?>" role="form">

		<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												
												添加车型
											</span>
											
										</h1>
														
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">品牌：</span>
											<span style=" padding-left:10px;"><input name="brandname" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">车系：</span>
											<span style=" padding-left:10px;"><input name="stylesname" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">排量：</span>
											<span style=" padding-left:10px;"><input name="outname" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">年份：</span>
											<span style=" padding-left:10px;"><input name="agename" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>
										
										
							
										<div class="center">
										<span style="width:170px; text-align:right; display:block; float:left;">
											<button class="btn" type="submit">
												<i class="icon-arrow-left"></i>
												提交
											</button>
										</span>
										<span style=" padding-left:10px;">
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</span>
											
										</div>
									</div>
								</div>
						</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
									
									
									</form>
								</div>
						 </div>
						 </div>
						 </div>
						 </div>
	
	
	<?php }elseif($url=='check'){?>
		<div >
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<a  class="btn btn-sm pull-right badge-success" style='text-decoration:none;color:#FFFFFF'href="<?php echo site_url('home/content_column/list');?>">返回</a>
													审核操作
												</div>
											</div>
										<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_column/status'); ?>" role="form">
											<div class="modal-footer no-margin-top">
											<label class=" inline pull-left">
													<small class="muted">审核状态:</small>
													<input id="id-button-borders" checked="checked" name="status" type="checkbox" class="ace ace-switch ace-switch-5">
													<span class="lbl"></span>
											</label>
												
												<input  name="link_id" type="hidden" value="<?php echo $link_data['link_id'];?>" />
												<button class="btn btn-sm btn-danger pull-right" type="submit"  ><i class="icon-ok"></i>提交</button>
											</div>
										</form>
										<div class="center">
											<?php if ($link_data['link_status'] == 1){?> 
											<a class="btn btn-danger">当前状态：未通过审核</a>
											<?php }else{?>
											<a class="btn btn-success">当前状态：已通过审核</a>
											<?php }?>
										</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
	<?php }elseif($url=='list'){?>
	<div class="main-content">
	<div class="page-content">
	
	<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">友情链接</h3>
										<div class="table-header">
											列表
										</div>

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
														<th>友情链接名称</th>
														<th>友情链接地址</th>
														<th class="hidden-480">所在俱乐部</th>

														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															操盘
														</th>
														<th>状态</th>
														<th class="hidden-480">操作</th>

														
													</tr>
												</thead>

												<tbody>
												<?php foreach ($link_data->result_array() as $link_data){ ?>
													<tr>
														<td class="center">
															<!-- <label>
																<input  type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label> -->
														</td>

														<td>
															<?php echo $link_data['link_title'];?>
														</td>
														<td><?php echo $link_data['link_url'];?></td>
														<td class="hidden-480"><?php echo $link_data['club_name'];?></td>
														<td><?php echo $link_data['link_username'];?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $link_data['link_statuss'];?></span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
															<?php if($link_data['link_status'] == '1'){?>
																<span class="btn btn-xs btn-success">
																	<i class="icon-unlock bigger-120"></i><a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_column')."/check/".$link_data['link_id'];?>">审核</a>
																</span>
																<?php }else{?>
																<span class="btn btn-xs btn-success">
																	<i class="icon-lock bigger-120"></i><a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_column')."/check/".$link_data['link_id'];?>">审核</a>
																</span>
																 <?php }?>
																<span class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i><a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_column')."/del/".$link_data['link_id'];?>">删除</a>
																</span>
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
				
	
	
	<?php }elseif ($url_4=='status') {
		# code...
		if ($status==TRUE) {
			# code...
			echo "操作成功！";
		}else{
			echo "操作失败！可能链接名已经存在！";
		}
	}

?>