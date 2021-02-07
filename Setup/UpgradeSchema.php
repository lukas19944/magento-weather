<?php

namespace Lukasz\Weather\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '0.0.2', '<')){
            $setup->getConnection()->addColumn(
                $setup->getTable('lukasz_weather'),
                'created_at',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                    'nullable' => false,
                    'comment' => 'Created at',
                    'after' => 'humidity',

                ]
            );


        }
        $setup->endSetup();
    }


}
