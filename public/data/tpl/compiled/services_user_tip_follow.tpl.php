<? if(!defined('IN_FANWE')) exit('Access Denied'); if($uid == $_FANWE['uid']) { ?>
&nbsp;&nbsp;&nbsp;自己都不认识了？
<? } else { if($is_follow) { ?>
<span class="fl icrad_add">已关注</span>
<a class="follow_del" href="javascript:;" onclick="$.User_Follow(<?=$uid?>,this,UserTipFollowHandler);">取消</a>
<? } else { ?>
&nbsp;<a class="green_button" onclick="$.User_Follow(<?=$uid?>,this,UserTipFollowHandler);" href="javascript:;">+加关注</a>
<? } } ?>