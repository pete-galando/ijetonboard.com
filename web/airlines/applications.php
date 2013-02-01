<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = 'Applications';
    $active_parent = 'Airlines';
    $active_page_title = 'Applications';

    include_once WEB_ROOT . '/templates/head.php';
?>
    <section id="banner"></section>
    <section>
        <h1>Applications</h1>
        <div class="clearafter">
            <div class="float-left one-third column">
                <h2 class="no-rule">iJet Built</h2>
                <p>Lorum ipsum...</p>
            </div>
            <div class="float-left one-third column">
                <h2 class="no-rule">Partner Applications</h2>
                <p>Lorum ipsum...</p>
            </div>
            <div class="float-left one-third column">
                <h2 class="no-rule">Data Services</h2>
                <p>Lorum ipsum...</p>
            </div>
        </div>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';