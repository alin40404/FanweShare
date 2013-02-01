<? if(!defined('IN_FANWE')) exit('Access Denied'); ?>
<?php 
$hot_topics = FS('Topic')->getImgTopic('hot',10,3);
 ?>
<div class="mb25 s_hot_pic">
<h3 class="mb10">热门主题</h3>
<ul class="mr20"><? if(is_array($hot_topics)) { foreach($hot_topics as $thread) { ?><li><?php echo setTplUserFormat($thread['uid'],0,0,'',0,'n gc','',''); ?><a href="<?=$thread['url']?>" class="title"><?php echo cutStr($thread['title'],70,'...');?></a>
<div class="shp_img mt5 clearfix"><? if(is_array($thread['imgs'])) { foreach($thread['imgs'] as $img) { ?><a href="<?=$thread['url']?>"><img src="<?php echo getImgName($img['img'],100,100,0); ?>"></a>
<? } } ?>
</div>
</li>
<? } } ?>
</ul>
</div>
