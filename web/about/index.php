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
        iJet's vision for the intelligent aircraft is to help our airline customers generate new sources of revenue and become more operationally efficient. We begin by changing the way applications are delivered to the aircraft. The iJet Platform will deliver a broad array of integrated solutions, services and data analytics to help our Customers achieve key tactical and strategic objectives and thrive amid environmental concerns and operational, economic and regulatory challenges.</p>
        <p>
Gone are the days of having to cost justify single point solutions. iJet's strategy is centered on a Platform as a Service delivery model.  We draw on previously proven design concepts from cloud-computing to evolve the aviation industry from the previous hardware-centric architecture to a shared software and services infrastructure.   Our Platform merges airline ground systems, communications links, and onboard systems into a single solution.  This approach enables a rich and continuous flow of data and information between the aircraft and the airline.
<br>
We proudly deliver value from our first installation!
        </p>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';
