<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title             = 'Connectivity';
    $active_parent     = 'Airlines';
    $active_page_title = 'Connectivity';


$extra_styles = <<<EOF
    .text-center {
        text-align: center;
    }

    #connectivity {
        margin: 20px 36px 20px;
    }
EOF;

    include_once WEB_ROOT . '/templates/head.php';

?>
<section>
    <a name="top"></a><h1>Connectivity</h1>
    <p>
        We recognize that multiple technologies exist for providing connectivity to commercial aircraft. No single
        technology is the best option in all cases. The optimal solution may depend on the aircraft's location, the type
        of data that needs to be exchanged and data security considerations.
    </p>
    <p>
    iJet Onboard utilizes Multi Link Management to choose the best link according to a set of business rules and dynamically manage the link for the most efficient transport.
</p>
    <p>
    Our airline customers operate their own communication links. The following map illustrates coverage for the currently available connectivity solutions.
</p>
    <ul class="bulleted">
        <li><a href="#options">Connectivity Options</a></li>
        <li><a href="#link-management">Multi Link Management</a></li>
    </ul>
    <section>
        <a name="options"></a><h2 class="anchor-header">Connectivity Options<a href="#top" class="icon-up back">Back to Top</a></h2>
        <iframe id="connectivity" src="<?= BASE_URL ?>etc/rotator" border="0" width="888" height="573" scrolling="no" ></iframe>
    </section>
    <section>
        <a name="link-management"></a><h2 class="anchor-header">Multi Link Management<a href="#top" class="icon-up back">Back to Top</a></h2>
<p>
iJet's Platform takes advantage of the growing number of communication solutions for commercial aircraft. Built on standard Internet protocols, the iJet Platform supports multiple data link technologies, including satellite, 3G/4G cellular, and Wi-Fi. No one single link technology is the best option for all communications. The optimal communications path may depend on an aircraft's location, the type of data that needs to be exchanged, and data security considerations. iJet's Platform uses Multi-Link Management to select the best link according to a set of business rules defined by the airline customer, and dynamically manages the available links to provide the most efficient communication.
</p>
        <p class="text-center"><img src="<?= BASE_URL ?>static/images/link-management.png" alt="Multi Link Management" width="888" height="477"></p>
    </section>
</section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';
