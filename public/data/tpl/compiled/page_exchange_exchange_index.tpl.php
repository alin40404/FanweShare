<? if(!defined('IN_FANWE')) exit('Access Denied'); 
0
|| checkTplRefresh('./tpl/pink2/page/exchange/exchange_index.htm', './tpl/pink2/inc/pages.htm', 1358324477, './data/tpl/compiled/page_exchange_exchange_index.tpl.php', './tpl/pink2', 'page/exchange/exchange_index')
;?>
<?php 
$css_list[0]['url'] = './tpl/css/exchange.css';
$js_list[0] = './tpl/js/exchange.js';
 include template('inc/header'); ?><div id="body" class="fm960">
<div class="fl" style="width:706px;">
<? if(count($best_list) > 0) { ?>
<h3 class="f14 mt20"><span class="red">精品推荐</span></h3><? if(is_array($best_list)) { foreach($best_list as $goods) { ?><div class="mTuan">
<div class="pic">
<a><img alt="<?=$goods['name']?>" src="<?=$goods['img']?>" style="width:315px;" /></a>
</div>
<h3 class="mt10"><a><?=$goods['name']?></a></h3>
<dl class="mt10">
<a class="exchangeBtn" href="javascript:;" goodsID="<?=$goods['id']?>" goodsType="<?=$goods['goods_type']?>">
<dt style="background:url(./tpl/images/tuan_ico.png) no-repeat 0 0;"><p><span><?=$goods['integral']?>分</span></p></dt>
</a>
<dd>
<p>库存剩余<b><?=$goods['num']?></b></p>
<p>已兑数量<b><?=$goods['buy_count']?></b></p>
<p>每人限兑<b><?=$goods['user_num']?></b></p>
</dd>
</dl>
</div>
<? } } ?>
<div class="clear"></div>
<? } if(count($goods_list) > 0) { ?>
<h3 class="f14 mt20"><span class="red">兑换专区</span></h3><? if(is_array($goods_list)) { foreach($goods_list as $goods) { ?><div class="mTuan">
<div class="pic">
<a><img alt="<?=$goods['name']?>" src="<?=$goods['img']?>" style="width:315px;" /></a>
</div>
<h3 class="mt10"><a><?=$goods['name']?></a></h3>
<dl class="mt10">
<a class="exchangeBtn" href="javascript:;" goodsID="<?=$goods['id']?>" goodsType="<?=$goods['goods_type']?>">
<dt><p><span><?=$goods['integral']?>分</span></p></dt>
</a>
<dd>
<p>库存剩余<b><?=$goods['num']?></b></p>
<p>已兑数量<b><?=$goods['buy_count']?></b></p>
<p>每人限兑<b><?=$goods['user_num']?></b></p>
</dd>
</dl>
</div>
<? } } ?>
<div class="clear"></div>
<? } if($pager['page_count'] > 1) { ?>
<div class="pagination mt20"> <? if($pager['page_count'] > 1) { ?>
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
<? } ?>
</div>
<div class="exchange_right">
<dl>
<dd class="content">
<? if($_FANWE['uid'] > 0) { ?>
<div class="er_info">
<span class="fl">&nbsp;&nbsp;当前积分：<b class="red"><?=$_FANWE['user']['credits']?></b></span>
<span class="fr"><a href="<?php echo FU('exchange/rule',array()); ?>" target="_blank">如何赚取积分？</a></span>
</div>
<div class="er_link">
<a href="<?php echo FU('u/exchange',array()); ?>"><img src="./tpl/images/exchange.jpg" /></a>
</div>
<? } else { ?>
<div class="er_link">
<a href="<?php echo FU('user/login',array()); ?>"><img src="./tpl/images/login.jpg" /></a>
</div>
<div class="er_rule"><a href="<?php echo FU('exchange/rule',array()); ?>" target="_blank">如何赚取积分？</a></div>
<? } ?>
</dd>
</dl>
<div class="blank12"></div>
<dl>
<dt><strong>兑换快报</strong></dt>
<dd class="text-list">
<? if(count($order_list) > 0) { ?>
<ul><? if(is_array($order_list)) { foreach($order_list as $order) { ?><li><p><?=$order['create_time_format']?>&nbsp;会员&nbsp;<span><?php echo setTplUserFormat($order['uid'],0,0,'',0,'','',''); ?></span>&nbsp;兑换了&nbsp;<?=$order['data_name']?>&nbsp;<span><?=$order['data_num']?></span>&nbsp;件</p></li>
<? } } ?>
</ul>
<? } else { ?>
<div class="empty">&nbsp;</div>
<? } ?>
</dd>
</dl>
<div class="blank12"></div>
<dl>
<dt><strong>积分TOP10</strong></dt>
<dd class="top">
<? if(count($score_list) > 0) { ?>
<ul><?php $index = 1; if(is_array($score_list)) { foreach($score_list as $score_item) { ?><li><span class="i<? if($index < 4) { ?> t<? } ?>"><? if($index < 10) { ?>0<? } ?><?=$index?></span><span class="u"><?php echo setTplUserFormat($score_item['uid'],0,0,'',0,'','',''); ?></span><span class="j">积分：<?=$score_item['credits']?></span></li><?php $index++; } } ?>
</ul>
<? } else { ?>
<div class="empty">&nbsp;</div>
<? } ?>
</dd>
</dl>
<div class="blank12"></div>
<dl>
<dt><strong>兑换TOP10</strong></dt>
<dd class="top">
<? if(count($exchange_list) > 0) { ?>
<ul><?php $index = 1; if(is_array($exchange_list)) { foreach($exchange_list as $exchange_item) { ?><li><span class="i<? if($index < 4) { ?> t<? } ?>"><? if($index < 10) { ?>0<? } ?><?=$index?></span><span class="u1"><?php echo setTplUserFormat($exchange_item['uid'],0,0,'',0,'','',''); ?></span><span class="j j1">兑换了<?=$exchange_item['sum_count']?>件礼品</span></li><?php $index++; } } ?>
</ul>
<? } else { ?>
<div class="empty">&nbsp;</div>
<? } ?>
</dd>
</dl>
</div>
<div class="clear"></div>
</div>
<div id="consignee" style="display:none;">
<table border="0" cellpadding="0" cellspacing="1">
<tr>
<td class="l">详细地址：</td>
<td colspan="3"><input type="text" id="c-address" class="finput" style="width:454px;" value="<?=$consignee['address']?>" /></td>
</tr>
<tr>
<td class="l">电子邮箱：</td>
<td><input type="text" id="c-email" class="finput" style="width:180px;" value="<?=$consignee['email']?>"/></td>
<td class="l">邮政编码：</td>
<td><input type="text" id="c-zip" class="finput" style="width:180px;" value="<?=$consignee['zip']?>"/></td>
</tr>
<tr>
<td class="l">手机号码：</td>
<td><input type="text" id="c-mobile-phone" class="finput" style="width:180px;" value="<?=$consignee['mobile_phone']?>"/></td>
<td class="l">固定电话：</td>
<td><input type="text" id="c-fax-phone" class="finput" style="width:180px;" value="<?=$consignee['fax_phone']?>"/></td>
</tr>
<tr>
<td class="l">传真号码：</td>
<td><input type="text" id="c-fix-phone" class="finput" style="width:180px;" value="<?=$consignee['fix_phone']?>"/></td>
<td class="l">ＱＱ号码：</td>
<td><input type="text" id="c-qq" class="finput" style="width:180px;" value="<?=$consignee['qq']?>"/></td>
</tr>
<tr>
<td class="l">备　　注：</td>
<td colspan="3"><textarea id="c-memo" class="finput" style="width:454px; height:80px;"></textarea></td>
</tr>
<tr>
<td class="l">&nbsp;</td>
<td colspan="3">
<a id="submitConsignee" href="javascript:;"><img src="./tpl/images/confirm_btn.png" /></a>
</td>
</tr>
</table>
</div><? include template('inc/footer'); ?>