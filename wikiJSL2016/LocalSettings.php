<?php
# This file was automatically generated by the MediaWiki 1.23.15
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}
# For Mediawiki 1.23
## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "WikiJSL2016";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "/wikiJSL2016";
$wgScriptExtension = ".php";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://jslcolombia.com";

## The relative URL path to the skins directory
$wgStylePath = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgStylePath/common/images/gnuLinux.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@jslcolombia.com";
$wgPasswordSender = "apache@jslcolombia.com";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "jslcolom_wiki";
$wgDBuser = "jslcolom_2016";
$wgDBpassword = "4qB)Fc_ZK7#l";

# MySQL specific settings
$wgDBprefix = "_glud";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=utf8";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "es";

$wgSecretKey = "d303e09a0b79042fb72ccc84cdb2d9832eeb7ef771002cca16a57f29f4ed6080";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "a92ad0a91366abd7";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# For Mediawiki 1.23 Html5mediator
require_once "$IP/extensions/Html5mediator/Html5mediator.php";
$wgFileExtensions[] = 'mp3';
$wgFileExtensions[] = 'mp4';

# For Mediawiki 1.23 DPLforum
require_once "$IP/extensions/DPLforum/DPLforum.php";
# Para un buscador
require_once "$IP/extensions/InputBox/InputBox.php";
# Para añadir pdf's
require_once "$IP/extensions/PdfHandler/PdfHandler.php";
# End of automatically generated settings.
# Add more configuration options below.

#Con esta linea, hacemos que todos los usuarios, que no esten registrados, no puedan editar la Wiki
$wgGroupPermissions['*']['edit'] = false;
#Aqui vemos, como dar permisos de edicion  a los usuarios registrados -Por ahora False
$wgGroupPermissions['user']['edit'] = false;
# Con esto haces que los usuarios registrados no puedan crear nuevas paginas.
$wgGroupPermissions['user']['createpage'] = false;
# Con esta linea, permites la subida de ficheros a los usuarios registrados. Por ahora False
$wgEnableUploads = false;
