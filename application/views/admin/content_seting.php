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

								<form class="form-horizontal" method="post" action="<?php echo site_url('home/seting_data'); ?>" role="form">
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">网站全称</label>

										<div class="col-sm-9">
											<input name="Website_full_name" data-rel="tooltip" type="text" id="form-field-1" placeholder="<?php echo $Website_full_name;?>" title="请输入网站全称" data-placement="bottom" />
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">网站简称</label>

										<div class="col-sm-9">
											<input name="Website_referred" data-rel="tooltip" type="text" id="form-field-2" placeholder="<?php echo $Website_referred;?>" title="请输入网站简称" data-placement="bottom" />
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3">请输入网站关键字</label>

										<div class="col-sm-9">
											<input name="Website_Keyword" data-rel="tooltip" type="text" id="form-field-3" placeholder="<?php echo $Website_Keyword;?>" title="请输入网站关键字" data-placement="bottom" />
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">版权设置</label>

										<div class="col-sm-9">
											<input name="Copyright_settings" data-rel="tooltip" type="text" id="form-field-4" placeholder="<?php echo $Copyright_settings;?>" title="请输入版权设置" data-placement="bottom" />
										
										</div>
									</div>
																
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">全站推送内容</label>

										<div class="col-sm-9">
											<input name="Push_all_stations" data-rel="tooltip" type="text" id="form-field-5" placeholder="<?php echo $Push_all_stations;?>" title="请输入全站推送内容" data-placement="bottom" />
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">ICP备案号</label>

										<div class="col-sm-9">
											<input name="ICP_record_number" data-rel="tooltip" type="text" id="form-field-6" placeholder="<?php echo $ICP_record_number;?>" title="ICP备案号" data-placement="bottom" />
											
										</div>
									</div>

									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-7">自定义logo</label>

										<div class="col-sm-9">
											<input name="Custom_Size" data-rel="tooltip" type="text" id="form-field-7" placeholder="<?php echo $Custom_Size;?>" title="可以为空" data-placement="bottom" />
											
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-8">默认login</label>

										<div class="col-sm-9">
											<input name="default_size" data-rel="tooltip" type="text" id="form-field-8" placeholder="<?php echo $default_size;?>" title="可以为空" data-placement="bottom" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-9">伪静态规则</label>

										<div class="col-sm-9">
											<input name="Rewrite" data-rel="tooltip" type="text" id="form-field-9" placeholder="<?php echo $Rewrite;?>" title="请填写规则" data-placement="bottom" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-10">网站描述</label>

										<div class="col-sm-9">
											<input name="Description" data-rel="tooltip" type="text" id="form-field-10" placeholder="<?php echo $Description;?>" title="网站描述" data-placement="bottom" />
											
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
						


