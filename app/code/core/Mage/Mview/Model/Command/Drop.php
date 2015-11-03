<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @package     Mage_Mview
 * @copyright   Copyright (c) 2006-2014 X.commerce, Inc. (http://www.magento.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Mage_Mview_Model_Command_Drop
 *
 * @category    Mage
 * @package     Mage_Mview
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Mview_Model_Command_Drop extends Mage_Mview_Model_Command_Abstract
{
    /**
     * @var Magento_Db_Object_Table
     */
    protected $_table = null;

    /**
     * @var Magento_Db_Object_View
     */
    protected $_view = null;

    /**
     * Constructor
     *
     * @param $arguments array
     */
    public function __construct($arguments)
    {
        $this->_table   = $arguments['table'];
        $this->_view    = $arguments['view'];
        parent::__construct($arguments);
    }

    /**
     * Drop materialized view
     *
     * @return Mage_Mview_Model_Command_Drop|mixed
     */
    public function execute()
    {
        $this->_view->drop();
        $this->_table->drop();
        return $this;
    }
}

