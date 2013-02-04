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
            'desc'  => 'Eases the management of APU usage, providing real-time alerting and post use reporting, resulting in substantial annual fuel and manpower savings.'
        ),
        array(
            'title' => 'AIRCRAFT SYSTEMS PREDICTION, EMULATION AND NOTIFICATION',
            'desc'  => 'Mirrors and replicates all flight deck and aircraft systems data allowing pilots and airline operations to collaborate on troubleshooting during flight. Provides en-route notification to Technical Operations of actual and predicted aircraft component failures.  This application facilitates measurable savings in delay minutes, cancellations, and manpower.'
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
            'desc'  => 'Allows flight crews to interface with reservation and customer loyalty software and make and receive immediate updates to passenger information. Increased revenues result from an enhanced customer experience, and greater customer loyalty and retention.'
        ),
        array(
            'title' => 'PRE-DEPARTURE MONITORING AND DELAY MANAGEMENT',
            'desc'  => 'Gathers and displays real-time progress information to pilots and airport operations personnel of all pre-departure processes, (baggage loading, passenger boarding, catering, fueling, etc.) to better ensure on-time aircraft departures.'
        )
    );
?>
    <section>
        <a name="top"></a>
        <h1>Applications</h1>
        <ul class="bulleted">
            <li><a href="#ijet-built">iJet Built</a></li>
            <li><a href="#partner-built">Partner Built</a></li>
        </ul>
    </section>
    <section>
        <a name="ijet-built"></a><h2 class="anchor-header">iJet Built<a href="#top" class="icon-up back">Back to Top</a></h2>
        <p>
            iJet leads initial development efforts by delivering a subset of applications that drive key features of the Platform. This provides the foundation for developing our software development kit (SDK) and assisting our application partners in their future development efforts.   Our initial applications include:
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
        <a name="partner-built"></a><h2 class="anchor-header">Partner Built<a href="#top" class="icon-up back">Back to Top</a></h2>
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
