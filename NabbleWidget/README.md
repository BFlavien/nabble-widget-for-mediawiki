Nabble Widget for MediaWiki
=============================

*Let you embed the Nabble mailing list widget in your wiki*

Installation
============

 1. Download and extract the files in a directory called "NabbleWidget" in your extensions/ folder.
 2. Add the following code to your LocalSettings.php (at the bottom)

  `require_once( "$IP/extensions/NabbleWidget/NabbleWidget.php" );`

 3. Navigate to Special:Version on your wiki to verify that the extension is successfully installed.

Configuration parameters
========================

Just insert the `<nabblewidget option1="value1" option2="value2" .../>` tag where you want the widget to appear. If you miss the `/` in the tag, it can remove page content.

You can configure it with this options:

 - src    (no default values) : URI of the nabble mailing list (found in options > embed options, it's the href argument of the a tag)
 - script (no default values) : URI of the nabble mailing list script(found in options > embed options, it's the src argument of the script tag)
 - width     (default "32em") : The width of the widget
 - height    (default "50em") : The height of the widget

Default values
--------------

    <nabblewidget src="uri_of_the_src" script="uri_of_the_script" width="32em" height="50em" />

Troubleshooting
===============

Nabble widget is an extremely simple extension; all it does is convert an `<nabblewidget />` tag into the export link from Nabble but add the possibility to set the width and height.

Wiki Compatibility
==================

Nabble Widget uses ResourceLoader, which was introduced in MW 1.17. I only have access to a wiki running 1.19.2, so I cannot guarantee that Nabble widget will work on earlier versions of MediaWiki.

Change Log
==========

v0.1:
*Initial version

To Do
=====


----------


Please email comments, questions, or bug reports to bossiaux.flavien at gmail.org.