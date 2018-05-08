<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->checkSpotlight('article', 'article-1, article-2, article-3, article-4, article-5, article-6')) : ?>
	<!-- SPOTLIGHT 1 -->
	<div class="container t3-sl article">
		<?php $this->spotlight('article', 'article-1, article-2, article-3, article-4, article-5, article-6') ?>
	</div>
	<!-- //SPOTLIGHT 1 -->
<?php endif ?>