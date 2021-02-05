<?php

namespace Lukasz\Weather\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

//        if (!$installer->getConnection()->isTableExists($installer->getTable('lukasz_weather'))){
            $table = $installer->getConnection()
                ->newTable($setup->getTable('lukasz_weather'))
                ->addColumn('weather_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                    ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                    'Weather ID'
                )
                ->addColumn('temperature',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    ['nullable'=> false, 'default'=>0],
                    'Temperature'
                    )
                ->addColumn('pressure',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    ['nullable'=> false, 'default'=>0],
                    'Pressure'
                    )
                ->addColumn('humidity',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    ['nullable'=> false, 'default'=>0],
                    'Humidity'
                    )
                ->setComment('Lukasz Weather Table');
//                ->setOption('type', 'InnoDB')
//                ->setOption('charset', 'utf8');
        $installer->getConnection()->createTable($table);
//        }
        $installer->endSetup();
    }
}
