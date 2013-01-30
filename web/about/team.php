<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = $active_page_title = 'Team';
    $base_href = BASE_URL . '/about/';
    $active_parent = 'About Us';

    include_once WEB_ROOT . '/templates/head.php';
?>
    <section id="banner"></section>
    <section>
        <h1>About Us</h1>
        <p>
            iJet's vision for the intelligent aircraft is to help our airline customers generate new sources of revenue and become more operationally efficient.
            We are going to accomplish this by changing how applications are brought to the aircraft. To support this vision iJet Onboard is building a Platform-as-a-Service.
        </p>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';