<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = 'Contact Us';
    $base_href = BASE_URL;
    $active_page_title = 'Contact us';

    include_once WEB_ROOT . '/templates/head.php';
?>
    <section>
        <h1>Contact Us</h1>
        <p>
            Industry professionals are invited to contact us at any time. Partnerships. Affiliates. Technical information. Service requests. We want iJet Onboard to be your network. So please be in touch regarding specific needs or applications you may require.
        </p>
        <p>
        <h2>Corporate Headquarters</h2>
        <p>
            1601 Fifth Avenue, Suite 1200<br>
            Seattle, WA 98101<br>
            <a href="tel:1-206-832-1250">206.832.1250</a>
        </p>
        <p>
            <strong>General Inquiries:</strong><br>
            <a href="mailto:contact@ijetonboard.com">contact@ijetonboard.com</a><br><br>
            <strong>Media Inquiries:</strong><br>
            <a href="mailto:press@ijetonboard.com">press@ijetonboard.com</a><br><br>
            <strong>Event Inquiries:</strong><br>
            <a href="mailto:events@ijetonboard.com">events@ijetonboard.com</a><br><br>
            <strong>Career Inquiries:</strong><br>
            <a href="mailto:jobs@ijetonboard.com">jobs@ijetonboard.com</a>
        </p>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';