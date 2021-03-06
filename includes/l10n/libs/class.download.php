<?php

class firefoxDetailsL10n extends firefoxDetails
{

    function getLocaleBoxHome($locale, $options=array()) {
        $_include_js               = array_key_exists('include_js', $options)               ? $options['include_js']                : true;
        $_blockclass               = array_key_exists('blockclass', $options)               ? $options['blockclass']                : 'home-download';
        $_js_replace_links         = array_key_exists('js_replace_links', $options)         ? $options['js_replace_links']          : false;
        $_include_ancillary_links  = array_key_exists('ancillary_links', $options)          ? $options['ancillary_links']           : true;
        $_download_parent_override = array_key_exists('download_parent_override', $options) ? $options['download_parent_override']  : 'main-feature';
        $_bouncer_js               = array_key_exists('bouncer_js', $options)               ? $options['bouncer_js']                : false;
        $_extra_link_attr          = array_key_exists('extra_link_attr', $options)          ? $options['extra_link_attr']           : false;
        $_channel                  = array_key_exists('channel', $options)                  ? $options['channel']                   : 'stable';
        $_include_android          = array_key_exists('include_android', $options)          ? $options['include_android']           : true;

        switch ($_channel) {
            case 'older':
                $_current_version    = $this->getOldestVersionForLocaleFromBuildArray($locale, $this->primary_builds);
                $_betalocale_version = $this->getOldestVersionForLocaleFromBuildArray($locale, $this->beta_builds);
                $_targetted_version  = $option['version'] = LATEST_FIREFOX_OLDER_VERSION;
                // if we have no builds at all, let's default to en-US so as to display download boxes on pages
                if(!in_array($_targetted_version, array($_current_version, $_betalocale_version))) {
                    $locale           = 'en-US';
                    $_current_version = $this->getOldestVersionForLocaleFromBuildArray($locale, $this->primary_builds);
                }
                break;

            case 'beta':
                $_current_version    = $this->getDevelVersionForLocaleFromBuildArray($locale, $this->primary_builds);
                $_betalocale_version = $this->getDevelVersionForLocaleFromBuildArray($locale, $this->beta_builds);
                $_targetted_version  = $option['version'] = LATEST_FIREFOX_DEVEL_VERSION;
                // if we have no builds at all, let's default to en-US so as to display download boxes on pages
                if(!in_array($_targetted_version, array($_current_version, $_betalocale_version))) {
                    $locale           = 'en-US';
                    $_current_version = $this->getDevelVersionForLocaleFromBuildArray($locale, $this->primary_builds);
                }
                break;

            case 'aurora':
                $_current_version    = $this->getAuroraVersionForLocaleFromBuildArray($locale, $this->primary_builds);
                $_betalocale_version = $this->getAuroraVersionForLocaleFromBuildArray($locale, $this->beta_builds);
                $_targetted_version  = $option['version'] = FIREFOX_AURORA;
                // if we have no builds at all, let's default to en-US so as to display download boxes on pages
                if(!in_array($_targetted_version, array($_current_version, $_betalocale_version))) {
                    $locale           = 'en-US';
                    $_current_version = $this->getAuroraVersionForLocaleFromBuildArray($locale, $this->primary_builds);
                }
                break;

            case 'stable':
            default:
                $_current_version    = $this->getNewestVersionForLocaleFromBuildArray($locale, $this->primary_builds);
                $_betalocale_version = $this->getNewestVersionForLocaleFromBuildArray($locale, $this->beta_builds);
                $_targetted_version  = LATEST_FIREFOX_RELEASED_VERSION;

                // bela locales styling
                if ($_current_version == LATEST_FIREFOX_OLDER_VERSION) {
                    $_current_version = '';
                }

                // if we have no builds at all, let's default to en-US so as to display download boxes on pages
                if(!in_array($_targetted_version, array($_current_version, $_betalocale_version))) {
                    $locale           = 'en-US';
                    $_current_version = $this->getNewestVersionForLocaleFromBuildArray($locale, $this->primary_builds);
                }
                break;
        }


        // bela locales styling
        if ($_current_version == '') {
            $_current_version              = $_betalocale_version;
            $_blockclass                  .= ' betalocale';
            $options['betalocale_status']  = true;
        }

        $_locale_link_override = array_key_exists('locale_link_override', $options) ? $options['locale_link_override'] : $locale;
        $_ancillary_links      = $_include_ancillary_links ? $this->getAncillaryLinksForLocaleDiv($_locale_link_override, $options) : '';

        $options['version'] = $_current_version;

        $_in_primary = empty($this->primary_builds[$locale][$_current_version]) ? array('') : $this->primary_builds[$locale][$_current_version];
        $_in_beta    = empty($this->beta_builds[$locale][$_current_version])    ? array('') : $this->beta_builds[$locale][$_current_version];
        $_platforms  = array('Windows', 'Linux', 'OS X');

        foreach ($_platforms as $_os_var) {

            if (array_key_exists($_os_var, $_in_primary) && !isset($_in_primary[$_os_var]['unavailable']) ) {
                $_os_support[$_os_var] = true;
            } elseif (array_key_exists($_os_var, $_in_beta) && !isset($_in_beta[$_os_var]['unavailable']) ) {
                $_os_support[$_os_var] = true;
            } else {
                $_os_support[$_os_var] = false;
            }

            if ($_os_support[$_os_var] == true) {
                // Special case for OS X and Japanese...
                $_t_locale = ($locale == 'ja') ? 'ja-JP-mac' : $locale;
                $_temp[$_os_var] = $this->_getDownloadBlockListHtmlForLocaleAndPlatform2($_t_locale, $_os_var, $options);
            } else {
                $_temp[$_os_var] = $this->_getDownloadBlockListHtmlForLocaleAndPlatform2('en-US', $_os_var, $options);
            }
        }

        $_li_windows = $_temp['Windows'];
        $_li_linux   = $_temp['Linux'];
        $_li_osx     = $_temp['OS X'];

        $_li_android = "";
        if ($_include_android) {
            $_li_android = $this->_getDownloadBlockListHtmlForLocaleAndPlatform2('en-US', 'Android', $options);
        }

        if ($_include_js) {
            $_js_replace_links = $_js_replace_links ? 'true' : 'false';
            $_js_include = <<<JS_INCLUDE
            <script type="text/javascript">// <![CDATA[
                // If they haven't overridden this variable, set it to the default

                if (!download_parent_override) {
                    var download_parent_override = '{$_download_parent_override}';
                }

                if ({$_js_replace_links} && ('function' == typeof window.replaceDownloadLinksForId)) {
                    replaceDownloadLinksForId(download_parent_override);
                }
                if ('function' == typeof window.offerBestDownloadLink) {
                    offerBestDownloadLink(download_parent_override);
                }
                // unset download_parent_override otherwise you can't have 2 boxes on the same page !
                download_parent_override = '';

            /**
             * Will set the download class to the input.  Used for hiding links to download for
             * other platforms.
             *
             * @param object the parent class for the download's <ul>
             * @param string class to add
             */

            // ]]></script>

JS_INCLUDE;

        } else {
            $_js_include = '';
        }


        $_return = <<<HTML_RETURN

        <ul class="{$_blockclass}">
{$_li_windows}
{$_li_linux}
{$_li_osx}
{$_li_android}
        </ul>

{$_ancillary_links}

{$_js_include}
HTML_RETURN;

        return $this->tweakString($_return, $options);
    }


    function _getDownloadBlockListHtmlForLocaleAndPlatform2($locale, $platform, $options=array()) {
        $_product                     = array_key_exists('product', $options) ?  $options['product'] : 'firefox';
        $_extra_link_attr             = array_key_exists('extra_link_attr', $options) ? $options['extra_link_attr'] : '';
        $_layout                      = array_key_exists('layout', $options) ? $options['layout'] : '';
        $_current_version             = array_key_exists('version', $options) ? $options['version'] : $this->getNewestVersionForLocale($locale);
        $_bouncer_js                  = array_key_exists('bouncer_js', $options) ? $options['bouncer_js'] : false;
        $_download_product            = array_key_exists('download_product', $options) ?  ___($options['download_product']) : ___('Free Download');
        $_wording                     = array_key_exists('wording', $options) ?  ___($options['wording']) : 'Firefox';
        $_release_notes               = ___('Release Notes');
        $_other_systems_and_languages = ___('Other Systems and Languages');
        $_language_name               = $this->localeDetails->getNativeNameForLocale($locale);
        $_windows_name                = array_key_exists('windows_name', $options) ? $options['windows_name'] : ___('Windows');
        $_linux_name                  = array_key_exists('linux_name',   $options) ? $options['linux_name']   : ___('Linux');
        $_osx_name                    = array_key_exists('osx_name',     $options) ? $options['osx_name']     : ___('Mac OS X');
        $_android_name                = array_key_exists('android_name', $options) ? $options['android_name'] : ___('Android');
        $_mb                          = ___('MB');
        $_megabytes                   = ___('MegaBytes');
        $_betalocale_status           = array_key_exists('betalocale_status', $options) ? $options['betalocale_status'] : false;
        $_dl_extra                    = array_key_exists('dl_extra', $options)          ? $options['dl_extra']          : false;

        if ($_dl_extra) {
            $extra = '&extra='.htmlspecialchars(strip_tags($_dl_extra), ENT_QUOTES);
        } else {
            $extra = '';
        }


        if (in_array($locale, $this->has_transition_download_page)) {
           $_download_base_url = $this->download_base_url_transition;
        } else {
           $_download_base_url = $this->download_base_url_direct;
        }

        if($_betalocale_status) {
            $beta_text = 'beta language';
            if($locale == 'sr') {
                $beta_text = 'бета језик';
            }
            $_betalocaletext = '<em style="color:orange; text-align:right;float:right; font-size:90%; padding: 0 5px;">' . $beta_text . '</em>';
        } else {
            $_betalocaletext = '';
        }

        switch ($platform) {
            case 'Windows':
                $_os_class     = 'os_windows';
                $_os_shortname = 'win';
                $_os_name      = $_windows_name;
                $_os_file_ext  = 'win32.installer.exe';
                break;
            case 'Linux':
                $_os_class     = 'os_linux';
                $_os_shortname = 'linux';
                $_os_name      = $_linux_name;
                $_os_file_ext  = 'linux-i686.tar.bz2';
                break;
            case 'OS X':
                $_os_class     = 'os_osx';
                $_os_shortname = 'osx';
                $_os_name      = $_osx_name;
                $_os_file_ext  = 'mac.dmg';
                break;
            case 'Android':
                $_os_class     = 'os_android';
                $_os_shortname = 'android';
                $_os_name      = $_android_name;
                break;
            default:
                return;
        }

        // include the onclick js needed to go through IE6 popup blocker
        if ($_bouncer_js) {
            $_extra_link_attr .= 'onclick="javascript:do_download(\''."http://download.mozilla.org/?product={$_product}-{$_current_version}&amp;os={$_os_shortname}&amp;lang={$locale}".'\');"';
        }



        // fix a display bug in the download box if there is an english string in it
        global $lang;
        if(in_array($lang, array('ar', 'fa', 'he'))) {
            $extra_dl_info = "<em>$_os_name - <span dir=\"ltr\">$_language_name</span></em>";
        } else {
            $extra_dl_info = "<em>$_os_name - $_language_name</em>";
        }

        $_dl_link = $_download_base_url . '?product=' . $_product . '-' . $_current_version . '&amp;os=' . $_os_shortname . '&amp;lang='. $locale . $extra;
        if ($platform == 'Android') {
            $_dl_link = 'https://market.android.com/details?id=org.mozilla.firefox';
            $_language_name = '';
        }

        switch ($_layout) {
            // FIXME can't find this case in the source code, maybe we should delete?
            case 'linksonly':

                $_return = <<<LI_SIDEBAR
                <li class="{$_os_class}"><a class="download-{$_product}" href="{$_download_base_url}?product={$_product}-{$_current_version}&amp;os={$_os_shortname}&amp;lang={$locale}" {$_extra_link_attr}>{$_download_product}</a>
                </li>
LI_SIDEBAR;
                break;

            case 'smallbox':

                $_return = <<<LI_SIDEBAR
                <li class="{$_os_class}"><a class="download-link download-{$_product}" href="{$_dl_link}" {$_extra_link_attr}><span class="download-content"><span class="download-title">{$_wording}</span>{$_download_product}</span></a></li>
LI_SIDEBAR;
                break;

            case 'betabox':

                $_return = <<<LI_SIDEBAR
                <li class="{$_os_class}"><a class="download-link" href="{$_dl_link}" {$_extra_link_attr}><span>{$_download_product}</span></a>{$extra_dl_info}
                </li>
LI_SIDEBAR;
                break;

            case 'aurora':
                if($lang == 'en-US') {
                    $_repository = 'http://ftp.mozilla.org/pub/mozilla.org/firefox/nightly/latest-mozilla-aurora/';
                } else {
                    $_repository = 'http://ftp.mozilla.org/pub/mozilla.org/firefox/nightly/latest-mozilla-aurora-l10n/';
                }
                $_return = <<<LI_SIDEBAR
                <li class="{$_os_class}">
                <a class="download-link download-firefox" href="{$_repository}{$_product}-{$_current_version}.{$locale}.{$_os_file_ext}">
                <span class="download-content">
                    <span class="download-title">{$_download_product}</span> {$_wording}
                </span>
                {$extra_dl_info}
                </a>
                </li>
LI_SIDEBAR;
                break;

            case 'simple':
                $_return = <<<LI_SIDEBAR
                <li class="{$_os_class}">
                    <a class="download-link download-firefox" href="{$_dl_link}">
                <span class="download-content">
                    <span class="download-title">{$_download_product}</span> {$_wording}
                </span>
                {$extra_dl_info}
                </a>
                </li>
LI_SIDEBAR;
                break;

            case 'main':
            default:
                $_return = <<<LI_MAIN
                <li class="{$_os_class}">
                    <a class="download-link download-{$_product}" href="{$_dl_link}" {$_extra_link_attr}>
                        <span class="download-content">
                            <span class="download-title">{$_wording} <img class="download-arrow" alt="" src="/img/home/download-arrow.png"></span>
                            {$_download_product}
                            <span class="download-info">{$_os_name} &middot; {$_current_version} &middot; {$_language_name}</span>
                            {$_betalocaletext}
                        </span>
                    </a>
                </li>
LI_MAIN;
                break;
        }

        return $_return;
    }

    function getAncillaryLinksForLocaleDiv($locale, $options=array()) {
        $_devel_version = array_key_exists('devel_version', $options) ? $options['devel_version'] : false;

        if ($_devel_version) {
            $_current_version = $this->getDevelVersionForLocaleFromBuildArray($locale, $this->primary_builds);
            $_all_page_link = 'all-beta.html';
        } else {
            $_current_version = $this->getNewestVersionForLocale($locale);
            $_all_page_link = 'all.html';
        }

        $_release_notes               = ___('Release Notes');
        $_other_systems_and_languages = ___('Other Systems and Languages');
        $_privacy_policy              = ___('Privacy Policy');

        $_all_file = array_key_exists('all_file', $options) ? $options['all_file'] : 'latest';

        switch($_all_file) {
            case 'older':
                $_all = 'all-older.html';
                break;
            case 'beta':
                $_all = 'all-beta.html';
                break;
            case 'aurora':
                $_all = 'all-aurora.html';
                break;
            case 'rc':
                $_all = 'all-rc.html';
                break;
            case 'latest':
            default:
                $_all = 'all.html';
                break;
        }


        if(array_key_exists('relnotes_link', $options)) {

            $_return = <<<HTML_RETURN
            <div class="download-other">
                <a class="ancillaryLink" href="/{$locale}/firefox/{$_current_version}/releasenotes/">{$_release_notes}</a> -
                <a class="ancillaryLink" href="http://www.mozilla.com/{$locale}/legal/privacy/">{$_privacy_policy}</a> <br/>
                <a class="ancillaryLink" href="http://www.mozilla.com/{$locale}/firefox/{$_all}">{$_other_systems_and_languages}</a>
            </div>
HTML_RETURN;

        } else {

            $_return = <<<HTML_RETURN
            <div class="download-other">
                <a class="ancillaryLink" href="http://www.mozilla.com/{$locale}/legal/privacy/">{$_privacy_policy}</a> -
                <a class="ancillaryLink" href="http://www.mozilla.com/{$locale}/firefox/{$_all}">{$_other_systems_and_languages}</a>
            </div>
HTML_RETURN;

        }

        return $_return;
    }

}

?>
