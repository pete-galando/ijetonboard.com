<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = 'Application Development';
    $active_parent = 'Developers';
    $active_page_title = 'Application Development';

$extra_styles = <<<EOF
    #app-dev li {
        margin: 20px 0;
    }
    #app-dev li img {
        margin-right: 20px;
    }
    #app-dev li div {
        width: 840px;
    }
    #app-dev > li:last-child {
        margin-bottom: 0;
    }
EOF;

    include_once WEB_ROOT . '/templates/head.php';
?>
    <section id="banner"></section>
    <section>
        <h1>Application Development</h1>
        <ul id="app-dev">
            <li class="clearafter">
                <img src="<?= BASE_URL ?>/static/images/app-dev-1.png" width="100" class="float-left">
                <div class="float-left">
                    <strong>iJet SDK</strong><br>
                    <p>
                        iJet recognizes that to be the leading platform and services provider in aviation, we will need to nurture and develop a vibrant application development community.  A significant part of that vision includes a comprehensive Software Development Kit (SDK), providing everything software engineers need to create and deploy great applications.   Our Platform SDK furnishes developers with the tools they need to rapidly leverage core competencies and subject matter expertise to develop aviation-focused applications and services for onboard and offboard iJet Platform users.
                    </p>
                </div>
            </li>
            <li class="clearafter">
                <img src="<?= BASE_URL ?>/static/images/app-dev-2.png" width="100" class="float-left">
                <div class="float-left">
                    <strong>iJet Tools</strong><br>
                    <p>
                        Complimenting the SDK is the iJet Data Catalog, which provides developers and users a consistent and standard identification of managed data values, even over a diverse airline fleet.  It exposes multiple granular layers of data depending upon user needs, and supports a write-once run-anywhere data abstraction concept that is agnostic of aircraft model or type.  This scheme allows developers to take advantage of the convenience and abstraction of higher layers while still retaining an ability to access lower layer items when needed, all designed with clear descriptions and structured naming in mind.
                    </p>
                </div>
            </li>
        </ul>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';