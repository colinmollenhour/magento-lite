<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Core
 * @copyright   Copyright (c) 2013 Colin Mollenhour (http://colin.mollenhour.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

class Mage_Lite_Helper_Catalog_Data extends Mage_Core_Helper_Abstract
{

  /**
   * Solve dependency due to Mage/Adminhtml/controllers/Cms/Wysiwyg/ImagesController.php on line 159
   *
   * @param int $storeId
   * @return Mage_Lite_Helper_Catalog_Data
   */
  public function setStoreId($storeId)
  {
    return $this;
  }

}
