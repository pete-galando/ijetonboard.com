<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = 'Airlines';
    $base_href = BASE_URL . '/airlines/';
    $active_parent = 'Airlines';
    $active_page_title = 'Overview';

    include_once WEB_ROOT . '/templates/head.php';
?>
    <section id="banner"></section>
    <section>
        <h1>Airlines</h1>
        <p>
            Our Platform and applications consume aircraft data to alert, notify, monitor, locate, sense, and provide actionable insight.
            This is the foundation for increasing operational efficiency and delivering value across the entire airline enterprise.
        </p>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';