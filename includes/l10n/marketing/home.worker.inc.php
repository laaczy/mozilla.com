
<div id="main-feature">
    <h2><?php e__("Works harder so you don't have to."); ?></h2>

    <ul id="benefits">
        <li class="first"><?php e__('Increased <br/> speed'); ?></li>
        <li><?php e__('Easy to <br/> access tabs'); ?></li>
        <li><?php e__('Productivity <br/> add-ons'); ?></li>
    </ul>


<?=buildPlatformImage($config['static_prefix'].'/img/covehead/firefox/direct/worker-calender.png', 'Firefox screenshot', null, null, 'screenshot', array('mac', 'linux'))?>

<?=$downloadbox?>
<p id="mobile-promo"></p>

</div>
<hr class="hide" />

<?php

require_once $config['file_root'].'/includes/l10n/marketing/home.lowerpage.inc.php';

?>
