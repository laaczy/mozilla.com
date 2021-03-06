<?php

$current_year       = date('Y');
$extra_footers      = empty($extra_footers) ? '' : $extra_footers;
$extra_footer_links = empty($extra_footer_links) ? '' : $extra_footer_links;
$creative_commons   = sprintf(___('Except where otherwise <a href="%s">noted</a>, content on this site is licensed under the <br /><a href="%s">Creative Commons Attribution Share-Alike License v3.0</a> or any later version.'),"/$lang/about/legal.html#site", 'http://creativecommons.org/licenses/by-sa/3.0/');

// Webtrends stats, see bug 556384
require "{$config['file_root']}/includes/js_stats.inc.php";

$dynamic_footer = <<<DYNAMIC_FOOTER

    </div><!-- end #doc -->
    </div><!-- end #wrapper -->

    <!-- start #footer -->
    <div id="footer">
    <div id="footer-contents">
    <div id="copyright">
        <p id="footer-links"><a href="/{$lang}/privacy-policy.html">{$l10n->get('Privacy Policy')}</a> &nbsp;|&nbsp;
        <a href="/{$lang}/about/legal.html">{$l10n->get('Legal Notices')}</a> &nbsp;|&nbsp;
                    <a href="/{$lang}/legal/fraud-report/index.html">{$l10n->get('Report Trademark Abuse')}</a></p>
        <p>{$creative_commons}</p>
    </div>
    </div>
    </div>
    <!-- end #footer -->
    {$stats_js}
    {$extra_footers}

</body>
</html>
DYNAMIC_FOOTER;

?>
