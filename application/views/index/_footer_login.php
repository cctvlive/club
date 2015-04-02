		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.1.3.min.js'>"+"<"+"/script>");
		</script>
		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.1.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
		</script>
		<script type="text/javascript">
        $(function(){
            //默认隐藏县市和乡镇下拉框
          // $("select[name='xid']").hide();
          // $("select[name='tid']").hide();    
             
            //选择省份触发事件
            $("select[name='pid']").change(function(){
                //通过远程 HTTP GET 请求载入信息
                $.post("<?php echo site_url('login/select'); ?>",{ upid:this.value },function(data){
                    //再次隐藏县市和乡镇下拉框
                   $("select[name='xid']").hide();
                    $("select[name='tid']").hide();                        
                    $("select[name='cid'] option:gt(0)").remove();//清除城市/地区下拉框的除第一个option之外的所有子元素
                    //设定所选择省份下的城市/地区下拉框option值
                    $("select[name='cid']").append(data);
                });
            });
             
            //选择城市/城区触发事件
            $("select[name='cid']").change(function(){
                //通过远程 HTTP GET 请求载入信息
                $.post("<?php echo site_url('login/select'); ?>",{upid:this.value},function(data){
                    //判断是否点击了城市/城区下的"请选择"
                    if (data){
                        $("select[name='xid']").show();//显示县市下拉框
                        $("select[name='xid'] option:gt(0)").remove();//清除县市下拉框的除第一个option之外的所有子元素
                        //设定所选择城市/地区下的县市下拉框option值
                        $("select[name='xid']").append(data);
                    }else{   //若点击则隐藏县市和乡镇下拉框
                        $("select[name='xid']").hide();
                       $("select[name='tid']").hide();
                    }
                });
            });
             
            //选择县市触发事件
            $("select[name='xid']").change(function(){
                //通过远程 HTTP GET 请求载入信息
                $.post("<?php echo site_url('login/select'); ?>",{upid:this.value},function(data){
                    //判断是否存在乡镇数据，若存在则显示
                    //同时判断是否点击了县市下的"请选择"
                    if (data){
                        $("select[name='tid']").show();//显示乡镇下拉框
                        $("select[name='tid'] option:gt(0)").remove();//清除乡镇下拉框的除第一个option之外的所有子元素
                        //设定所选择县市下的乡镇下拉框option值
                        $("select[name='tid']").append(data);
                    }else{  //若点击则隐藏乡镇下拉框
                        $("select[name='tid']").hide();
                    }
                });
            });
        })
</script>
	<!-- <div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
 -->
 </body>
</html>