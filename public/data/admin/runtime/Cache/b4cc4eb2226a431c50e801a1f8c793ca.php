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
<div class="tabs-title">
	<?php if(is_array($conf_list)): $i = 0; $__LIST__ = $conf_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><div class="tt-item <?php if($i == 1): ?>active<?php endif; ?>" rel="<?php echo ($key); ?>"><p><a href="javascript:;"><?php echo ($key); ?></a></p></div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<form method='post' id="form" name="form" action="<?php echo U(MODULE_NAME.'/update');?>" enctype="multipart/form-data">
<div class="tabs-body">
<?php if(is_array($conf_list)): $i = 0; $__LIST__ = $conf_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><table cellpadding="4" cellspacing="0" border="0" class="table-form tabs-item <?php if($i == 1): ?>tabs-active<?php endif; ?>" rel="<?php echo ($key); ?>">
	<?php if(is_array($vo)): foreach($vo as $key=>$vo_item): ?><tr>
			<th width="190"><?php echo L('TITLE_'.$vo_item['name']);?>：</th>
			<td>
				<?php if($vo_item['list_type'] == 0): ?><!-- 手动输入 -->
					<input type="text" class="textinput" name="<?php echo ($vo_item["name"]); ?>" value="<?php echo ($vo_item["val"]); ?>" />
				<?php elseif($vo_item['list_type'] == 1): ?>
					<?php if(is_array($vo_item['val_arr'])): foreach($vo_item['val_arr'] as $key=>$val_item): ?><!-- 单选 -->
					<label><input type="radio" name="<?php echo ($vo_item["name"]); ?>" value="<?php echo ($val_item); ?>" <?php if($val_item == $vo_item['val']): ?>checked="checked"<?php endif; ?> />&nbsp;<?php echo L("TITLE_".$vo_item['name']."_".$val_item);?></label><?php endforeach; endif; ?>
				<?php elseif($vo_item['list_type'] == 2): ?><!-- 下拉 -->
					<?php if(in_array($vo_item['name'],array('DEFAULT_LANG','SITE_TMPL'))): ?><select name="<?php echo ($vo_item["name"]); ?>">
						<?php if(is_array($vo_item['val_arr'])): foreach($vo_item['val_arr'] as $key=>$val_item): ?><option value="<?php echo ($val_item); ?>" <?php if($val_item == $vo_item['val']): ?>selected="selected"<?php endif; ?>><?php echo ($val_item); ?></option><?php endforeach; endif; ?>
					</select>
					<?php else: ?>
					<select name="<?php echo ($vo_item["name"]); ?>">
						<?php if(is_array($vo_item['val_arr'])): foreach($vo_item['val_arr'] as $key=>$val_item): ?><option value="<?php echo ($val_item); ?>" <?php if($val_item == $vo_item['val']): ?>selected="selected"<?php endif; ?>><?php echo L("TITLE_".$vo_item['name']."_".$val_item);?></option><?php endforeach; endif; ?>
					</select><?php endif; ?>
				<?php elseif($vo_item['list_type'] == 3): ?><!-- 文本域 -->
					<textarea class="areainput" rows="3" name="<?php echo ($vo_item["name"]); ?>"><?php echo ($vo_item["val"]); ?></textarea>
				<?php elseif($vo_item['list_type'] == 5): ?><!-- 编辑器 -->
					<script type="text/javascript" src="__TMPL__Static/Ckeditor/ckeditor.js"></script><script type="text/javascript" src="__TMPL__Static/Ckfinder/ckfinder.js"></script><textarea id="<?php echo ($vo_item["name"]); ?>_editor" name="<?php echo ($vo_item["name"]); ?>"><?php echo ($vo_item["val"]); ?></textarea><script type="text/javascript">var <?php echo ($vo_item["name"]); ?>_editor =CKEDITOR.replace("<?php echo ($vo_item["name"]); ?>_editor",{"width":"96%","height":"130px","toolbar":"Default"}) ;CKFinder.setupCKEditor(<?php echo ($vo_item["name"]); ?>_editor,"__TMPL__Static/Ckfinder") ;</script>
				<?php elseif($vo_item['list_type'] == 4): ?><!-- 图片域 -->
					<input type="file" class="fileinput" name="<?php echo ($vo_item["name"]); ?>" /> 
					<?php if($vo_item['val'] != ''): ?><a href="__ROOT__/<?php echo ($vo_item["val"]); ?>" target="_blank" ><?php echo L("VIEW");?></a><?php endif; ?><?php endif; ?>
			</td>
		</tr>
        <?php
            $title_key = 'TITLE_'.$vo_item['name'].'_TIPS';
            $tips_lang = L($title_key);
            if($tips_lang == $title_key)
                $show_tips = false;
            else
                $show_tips = true;
        ?>
        <?php if($show_tips): ?><tr>
            <th>&nbsp;</th>
            <td>
                <?php echo ($tips_lang); ?>
            </td>
        </tr><?php endif; ?><?php endforeach; endif; ?>
</table><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<table cellpadding="4" cellspacing="0" border="0" class="table-form" style="border-top:none;">
	<tr class="act">
		<th width="200">&nbsp;</th>
		<td>
			<input type="submit" class="submit_btn" value="<?php echo L("SUBMIT");?>" />
			<input type="reset" class="reset_btn" value="<?php echo L("RESET");?>" />
		</td>
	</tr>
</table>
</form>
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