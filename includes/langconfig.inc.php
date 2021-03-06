<?php
/**
 * This file is separate from config.inc.php because we want these variables to be
 * easily updatable from SVN.
 */


/**
 * A mapping between the short name for the language and the full name of the language
 * (encoded to print in html).  Locales don't need to be in this list if they are
 * being remapped.
 */
$native_languages = array(
    'ach'       => 'Acholi',
    'ak'        => 'Akan',
    'af'        => 'Afrikaans',
    'ar'        => '&#1593;&#1585;&#1576;&#1610;',
    'as'        => '&#2437;&#2488;&#2478;&#2496;&#2479;&#2492;&#2494;',
    'ast'       => 'Asturianu',
    'bg'        => '&#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080;',
    'bs'        => 'Bosanski',
    'be'        => 'Беларуская',
    'br'        => 'Brezhoneg',
    'bn-IN'     => '&#2476;&#2494;&#2434;&#2482;&#2494;',
    'ca'        => 'Catal&#224;',
    'cs'        => '&#268;e&#353;tina',
    'csb'       => 'Kaszëbsczi',
    'cy'        => 'Cymraeg',
    'da'        => 'Dansk',
    'de'        => 'Deutsch',
    'el'        => '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;',
    'en-GB'     => 'English (British)',
    'en-US'     => 'English (US)',
    'en-ZA'     => 'English (South African)',
    'es-AR'     => 'Espa&#241;ol (Argentina)',
    'es-CL'     => 'Espa&#241;ol (Chile)',
    'es-ES'     => 'Espa&#241;ol (Espa&#241;a)',
    'es-MX'     => 'Espa&#241;ol (México)',
    'eo'        => 'Esperanto',
    'et'        => 'Eesti keel',
    'eu'        => 'Euskara',
    'fa'        => '&#1601;&#1575;&#1585;&#1587;&#1740;',
    'ff'        => 'Pulaar-Fulfulde',
    'fi'        => 'Suomi',
    'fr'        => 'Fran&#231;ais',
    'fy-NL'     => 'Frysk',
    'ga-IE'     => 'Gaeilge',
    'gd'        => 'Gàidhlig',
    'gl'        => 'Galego',
    'gu-IN'     => '&#2711;&#2753;&#2716;&#2736;&#2750;&#2724;&#2752;',
    'he'        => '&#1506;&#1489;&#1512;&#1497;&#1514;',
    'hi-IN'     => '&#2361;&#2367;&#2344;&#2381;&#2342;&#2368; (&#2349;&#2366;&#2352;&#2340;)',
    'hr'        => 'Hrvatski',
    'hu'        => 'Magyar',
    'hy-AM'     => '&#1344;&#1377;&#1397;&#1381;&#1408;&#1381;&#1398;',
    'id'        => 'Bahasa Indonesia',
    'is'        => '&#205;slenska',
    'it'        => 'Italiano',
    'ja'        => '&#26085;&#26412;&#35486;',
    'ka'        => '&#4325;&#4304;&#4320;&#4311;&#4323;&#4314;&#4312;&#32;&#4308;&#4316;&#4304;',
    'kk'        => 'Қазақ',
    'km'        => '&#6039;&#6070;&#6047;&#6070;&#6017;&#6098;&#6040;&#6082;&#6042;',
    'kn'        => '&#57522;&#38368;&#45736;&#57523;&#36320;&#45736;&#57522;',
    'ko'        => '&#54620;&#44397;&#50612;',
    'ku'        => 'Kurd&#238;',
    'lij'       => 'Ligure',
    'lg'        => 'Luganda',
    'lt'        => 'Lietuvi&#371;',
    'lv'        => 'Latvie&#353;u',
    'mai'       => '&#2350;&#2376;&#2341;&#2367;&#2354;&#2368; &#2478;&#2504;&#2469;&#2495;&#2482;&#2496;',
    'mk'        => '&#1052;&#1072;&#1082;&#1077;&#1076;&#1086;&#1085;&#1089;&#1082;&#1080;',
    'ml'        => '&#3374;&#3378;&#3375;&#3390;&#3379;&#3330;',
    'mn'        => '&#1052;&#1086;&#1085;&#1075;&#1086;&#1083;',
    'mr'        => '&#2350;&#2352;&#2366;&#2336;&#2368;',
    'nb-NO'     => 'Norsk bokm&#229;l',
    'ne-NP'     => '&#2344;&#2375;&#2346;&#2366;&#2354;&#2368;',
    'nl'        => 'Nederlands',
    'nn-NO'     => 'Norsk nynorsk',
    'oc'        => 'occitan (lengadocian)',
    'or'        => 'ଓଡ଼ିଆ',
    'pa-IN'     => '&#2602;&#2672;&#2588;&#2622;&#2604;&#2624;',
    'pl'        => 'Polski',
    'pt-BR'     => 'Portugu&#234;s (do Brasil)',
    'pt-PT'     => 'Portugu&#234;s (Europeu)',
    'rm'        => 'Rumantsch',
    'ro'        => 'Rom&#226;n&#259;',
    'ru'        => '&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081;',
    'rw'        => 'Ikinyarwanda',
    'si'        => '&#3523;&#3538;&#3458;&#3524;&#3517;',
    'sk'        => 'Sloven&#269;ina',
    'sl'        => 'Slovensko',
    'son'       => 'Soŋay',
    'sq'        => 'Shqip',
    'sr'        => '&#1089;&#1088;&#1087;&#1089;&#1082;&#1080;',
    'sv-SE'     => 'Svenska',
    'sw'        => '&#1575;&#1604;&#1604;&#1594;&#1577; &#1575;&#1604;&#1587;&#1608;&#1575;&#1581;&#1604;&#1610;&#1577;',
    'ta'        => '&#2980;&#2990;&#3007;&#2996;&#3021;',
    'ta-LK'     => 'Tamil (Sri Lanka)',
    'te'        => '&#57520;&#42208;&#45446;&#57520;&#45792;&#45441;&#57520;&#38880;&#45441;',
    'th'        => '&#3616;&#3634;&#3625;&#3634;&#3652;&#3607;&#3618;',
    'tr'        => 'T&#252;rk&#231;e',
    'uk'        => '&#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072;',
    'vi'        => 'Tiếng Việt',
    'wo'        => 'Wolof',
    'zh-CN'     => '&#20013;&#25991; (&#31616;&#20307;)',
    'zh-TW'     => '&#27491;&#39636;&#20013;&#25991; (&#32321;&#39636;)',
    'zu'        => 'isiZulu'
);


/**
 * All the languages we support.  They won't show up on the site unless they are in
 * this array.  This array needs to have all languages, even if they are being
 * remapped.
 */
$full_languages = array(
    'ach',
    'af',
    'ak', // Remap to en-GB
    'ar',
    'as',
    'ast',
    'be',
    'bg',
    'bn-IN',
    'bn-BD',
    'br',
    'bs', // Remap to en-US
    'ca',
    'cs',
    'csb',
    'cy',
    'da',
    'de',
    'el',
    'en', // Remap to en-US
    'en-GB',
    'en-US',
    'en-ZA', // Remap to en-GB
    'eo',
    'es', // Remap to es-ES
    'es-AR',
    'es-ES',
    'es-CL',
    'es-MX',
    'et',
    'eu',
    'fa',
    'ff',
    'fi',
    'fr',
    'fy-NL',
    'ga-IE',
    'gd',
    'gl',
    'gu-IN',
    'he',
    'hi-IN',
    'hr',
    'hu',
    'hy',
    'hy-AM',
    'id',
    'is',
    'it',
    'ja',
    'ja-JP-mac', // Remap to ja
    'ka',
    'kk',
    'kn',
    'km',
    'ko',
    'ku',
    'lg', // remap to en-GB
    'lij',
    'lt',
    'lv',
    'mai', // remap to en-GB
    'mk',
    'ml',
    'mn', // remap mn to en-GB, we lost this locale but there are still in-product links in Firefox 3 to mozilla.com/mn/
    'mr',
    'nb-NO',
    'nl',
    'nn-NO',
    'no', // Remap to nb-NO
    'nso', // remap to en-GB
    'oc',
    'or',
    'pa-IN',
    'pl',
    'pt', // Remap to pt-PT
    'pt-BR',
    'pt-PT',
    'rm',
    'ro',
    'ru',
    'si',
    'sk',
    'sl',
    'son', // remap to en-GB
    'sq',
    'sr',
    'sv', // Remap to sv-SE
    'sv-SE',
    'sw',
    'ta',
    'ta-LK',
    'te',
    'th',
    'tr',
    'uk',
    'vi',
    'wo',
    'zh-CN',
    'zh-TW',
    'zu', // remap to en-GB
);

/**
 * If we support a locale but want to redirect it to another, add it to this array.
 * Format:
 *      lowercase(requested_language) => mapped_language
 */
$lang_remap = array(
    'ak'        => 'en-GB',
/*
    'bs'        => 'en-GB',
*/
    'en'        => 'en-US',
    'en-za'     => 'en-GB',
    'es'        => 'es-ES',
    'ja-jp-mac' => 'ja',
    'lg'        => 'en-GB',
    'no'        => 'nb-NO',
    'mai'       => 'en-GB',
/*
    'mn'        => 'en-GB',
*/
    'nso'       => 'en-GB',
    'pt'        => 'pt-PT',
    'sv'        => 'sv-SE',
    'son'       => 'en-GB',
    'hy'        => 'hy-AM',
    'zu'        => 'en-GB',

);

/*** TEMPORARY CODE ***/
/**
 * A mapping between the short name for the language and the URL for where it's files
 * are.  This is a temporary measure, while we localize pages and move them from
 * external servers to mozilla.com.  As languages are migrated to mozilla.com, change
 * them in this array to point to mozilla.org.  When all the locales in this list
 * point to mozilla.com delete the array and remove the corresponding section marked
 * "TEMPORARY CODE" in prefetch.php.
 */

$host_root = $config['url_scheme'] . '://' . $config['server_name'] . '/';

/* We create an array of locales roots without hardocing URLs */
$language_url_map = array();

foreach($full_languages as $val) {
    $language_url_map[$val] = $host_root . $val . '/';
}

/* redefine target for locales that are exceptions on mozilla.org */
$language_url_map['ja']    = 'http://mozilla.jp/';
$language_url_map['zh-CN'] = 'http://firefox.com.cn/';


/* Despite our having in-product pages for all the languages above, we don't have
 * full site translations for all of them.  We can't have them all showing up in the
 * footer language select box then, because we wouldn't know where to send them.  So,
 * these languages are the ones that will show up in the footer select box.  As site
 * translations become available, copy the language from $native_languages to this
 * array.  When this array and $native_languages are the same, delete this array, and
 * change the getLangLinksSelect() function in includes/functions.inc.php to run off
 * $native_languages. */
$language_select_list = array(
    'ach'       => 'Acholi',
    'af'        => 'Afrikaans',
    'ak'        => 'Akan',
    'ar'        => '&#1593;&#1585;&#1576;&#1610;',
    'as'        => '&#2437;&#2488;&#2478;&#2496;&#2479;&#2492;&#2494;',
    'ast'       => 'Asturianu',
    'be'        => 'Беларуская',
    'bg'        => '&#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080;',
    'bn-BD'     => 'বাংলা (বাংলাদেশ)',
    'bn-IN'     => '&#2476;&#2494;&#2434;&#2482;&#2494;',
    'br'        => 'Brezhoneg',
    'bs'        => 'Bosanski',
    'ca'        => 'Catal&#224;',
    'cs'        => '&#268;e&#353;tina',
    'csb'       => 'Kaszëbsczi',
    'cy'        => 'Cymraeg',
    'da'        => 'Dansk',
    'de'        => 'Deutsch',
    'el'        => '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;',
    'en-ZA'     => 'English (South African)',
    'eo'        => 'Esperanto',
    'es-AR'     => 'Español (Argentina)',
    'es-CL'     => 'Español (Chile)',
    'es-ES'     => 'Español (España)',
    'es-MX'     => 'Español (México)',
    'et'        => 'Eesti keel',
    'eu'        => 'Euskara',
    'en-GB'     => 'English (British)',
    'en-US'     => 'English (US)',
    'en-ZA'     => 'English (South African)',
    'fa'        => '&#1601;&#1575;&#1585;&#1587;&#1740;',
    'ff'        => 'Pulaar-Fulfulde',
    'fi'        => 'Suomi',
    'fr'        => 'Fran&#231;ais',
    'fy-NL'     => 'Frysk',
    'ga-IE'     => 'Gaeilge',
    'gd'        => 'Gàidhlig',
    'gl'        => 'Galego',
    'gu-IN'     => '&#2711;&#2753;&#2716;&#2736;&#2750;&#2724;&#2752;',
    'he'        => '&#1506;&#1489;&#1512;&#1497;&#1514;',
    'hi-IN'     => '&#2361;&#2367;&#2344;&#2381;&#2342;&#2368; (&#2349;&#2366;&#2352;&#2340;)',
    'hy-AM'     => '&#1344;&#1377;&#1397;&#1381;&#1408;&#1381;&#1398;',
    'hr'        => 'Hrvatski',
    'hu'        => 'Magyar',
    'id'        => 'Bahasa Indonesia',
    'is'        => '&#205;slenska',
    'it'        => 'Italiano',
    'ja'        => '&#26085;&#26412;&#35486;',
    'ka'        => '&#4325;&#4304;&#4320;&#4311;&#4323;&#4314;&#4312;&#32;&#4308;&#4316;&#4304;',
    'kk'        => 'Қазақ',
    'kn'        => '&#57522;&#38368;&#45736;&#57523;&#36320;&#45736;&#57522;',
    'km'        => '&#6039;&#6070;&#6047;&#6070;&#6017;&#6098;&#6040;&#6082;&#6042;',
    'ko'        => '&#54620;&#44397;&#50612;',
    'ku'        => 'Kurd&#238;',
    'lg'        => 'Luganda',
    'lij'       => 'Ligure',
    'lt'        => 'Lietuvi&#371;',
    'lv'        => 'Latvie&#353;u',
    'mk'        => '&#1052;&#1072;&#1082;&#1077;&#1076;&#1086;&#1085;&#1089;&#1082;&#1080;',
    'ml'        => '&#3374;&#3378;&#3375;&#3390;&#3379;&#3330;',
    'mn'        => '&#1052;&#1086;&#1085;&#1075;&#1086;&#1083;',
    'mr'        => '&#2350;&#2352;&#2366;&#2336;&#2368;',
    'nl'        => 'Nederlands',
    'no'        => 'Norsk bokm&#229;l',
    'nso'       => 'Sepedi',
    'oc'        => 'occitan (lengadocian)',
    'pa-IN'     => '&#2602;&#2672;&#2588;&#2622;&#2604;&#2624;',
    'pl'        => 'Polski',
    'pt-BR'     => 'Portugu&#234;s (do Brasil)',
    'pt-PT'     => 'Portugu&#234;s (Europeu)',
    'rm'        => 'Rumantsch',
    'ro'        => 'Rom&#226;n&#259;',
    'ru'        => '&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081;',
    'sk'        => 'Sloven&#269;ina',
    'si'        => '&#3523;&#3538;&#3458;&#3524;&#3517;',
    'sl'        => 'slovensko',
    'son'       => 'Soŋay',
    'sq'        => 'Shqip',
    'sr'        => '&#1057;&#1088;&#1087;&#1089;&#1082;&#1080;',
    'sv-SE'     => 'Svenska',
    'sw'        => '&#1575;&#1604;&#1604;&#1594;&#1577; &#1575;&#1604;&#1587;&#1608;&#1575;&#1581;&#1604;&#1610;&#1577;',
    'ta'        => '&#2980;&#2990;&#3007;&#2996;&#3021;',
    'ta-LK'     => 'Tamil (Sri Lanka)',
    'te'        => '&#57520;&#42208;&#45446;&#57520;&#45792;&#45441;&#57520;&#38880;&#45441;',
    'th'        => '&#3616;&#3634;&#3625;&#3634;&#3652;&#3607;&#3618;',
    'tr'        => 'T&#252;rk&#231;e',
    'uk'        => '&#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072;',
    'vi'        => 'Tiếng Việt',
    'wo'        => 'Wolof',
    'zh-CN'     => '&#20013;&#25991; (&#31616;&#20307;)',
    'zh-TW'     => '&#27491;&#39636;&#20013;&#25991; (&#32321;&#39636;)',
    'zu'        => 'isiZulu',
);
/*** END TEMPORARY CODE ***/
