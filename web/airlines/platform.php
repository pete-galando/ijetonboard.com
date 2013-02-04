<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = 'Platform';
    $active_parent = 'Airlines';
    $active_page_title = 'Platform';

    $extra_styles = <<<EOF
        .platform-tab-content {
            width: 440px;
            margin-left: 20px;
        }

        .platform-tab-content > p:first-child {
            margin-top: 0;
        }

        .platform-tab-content > p:last-child {
            margin-bottom: 0;
        }
EOF;

    include_once WEB_ROOT . '/templates/head.php';
?>
    <section>
        <a name="top"></a>
        <h1>Platform</h1>
        <p>
            Enabled with iJet's Onboard Platform, aircraft become part of a smarter, software-based ecosystem. The flow of information is rich and continuous. And because the platform is driven by software, the fleet's capabilities can improve literally overnight.
        </p>
        <ul class="bulleted">
            <li><a href="#overview">Overview</a></li>
            <li><a href="#onboard">Onboard System</a></li>
            <li><a href="#ground">Ground-Based System</a></li>
        </ul>
    </section>
    <section>
        <a name="overview"></a><h2 class="anchor-header">Overview<a href="#top" class="icon-up back">Back to Top</a></h2>
        <div class="clearafter">
            <img src="<?= BASE_URL ?>static/images/platform-chart.gif" width="479" height="502" alt="Diagram of the Platform" class="float-left" style="margin-right: 1px;">
            <div class="float-left platform-tab-content">
                <p>
                    The iJet Onboard Platform is an integrated and flexible system comprised of both onboard and terrestrial components, designed to support a wide range of operational applications for the aviation industry.
                </p>
                <p>
                    Our platform provides:
                </p>
                <ul class="bulleted">
                    <li>Greatly enhanced onboard data collection</li>
                    <li>A stable interface to the aircraft core systems</li>
                    <li>Multi link management tools</li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <a name="onboard"></a><h2 class="anchor-header">Onboard System<a href="#top" class="icon-up back">Back to Top</a></h2>
        <div class="clearafter">
            <img src="<?= BASE_URL ?>static/images/platform-onboard.jpg" width="480" height="501" alt="Diagram of the Onboard System" class="float-left">
            <div class="float-left platform-tab-content">
                <p>
                    The iJet Onboard System functions as the onboard data aggregator and hosting server.
                </p>
                <p>
                    Installed onboard the aircraft, it performs the following functions within our platform:
                </p>
                <ul class="bulleted">
                    <li>Application platform for onboard computing capacity to provide web servers, applications and API access to aircraft data.</li>
                    <li>Interface with the connectivity package.</li>
                    <li>Communication server for airplane systems and sensors.</li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <a name="ground"></a><h2 class="anchor-header">Ground-Based System<a href="#top" class="icon-up back">Back to Top</a></h2>
        <div class="clearafter">
            <img src="<?= BASE_URL ?>static/images/platform-ground.jpg" width="480" height="501" alt="Diagram of the Onground System" class="float-left">
            <div class="float-left platform-tab-content">
                <p>
                    The iJet Ground Based Infrastructure provides the terrestrial hosting and application management environments &#8212; from simple portals passing through the Internet, to hosted web applications and intense data processing.
                </p>
                <p>
                    The Ground Based Infrastructure enables our third-party software developers to address airline concerns, in areas where they have deep domain experience, without the need to construct complex hardware and software systems onboard the aircraft.
                    This results in substantial savings in development costs and time-to-market.
                </p>
            </div>
        </div>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';
