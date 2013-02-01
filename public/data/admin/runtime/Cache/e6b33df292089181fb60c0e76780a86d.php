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
	<div class="img-button "><p><input type="button" id="addAdmin" name="addAdmin" value="<?php echo L("ADD");?>" onclick="addData()" class="addAdmin"></p></div>
	<div class="img-button "><p><input type="button" id="editAdmin" name="editAdmin" value="<?php echo L("EDIT");?>" onclick="editData(this,'checkList')" class="editAdmin"></p></div>
	<div class="img-button "><p><input type="button" id="removeAdmin" name="removeAdmin" value="<?php echo L("REMOVE");?>" onclick="removeData(this,'checkList')" class="removeAdmin"></p></div>
</div>
<div class="search-box">
</div>
<!-- Think 系统列表组件开始 -->
<table id="checkList" class="table-list list" cellpadding="0" cellspacing="0" border="0"><thead><tr><th width="30" class="first"><input type="checkbox" onclick="checkAll('checkList')"></th><th width="50" ><a href="javascript:sortBy('id','<?php echo ($sort); ?>','index')" title="按照<?php echo L("ID");?><?php echo ($sortType); ?> "><?php echo L("ID");?><?php if(($order)  ==  "id"): ?><img src="__TMPL__Static/Images/<?php echo ($sortImg); ?>.gif" align="absmiddle"><?php endif; ?></a></th><th ><a href="javascript:sortBy('admin_name','<?php echo ($sort); ?>','index')" title="按照<?php echo L("ADMIN_NAME");?><?php echo ($sortType); ?> "><?php echo L("ADMIN_NAME");?><?php if(($order)  ==  "admin_name"): ?><img src="__TMPL__Static/Images/<?php echo ($sortImg); ?>.gif" align="absmiddle"><?php endif; ?></a></th><th width="100" ><a href="javascript:sortBy('role_id','<?php echo ($sort); ?>','index')" title="按照<?php echo L("ROLE_ID");?><?php echo ($sortType); ?> "><?php echo L("ROLE_ID");?><?php if(($order)  ==  "role_id"): ?><img src="__TMPL__Static/Images/<?php echo ($sortImg); ?>.gif" align="absmiddle"><?php endif; ?></a></th><th width="140" ><a href="javascript:sortBy('last_login_time','<?php echo ($sort); ?>','index')" title="按照<?php echo L("LAST_LOGIN_TIME");?><?php echo ($sortType); ?> "><?php echo L("LAST_LOGIN_TIME");?><?php if(($order)  ==  "last_login_time"): ?><img src="__TMPL__Static/Images/<?php echo ($sortImg); ?>.gif" align="absmiddle"><?php endif; ?></a></th><th width="100" ><a href="javascript:sortBy('last_login_ip','<?php echo ($sort); ?>','index')" title="按照<?php echo L("LAST_LOGIN_IP");?><?php echo ($sortType); ?> "><?php echo L("LAST_LOGIN_IP");?><?php if(($order)  ==  "last_login_ip"): ?><img src="__TMPL__Static/Images/<?php echo ($sortImg); ?>.gif" align="absmiddle"><?php endif; ?></a></th><th width="80" ><a href="javascript:sortBy('login_count','<?php echo ($sort); ?>','index')" title="按照<?php echo L("LOGIN_COUNT");?><?php echo ($sortType); ?> "><?php echo L("LOGIN_COUNT");?><?php if(($order)  ==  "login_count"): ?><img src="__TMPL__Static/Images/<?php echo ($sortImg); ?>.gif" align="absmiddle"><?php endif; ?></a></th><th width="140" ><a href="javascript:sortBy('create_time','<?php echo ($sort); ?>','index')" title="按照<?php echo L("CREATE_TIME");?><?php echo ($sortType); ?> "><?php echo L("CREATE_TIME");?><?php if(($order)  ==  "create_time"): ?><img src="__TMPL__Static/Images/<?php echo ($sortImg); ?>.gif" align="absmiddle"><?php endif; ?></a></th><th width="140" ><a href="javascript:sortBy('update_time','<?php echo ($sort); ?>','index')" title="按照<?php echo L("UPDATE_TIME");?><?php echo ($sortType); ?> "><?php echo L("UPDATE_TIME");?><?php if(($order)  ==  "update_time"): ?><img src="__TMPL__Static/Images/<?php echo ($sortImg); ?>.gif" align="absmiddle"><?php endif; ?></a></th><th width="60" ><a href="javascript:sortBy('status','<?php echo ($sort); ?>','index')" title="按照<?php echo L("STATUS");?><?php echo ($sortType); ?> "><?php echo L("STATUS");?><?php if(($order)  ==  "status"): ?><img src="__TMPL__Static/Images/<?php echo ($sortImg); ?>.gif" align="absmiddle"><?php endif; ?></a></th><th width="100">操作</th></tr></thead><tbody><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$admin): ++$i;$mod = ($i % 2 )?><tr ="<?php echo ($admin[""]); ?>" class="<?php if(($mod)  ==  "0"): ?>even<?php endif; ?>"><td class="first"><input type="checkbox" name="key"	value="<?php echo ($admin["id"]); ?>"></td><td ><?php echo ($admin["id"]); ?></td><td align="left" ><span class="pointer" module="Admin" href="javascript:;" onclick="textEdit(this,'<?php echo (addslashes($admin["id"])); ?>','admin_name')"><?php echo ($admin["admin_name"]); ?></span></td><td ><?php echo (getRoleName($admin["role_id"])); ?></td><td ><?php echo (toDate($admin["last_login_time"])); ?></td><td ><?php echo ($admin["last_login_ip"]); ?></td><td ><?php echo ($admin["login_count"]); ?></td><td ><?php echo (toDate($admin["create_time"])); ?></td><td ><?php echo (toDate($admin["update_time"])); ?></td><td ><span class="pointer" module="Admin" href="javascript:;" onclick="toggleStatus(this,'<?php echo (addslashes($admin["id"])); ?>','status')"><?php echo (getStatusImg($admin["status"])); ?></span></td><td><a href="javascript:;" onclick="editData(this,'<?php echo ($admin["id"]); ?>','id')"><?php echo L("EDIT");?></a>&nbsp;&nbsp;<a href="javascript:;" onclick="removeData(this,'<?php echo ($admin["id"]); ?>','id')"><?php echo L("REMOVE");?></a>&nbsp;&nbsp;</td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table>
<!-- Think 系统列表组件结束 -->

<div class="pager"><?php echo ($page); ?></div>
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