<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="__TMPL__Static/Css/style.css" rel="stylesheet" />
<script type="text/javascript" src="__TMPL__Static/Js/jquery.js"></script>
<script type="text/javascript" src="__TMPL__Static/Js/base.js"></script>
<script type="text/javascript" src="__TMPL__Static/Js/json.js"></script>
<script type="text/javascript" src="__TMPL__Static/Js/jquery.pngFix.js"></script>
<script type="text/javascript">
<!--
//指定当前组模块URL地址 
var URL = '__URL__';
var ROOT_PATH = '__ROOT__';
var APP	 =	 '__APP__';
var STATIC = '__TMPL__Static';
var VAR_MODULE = '<?php echo c('VAR_MODULE');?>';
var VAR_ACTION = '<?php echo c('VAR_ACTION');?>';
var CURR_MODULE = '<?php echo ($module_name); ?>';
var CURR_ACTION = '<?php echo ($action_name); ?>';

//定义JS中使用的语言变量
var CONFIRM_DELETE = '<?php echo L("CONFIRM_DELETE");?>';
var AJAX_LOADING = '<?php echo L("AJAX_LOADING");?>';
var AJAX_ERROR = '<?php echo L("AJAX_ERROR");?>';
var ALREADY_REMOVE = '<?php echo L("ALREADY_REMOVE");?>';
var SEARCH_LOADING = '<?php echo L("SEARCH_LOADING");?>';
var CLICK_EDIT_CONTENT = '<?php echo L("CLICK_EDIT_CONTENT");?>';
//-->
</script>
</head>
<body>
	<div class="fanwe-body">
		<div class="fb-title"><div><p><span><?php echo ($ur_href); ?></span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<script type="text/javascript" src="__TMPL__Static/Js/dataList.js"></script>
<div class="handle-btns">
	<form action="__APP__" style="float:left;">
		<span><?php echo L("DUMP_NAME");?></span>
		<input class="textinput" type="text" name="sql_file_name" value="<?php echo ($name); ?>" size="20" />
		<input class="submit_btn" type="submit" value="<?php echo L("DUMP");?>" />
		<input type="hidden" name="<?php echo c('VAR_MODULE');?>" value="<?php echo ($module_name); ?>" />
		<input type="hidden" name="<?php echo c('VAR_ACTION');?>" value="dump" />
	</form>
</div>
<div style="width:100%; float:left;border-top:solid 1px #c6c6c6;border-bottom:solid 1px #c6c6c6;"><p style="padding:10px;line-height:1.5em;"><?php echo L("DUMP_TIPS");?></p></div>
<table id="checkList" class="table-list list" cellpadding="0" cellspacing="0" border="0">
	<thead>
		<tr>
			<th><span><?php echo L("DUMP_NAME");?></span></th>
			<th width="140"><span><?php echo L("DUMP_TIME");?></span></th>
			<th width="100"><?php echo L("HANDLE");?></th>
		</tr>
	</thead>
	<tbody>
		<?php if(is_array($sql_list)): foreach($sql_list as $key=>$sql_item): ?><tr <?php if($key % 2 == 1): ?>class="even"<?php endif; ?>>
			<td style="text-align:left;"><?php echo ($sql_item["filename"]); ?></td>
			<td><?php echo ($sql_item["filedate"]); ?></td>
			<td>
				<a href="<?php echo U('DataBase/restore',array('dir'=>$sql_item['filename']));?>"><?php echo L("RESTORE");?></a>&nbsp;
				<a href="<?php echo U('DataBase/delete',array('dir'=>$sql_item['filename']));?>"><?php echo L("REMOVE");?></a>
			</td>
		</tr><?php endforeach; endif; ?>
	</tbody>
</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="ajax-loading"></div>
</body>
<script type="text/javascript">
jQuery(function($){
	updateBodyDivHeight();
	$(window).resize(function(){
		updateBodyDivHeight();
	});
});

function updateBodyDivHeight()
{
	jQuery(".body-table-div").height(jQuery(".fanwe-body").height() - 36);
	if(jQuery(".body-table-div").get(0).scrollHeight > jQuery(".body-table-div").height())
	{
		var width = jQuery(".body-table-div").width() - 16;
		jQuery(".body-table-div > *").each(function(){
			if(!$(this).hasClass('ajax-loading'))
			{
				$(this).width(width)	
			}
		});
	}
}
</script>
</html>