<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title             = 'Developers';
    $base_href         = BASE_URL . '/airlines/';
    $active_parent     = 'Developers';
    $active_page_title = 'Overview';

    include_once WEB_ROOT . '/templates/head.php';
?>
<section id="banner" xmlns="http://www.w3.org/1999/html"><img src="<?= BASE_URL ?>static/images/developers-banner-1.gif"
                                                              width="960" height="300"
                                                              alt="Developing for the iJet ONBOARD Platform">
</section>
<section>
    <h1>Developers</h1>
    <p>
        As the new platform and services provider in aviation iJet will nurture and develop and vibrant application
        development community.
        The iJet Platform occupies a central position in the emerging aerospace industrial data aggregation and analysis
        business by allowing aircraft operators to access, manage, secure and distribute data to intelligent
        applications.
    </p>
    <h2>How It Works</h2>
    <p>We make it easy for developers to access this large and untapped market through a variety of services.</p>
    <ul class="bulleted">
        <li>Data Services provides developers with secure access to aircraft data as soon as it streams off an
            airplane.
        </li>
        <li>Inquiry Services allow airlines to retrieve point-in-time aircraft data, both current and historical.</li>
        <li>Streaming Services pushes data to subscribing applications the moment the data is available.</li>
        <li>Customized Services enable developers to configure their own services based on specialized business needs.
        </li>
    </ul>
</section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';