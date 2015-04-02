<?php	if($url=='add'){?>
<?php echo "添加广告"?>
	<?php }elseif($url=='check'){?>
	<?php echo "审核广告";?>
	<?php }elseif($url=='list'){?>
	
	<?php echo "广告列表";?>
	
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