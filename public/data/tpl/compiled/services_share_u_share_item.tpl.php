<? if(!defined('IN_FANWE')) exit('Access Denied'); 
0
|| checkTplRefresh('./tpl/pink2/services/share/u_share_item.htm', './tpl/pink2/inc/share/tags.htm', 1325606393, './data/tpl/compiled/services_share_u_share_item.tpl.php', './tpl/pink2', 'services/share/u_share_item')
;?>
<li class="t_f" id="SHARE_LIST_<?=$share_item['share_id']?>">
<div class="t_tag"> <a class="t" href="<?=$share_item['url']?>" target="_blank"><?=$share_item['time']?></a> </div>
<div class="hd"><?php echo setTplUserFormat($share_item['uid'],1,0,'m',48,'','avt icard r5',''); ?></div>
<div class="tk">
<div class="inf"><?php echo setTplUserFormat($share_item['uid'],0,1,'',0,'icard n gc','',''); ?><span>
<? if($share_item['type'] == 'ask') { ?>
发表<a target="_blank" title="<?=$share_item['title']?>" href="<?php echo FU('ask/detail',array("tid"=>$share_item['rec_id'])); ?>">《<?php echo cutStr($share_item['title'],30,'...');?>》</a>
<? } elseif($share_item['type'] == 'bar') { ?>
发表<a target="_blank" title="<?=$share_item['title']?>" href="<?php echo FU('club/detail',array("tid"=>$share_item['rec_id'])); ?>">《<?php echo cutStr($share_item['title'],30,'...');?>》</a>
<? } elseif($share_item['type'] == 'ask_post') { ?>
回应<a target="_blank" title="<?=$share_item['title']?>" href="<?php echo FU('ask/detail',array("tid"=>$share_item['rec_id'])); ?>">《<?php echo cutStr($share_item['title'],30,'...');?>》</a>
<? } elseif($share_item['type'] == 'bar_post') { ?>
回应<a target="_blank" title="<?=$share_item['title']?>" href="<?php echo FU('club/detail',array("tid"=>$share_item['rec_id'])); ?>">《<?php echo cutStr($share_item['title'],30,'...');?>》</a>
<? } elseif($share_item['type'] == 'album') { ?>
创建杂志社<a target="_blank" title="<?=$share_item['title']?>" href="<?php echo FU('album/show',array("id"=>$share_item['rec_id'])); ?>">《<?php echo cutStr($share_item['title'],30,'...');?>》</a>
<? } elseif($share_item['type'] == 'album_best') { ?>
推荐杂志社<a target="_blank" title="<?=$share_item['title']?>" href="<?php echo FU('album/show',array("id"=>$share_item['rec_id'])); ?>">《<?php echo cutStr($share_item['title'],30,'...');?>》</a>
<? } elseif($share_item['type'] == 'album_item') { ?>
加入杂志社<a target="_blank" title="<?=$share_item['title']?>" href="<?php echo FU('album/show',array("id"=>$share_item['rec_id'])); ?>">《<?php echo cutStr($share_item['title'],30,'...');?>》</a>
<? if($share_item['rec_uid'] > 0) { ?>
收入自 @<?php echo setTplUserFormat($share_item['rec_uid'],0,0,'',0,'','',''); } } if($share_item['is_rec_best'] == 1) { ?>
<img style="vertical-align:-3px; _vertical-align:-2px;" src="./tpl/images/topic_tj.png" />
<? } ?>
</span>
</div>
<p class="sms"><?=$share_item['content']?></p>
<? if(!empty($share_item['tags']['user']) || $share_item['is_eidt_tag']) { ?>
<?php 
$is_eidt_tag = $share_item['is_eidt_tag'];
$share_tags_share_id = $share_item['share_id'];
$share_tags = $share_item['tags']['user'];
 ?><div class="blank9"></div>
<div id="SHARE_TAGS_<?=$share_tags_share_id?>" class="fashion">
<? if($is_eidt_tag) { ?>
<div class="ed_fashion SHARE_TAG_EDIT_BOX">
<div class="fa_title">
<div class="fsl"><span>时尚元素</span>&nbsp;&nbsp;<?php echo sprintf('最多可以设置%d个标签,标签之间用空格隔开',$_FANWE['setting']['share_tag_count']); ?></div>
<div class="fsr"><a onclick="$.ShareTagClose('<?=$share_tags_share_id?>',this)" href="javascript:;">关闭</a></div>
</div>
<div class="fa_inp">
            <?php 
                $tags_val = array();
                foreach($share_tags as $share_tag)
                {
                    $tags_val[] = $share_tag['tag_name'];
                }
                $tags_val = implode(' ',$tags_val);
             ?>
<input type="text" value="<?=$tags_val?>" class="SHARE_TAG text">
<a onclick="$.ShareTagSave('<?=$share_tags_share_id?>',this)" href="javascript:;" style="text-align:center; line-height:30px; font-size:14px; color:#fff;">提交</a>
</div>
<div class="clear"></div>
</div>
<? } ?>
<div class="sw_fashion SHARE_TAG_SHOW_LIST">
<span>时尚元素：</span>
<? if(empty($share_item['tags']['user'])) { if($is_eidt_tag) { ?>
        <span class="SHARE_TAG_LIST"></span>
<span class="edit"><a onclick="$.ShareTagEdit('<?=$share_tags_share_id?>',this)" href="javascript:;">添加</a></span>
<? } } else { ?>
        <span class="SHARE_TAG_LIST"><? if(is_array($share_tags)) { foreach($share_tags as $share_tag) { ?><a href="<?=$share_tag['url']?>" target="_blank"><?=$share_tag['tag_name']?></a>
<? } } ?>
        </span>
<? if($is_eidt_tag) { ?>
<span class="edit"><a onclick="$.ShareTagEdit('<?=$share_tags_share_id?>',this)" href="javascript:;">编辑</a></span>
<? } } ?>
</div>
</div><? } if(!empty($share_item['imgs'])) { ?>
<div class="pic" style="position:relative;"><? if(is_array($share_item['imgs'])) { foreach($share_item['imgs'] as $share_item_img) { ?><div class="r3 fl">
<? if($share_item_img['type'] == 'g') { ?>
<img alt="<?=$share_item_img['name']?>" src="<?php echo getImgName($share_item_img['img'],160,160,0); ?>" class="fl"><img class="tag" src="./tpl/images/goods_tag.png">
<? } else { ?>
<img src="<?php echo getImgName($share_item_img['img'],160,160,0); ?>">
<? } ?>
</div>
<? } } ?>
</div>
<ul class="pic_b"><? if(is_array($share_item['imgs'])) { foreach($share_item['imgs'] as $share_item_img) { ?><li style="width: 468px; display: list-item; display:none;" class="pic_b_f r5">
<? if($share_item_img['type'] == 'g') { ?>
<div class="pic_b_hd">
<a ref="nofollow" target="_blank" href="<?=$share_item_img['to_url']?>" class="mg_slink ofh"><?=$share_item_img['name']?></a>
<a class="buy_it mg_slink" target="_blank" href="<?=$share_item_img['to_url']?>"><span class="g_p"><span><?=$share_item_img['price_format']?></span></span><i></i></a>			
</div>
<div class="pic_b_bd">
<a class="add_to_album_btn" href="javascript:;" style="display: none;" onclick="$.Show_Rel_Album(<?=$share_item_img['id']?>,'goods');"></a>
<img class="lazyload" alt="<?=$share_item_img['name']?>" original="<?php echo getImgName($share_item_img['img'],468,468,0); ?>" src="./tpl/images/lazyload.gif">
</div>
<div class="show_big">
<img class="big_book" style="right:37px" src="./tpl/images/book_13x13.png">
<a class="big_detail" ref="nofollow" style="right:10px" target="_blank" href="<?=$share_item_img['url']?>">详情</a>
</div>
<? } else { ?>
<div class="pic_b_bd">
<a class="add_to_album_btn" href="javascript:;" style="display: none;" onclick="$.Show_Rel_Album(<?=$share_item_img['id']?>,'photo');"></a>
<img class="lazyload" original="<?php echo getImgName($share_item_img['img'],468,468,0); ?>" src="./tpl/images/lazyload.gif">
</div>	
<div class="show_big">
<img class="big_book" src="./tpl/images/book_13x13.png">
<a class="big_detail" ref="nofollow" target="_blank" href="<?=$share_item_img['url']?>">详情</a>
<img class="big_cur" src="./tpl/images/big_13x13.png">
<a class="bigimg" ref="nofollow" target="_blank" href="<?=$share_item_img['img']?>">查看原图</a>
</div>			  
<? } ?>
</li>
<? } } ?>
</ul>
<div class="clear"></div>
<? } ?>
<div class="tl">
<a w="f" href="javascript:;" class="add_fav fav" onclick="$.Fav_Share(<?=$share_item['share_id']?>,this,32,'#SHARE_LIST_<?=$share_item['share_id']?>');"></a>
<div class="favDiv">
<a href="<?=$share_item['url']?>" target="_blank" class="SHARE_FAV_COUNT favCount"><?=$share_item['collect_count']?></a><i></i>
</div>
<? if($share_item['authoritys'] > 0) { ?>
<a w="f" href="javascript:;" class="mg SHARE_MANAGE">管理</a>
<? } ?>
<a w="f" href="javascript:;" class="fw ed" onclick="$.Relay_Share(<?=$share_item['share_id']?>);">转发(<?=$share_item['relay_count']?>)</a>
<a w="f" href="javascript:;" class="cmt ed" shareID="<?=$share_item['share_id']?>" onclick="$.Get_Share_Comment_List(this);">评论(<?=$share_item['comment_count']?>)</a>
</div>
<ul class="SHARE_FAV_LIST u_like">
</ul>
<ul class="t_m_l_h SHARE_MANAGE_LIST">
<? if($share_item['authoritys'] > 0) { ?>
<li><a class="del" onclick="$.Tweet_Delete(<?=$share_item['share_id']?>)" href="javascript:void(0);">删除</a></li>
<? if($share_item['authoritys'] > 1) { ?>
<li><a class="del" onclick="$.Tweet_Delete(<?=$share_item['share_id']?>,1)" href="javascript:void(0);">剔除</a></li>
<? } } ?>
</ul>
</div>
<div class="clear"></div>
</li>