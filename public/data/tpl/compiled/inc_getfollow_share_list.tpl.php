<? if(!defined('IN_FANWE')) exit('Access Denied'); if($is_follow == 0) { ?>
<a href="javascript:void(0);" onclick="$.User_Follow(<?=$uid?>,this,ShareListUpdateUserFollow);"><img src="./tpl/images/addfollower.png"></a>
<? } ?>