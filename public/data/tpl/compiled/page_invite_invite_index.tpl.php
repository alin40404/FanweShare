<? if(!defined('IN_FANWE')) exit('Access Denied'); ?>
<?php 
$css_list[0]['url'] = './tpl/css/invite.css';
 include template('inc/header'); ?><link rel="stylesheet" type="text/css" href="http://www.shopshare.com/tpl/uu43/css/invite.css" />
<div id="body" class="fm960">
<div class="piece1 mt20 mb20">
<div class="piece1_hd"></div>
<div class="piece1_bd">
<div id="invite_body" class="gd_16 ml20">
<dl class="intro gd_11 alp" style="margin-bottom:20px">
<dd id="gtCode">复制专用邀请链接，邀请好友，获取勋章:</dd>
</dl>
<dl class="intro gd_11 alp" style="margin-bottom:20px">
<dt>
【自动关注】你所邀请的新好友都会自动关注你，让你迅速成为<?=$_FANWE['setting']['site_name']?>耀眼的明星<? if(is_array($medal_list)) { foreach($medal_list as $medal) { ?><br>【<?=$medal['name']?>勋章】<?=$medal['desc']?>
<? } } ?>
</dt>
</dl>
<dl class="intro gd_11 alp" >
<dd id="gtCode"><?=$_FANWE['setting']['site_name']?>教你如何用自己的专用邀请链接来邀请好友:</dd>
</dl>
<dl class="act gd_11 alp">
<dd><img src="./tpl/images/share4.png"></dd>
<dt style="margin-bottom:75px;">
<span>这是您的专用邀请链接，通过 QQ 或 MSN 发送给好友：</span><br>
<textarea id="invite_link" rows="3"><?=$invite_content?>　<?=$invite_url?></textarea>
<div class="blank6"></div>
<div class="copy_box"><img id="ClipBoard" src="./tpl/images/copy_btn.png"></div>
<div class="clear"></div>
</dt>
<dd><img src="./tpl/images/share5.png"></dd>
<dt><span>分享给以下网站上的好友：</span>
<div class="share_sns">
<p class="fl"><?=$invite_content?></p>
<div class="sns_l r5"><a style="background-position: 0pt -40px;" target="_blank" href="<?=$sns_links['kaixin']?>">开心</a><a style="background-position: 0pt -80px;" target="_blank" href="<?=$sns_links['renren']?>">人人</a><a style="background-position: 0pt -202px;" target="_blank" href="<?=$sns_links['sina']?>">新浪微博</a><a style="background-position: 0pt -280px;" target="_blank" href="<?=$sns_links['tqq']?>">腾讯微博</a><a style="background-position: 0pt -120px;" target="_blank" href="<?=$sns_links['douban']?>">豆瓣</a><a style="background-position: 0pt -371px;" target="_blank" href="<?=$sns_links['qzone']?>">QQ空间</a><a style="background-position: 0pt -326px;" target="_blank" href="<?=$sns_links['baidu']?>">百度空间</a></div>
</div>
</dt>
</dl>
</div>
<script src="./public/js/swfobject.js" type="text/javascript" type="text/javascript"></script> 
<script type="text/javascript">
var copyCon = document.getElementById("invite_link").value;
var flashvars = {
content: encodeURIComponent(copyCon),
uri: './tpl/images/copy_btn.png'
};
var params = {
wmode: "transparent",
allowScriptAccess: "always"
};
swfobject.embedSWF("./public/swf/clipboard.swf", "ClipBoard", "96", "34", "9.0.0", null, flashvars, params);

function copySuccess()
{
alert("复制链接成功！");
}
</script>
<div class="clear"></div>
</div>
<div class="piece1_ft"></div>
</div>
</div><? include template('inc/footer'); ?>