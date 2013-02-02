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
        iJet Onboard will utilize multi-Multi Link Management to choose the best link according to a set of business rules and
        dynamically manage the link for the most efficient transport.
    </p>
    <p>
        Our airline customers utilize a variety of networks based upon their route structure. The following map
        illustrates coverage for the currently available connectivity solutions.
    </p>
    <ul class="bulleted">
        <li><a href="#options">Connectivity Options</a></li>
        <li><a href="#link-management">Multi Link Management</a></li>
    </ul>
    <section>
        <a name="options"></a><h2 class="anchor-header">Connectivity Options<a href="#top" class="icon-up back">Back to Top</a></h2>
        <iframe id="connectivity" src="<?= BASE_URL ?>etc/rotator" border="0" width="888" height="573"></iframe>
    </section>
    <section>
        <a name="link-management"></a><h2 class="anchor-header">Multi Link Management<a href="#top" class="icon-up back">Back to Top</a></h2>
        <p class="text-center"><img src="<?= BASE_URL ?>static/images/link-management.png" alt="Multi Link Management" width="888" height="477"></p>
    </section>
</section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';