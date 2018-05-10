<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<ul class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) : ?>
	<li itemscope itemtype="https://schema.org/Article">
		<img src="images/site-image/circle.png" alt="">
		<a href="<?php echo $item->link; ?>" itemprop="url">
			<span itemprop="name">
				<!-- <?php echo $item->title; ?> -->
				<?php echo mb_substr($item->title, 0, 18, "utf-8");?>
				
				<?php if(mb_strlen($item->title) > 18) echo "....";?>
			</span>
		</a>
	</li>
<?php endforeach; ?>
<?php if(!empty($list)) {?>
<?php $url = $list[0]->link; $url = substr($url, 23);parse_str($url, $output);?>
<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
	  <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
	  <div id="more" class=" col-lg-4 col-md-4 col-sm-4 col-xs-4"><a href="http://193.112.85.48/grade-site/index.php?option=com_content&view=category&id=<?php echo $output['amp;catid'];?>&Itemid=<?php echo $output['amp;Itemid'];?>"><img src="images/site-image/more3.png" alt=""></a></div>      
</div>
<?php }?>
</ul>
<!-- <?php $url = $list[0]->link; $url = substr($url, 23);parse_str($url, $output);?>
<a href="http://193.112.85.48/grade-site/index.php?option=com_content&view=category&id=<?php echo $output['amp;catid'];?>&Itemid=<?php echo $output['amp;Itemid'];?>">more></a> -->
<!-- /grade-site/index.php?option=com_content&view=article&id=62:2-17&catid=11&Itemid=117 -->
<!-- <a href="<?php echo JRoute::_('index.php?option=com_content&view=category&id='.$list[0]->catid) ?>">more></a> -->