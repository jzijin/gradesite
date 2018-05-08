<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->checkSpotlight('article2', 'article2-1, article2-2, article2-3, article2-4, article2-5, article2-6')) : ?>
	<!-- SPOTLIGHT 1 -->
	<div class="container t3-sl article2">
		<?php $this->spotlight('article2', 'article2-1, article2-2, article2-3, article2-4, article2-5, article2-6') ?>
	</div>
	<!-- //SPOTLIGHT 1 -->
<?php endif ?>