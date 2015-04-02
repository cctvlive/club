<?php	if($url=='changepwd'){?>
<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/account_number/changepwddata/status'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												
												修改密码
											</span>
											
										</h1>
										<hr>
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">用户名：</span>
											<span style=" padding-left:10px;"><?php echo $session_admin_name;?></span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">新密码：</span>
											<span style=" padding-left:10px;">
											<input name="newpwd" data-rel="tooltip" value="" type="password"  placeholder=""  data-placement="bottom" id="newpwd" />
											</span>
										</h3>

										

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">确认新密码：</span>
											<span style=" padding-left:10px;">
											<input name="surepwd" data-rel="tooltip" value="" type="password"  placeholder=""  data-placement="bottom" id="surepwd" />
											
											<span id="click"><a href="javascript:ck()"  style="text-decoration:none;"><i class="icon-eye-open"></i></a></span>
											</span>
										</h3>	
										<hr>

									
										<input name="admin_id" value="<?php echo $session_admin_id;?>" type="hidden"   />
											
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

	<?php } elseif($url=='personal_info'){?>
					<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/account_number/upadmindata/status'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												
												修改个人信息
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">用户名：</span>
											<span style=" padding-left:10px;"><?php echo $admin_list['name']?></span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">真实姓名：</span>
											<span style=" padding-left:10px;">
											<input name="truename" data-rel="tooltip" value="<?php echo $admin_list['admin_name']?>" type="text"  placeholder="<?php echo $admin_list['admin_name']?>"  data-placement="bottom" />
											</span>
										</h3>

										

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">E-MAIL：</span>
											<span style=" padding-left:10px;">
											<input name="e-mail" data-rel="tooltip" value="<?php echo $admin_list['email']?>" type="text"  placeholder="<?php echo $admin_list['email']?>"  data-placement="bottom" />
											</span>
										</h3>

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">手机号：</span>
											<span style=" padding-left:10px;">
											<input name="tel" data-rel="tooltip" value="<?php echo $admin_list['phone']?>" type="text"  placeholder="<?php echo $admin_list['phone']?>"  data-placement="bottom" />
											</span>
										</h3>
										<input name="admin_id"  value="<?php echo $admin_list['admin_id']?>" type="hidden"  />
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

<?php } elseif($url=='pwd_question'){?>
					<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/account_number/sure_pwd_question/status'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												
												设置密码问题
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">问题一</span>
											<span style=" padding-left:10px;">
												<select  name="dna_ques_1" id="dna_ques_1" class="select_text" >
													<option value="-1">请选择密保问题</option>
												<?php foreach ($number->result_array() as $number){?>
													<option value="<?php echo $number['an_quan_id']?>"><?php echo $number['an_quans']?></option>
													<?php 	}?>
												</select>
											</span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">答案：</span>
											<span style=" padding-left:10px;">
											<input name="na_ques_1" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
											</span>
										</h3>

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">问题二</span>
											<span style=" padding-left:10px;">
												<select  name="dna_ques_2" id="dna_ques_2" class="select_text" >
													<option value="-1">请选择密保问题</option>
													<?php foreach ($number2->result_array() as $number2){?>
													<option value="<?php echo $number2['an_quan_id']?>"><?php echo $number2['an_quans']?></option>
													<?php 	}?>
												</select>
											</span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">答案：</span>
											<span style=" padding-left:10px;">
											<input name="na_ques_2" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
											</span>
										</h3>

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">问题三</span>
											<span style=" padding-left:10px;">
												<select  name="dna_ques_3" id="dna_ques_3" class="select_text" >
													<option value="-1">请选择密保问题</option>
													<?php foreach ($number3->result_array() as $number3){?>
													<option value="<?php echo $number3['an_quan_id']?>"><?php echo $number3['an_quans']?></option>
													<?php 	}?>
												</select>
											</span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">答案：</span>
											<span style=" padding-left:10px;">
											<input name="na_ques_3" data-rel="tooltip" value="" type="text"  placeholder=""  data-placement="bottom" />
											</span>
										</h3>

										<hr>
										<div class="center">
										<button class="btn" type="submit">
												下一步<i class="icon-arrow-right"></i>
											</button>
										</div>
									</div>
								</div>
						</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
<?php } elseif($url=='sure_pwd_question'){?>
					<div class="page-content">
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
						<form class="form-horizontal" method="post" action="<?php echo site_url('home/account_number/sure_pwd_question'); ?>" role="form">
								<div class="error-container">
									<div class="well">
										<h1 class="grey lighter smaller center">
											<span class="blue bigger-125">
												
												依次回答上一步设置的密保问题，以便确认！
											</span>
											
										</h1>

										<hr>
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">问题一</span>
											<span style=" padding-left:10px;">
											<?php echo  $select_dna_quess['0']['an_quans'];?></span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">答案</span>
											<span style=" padding-left:10px;">
											<input name="na_ques_1" data-rel="tooltip" value="<?php echo  $select_dna_ques['0']['na_ques_1']?>" type="text"  placeholder="<?php echo  $select_dna_ques['0']['na_ques_1'];?>"  data-placement="bottom" />
											</span>
										</h3>

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">问题二</span>
											<span style=" padding-left:10px;">
											<?php echo  $select_dna_quess2['0']['an_quans'];?></span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">答案</span>
											<span style=" padding-left:10px;">
											<input name="na_ques_2" data-rel="tooltip" value="<?php echo  $select_dna_ques2['0']['na_ques_2']?>" type="text"  placeholder="<?php echo  $select_dna_ques2['0']['na_ques_2'];?>"  data-placement="bottom" />
											</span>
										</h3>

										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">问题三</span>
											<span style=" padding-left:10px;">
											<?php echo  $select_dna_quess3['0']['an_quans'];?></span>
										</h3>
										
										<h3 class="lighter smaller ">
											<span style="width:170px; text-align:right; display:block; float:left;">答案</span>
											<span style=" padding-left:10px;">
											<input name="na_ques_3" data-rel="tooltip" value="<?php echo  $select_dna_ques3['0']['na_ques_3'];?>" type="text"  placeholder="<?php echo  $select_dna_ques3['0']['na_ques_3'];?>"  data-placement="bottom" />
											</span>
										</h3>

										<hr>
										<div class="center">
										<button class="btn" type="submit">
												确认<i class="icon-arrow-right"></i>
											</button>
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

	}?>

<script type="text/javascript">
		function ck(){
			document.getElementById("newpwd").type="text";
			document.getElementById("surepwd").type="text";
			document.getElementById("click").innerHTML="<span id=\"click\"><a href=\"javascript:ckk()\" style=\"text-decoration:none;\"><i class=\"icon-eye-close\"></i></a></span>";
		}
		function ckk(){
			document.getElementById("newpwd").type="password";
			document.getElementById("surepwd").type="password";
			document.getElementById("click").innerHTML="<span id=\"click\"><a href=\"javascript:ck()\"  style=\"text-decoration:none;\"><i class=\"icon-eye-open\"></i></a></span>";
		}


	</script>


