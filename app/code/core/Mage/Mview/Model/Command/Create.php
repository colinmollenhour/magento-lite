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
 * Mage_Mview_Model_Command_Create
 *
 * @category    Mage
 * @package     Mage_Mview
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Mview_Model_Command_Create extends Mage_Mview_Model_Command_Abstract
{
    /**
     * @var Zend_Db_Select
     */
    protected $_select;

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
        $this->_select  = $arguments['select'];
        $this->_table   = $arguments['table'];
        $this->_view    = $arguments['view'];
        parent::__construct($arguments);
    }

    /**
     * Create materialized view
     *
     * @return Mage_Mview_Model_Command_Create|mixed
     * @throws Exception
     * @throws Exception
     */
    public function execute()
    {
        if ($this->_table->isExists() || $this->_view->isExists()) {
            throw new  Exception('Table or view with same name already exists!!!');
        }
        try {
            $this->_view->createFromSource($this->_select);
            $this->_table->createFromSource($this->_view->getName());
        } catch (Exception $e) {
            $this->_table->drop();
            $this->_view->drop();
            throw $e;
        }
       return $this;
    }
}

