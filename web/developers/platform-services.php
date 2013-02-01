<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title             = 'Platform Services';
    $active_parent     = 'Developers';
    $active_page_title = 'Platform Services';

    include_once WEB_ROOT . '/templates/head.php';
?>
<section id="banner"></section>
<section>
    <h1>Platform Services</h1>
    <p>
        The iJet Platform provides three foundational capabilities: application hosting, data management, and systems
        management.
    </p>
    <p>
        Our Platform centralizes these common capabilities for reuse, eliminating the need for development
        of every new application or service.
    </p>
</section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';