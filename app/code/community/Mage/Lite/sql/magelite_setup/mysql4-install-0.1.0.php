<?php

$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$installer->run("

DELETE FROM {$this->getTable('cms_block')};
DELETE FROM {$this->getTable('cms/block_store')};
DELETE FROM {$this->getTable('cms_page')} WHERE page_id IN (3,4);
DELETE FROM {$this->getTable('cms/page_store')} WHERE page_id IN (3,4);
DELETE FROM {$this->getTable('dataflow_profile')};

");

$installer->endSetup();
