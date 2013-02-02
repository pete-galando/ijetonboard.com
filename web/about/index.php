<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = 'About Us';
    $base_href = BASE_URL . '/about/';
    $active_parent = 'About Us';
    $active_page_title = 'Overview';

    include_once WEB_ROOT . '/templates/head.php';
?>
    <section>
        <h1>About Us</h1>
        <p>
            iJet's vision for the intelligent aircraft is to help our airline customers generate new sources of revenue and become more operationally efficient.  We begin by changing the way applications are delivered to the aircraft.
        </p>
        <p>
            Gone are the days of having to cost justify single point solutions. iJet's Platform-as-a-Service delivers value from the first installation and defends against technology obsolescence by harnessing the flexibility of software.
            With our open, agnostic system, the application development possibilities for innovative third parties are endless.
        </p>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';