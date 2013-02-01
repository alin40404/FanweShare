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
<script type="text/javascript">
var ADMIN_NAME_REQUIRE = "<?php echo L("ADMIN_NAME_REQUIRE");?>";
var ADMIN_PWD_REQUIRE = "<?php echo L("ADMIN_PWD_REQUIRE");?>";
var CONFIRM_ERROR = "<?php echo L("CONFIRM_ERROR");?>";
</script>
<div class="handle-btns">
	<div class="link-button "><p><a id="" name="" href="<?php echo U(MODULE_NAME.'/index');?>" class=""><?php echo L("RETURN_LIST");?></a></p></div>
</div>
<form method='post' id="form" name="form" action="<?php echo U(MODULE_NAME.'/insert');?>">
<table cellpadding="4" cellspacing="0" border="0" class="table-form">
	<tr>
		<th width="200"><?php echo L("ADMIN_NAME");?></th>
		<td><input type="text" class="textinput requireinput" name="admin_name" id="admin_name" /></td>
	</tr>
	<tr>
		<th><?php echo L("ADMIN_PWD");?></th>
		<td><input type="password" class="textinput requireinput" name="admin_pwd" id="admin_pwd" /></td>
	</tr>
	<tr>
		<th><?php echo L("CONFIRM_PWD");?></th>
		<td><input type="password" class="textinput requireinput" name="confirm_pwd" id="confirm_pwd" /></td>
	</tr>
	<tr>
		<th><?php echo L("ROLE_ID");?></th>
		<td>
			<select id="role_id" name="role_id" onchange="" ondblclick="" class="" ><?php  foreach($role_list as $key=>$val) { ?><option value="<?php echo $key ?>"><?php echo $val ?></option><?php } ?></select>
		</td>
	</tr>
	<tr class="act">
		<th>&nbsp;</th>
		<td>
			<input type="submit" class="submit_btn" value="<?php echo L("SUBMIT");?>" />
			<input type="reset" class="reset_btn" value="<?php echo L("RESET");?>" />
		</td>
	</tr>
</table>
</form>
<script type="text/javascript">
jQuery(function($){
	$("#form").submit(function(){
		if(!$.checkRequire($("#admin_name").val()))
		{
			alert(ADMIN_NAME_REQUIRE);
			return false;
		}
		
		if(!$.checkRequire($("#admin_pwd").val()))
		{
			alert(ADMIN_PWD_REQUIRE);
			return false;
		}
		
		if($("#admin_pwd").val() != $("#confirm_pwd").val())
		{
			alert(CONFIRM_ERROR);
			return false;
		}
	});
});
</script>
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