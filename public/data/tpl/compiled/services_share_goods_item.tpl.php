<? if(!defined('IN_FANWE')) exit('Access Denied'); ?>
<li class="g_f PUB_SHARTE_GOODS" title="拖动图片进行排序">
<div class="r5 g">
<a class="del" href="javascript:;" onclick="$.Pub_Share_Img_Remove(this)"></a>
<p><img src="<?=$goods['item']['pic_url']?>" height="80" title="<?=$goods['item']['name']?>&#10;¥<?=$goods['item']['price']?>"></p>
<img alt="" class="tag" src="./tpl/images/goods_tag.png">
<input type="hidden" name="goods[<?=$result['key']?>]" value="<?=$result['info']?>" />
<input type="hidden" class="GOODS_ITEM_TAG" name="goods_tags[<?=$result['key']?>]" value="<?=$result['tags']?>" />
<input type="hidden" class="share_sort" name="goods_sort[<?=$result['key']?>]" value="" />
</div>
</li>