<? if(!defined('IN_FANWE')) exit('Access Denied'); 
0
|| checkTplRefresh('./tpl/pink2/page/u/u_topic.htm', './tpl/pink2/inc/pages.htm', 1358238027, './data/tpl/compiled/page_u_u_topic.tpl.php', './tpl/pink2', 'page/u/u_topic')
;?>
<?php 
$css_list[0]['url'][] = './tpl/css/tweetlist.css';
$css_list[0]['url'][] = './tpl/css/zone.css';
$js_list[0] = './tpl/js/zone.js';
 include template('inc/header'); ?><div id="body" class="fm960">
<div class="homews_hd"></div>
<div class="homews_bd clearfix">
<div id="content" class="fl" style="width:730px;"><? include template('inc/u/u_menu'); ?><div class="content fr" style="width:595px;">
<div class="zone_head" style="margin:0 10px;">
<div class="mb15">
<h1 class="zone_title"><?=$_FANWE['home_user_names']['short']?>的主题</h1>
</div>
<div> 
<div class="zone_cat fl">
<a href="<?php echo FU('u/topic',array("uid"=>$home_uid)); ?>"<? if(ACTION_NAME == 'topic') { ?> class="c"<? } ?>><?=$_FANWE['home_user_names']['short']?>发表的</a>
<span>|</span>
<a href="<?php echo FU('u/maybe',array("uid"=>$home_uid)); ?>"<? if(ACTION_NAME == 'maybe') { ?> class="c"<? } ?>><?=$_FANWE['home_user_names']['short']?>关注的人</a>
<span>|</span>
<a href="<?php echo FU('u/ask',array("uid"=>$home_uid)); ?>"<? if(ACTION_NAME == 'ask') { ?> class="c"<? } ?>><?=$_FANWE['home_user_names']['short']?>的问题</a>
<span>|</span>
<a href="<?php echo FU('u/attention',array("uid"=>$home_uid)); ?>"<? if(ACTION_NAME == 'attention') { ?> class="c"<? } ?>><?=$_FANWE['home_user_names']['short']?>关注的</a>
<span>|</span>
<a href="<?php echo FU('u/feed',array("uid"=>$home_uid)); ?>"<? if(ACTION_NAME == 'feed') { ?> class="c"<? } ?>><?=$_FANWE['home_user_names']['short']?>回应的</a>
</div>
</div>
</div>
<? if(empty($thread_list)) { ?>
<div class="empty">
<img alt="" class="fl" src="./tpl/images/fanwe4.png">
<span>呼~~这里还是空的~~</span>
</div> 
<? } else { ?>
<div class="topic_full_list">
<ul><? if(is_array($thread_list)) { foreach($thread_list as $thread) { ?><li class="tfl_feed">
<div class="tflf_hd clear_in">
<div style="margin-left:60px; width:478px;">
<h1><a target="_blank" href="<?=$thread['url']?>"><?php echo cutStr($thread['title'],46,'...');?></a></h1>
</div>
</div>
<div class="tflf_bd">
<? if(!empty($thread['imgs'])) { ?>
<div class="cover">
<a href="<?=$thread['url']?>" target="_blank" class="cover_image" style="background-image: url(<?php echo getImgName($thread['imgs'][0]['img'],468,468,0); ?>)"></a>
<? if($thread['post_count'] > 0) { ?>
<div class="fb"> <em class="fl"><?=$thread['post_count']?></em> 回应 <span class="fb_r"></span> </div>
<? } ?>
</div>
<? } ?>
<pre class="content"><?php echo cutStr($thread['content'],300,'...');?></pre>
</div>
<div class="tflf_ft">
<a href="<?=$thread['url']?>" target="_blank" class="more">查看主题</a>
<? if(empty($thread['imgs']) && $thread['post_count'] > 0) { ?>
<span class=" fl fb_txt">回应(<?=$thread['post_count']?>)</span>
<? } ?>
<div class="fr">
<span class="time"><?=$thread['time']?></span>
<a href="<?=$thread['cate']['url']?>" target="_blank" class="from">[<?=$thread['cate']['name']?>]</a>
</div>
</div>
</li>
<? } } ?>
</ul>
</div>
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
<? } ?>
</div>
</div>
<div id="sidebar" class="fr pl15" style="width:215px;"><? include template('inc/u/u_topic'); ?></div>
</div>
<div class="homews_ft"></div>
</div><? include template('inc/footer'); ?>