<?php	if($url=='add'){?>
<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_club/clubadddata/status'); ?>" role="form">
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
											<span style="width:170px; text-align:right; display:block; float:left;">选择分类：</span>
											<span style=" padding-left:10px;">
											<select name="clubtype">
											<?php foreach ($club_f->result_array() as $club_f ){//选择俱乐部等级?>
											<option><?php echo $club_f['list'];?></option>
											<?php }?>
											</select>
											</span>
										</h3>

										

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">所属车型：</span>
											<span style=" padding-left:10px;">
											<select name="clubcartype">
												<option>宝马</option>
												<option>奔驰</option>
												<option>福特</option>
											</select>
											<span style=" padding-left:10px;">
											<select name="clubcartypexi">
												<option>x1</option>
												<option>x2</option>
												<option>x3</option>
											</select>
											</span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">管理员：</span>
											<span style=" padding-left:10px;">
											<select name="clubmanager">
													<?php foreach ($admin_list->result_array() as $admin_list ){?>
											<option><?php echo $admin_list['name'];?></option>
											
											<?php }?>
												
											</select>
											</span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">职位：</span>
											<span style=" padding-left:10px;">
											<select name="job">
											<?php foreach ($club_j->result_array() as $club_j ){?>
											<option><?php echo $club_j['job'];?></option>
											<?php }?>
												
											</select>
											</span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">联系方式：</span>
											<span style=" padding-left:10px;"><input name="clubtel" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>	
											
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">联系地址：</span>
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
								俱乐部<small><i class="icon-double-angle-right"></i>列表</small>
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
														<th class="hidden-480">俱乐部等级</th>
														<th class="hidden-480">俱乐部积分</th>
														<th class="hidden-480">俱乐部权限</th>
														<th class="hidden-480">操作</th>

													
													</tr>
												</thead>

												<tbody>
													<tr>
															<?php foreach ($club_list -> result_array() as $club_list){ ?>
														<td>
															<a  href="<?php echo site_url('home/content_club')."/details/".$club_list['club_id'];?>"><?php echo $club_list['club_name'];?></a>
														</td>
														<td>
															<?php echo $club_list['fenlei'];?>
														</td>
														<td>
															<?php echo $club_list['points'];?>
														</td>
														<td>
															<?php echo $club_list['club_aux'];?>
														</td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-warning">
																	<a  style='text-decoration:none;color:#FFFFFF'href="<?php echo site_url('home/content_club')."/details/".$club_list['club_id'];?>"><i class="icon-eye-open bigger-120"></i>修改</a>
																</button>

																<button class="btn btn-xs btn-danger">
																	<a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_club')."/del/status/".$club_list['club_id'];?>"><i class="icon-trash bigger-120"></i>删除</a>
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

<?php }elseif($url=='clubtypeadd'){?>
<div class="page-content">
				<div class="page-header">
							<h1>
								分类管理<small><i class="icon-double-angle-right"></i>添加分类</small>
							</h1>
				</div>


						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_club_f/clubaddtype/status'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												添加分类
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">选择分类：</span>
											<span style=" padding-left:10px;">
												<input type="radio" name="type" onclick="return ck();" value="job" checked>职位
												<input type="radio" name="type" style="margin-left:10px;" value="fenlei"  onclick="return ckk();">等级
											</span>
										</h3>

										<div id="position" style="display:block;">
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">职位：</span>
											<span style=" padding-left:10px;"><input name="job" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>	
											
										
															
										<hr>
										
										</div>

										<div id="points" style=" display:none;">
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">等级：</span>
											<span style=" padding-left:10px;"><input name="list" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">积分：</span>
											<span style=" padding-left:10px;"><input name="points" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>	
											
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">权限值：</span>
											<span style=" padding-left:10px;"><input name="powervalue" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" /></span>
										</h3>						
										<hr>
										
										</div>
							
										<div class="center">
										<button class="btn" type="submit">
												<i class="icon-arrow-left"></i>
												确认
											<tton>
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											<tton>
											
										</div>
									</div>
								</div>
						</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>

	<?php }elseif($url=='details'){?>
	
	<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
					<form class="form-horizontal" method="post" action="<?php echo site_url('home/content_club/clubeidt/status'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												俱乐部信息
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller ">
											俱乐部名：<?php echo $club_list['club_name']; ?>
											
										</h3>
										<h3 class="lighter smaller ">
											俱乐部权限值：<input name="club_aux" data-rel="tooltip" value="<?php echo $club_list['club_aux']; ?>" type="text"  placeholder="<?php echo $club_list['club_aux']; ?>" title="请输入" data-placement="bottom" />
											
											
										</h3>
										<h3 class="lighter smaller ">
											俱乐部积分：<input name="points" data-rel="tooltip" value="<?php echo $club_list['points']; ?>" type="text"  placeholder="<?php echo $club_list['points']; ?>" title="请输入" data-placement="bottom" />
											
										</h3>
										<h3 class="lighter smaller ">
										俱乐部等级：
											
											<span style=" padding-left:10px;">
											<select name="clubtype">
											<option><?php echo $club_list['fenlei']; ?></option>
											<?php foreach ($club_f->result_array() as $club_f ){//选择俱乐部等级?>
											<option><?php echo $club_f['list'];?></option>
											<?php }?>
											</select>
											</span>
									
										</h3>
										<h3 class="lighter smaller ">俱乐部管理员:
										
										
											<select name="clubadmin">
											<option><?php echo $club_list['club_admin']; ?></option>
											
											<?php foreach ($admin_list->result_array() as $admin_list ){?>
													
											<option><?php echo $admin_list['name'];?></option>
											
											<?php }?>
												
											</select>
											
											
											
										</h3>
										
										<h3 class="lighter smaller ">
										<span style="width:170px; text-align:right; display:block; float:left;">职位：</span>
											<span style=" padding-left:10px;">
											
											<select name="job">
											<option><?php echo $club_list['job']; ?></option>
											<?php foreach ($club_j->result_array() as $club_j ){?>
											<option><?php echo $club_j['job'];?></option>
											<?php }?>
												
											</select>
											</span>
											
											
										</h3>
										<h3 class="lighter smaller ">
											俱乐部总部：<input name="zhongbu" data-rel="tooltip" value="<?php echo $club_list['zhongbu']; ?>" type="text"  placeholder="<?php echo $club_list['zhongbu']; ?>" title="请输入" data-placement="bottom" />
											
										</h3>
										<h3 class="lighter smaller ">
											联系方式：<input name="iphone" data-rel="tooltip" value="<?php echo $club_list['iphone']; ?>" type="text"  placeholder="<?php echo $club_list['iphone']; ?>" title="请输入" data-placement="bottom" />
											
										</h3>
										
										
										
									<input type="hidden" name="club_id" value="<?php echo $club_list['club_id']; ?>" />
									<input type="hidden" name="club_name" value="<?php echo $club_list['club_name']; ?>" />
										
										
										<div class="space"></div>

										<div class="center">
								
												<button  class="btn btn-grey" ><i class="icon-eidt bigger-110"></i>
												提交修改</button>
												
												<a href="<?php echo site_url('home/content_club/list/')?>" class="btn btn-grey">
												<i class="icon-arrow-left"></i>
												返回
											</a>
											
											
												
											
											
										</div>
									</div>
								</div>
						</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
	
	
	<?php }elseif ($url_4=='status') {
		# code...
		if ($status==TRUE) {
			# code...
			echo $status_data;
		}else{
			echo $status_data;
		}
	}

?>

<script type="text/javascript">
	function ck(){
		var d=document.getElementById("position");
		var doc=document.getElementById("points");
		doc.style.display='none';
		d.style.display='block';


	}
	function ckk(){
		var d=document.getElementById("position");
		var doc=document.getElementById("points");
		doc.style.display='block';
		d.style.display='none';


	}


</script>








