<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = $active_page_title = 'Events';
    $active_parent = 'About Us';

    $extra_styles = <<<EOF

    .spaced li {
        margin: 60px 40px;
    }

    .spaced img {
        margin-right: 40px;
    }

    strong {
        color: #8dc63f;
    }
EOF;


    include_once WEB_ROOT . '/templates/head.php';
?>
    <section>
        <h1>Events</h1>
        <p>
            We look forward to seeing you at the following events and conferences.<br>
            Please contact us to arrange a meeting &#8212; <a href="mailto:contact@ijetonboard.com">contact@ijetonboard.com</a> or <a href="tel:1-877-500-4538">877.500.4538</a>
        </p>
        <ul class="spaced">
            <li class="clearafter">
                <img class="float-left" src="<?= BASE_URL ?>static/images/events/sat.jpg" width="150" alt="Satellite 2013">
                <div class="float-left">
                    <strong>March 18-21, 2013</strong><br>
                    Satellite 2013M<br>
                    Washington, DC<br>
                    <a href="http://www.satellitetoday.com/satellite2013/" target="_blank">Event Website</a>
                </div>
            </li>
            <li class="clearafter">
                <img class="float-left" src="<?= BASE_URL ?>static/images/events/rtca.jpg" width="150"  alt="RTCA Annual Symposium">
                <div class="float-left">
                    <strong>June 5-6, 2013</strong><br>
                    RTCA Annual Symposium<br>
                    Washington, DC<br>
                    <a href="http://symposium.rtca.org/" target="_blank">Event Website</a>
                </div>
            </li>
            <li class="clearafter">
                <img class="float-left" src="<?= BASE_URL ?>static/images/events/AEEClogo.jpg" width="150"  alt="EFB Users Forum">
                <div class="float-left">
                    <strong>May 8-9, 2013</strong><br>
                    EFB Users Forum<br>
                    Stockholm, Sweden<br>
                    <a href="http://www.aviation-ia.com/events/EfbUsersForumAnnounce.pdf" target="_blank">Event Website</a>
                </div>
            </li>
        </ul>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';
