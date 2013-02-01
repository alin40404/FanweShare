<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>
<head>
<title><?php echo L("PAGE_MSG");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="__TMPL__Static/Css/style.css" rel="stylesheet" />
<script type="text/javascript" src="__TMPL__Static/Js/jquery.js"></script>
</head>
<body>
	<div class="fanwe-body">
		<div class="fb-title"><div><p><span><?php echo L("PAGE_MSG");?></span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
							<table cellpadding="0" cellspacing="0" align="center" class="table-tootip table-tootip-success">
								<?php if(isset($message)): ?><tr>
									<th><img src="__TMPL__Static/Images/success.png" /></th>
									<td>
										<p><?php echo ($msgTitle); ?></p>
										<p style="color:blue;"><?php echo ($message); ?></p>
										<?php if(!isset($closeWin)): ?><p><?php echo L("SYS_WILL");?> <strong style="color:blue;" class="wait-second"><?php echo ($waitSecond); ?></strong> <?php echo L("PAGE_JUMP_TIP");?> <a href="<?php echo ($jumpUrl); ?>"><?php echo L("HERE");?></a></p><?php endif; ?>
									</td>
								</tr><?php endif; ?>
								<?php if(isset($error)): ?><tr>
									<th><img src="__TMPL__Static/Images/error.png" /></th>
									<td>
										<p><?php echo ($msgTitle); ?></p>
										<p style="color:#f30;"><?php echo ($error); ?></p>
										<?php if(!isset($closeWin)): ?><p><?php echo L("SYS_WILL");?> <strong style="color:blue;" class="wait-second"><?php echo ($waitSecond); ?></strong> <?php echo L("PAGE_JUMP_TIP");?> <a href="<?php echo ($jumpUrl); ?>"><?php echo L("HERE");?></a></p><?php endif; ?>
									</td>
								</tr><?php endif; ?>
								<?php if(isset($closeWin)): ?><tr>
									<th><img src="__TMPL__Static/Images/close.png" /></th>
									<td>
										<p><?php echo L("SYS_WILL");?> <strong style="color:blue;" class="wait-second"><?php echo ($waitSecond); ?></strong> <?php echo L("PAGE_CLOSE_TIP");?> <a href="<?php echo ($jumpUrl); ?>"><?php echo L("HERE");?></a></p>
									</td>
								</tr><?php endif; ?>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
<script type="text/javascript">
<?php if($jumpUrl != ''): ?>var timeout = 0;
var waitSecond = parseInt(<?php echo ($waitSecond); ?>);
var refreshFun = function(){
	timeout++;
	if(waitSecond <= timeout)
		location.href = "<?php echo ($jumpUrl); ?>";
	else
	{
		$('.wait-second').html(waitSecond - timeout);
		setTimeout(refreshFun,1000);
	}
};
setTimeout(refreshFun,1000);<?php endif; ?>

jQuery(function($){
	updateBodyDivHeight();
	$(window).resize(function(){
		updateBodyDivHeight();
	});
});

function updateBodyDivHeight()
{
	jQuery(".body-table-div").height(jQuery(".fanwe-body").height() - 37);
}
</script>
</html>