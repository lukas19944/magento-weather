<?php

namespace Lukasz\Weather\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

//        if (version_compare($context->getVersion(), '0.2.0', '<')){
//            $tableName = $setup->getTable('lukasz_weather');
//
//        }
        $setup->endSetup();
    }


}
