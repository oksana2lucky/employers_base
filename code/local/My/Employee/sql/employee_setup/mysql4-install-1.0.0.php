<?php
$installer = $this;

$installer->startSetup();

$installer->run("

			DROP TABLE IF EXISTS {$this->getTable('employee_positions')};
			
			CREATE TABLE {$this->getTable('employee_positions')} (
			  `id` int(11) NOT NULL auto_increment,
			  `title` varchar(255) NOT NULL,
			   PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;
			
			DROP TABLE IF EXISTS {$this->getTable('employee_workers')};
			
			CREATE TABLE {$this->getTable('employee_workers')} (  
			  `id` int(11)  NOT NULL auto_increment,
			  `first_name` varchar(255) NOT NULL,
			  `last_name` varchar(255) NOT NULL,
              `position_id` int(11) NOT NULL , 
			  `category_id` int(11) NULL, 
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup();