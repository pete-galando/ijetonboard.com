<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = 'Airlines';
    $active_parent = 'Airlines';
    $active_page_title = 'Overview';

    $heroes = array('hero_airport_terminal.jpg', 'hero_cockpit_illustration.jpg', 'hero_global_industry_icons.jpg');

    include_once WEB_ROOT . '/templates/head.php';
?>
    <section>
        <h1>Airlines</h1>
        <p>
            Our Platform and applications consume aircraft data to alert, notify, monitor, locate, sense, and provide actionable insight.
            This is the foundation for increasing operational efficiency and delivering value across the entire airline enterprise.
        </p>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';