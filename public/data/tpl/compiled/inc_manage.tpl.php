<? if(!defined('IN_FANWE')) exit('Access Denied'); if($page='book_index') { if(getIsManage('share')) { ?>
$('.i_w_f').hover(function(){
var shareID = this.getAttribute('shareID');
if(shareID)
$.GetManageMenu('share',shareID,this);
},function(){});
<? } } elseif($page='book_dapei') { if(getIsManage('share')) { ?>
$('.i_w_f').hover(function(){
var shareID = this.getAttribute('shareID');
if(shareID)
$.GetManageMenu('dapei',shareID,this);
},function(){});
<? } } elseif($page='book_look') { if(getIsManage('share')) { ?>
$('.i_w_f').hover(function(){
var shareID = this.getAttribute('shareID');
if(shareID)
$.GetManageMenu('share',shareID,this);
},function(){});
<? } } ?>