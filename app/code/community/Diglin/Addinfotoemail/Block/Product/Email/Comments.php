<?php
/**
 * Diglin
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Diglin
 * @package     Diglin_Addinfotoemail
 * @copyright   Copyright (c) 2011 Diglin (http://www.diglin.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Diglin_Addinfotoemail_Block_Product_Email_Comments extends Mage_Core_Block_Template {
	
	/**
	 * 
	 * @param Mage_Sales_Model_Order_Item $items
	 * @return array $comments
	 */
	public function getComments($items) {
		$comments = array();
		if (is_array ( $items )) {
			$i = 0;
			foreach ( $items as $item ) {
				$product = Mage::getModel ( 'catalog/product' )->load ( $item->getProductId () );
				$comment =  $product->getCommentMail ();
				if (! empty ( $comment )) {
					$comments [$i] ['title'] = $product->getName ();
					$comments [$i] ['comment'] = $comment;
					$i ++;
				}
			}
		}
		return $comments;
	}
}