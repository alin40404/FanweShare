<? if(!defined('IN_FANWE')) exit('Access Denied'); 
0
|| checkTplRefresh('./tpl/pink2/page/u/u_exchange.htm', './tpl/pink2/inc/pages.htm', 1358238032, './data/tpl/compiled/page_u_u_exchange.tpl.php', './tpl/pink2', 'page/u/u_exchange')
;?>
<?php 
$css_list[0]['url'][] = './tpl/css/zone.css';
$js_list[0] = './tpl/js/zone.js';
 include template('inc/header'); ?><div id="body" class="fm960">
<div class="homens_hd"></div>
<div class="homens_bd clearfix">
<div id="content" class="clearfix" style="width:960px;"><? include template('inc/u/u_menu'); ?><div class="content fr" style="width:820px;">
<div class="zone_head" style="margin:0 20px;">
<div class="mb15">
<h1 class="zone_title">兑换订单列表</h1>
<a href="<?php echo FU('exchange',array()); ?>" style="font-size:20px;" class="zone_pub">兑换商品</a>
</div>
<div> 
<div class="zone_cat fl">
<a href="<?php echo FU('u/exchange',array()); ?>"<? if($goods_status == 0) { ?> class="c"<? } ?>>所有订单</a>
<span>|</span>
<a href="<?php echo FU('u/exchange',array("status"=>"1")); ?>"<? if($goods_status == 1) { ?> class="c"<? } ?>>处理中订单</a>
<span>|</span>
<a href="<?php echo FU('u/exchange',array("status"=>"2")); ?>"<? if($goods_status == 2) { ?> class="c"<? } ?>>已完成订单</a>
</div>
</div>
</div>
<table class="list-table" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr class="lt-title">
<th class="first" width="110">订单号</th>
<th width="200">兑换商品</th>
<th width="130">下单时间</th>
<th width="70">使用积分</th>
<th width="70">处理状态</th>
<th class="last">处理结果</th>
</tr><? if(is_array($order_list)) { foreach($order_list as $order) { ?><tr>
<td class="lt-td first"><?=$order['sn']?></td>
<td class="lt-td tl"><?=$order['data_name']?></td>
<td class="lt-td"><?=$order['create_time']?></td>
<td class="lt-td"><?=$order['order_score']?></td>
<td class="lt-td"><?=$order['goods_status']?></td>
<td class="lt-td last tl"><?=$order['adm_memo']?></td>
</tr>
<? } } ?>
</tbody>
</table>
<div class="pagination pt15"><? if($pager['page_count'] > 1) { ?>
<div class="pages">
<? if($pager['page'] > 1) { ?>
<a href="<?=$pager['page_prev']?>" class="page_prev" page="<?=$pager['prev_page']?>">&lt;上一页</a>
<? } if(is_array($pager['page_nums'])) { foreach($pager['page_nums'] as $page_num) { if($pager['page'] == $page_num['name']) { ?>
<a class="c"><?=$page_num['name']?></a>
<? } elseif($page_num['name'] == '...') { ?>
<i>...</i>
<? } else { ?>
<a href="<?=$page_num['url']?>" page="<?=$page_num['name']?>"><?=$page_num['name']?></a>
<? } } } if($pager['page'] < $pager['page_count']) { ?>
<a href="<?=$pager['page_next']?>" class="page_next" page="<?=$pager['next_page']?>">下一页&gt;</a>
<? } ?>
</div>
<? } ?> 
</div>
</div>
</div>
</div>
<div class="homews_ft"></div>
</div>
<script type="text/javascript">
jQuery(function($){
$(".msg_list li").hover(function(){
$(this).addClass('active');
},function(){
$(this).removeClass('active');
});

$(".msg_list li").click(function(){
var href = this.getAttribute('href');
var fun = function(){
location.href = href;
};
if(href != null && href != '')
setTimeout(fun,1);
});

$(".msg_list li input").click(function(event){
event.stopPropagation();
});

$("#selectMsgAll").change(function(){
if(this.checked)
{
$(".msg_mlid").attr('checked',true);
$(".msg_mid").attr('checked',true);
$(".notice_id").attr('checked',true);
}
else
{
$(".msg_mlid").attr('checked',false);
$(".msg_mid").attr('checked',false);
$(".notice_id").attr('checked',false);
}
});

$("#removeMsg").click(function(){
var mlids = new Array();
$(".msg_mlid:checked").each(function(){
mlids.push(this.value);
});

var mids = new Array();
$(".msg_mid:checked").each(function(){
mids.push(this.value);
});

var nids = new Array();
$(".notice_id:checked").each(function(){
nids.push(this.value);
});

if(mlids.length > 0 || mids.length > 0 || nids.length > 0)
{
$("#removeMsg").attr('disabled',true);
var query = new Object();
query.mlid = mlids.join(",");
query.mid = mids.join(",");
query.nid = nids.join(",");

$.ajax({
url: SITE_PATH+"services/service.php?m=user&a=removemsg",
type: "POST",
data:query,
dataType: "json",
success: function(result){
for(var mlid in result.mlid)
{
if(result.mlid[mlid] > 0)
{
$(".msg_list li[mlid='"+ mlid +"']").remove();	
}
}

for(var mid in result.mid)
{
if(result.mid[mid] > 0)
{
$(".msg_list li[mid='"+ mid +"']").remove();	
}
}

for(var nid in result.nid)
{
if(result.nid[nid] > 0)
{
$(".msg_list li[nid='"+ nid +"']").remove();	
}
}

if($(".msg_list li").length == 0)
{
location.reload(true);
}
},
error:function(){
alert('删除信件失败，请稍候重新删除');
$("#removeMsg").attr('disabled',false);
}
});
}
});
});
</script><? include template('inc/footer'); ?>