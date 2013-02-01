<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title     = $active_page_title = 'Home';

    include_once WEB_ROOT . '/templates/head.php';

?>
<section id="banner"><img src="<?= BASE_URL ?>static/images/home-banner-1.jpg" width="960" height="300"
                          alt="The US global airline industry is projected to grow to more than 40,000 aircraft by 2030">
</section>
<section class="clearafter">
    <div class="float-left column one-half">
        <h2>Airlines</h2>

        <p>
            Airline operators are coming to expect new capabilities from their airplanes. iJet provides an open platform
            and application to connect the airlines with their fleet.
        </p>
        <a href="<?= BASE_URL; ?>airlines/" class="button icon-plane">Learn More</a>
    </div>
    <div class="float-left column one-half">
        <h2>Developers</h2>

        <p>
            iJet allows developers to address the inefficiencies of the aviation market by rapidly developing and
            deploying applications a fraction of the cost.
        </p>
        <a href="<?= BASE_URL ?>developers/" class="button icon-gear">Learn More</a>
    </div>
</section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';