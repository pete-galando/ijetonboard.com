<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = 'Applications';
    $active_parent = 'Airlines';
    $active_page_title = 'Applications';

    $extra_styles = <<<EOF
.spaced li div {
    width: 760px;
    margin-left: 20px;
}
EOF;

    $heroes = array('hero_insights.jpg');

    include_once WEB_ROOT . '/templates/head.php';

    $apps = array(
        array(
            'title' => 'APU MONITORING AND REPORTING',
            'desc'  => 'The Auxiliary Power Unit (APU) is a turbine engine that starts the aircraft's engines, provides air conditioning and electrical power on the ground, and back-up electrical power in flight.
This application eases the management of APU usage providing real-time alerting and post use reporting, resulting in substantial annual fuel and manpower savings.'
        ),
        array(
            'title' => 'AIRCRAFT SYSTEMS PREDICTION, EMULATION AND NOTIFICATION',
            'desc'  => 'Detailed real-time aircraft systems and engine operating data is currently limited or not available to ground personnel. This multi-faceted application provides en-route notification to the Technical Operations Center of actual or predicted aircraft component failures.
This application mirrors and replicates available flight deck and aircraft systems data allowing pilots and airline operations to collaborate on troubleshooting during flight.'
        ),
        array(
            'title' => 'CARBON EMISSIONS AUDITOR',
            'desc'  => 'Collects and aggregates fuel flow and emissions data to provide accurate emissions auditing by using actual operational data on a per-flight basis.  As Carbon Tax practices are initiated this application ensures airlines are not overcharged for carbon emissions based on inaccurate regulatory estimates of emissions.'
        ),
        array(
            'title' => 'OVERFLIGHT AUDITOR ',
            'desc'  => 'Repurposes location data without any additional bandwidth usage to create a \'location logbook.\' This application provides information to airlines and aircraft lessors who are subject to international over flight fees, federal and state use taxes, property taxes and sales taxes.  Accurate data allows airlines to contest over flight charges based on data from the actual flight path.'
        ),
        array(
            'title' => 'GRAPHICAL WEATHER TO THE FLIGHT DECK',
            'desc'  => 'Provides the most current weather to pilots anywhere around the globe, resulting in lower fuel consumption and increased passenger safety and comfort.'
        ),
        array(
            'title' => 'HIGH VALUE CUSTOMER',
            'desc'  => 'Allows flight crews to interface with reservation and customer loyalty software to make and receive immediate updates to passenger information. Increased revenues result from an enhanced customer experience, and greater customer loyalty and retention.'
        ),
    );
?>
    <section>
        <a name="top"></a>
        <h1>Applications</h1>
        <ul class="bulleted">
            <li><a href="#ijet-built">iJet Developed</a></li>
            <li><a href="#partner-built">Partner Developed</a></li>
        </ul>
    </section>
    <section>
        <a name="ijet-built"></a><h2 class="anchor-header">iJet Developed<a href="#top" class="icon-up back">Back to Top</a></h2>
        <p>
            iJet leads initial development efforts by delivering a set of applications that drive key features of the Platform. 
        </p>
        <ul class="spaced">
        <?php
            for($i = 0; $i < 4; $i++) {
                echo '<li class="clearafter"><img src="' . BASE_URL . '/static/images/apps-' . ($i + 1) . '.png" class="float-left" width="100">' .
                     '<div class="float-left"><strong>' . $apps[$i]['title'] . '</strong><br>' . $apps[$i]['desc'] . '</div></li>';
            }
        ?>
        </ul>
    </section>
    <section>
        <a name="partner-built"></a><h2 class="anchor-header">Partner Developed<a href="#top" class="icon-up back">Back to Top</a></h2>
        <p>
            The iJet Platform allows third-party application developers to address airline operational concerns in areas where they have domain expertise. This allows developers to focus on the core functionality of their own applications without the need to construct complex hardware and software systems on the aircraft.
        </p>
        <ul class="spaced">
            <?php
                $len = count($apps);
                for( ; $i < $len; $i++) {
                    echo '<li class="clearafter"><img src="' . BASE_URL . '/static/images/apps-' . ($i + 1) . '.png" class="float-left" width="100">' .
                        '<div class="float-left"><strong>' . $apps[$i]['title'] . '</strong><br>' . $apps[$i]['desc'] . '</div></li>';
                }
            ?>
        </ul>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';
