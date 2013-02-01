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
<div style="width:100%; text-align:center;">
	<div style="width:600px; border:solid 2px #3d97c0; background:#dae7ed; margin:80px auto 0 auto;">
		<div style="margin:10px; border:solid 1px #F00; background:#FFC; line-height:24px;">
			<?php echo L("SYSTEM_TIPS5");?>
		</div>
		<div style="background:url(__TMPL__Static/Images/loading_e.gif) no-repeat center 50px; padding:60px 20px 80px 20px;">
			<div id="notice" style="padding:20px 0 0 0;">
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript"> 
	function showmessage(message,isBack)
	{
		if(isBack == -2)
		{
			document.getElementById('notice').innerHTML = "";
		}
		if(isBack == -1)
		{
			message = "<span style='color:#f00;'>"+ message +"</span>";
		}
		else if(isBack == 1)
		{
			message = "<span style='color:#00f;'>"+ message +"</span>";
		}
		else if(isBack == 2)
		{
			var fun = function(){
				location.href = message;
			};
			
			setTimeout(fun,10);
			return false;
		}
		else if(isBack == 3)
		{
			message = "<span style='color:#00f;'>"+ message +"</span>";
			var fun = function(){
				location.href = "<?php echo U('Cache/system');?>";;
			};
			
			setTimeout(fun,100);
			return false;
		}
		
		document.getElementById('notice').innerHTML = message;
	}
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