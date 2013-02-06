<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title     = $active_page_title = 'Home';
    $include_jquery = true;
    $heroes = array('hero_home.jpg', 'hero_jets_illustration.jpg', 'hero_world_map.jpg');
    $active_parent = '';
    include_once WEB_ROOT . '/templates/head.php';

?>
<section class="clearafter">
    <div class="float-left column one-half">
        <h2>Airlines</h2>

        <p>
            Airline operators are coming to expect new capabilities from their airplanes. iJet provides an open and agnostic Platform-as-a-Service to connect airlines with their fleet.
        </p>
        <a href="<?= BASE_URL; ?>airlines/" class="button icon-plane">Learn More</a>
    </div>
    <div class="float-left column one-half">
        <h2>Developers</h2>

        <p>
        iJet allows developers to address current operational inefficiencies by rapidly developing and deploying applications.  Our Platform-as-a-Service approach reduces common development constraints and traditional barriers to entry. </p>
        <a href="<?= BASE_URL ?>developers/" class="button icon-gear">Learn More</a>
    </div>
</section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';
