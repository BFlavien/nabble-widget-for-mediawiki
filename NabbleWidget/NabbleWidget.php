<?php

// Protect against register_globals vulnerabilities.
// This line must be present before any global variable is referenced.
if( !defined('MEDIAWIKI') ){
	echo("This is an extension to the MediaWiki package and cannot be run standalone.\n");
	die(-1);
}

// Extension credits that will show up on Special:Version    
$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'NabbleWidget',
	'version'        => '0.1',
	'author'         => 'Flavien Bossiaux', 
	'url'            => 'https://github.com/BFlavien/iann-widget-for-mediawiki',
	'descriptionmsg' => 'nabblewidget-descriptionmsg',
	'description'    => 'nabblewidget-description'
);

// Load the main class of the extension and his i18n
$wgAutoloadClasses['NabbleWidget']        = dirname( __FILE__ ) . "/NabbleWidget.body.php";
$wgExtensionMessagesFiles['NabbleWidget'] = dirname( __FILE__ ) . '/NabbleWidget.i18n.php';

$wgResourceModules['NabbleWidget'] = array(	
	'localBasePath' => dirname( __FILE__ ),
	'remoteExtPath' => 'NabbleWidget'
);

$wgHooks['ParserFirstCallInit'][] = 'wfNabbleWidgetSetup';

// Hook our callback function into the parser
function wfNabbleWidgetSetup( Parser $parser ) {
	$NabbleWidget = new NabbleWidget;
	
	// When the parser sees the <sample> tag, it executes 
	// the 'createWidget' function of '$iAnnWidget' previously created
	$parser->setHook( 'nabblewidget', array($NabbleWidget, 'createWidget') );
	
	// Always return true from this function. The return value does not denote
	// success or otherwise have meaning - it just must always be true.
	return true;
}
