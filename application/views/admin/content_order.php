<?php

 	if($url=='add'){
 		
	echo "添加";
	
	}elseif($url=='list'){?>
		
	<div class="main-content">
	<div class="page-content">
	
	<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">订单</h3>
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
														<th>订单流水号</th>
														<th>订单类型</th>
														<th class="hidden-480">订单手机号</th>

														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															操盘
														</th>
														<th>状态</th>
														<th class="hidden-480">操作</th>

														
													</tr>
												</thead>

												<tbody>
												<?php foreach ($order_data->result_array() as $order_data){ ?>
													<tr>
														<td class="center">
															<!-- <label>
																<input  type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label> -->
														</td>

														<td>
															<?php echo $order_data['Type'];?>
														</td>
														<td><?php echo $order_data['Record_Number'];?></td>
														<td class="hidden-480"><?php echo $order_data['Orders_Username'];?></td>
														<td><?php echo $order_data['Record_status'];?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $order_data['buypay'];?></span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
															<?php if($order_data['Record_status'] == '1'){?>
																<span class="btn btn-xs btn-success">
																	<i class="icon-unlock bigger-120"></i><a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_order')."/check/".$order_data['oid'];?>">审核</a>
																</span>
																<?php }else{?>
																<span class="btn btn-xs btn-success">
																	<i class="icon-lock bigger-120"></i><a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_order')."/check/".$order_data['oid'];?>">审核</a>
																</span>
																 <?php }?>
																<span class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i><a style='text-decoration:none;color:#FFFFFF' href="<?php echo site_url('home/content_order')."/del/".$order_data['oid'];?>">删除</a>
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
				
	
	
	
	<?}elseif($url=='xiqing'){
		
	echo "详情";
	
	}else{
		
	echo "修改"; 
	
	}

?>