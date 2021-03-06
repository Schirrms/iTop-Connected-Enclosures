<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'schirrms-connected-enclosures/1.2.2',
	array(
		// Identification
		//
		'label' => 'Add Power and Generic Connections to Enclosures',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array( 
			'itop-datacenter-mgmt/2.6.0',
			'schirrms-generic-connection/0.7.3',
			'schirrms-server-addfields/1.1.4',
			'molkobain-datacenter-view/1.7.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.schirrms-connected-enclosures.php'
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
