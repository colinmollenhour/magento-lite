<?php
/**
 * Magento Enterprise Edition
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Enterprise Edition License
 * that is bundled with this package in the file LICENSE_EE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magentocommerce.com/license/enterprise-edition
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
 * @category    Varien
 * @package     Varien_Data
 * @copyright   Copyright (c) 2011 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://www.magentocommerce.com/license/enterprise-edition
 */


/**
 * Form Input/Output Strip HTML tags Filter
 *
 * @category    Varien
 * @package     Varien_Data
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Varien_Data_Form_Filter_Datetime extends Varien_Data_Form_Filter_Date
{
    /**
     * Returns the result of filtering $value
     *
     * @param string $value
     * @return string
     */
    public function inputFilter($value)
    {
        $filterInput = new Zend_Filter_LocalizedToNormalized(array(
            'date_format'   => $this->_dateFormat,
            'locale'        => $this->_locale
        ));
        $filterInternal = new Zend_Filter_NormalizedToLocalized(array(
            'date_format'   => Varien_Date::DATETIME_INTERNAL_FORMAT,
            'locale'        => $this->_locale
        ));

        $value = $filterInput->filter($value);
        $value = $filterInternal->filter($value);
        return $value;
    }

    /**
     * Returns the result of filtering $value
     *
     * @param string $value
     * @return string
     */
    public function outputFilter($value)
    {
        $filterInput = new Zend_Filter_LocalizedToNormalized(array(
            'date_format'   => Varien_Date::DATETIME_INTERNAL_FORMAT,
            'locale'        => $this->_locale
        ));
        $filterInternal = new Zend_Filter_NormalizedToLocalized(array(
            'date_format'   => $this->_dateFormat,
            'locale'        => $this->_locale
        ));

        $value = $filterInput->filter($value);
        $value = $filterInternal->filter($value);
        return $value;
    }
}
