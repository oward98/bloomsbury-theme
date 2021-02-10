<?php

require get_template_directory() . '/Components/HeaderNav/HeaderNav.php';
require get_template_directory() . '/Components/HeaderNavMobile/HeaderNavMobile.php';
require get_template_directory() . '/Components/SubscribeWidget/SubscribeWidget.php';

function SiteHeader() {
?>
<header id='siteHeader'>
    <div id='topBar'>
    <h1>
        <?= get_custom_logo(); ?>
    </h1>
    <?=HeaderNavMobile()?>
    <?=SubscribeWidget()?>
    </div>
    <?=HeaderNav()?>
</header>
<?php
}

