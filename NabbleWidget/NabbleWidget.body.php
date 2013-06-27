<?php

class NabbleWidget {

	function createWidget($input, array $args, Parser $parser, PPFrame $frame ) {
		
	global $wgOut;

		$width = 32;
		$height = 50;
		
		/**
			Example of the output :  
			<a id="nabblelink" href="http://gsoc-2013-nabble-widget-for-mediawiki.55474.x6.nabble.com/">
				GSOC 2013 : Nabble widget for MediaWiki
			</a>
			<script src="http://gsoc-2013-nabble-widget-for-mediawiki.55474.x6.nabble.com/embed/f1"></script>
		*/
		
		if( isset($args['src']) && $args['src'] ){
			$src = $args['src'];
		}
		else{
			return wfMessage( 'no-src-parameter' )->text();
		}
		
		if( isset($args['width']) && $args['width'] ){
			$width = $args['width'];
		}
		
		if( isset($args['height']) && $args['height'] ){
			$height = $args['height'];
		}
		
		$wgOut->addModules( 'NabbleWidget' );
		
		/**
		 * IS WORKING ONLY WITH MY MAILINGLIST
		 */
		return "<div style=\"width:".$width."em;height:".$height."em;overflow:auto;\"><a id='nabblelink' href='".$src."'>".wfMessage( 'view-the-mailinglist' )->text()."</a>
				<script src=\"".$src."/embed/f1\"></script></div>";
				
				/**
				 * IF I REPLACE THE LIGNE ABOVE BY HIS CONTENT, IT DOESN'T WORK
				 * 
				<script>var link=document.getElementById(\"nabblelink\");
				if (link != null) {
					link.style.display=\"none\";
					document.write(\"<div id='nabbleforum' style='width:100%'><div style='height:700px'><img src='http://x6.nabble.com/images/loading.png' width='94' height='33' alt='Loading...'></div></div>\");
					var e = document.createElement(\"script\");
					e.src = 'http://x6.nabble.com/embed/JsEmbed.jtp?site=     >>>>> 55474 <<<<< &node=1&url=' + encodeURIComponent(location.href);
							e.type=\"text/javascript\";
					document.getElementsByTagName(\"head\")[0].appendChild(e);
				}</script></div>";
				*/
	}
}
