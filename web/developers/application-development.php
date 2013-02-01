<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = 'Application Development';
    $base_href = BASE_URL . '/developers/';
    $active_parent = 'Developers';
    $active_page_title = 'Application Development';

    include_once WEB_ROOT . '/templates/head.php';
?>
    <section id="banner"></section>
    <section>
        <h1>Application Development</h1>
        <p>
            Lorum Ipsum...
        </p>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';