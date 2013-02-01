<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = $active_page_title = 'Team';
    $active_parent = 'About Us';

    include_once WEB_ROOT . '/templates/head.php';
?>
    <section>
        <h1>The iJet Team</h1>
        <p>
            iJet Onboard has assembled a world-class management team that includes industry veterans in aviation, telecommunications, finance, digital technology, enterprise architecture and data management. The team brings over 130 years of collective industry experience.
        </p>
    </section>
    <section>
        <h2>Executive Team</h2>
    </section>
    <section>
        <h2>Board of Directors</h2>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';