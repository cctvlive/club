<?php	if($url=='add'){?>
<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_club/clubadddata'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												
												添加俱乐部分类	
											</span>
											
										</h1>

										<hr>
										
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">俱乐部分类：</span>
											<span style=" padding-left:10px;">
											<select name="clubtype">
											<?php foreach ($club_f->result_array() as $club_f ){print_r($club_f);}?>
												<option></option>
												
											</select>
											</span>
										</h3>

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">俱乐部名称：</span>
											<span style=" padding-left:10px;"><input name="clubname" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">俱乐部车型：</span>
											<span style=" padding-left:10px;"><input name="clubcartype" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">俱乐部管理员：</span>
											<span style=" padding-left:10px;">
											<select name="clubmanager">
												<option>管理员</option>
												
											</select>
											</span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">俱乐部职位：</span>
											<span style=" padding-left:10px;">
											<select name="clubposition">
												<option>俱乐部主席</option>
												<option>俱乐部主管</option>
												<option>俱乐部客服</option>
											</select>
											</span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">俱乐部联系方式：</span>
											<span style=" padding-left:10px;"><input name="clubtel" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>	
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">俱乐部所在城市：</span>
											<span style=" padding-left:10px;"><input name="clubcity" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>		
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">俱乐部联系地址：</span>
											<span style=" padding-left:10px;"><input name="clubaddress" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>						
										<hr>
										
										
							
										<div class="center">
										<button class="btn" type="submit">
												<i class="icon-arrow-left"></i>
												确认
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

	<?php }elseif($url=='list'){?>
	
	<div class="page-content">
						<div class="page-header">
							<h1>
								聚乐部等级<small><i class="icon-double-angle-right"></i>列表</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->

							
								
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														<th class="center">俱乐部等级</th>
														
														<th class="hidden-480">俱乐部积分</th>
														<th class="hidden-480">俱乐部权限</th>
														
														<th class="hidden-480">操作</th>

													
													</tr>
												</thead>

												<tbody>
													<tr>
															<?php foreach ($clubf -> result_array() as $clubf){ ?>
														
														<td>
															<?php echo $clubf['list'];?>
														</td>
														
														<td>
															<?php echo $clubf['points'];?>
														</td>
														
														<td>
															<?php //echo $club_f['id'];?><?php echo $clubf['aux'];?>
														</td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">

																<button class="btn btn-xs btn-danger">
																	<a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_club_f/del/status').'/'.$clubf['id'];?>"><i class="icon-trash bigger-120"></i>删除</a>
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

	
	<?php }elseif ($url_4=='status') {
		# code...
		if ($status==TRUE) {
			# code...
			echo $status_data;
		}else{
			echo $status_data;
		}
	}?>