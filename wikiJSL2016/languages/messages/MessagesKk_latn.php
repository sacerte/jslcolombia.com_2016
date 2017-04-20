<?php
/** Kazakh (Latin script) (qazaqşa (latın)‎)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author AlefZet
 * @author Atabek
 * @author GaiJin
 * @author Urhixidur
 */

/**
 * Bul qazaqşa tildeswiniñ jersindirw faýlı
 *
 * ŞETKİ PAÝDALANWŞILAR: BUL FAÝLDI TİKELEÝ ÖÑDEMEÑİZ!
 *
 * Bul faýldağı özgerister bağdarlamalıq jasaqtama kezekti jañartılğanda joğaltıladı.
 * Wïkïde öz baptalımdarıñızdı isteý alasız.
 * Äkimşi bop kirgeniñizde, [[Arnaýı:Barlıq xabarlar]] degen betke ötiñiz de
 * mında tizimdelingen MedïaWïkï:* sïpatı bar betterdi öñdeñiz.
 */

$fallback = 'kk-cyrl';

$separatorTransformTable = array(
	',' => "\xc2\xa0",
	'.' => ',',
);

$fallback8bitEncoding = 'windows-1254';

$namespaceNames = array(
	NS_MEDIA            => 'Taspa',
	NS_SPECIAL          => 'Arnaýı',
	NS_TALK             => 'Talqılaw',
	NS_USER             => 'Qatıswşı',
	NS_USER_TALK        => 'Qatıswşı_talqılawı',
	NS_PROJECT_TALK     => '$1_talqılawı',
	NS_FILE             => 'Swret',
	NS_FILE_TALK        => 'Swret_talqılawı',
	NS_MEDIAWIKI        => 'MedïaWïkï',
	NS_MEDIAWIKI_TALK   => 'MedïaWïkï_talqılawı',
	NS_TEMPLATE         => 'Ülgi',
	NS_TEMPLATE_TALK    => 'Ülgi_talqılawı',
	NS_HELP             => 'Anıqtama',
	NS_HELP_TALK        => 'Anıqtama_talqılawı',
	NS_CATEGORY         => 'Sanat',
	NS_CATEGORY_TALK    => 'Sanat_talqılawı',
);

$namespaceAliases = array(
	# Aliases to kk-cyrl namespaces
	'Таспа'               => NS_MEDIA,
	'Арнайы'              => NS_SPECIAL,
	'Талқылау'            => NS_TALK,
	'Қатысушы'            => NS_USER,
	'Қатысушы_талқылауы'  => NS_USER_TALK,
	'$1_талқылауы'        => NS_PROJECT_TALK,
	'Сурет'               => NS_FILE,
	'Сурет_талқылауы'     => NS_FILE_TALK,
	'МедиаУики'           => NS_MEDIAWIKI,
	'МедиаУики_талқылауы' => NS_MEDIAWIKI_TALK,
	'Үлгі'                => NS_TEMPLATE,
	'Үлгі_талқылауы'      => NS_TEMPLATE_TALK,
	'Анықтама'            => NS_HELP,
	'Анықтама_талқылауы'  => NS_HELP_TALK,
	'Санат'               => NS_CATEGORY,
	'Санат_талқылауы'     => NS_CATEGORY_TALK,

	# Aliases to renamed kk-arab namespaces
	'مەدياۋيكي'        => NS_MEDIAWIKI,
	'مەدياۋيكي_تالقىلاۋى'  => NS_MEDIAWIKI_TALK ,
	'ٷلگٸ'        => NS_TEMPLATE ,
	'ٷلگٸ_تالقىلاۋى'    => NS_TEMPLATE_TALK,
	'ٴۇلگٴى'              => NS_TEMPLATE,
	'ٴۇلگٴى_تالقىلاۋى'    => NS_TEMPLATE_TALK,

	# Aliases to kk-arab namespaces
	'تاسپا'              => NS_MEDIA,
	'ارنايى'              => NS_SPECIAL,
	'تالقىلاۋ'            => NS_TALK,
	'قاتىسۋشى'          => NS_USER,
	'قاتىسۋشى_تالقىلاۋى' => NS_USER_TALK,
	'$1_تالقىلاۋى'        => NS_PROJECT_TALK,
	'سۋرەت'              => NS_FILE,
	'سۋرەت_تالقىلاۋى'    => NS_FILE_TALK,
	'انىقتاما'            => NS_HELP,
	'انىقتاما_تالقىلاۋى'  => NS_HELP_TALK,
	'سانات'              => NS_CATEGORY,
	'سانات_تالقىلاۋى'    => NS_CATEGORY_TALK,
);


$datePreferences = array(
	'default',
	'mdy',
	'dmy',
	'ymd',
	'yyyy-mm-dd',
	'persian',
	'hebrew',
	'ISO 8601',
);

$defaultDateFormat = 'ymd';

$datePreferenceMigrationMap = array(
	'default',
	'mdy',
	'dmy',
	'ymd'
);

$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'xg j, Y "j."',
	'mdy both' => 'H:i, xg j, Y "j."',

	'dmy time' => 'H:i',
	'dmy date' => 'j F, Y "j."',
	'dmy both' => 'H:i, j F, Y "j."',

	'ymd time' => 'H:i',
	'ymd date' => 'Y "j." xg j',
	'ymd both' => 'H:i, Y "j." xg j',

	'yyyy-mm-dd time' => 'xnH:xni:xns',
	'yyyy-mm-dd date' => 'xnY-xnm-xnd',
	'yyyy-mm-dd both' => 'xnH:xni:xns, xnY-xnm-xnd',

	'persian time' => 'H:i',
	'persian date' => 'xij xiF xiY',
	'persian both' => 'xij xiF xiY, H:i',

	'hebrew time' => 'H:i',
	'hebrew date' => 'xjj xjF xjY',
	'hebrew both' => 'H:i, xjj xjF xjY',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
);

$magicWords = array(
	'redirect'                  => array( '0', '#AÝDAW', '#АЙДАУ', '#REDIRECT' ),
	'notoc'                     => array( '0', '__MAZMUNSIZ__', '__MSIZ__', '__МАЗМҰНСЫЗ__', '__МСЫЗ__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__QOÝMASIZ__', '__QSIZ__', '__ҚОЙМАСЫЗ__', '__ҚСЫЗ__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__MAZMUNDATQIZW__', '__MQIZW__', '__МАЗМҰНДАТҚЫЗУ__', '__МҚЫЗУ__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__MAZMUNI__', '__MZMN__', '__МАЗМҰНЫ__', '__МЗМН__', '__TOC__' ),
	'noeditsection'             => array( '0', '__BÖLİDİMÖNDEMEW__', '__BÖLİMÖNDETKİZBEW__', '__БӨЛІДІМӨНДЕМЕУ__', '__БӨЛІМӨНДЕТКІЗБЕУ__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'AĞIMDAĞIAÝ', 'АҒЫМДАҒЫАЙ', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonthname'          => array( '1', 'AĞIMDAĞIAÝATAWI', 'АҒЫМДАҒЫАЙАТАУЫ', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'AĞIMDAĞIAÝİLİKATAWI', 'АҒЫМДАҒЫАЙІЛІКАТАУЫ', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'AĞIMDAĞIAÝJÏIR', 'AĞIMDAĞIAÝQISQA', 'АҒЫМДАҒЫАЙЖИЫР', 'АҒЫМДАҒЫАЙҚЫСҚА', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'AĞIMDAĞIKÜN', 'АҒЫМДАҒЫКҮН', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'AĞIMDAĞIKÜN2', 'АҒЫМДАҒЫКҮН2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'AĞIMDAĞIKÜNATAWI', 'АҒЫМДАҒЫКҮНАТАУЫ', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'AĞIMDAĞIJIL', 'АҒЫМДАҒЫЖЫЛ', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'AĞIMDAĞIWAQIT', 'АҒЫМДАҒЫУАҚЫТ', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'AĞIMDAĞISAĞAT', 'АҒЫМДАҒЫСАҒАТ', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'JERGİLİKTİAÝ', 'ЖЕРГІЛІКТІАЙ', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonthname'            => array( '1', 'JERGİLİKTİAÝATAWI', 'ЖЕРГІЛІКТІАЙАТАУЫ', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'JERGİLİKTİAÝİLİKATAWI', 'ЖЕРГІЛІКТІАЙІЛІКАТАУЫ', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'JERGİLİKTİAÝJÏIR', 'JERGİLİKTİAÝQISQAŞA', 'JERGİLİKTİAÝQISQA', 'ЖЕРГІЛІКТІАЙЖИЫР', 'ЖЕРГІЛІКТІАЙҚЫСҚАША', 'ЖЕРГІЛІКТІАЙҚЫСҚА', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'JERGİLİKTİKÜN', 'ЖЕРГІЛІКТІКҮН', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'JERGİLİKTİKÜN2', 'ЖЕРГІЛІКТІКҮН2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'JERGİLİKTİKÜNATAWI', 'ЖЕРГІЛІКТІКҮНАТАУЫ', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'JERGİLİKTİJIL', 'ЖЕРГІЛІКТІЖЫЛ', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'JERGİLİKTİWAQIT', 'ЖЕРГІЛІКТІУАҚЫТ', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'JERGİLİKTİSAĞAT', 'ЖЕРГІЛІКТІСАҒАТ', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'BETSANI', 'БЕТСАНЫ', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'MAQALASANI', 'МАҚАЛАСАНЫ', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'FAÝLSANI', 'ФАЙЛСАНЫ', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'QATISWŞISANI', 'ҚАТЫСУШЫСАНЫ', 'NUMBEROFUSERS' ),
	'numberofedits'             => array( '1', 'ÖÑDEMESANI', 'TÜZETWSANI', 'ӨҢДЕМЕСАНЫ', 'ТҮЗЕТУСАНЫ', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'BETATAWI', 'БЕТАТАУЫ', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'BETATAWI2', 'БЕТАТАУЫ2', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'ESİMAYASI', 'ЕСІМАЯСЫ', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'ESİMAYASI2', 'ЕСІМАЯСЫ2', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'TALQILAWAYASI', 'ТАЛҚЫЛАУАЯСЫ', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'TALQILAWAYASI2', 'ТАЛҚЫЛАУАЯСЫ2', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'TAQIRIPBETİ', 'MAQALABETİ', 'ТАҚЫРЫПБЕТІ', 'МАҚАЛАБЕТІ', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'TAQIRIPBETİ2', 'MAQALABETİ2', 'ТАҚЫРЫПБЕТІ2', 'МАҚАЛАБЕТІ2', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'TOLIQBETATAWI', 'ТОЛЫҚБЕТАТАУЫ', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'TOLIQBETATAWI2', 'ТОЛЫҚБЕТАТАУЫ2', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'BETŞEATAWI', 'ASTIÑĞIBETATAWI', 'БЕТШЕАТАУЫ', 'АСТЫҢҒЫБЕТАТАУЫ', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'BETŞEATAWI2', 'ASTIÑĞIBETATAWI2', 'БЕТШЕАТАУЫ2', 'АСТЫҢҒЫБЕТАТАУЫ2', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'NEGİZGİBETATAWI', 'НЕГІЗГІБЕТАТАУЫ', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'NEGİZGİBETATAWI2', 'НЕГІЗГІБЕТАТАУЫ2', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'TALQILAWBETATAWI', 'ТАЛҚЫЛАУБЕТАТАУЫ', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'TALQILAWBETATAWI2', 'ТАЛҚЫЛАУБЕТАТАУЫ2', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'TAQIRIPBETATAWI', 'MAQALABETATAWI', 'ТАҚЫРЫПБЕТАТАУЫ', 'МАҚАЛАБЕТАТАУЫ', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'TAQIRIPBETATAWI2', 'MAQALABETATAWI2', 'ТАҚЫРЫПБЕТАТАУЫ2', 'МАҚАЛАБЕТАТАУЫ2', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'XBR:', 'ХБР:', 'MSG:' ),
	'subst'                     => array( '0', 'BÄDEL:', 'БӘДЕЛ:', 'SUBST:' ),
	'msgnw'                     => array( '0', 'WÏKÏSİZXBR:', 'УИКИСІЗХБР:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'nobaý', 'нобай', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'nobaý=$1', 'нобай=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'oñğa', 'oñ', 'оңға', 'оң', 'right' ),
	'img_left'                  => array( '1', 'solğa', 'sol', 'солға', 'сол', 'left' ),
	'img_none'                  => array( '1', 'eşqandaý', 'joq', 'ешқандай', 'жоқ', 'none' ),
	'img_width'                 => array( '1', '$1 nükte', '$1 нүкте', '$1px' ),
	'img_center'                => array( '1', 'ortağa', 'orta', 'ортаға', 'орта', 'center', 'centre' ),
	'img_framed'                => array( '1', 'sürmeli', 'сүрмелі', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'sürmesiz', 'сүрмесіз', 'frameless' ),
	'img_page'                  => array( '1', 'bet=$1', 'bet $1', 'бет=$1', 'бет $1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'tikti', 'tiktik=$1', 'tiktik $1', 'тікті', 'тіктік=$1', 'тіктік $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'jïekti', 'жиекті', 'border' ),
	'img_baseline'              => array( '1', 'tirekjol', 'тірекжол', 'baseline' ),
	'img_sub'                   => array( '1', 'astılığı', 'ast', 'астылығы', 'аст', 'sub' ),
	'img_super'                 => array( '1', 'üstiligi', 'üst', 'үстілігі', 'үст', 'super', 'sup' ),
	'img_top'                   => array( '1', 'üstine', 'үстіне', 'top' ),
	'img_text_top'              => array( '1', 'mätin-üstinde', 'мәтін-үстінде', 'text-top' ),
	'img_middle'                => array( '1', 'aralığına', 'аралығына', 'middle' ),
	'img_bottom'                => array( '1', 'astına', 'астына', 'bottom' ),
	'img_text_bottom'           => array( '1', 'mätin-astında', 'мәтін-астында', 'text-bottom' ),
	'int'                       => array( '0', 'İŞKİ:', 'ІШКІ:', 'INT:' ),
	'sitename'                  => array( '1', 'TORAPATAWI', 'ТОРАПАТАУЫ', 'SITENAME' ),
	'ns'                        => array( '0', 'EA:', 'ESİMAYA:', 'ЕА:', 'ЕСІМАЯ:', 'NS:' ),
	'localurl'                  => array( '0', 'JERGİLİKTİJAÝ:', 'ЖЕРГІЛІКТІЖАЙ:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'JERGİLİKTİJAÝ2:', 'ЖЕРГІЛІКТІЖАЙ2:', 'LOCALURLE:' ),
	'servername'                => array( '0', 'SERVERATAWI', 'СЕРВЕРАТАУЫ', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'ÄMİRJOLI', 'ӘМІРЖОЛЫ', 'SCRIPTPATH' ),
	'grammar'                   => array( '0', 'SEPTİGİ:', 'SEPTİK:', 'СЕПТІГІ:', 'СЕПТІК:', 'GRAMMAR:' ),
	'notitleconvert'            => array( '0', '__TAQIRIPATINTÜRLENDİRGİZBEW__', '__TATJOQ__', '__ATAWALMASTIRĞIZBAW__', '__AABAW__', '__ТАҚЫРЫПАТЫНТҮРЛЕНДІРГІЗБЕУ__', '__ТАТЖОҚ__', '__АТАУАЛМАСТЫРҒЫЗБАУ__', '__ААБАУ__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__MAĞLUMATINTÜRLENDİRGİZBEW__', '__MATJOQ__', '__MAĞLUMATALMASTIRĞIZBAW__', '__MABAW__', '__МАҒЛҰМАТЫНТҮРЛЕНДІРГІЗБЕУ__', '__МАТЖОҚ__', '__МАҒЛҰМАТАЛМАСТЫРҒЫЗБАУ__', '__МАБАУ__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'AĞIMDAĞIAPTASI', 'AĞIMDAĞIAPTA', 'АҒЫМДАҒЫАПТАСЫ', 'АҒЫМДАҒЫАПТА', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'AĞIMDAĞIAPTAKÜNİ', 'АҒЫМДАҒЫАПТАКҮНІ', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'JERGİLİKTİAPTASI', 'JERGİLİKTİAPTA', 'ЖЕРГІЛІКТІАПТАСЫ', 'ЖЕРГІЛІКТІАПТА', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'JERGİLİKTİAPTAKÜNİ', 'ЖЕРГІЛІКТІАПТАКҮНІ', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'TÜZETWNÖMİRİ', 'NUSQANÖMİRİ', 'ТҮЗЕТУНӨМІРІ', 'НҰСҚАНӨМІРІ', 'REVISIONID' ),
	'revisionday'               => array( '1', 'TÜZETWKÜNİ', 'NUSQAKÜNİ', 'ТҮЗЕТУКҮНІ', 'НҰСҚАКҮНІ', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'TÜZETWKÜNİ2', 'NUSQAKÜNİ2', 'ТҮЗЕТУКҮНІ2', 'НҰСҚАКҮНІ2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'TÜZETWAÝI', 'NUSQAAÝI', 'ТҮЗЕТУАЙЫ', 'НҰСҚААЙЫ', 'REVISIONMONTH' ),
	'revisionyear'              => array( '1', 'TÜZETWJILI', 'NUSQAJILI', 'ТҮЗЕТУЖЫЛЫ', 'НҰСҚАЖЫЛЫ', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'TÜZETWWAQITITAÑBASI', 'NUSQAWAQITTÜÝİNDEMESİ', 'ТҮЗЕТУУАҚЫТЫТАҢБАСЫ', 'НҰСҚАУАҚЫТТҮЙІНДЕМЕСІ', 'REVISIONTIMESTAMP' ),
	'plural'                    => array( '0', 'KÖPŞETÜRİ:', 'KÖPŞE:', 'КӨПШЕТҮРІ:', 'КӨПШЕ:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'TOLIQJAÝI:', 'TOLIQJAÝ:', 'ТОЛЫҚЖАЙЫ:', 'ТОЛЫҚЖАЙ:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'TOLIQJAÝI2:', 'TOLIQJAÝ2:', 'ТОЛЫҚЖАЙЫ2:', 'ТОЛЫҚЖАЙ2:', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'KÄ1:', 'KİŞİÄRİPPEN1:', 'КӘ1:', 'КІШІӘРІППЕН1:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'BÄ1:', 'BASÄRİPPEN1:', 'БӘ1:', 'БАСӘРІППЕН1:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'KÄ:', 'KİŞİÄRİPPEN:', 'КӘ:', 'КІШІӘРІППЕН:', 'LC:' ),
	'uc'                        => array( '0', 'BÄ:', 'BASÄRİPPEN:', 'БӘ:', 'БАСӘРІППЕН:', 'UC:' ),
	'raw'                       => array( '0', 'QAM:', 'ҚАМ:', 'RAW:' ),
	'displaytitle'              => array( '1', 'KÖRİNETİNTAQIRIAPATI', 'KÖRSETİLETİNATAW', 'КӨРІНЕТІНТАҚЫРЫАПАТЫ', 'КӨРСЕТІЛЕТІНАТАУ', 'DISPLAYTITLE' ),
	'rawsuffix'                 => array( '1', 'Q', 'Қ', 'R' ),
	'newsectionlink'            => array( '1', '__JAÑABÖLİMSİLTEMESİ__', '__ЖАҢАБӨЛІМСІЛТЕМЕСІ__', '__NEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'BAĞDARLAMANUSQASI', 'БАҒДАРЛАМАНҰСҚАСЫ', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'JAÝDIMUQAMDAW:', 'ЖАЙДЫМҰҚАМДАУ:', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'JÄKİRDİMUQAMDAW', 'ЖӘКІРДІМҰҚАМДАУ', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'AĞIMDAĞIWAQITTÜÝİNDEMESİ', 'AĞIMDAĞIWAQITTÜÝİN', 'АҒЫМДАҒЫУАҚЫТТҮЙІНДЕМЕСІ', 'АҒЫМДАҒЫУАҚЫТТҮЙІН', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'JERGİLİKTİWAQITTÜÝİNDEMESİ', 'JERGİLİKTİWAQITTÜÝİN', 'ЖЕРГІЛІКТІУАҚЫТТҮЙІНДЕМЕСІ', 'ЖЕРГІЛІКТІУАҚЫТТҮЙІН', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'BAĞITBELGİSİ', 'БАҒЫТБЕЛГІСІ', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#TİL:', '#ТІЛ:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'MAĞLUMATTİLİ', 'МАҒЛҰМАТТІЛІ', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'ESİMAYABETSANI:', 'EABETSANI:', 'AYABETSANI:', 'ЕСІМАЯБЕТСАНЫ:', 'ЕАБЕТСАНЫ:', 'АЯБЕТСАНЫ:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'ÄKİMŞİSANI', 'ӘКІМШІСАНЫ', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'SANPİŞİMİ', 'САНПІШІМІ', 'FORMATNUM' ),
	'padleft'                   => array( '0', 'SOLĞAIĞIS', 'SOLIĞIS', 'СОЛҒАЫҒЫС', 'СОЛЫҒЫС', 'PADLEFT' ),
	'padright'                  => array( '0', 'OÑĞAIĞIS', 'OÑIĞIS', 'ОҢҒАЫҒЫС', 'ОҢЫҒЫС', 'PADRIGHT' ),
	'special'                   => array( '0', 'arnaýı', 'арнайы', 'special' ),
	'defaultsort'               => array( '1', 'ÄDEPKİSURIPTAW:', 'ÄDEPKİSANATSURIPTAW:', 'ÄDEPKİSURIPTAWKİLTİ:', 'ÄDEPKİSURIP:', 'ӘДЕПКІСҰРЫПТАУ:', 'ӘДЕПКІСАНАТСҰРЫПТАУ:', 'ӘДЕПКІСҰРЫПТАУКІЛТІ:', 'ӘДЕПКІСҰРЫП:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'FAÝLMEKENİ:', 'ФАЙЛМЕКЕНІ:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'belgi', 'белгі', 'tag' ),
	'hiddencat'                 => array( '1', '__JASIRINSANAT__', '__ЖАСЫРЫНСАНАТ__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'SANATTAĞIBETTER', 'САНАТТАҒЫБЕТТЕР', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'BETMÖLŞERİ', 'БЕТМӨЛШЕРІ', 'PAGESIZE' ),
);

$specialPageAliases = array(
	'Allmessages'               => array( 'Barlıq_xabarlar' ),
	'Allpages'                  => array( 'Barlıq_better' ),
	'Ancientpages'              => array( 'Eski_better' ),
	'Block'                     => array( 'Jaýdı_buğattaw', 'IP_buğattaw' ),
	'Booksources'               => array( 'Kitap_qaýnarları' ),
	'BrokenRedirects'           => array( 'Jaramsız_aýdağıştar', 'Jaramsız_aýdatwlar' ),
	'Categories'                => array( 'Sanattar' ),
	'ChangePassword'            => array( 'Qupïya_sözdi_qaýtarw' ),
	'Confirmemail'              => array( 'Quptaw_xat' ),
	'Contributions'             => array( 'Ülesi' ),
	'CreateAccount'             => array( 'Jaña_tirkelgi', 'Tirkelgi_Jaratw' ),
	'Deadendpages'              => array( 'Tuýıq_better' ),
	'DoubleRedirects'           => array( 'Şınjırlı_aýdağıştar', 'Şınjırlı_aýdatwlar' ),
	'Emailuser'                 => array( 'Xat_jiberw' ),
	'Export'                    => array( 'Sırtqa_berw' ),
	'Fewestrevisions'           => array( 'Eñ_az_tüzetilgen' ),
	'FileDuplicateSearch'       => array( 'Faýl_telnusqasın_izdew', 'Qaýtalanğan_faýldardı_izdew' ),
	'Filepath'                  => array( 'Faýl_mekeni' ),
	'Import'                    => array( 'Sırttan_alw' ),
	'Invalidateemail'           => array( 'Quptamaw_xatı' ),
	'BlockList'                 => array( 'Buğattalğandar' ),
	'Listadmins'                => array( 'Äkimşiler', 'Äkimşi_tizimi' ),
	'Listbots'                  => array( 'Bottar', 'Bottar_tizimi' ),
	'Listfiles'                 => array( 'Swret_tizimi' ),
	'Listgrouprights'           => array( 'Top_quqıqtarı_tizimi' ),
	'Listredirects'             => array( 'Aýdatw_tizimi' ),
	'Listusers'                 => array( 'Qatıswşılar', 'Qatıswşı_tizimi' ),
	'Lockdb'                    => array( 'Derekqordı_qulıptaw' ),
	'Log'                       => array( 'Jwrnal', 'Jwrnaldar' ),
	'Lonelypages'               => array( 'Sayaq_better' ),
	'Longpages'                 => array( 'Uzın_better', 'Ülken_better' ),
	'MergeHistory'              => array( 'Tarïx_biriktirw' ),
	'MIMEsearch'                => array( 'MIME_türimen_izdew' ),
	'Mostcategories'            => array( 'Eñ_köp_sanattar_barı' ),
	'Mostimages'                => array( 'Eñ_köp_paýdalanılğan_swretter', 'Eñ_köp_swretter_barı' ),
	'Mostlinked'                => array( 'Eñ_köp_siltengen_better' ),
	'Mostlinkedcategories'      => array( 'Eñ_köp_paýdalanılğan_sanattar', 'Eñ_köp_siltengen_sanattar' ),
	'Mostlinkedtemplates'       => array( 'Eñ_köp_paýdalanılğan_ülgiler', 'Eñ_köp_siltengen_ülgiler' ),
	'Mostrevisions'             => array( 'Eñ_köp_tüzetilgen', 'Eñ_köp_nusqalar_barı' ),
	'Movepage'                  => array( 'Betti_jıljıtw' ),
	'Mycontributions'           => array( 'Ülesim' ),
	'Mypage'                    => array( 'Jeke_betim' ),
	'Mytalk'                    => array( 'Talqılawım' ),
	'Newimages'                 => array( 'Jaña_swretter' ),
	'Newpages'                  => array( 'Jaña_better' ),
	'Popularpages'              => array( 'Eñ_köp_qaralğan_better', 'Äýgili_better' ),
	'Preferences'               => array( 'Baptalımdar', 'Baptaw' ),
	'Prefixindex'               => array( 'Bastawış_tizimi' ),
	'Protectedpages'            => array( 'Qorğalğan_better' ),
	'Protectedtitles'           => array( 'Qorğalğan_taqırıptar', 'Qorğalğan_atawlar' ),
	'Randompage'                => array( 'Kezdeýsoq', 'Kezdeýsoq_bet' ),
	'Randomredirect'            => array( 'Kedeýsoq_aýdağış', 'Kedeýsoq_aýdatw' ),
	'Recentchanges'             => array( 'Jwıqtağı_özgerister' ),
	'Recentchangeslinked'       => array( 'Siltengenderdiñ_özgeristeri', 'Qatıstı_özgerister' ),
	'Revisiondelete'            => array( 'Tüzetw_joyw', 'Nusqanı_joyw' ),
	'Search'                    => array( 'İzdew' ),
	'Shortpages'                => array( 'Qısqa_better' ),
	'Specialpages'              => array( 'Arnaýı_better' ),
	'Statistics'                => array( 'Sanaq' ),
	'Uncategorizedcategories'   => array( 'Sanatsız_sanattar' ),
	'Uncategorizedimages'       => array( 'Sanatsız_swretter' ),
	'Uncategorizedpages'        => array( 'Sanatsız_better' ),
	'Uncategorizedtemplates'    => array( 'Sanatsız_ülgiler' ),
	'Undelete'                  => array( 'Joywdı_boldırmaw', 'Joýılğandı_qaýtarw' ),
	'Unlockdb'                  => array( 'Derekqordı_qulıptamaw' ),
	'Unusedcategories'          => array( 'Paýdalanılmağan_sanattar' ),
	'Unusedimages'              => array( 'Paýdalanılmağan_swretter' ),
	'Unusedtemplates'           => array( 'Paýdalanılmağan_ülgiler' ),
	'Unwatchedpages'            => array( 'Baqılanılmağan_better' ),
	'Upload'                    => array( 'Qotarıp_berw', 'Qotarw' ),
	'Userlogin'                 => array( 'Qatıswşı_kirwi' ),
	'Userlogout'                => array( 'Qatıswşı_şığwı' ),
	'Userrights'                => array( 'Qatıswşı_quqıqtarı' ),
	'Version'                   => array( 'Nusqası' ),
	'Wantedcategories'          => array( 'Toltırılmağan_sanattar' ),
	'Wantedpages'               => array( 'Toltırılmağan_better', 'Jaramsız_siltemeler' ),
	'Watchlist'                 => array( 'Baqılaw_tizimi' ),
	'Whatlinkshere'             => array( 'Mında_siltegender' ),
	'Withoutinterwiki'          => array( 'Wïkï-aralıqsızdar' ),
);

