<?php
if($city->result()) {
	foreach ($city->result() as $item):
	echo "<option value='".$item->id."'>".$item->name."</option>";
	endforeach;
}