<?php

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
