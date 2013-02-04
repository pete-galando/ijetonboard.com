<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = $active_page_title = 'Press';
    $base_href = BASE_URL . '/about/';
    $active_parent = 'About Us';

$include_jquery = true;

$extra_styles = <<<EOF
    .spaced li {
        margin: 40px 40px;
    }
    .toggle-target {
        display: none;
        padding-left: 45px;
    }
    .toggle-link, .board li {
        font-weight: 400;
        text-decoration: none;
        display: block;
        line-height: 2;
    }
    .icon-up,
    .icon-down {
        padding-left: 35px;
        margin-left: 10px;
        padding-right: 0 !important;
        background-position: left center !important;
    }
    .board li {
        padding-left: 45px;
    }
    .images li {
        margin: 10px 35px;
    }
EOF;

$extra_scripts = <<<EOF
$(function() {
    $('.toggle-link').click(function() {
        var next = $(this).next();
        if(!next.is(':visible')) {
            $(this).removeClass('icon-down').addClass('icon-up');
        } else {
            $(this).removeClass('icon-up').addClass('icon-down');
        }
        next.slideToggle();
    });
});
EOF;

    $memberships = array(
        'http://www.flightglobal.com/',
        'http://www.airlines.org/',
        'http://www.arinc.com/',
        'http://www.rtca.org/',
        'http://www.apex.aero/',
        'http://www.ieee.org/',
        'http://www.asce.org/',
        'http://www.ietf.org/',
        'http://www.isoc.org/',
        'http://www.aviation-ia.com/aeec/',
        'http://www.nbaa.org/',
        'http://www.ametsoc.org/',
        'http://www.aiaa.org/',
        '',
        'http://www.acm.org/'
    );

    include_once WEB_ROOT . '/templates/head.php';
?>
    <section>
        <a name="top"></a><h1>Press</h1>
        <div style="position: relative;">
            <div style="background-color: #eee; padding: 20px; position: absolute; right: 0; top: 0;" class="rounded">
                <strong>For general media inquiries, please contact:</strong><br>
                <a href="mailto:press@ijetonboard.com">press@ijetonboard.com</a><br>
                <a href="tel:1-206-832-1250">206.832.1250</a><br>
                Toll free in U.S. and Canada <a href="tel:1-877-500-4538">877.500.4538</a>
            </div>
            <ul class="bulleted">
                <li><a href="#resources">Resources</a></li>
                <li><a href="#news">Industry News &amp; Press Releases</a></li>
                <li><a href="#memberships">Memberships &amp; Affiliations</a></li>
            </ul>
        </div>
    </section>
    <section>
        <a name="resources"></a><h2 class="anchor-header">Resources<a href="#top" class="icon-up back">Back to Top</a></h2>
        <ul class="bulleted">
            <li><a href="<?= BASE_URL ?>static/docs/ijet-company-overview.pdf" target="_blank">Company Overview</a></li>
            <li><a href="<?= BASE_URL ?>about/team.php">Bios</a></li>
            <li><a href="<?= BASE_URL ?>static/resources/iJetLogos.zip">Logos</a></li>
        </ul>
    </section>
    <section>
        <a name="news"></a><h2 class="anchor-header">Industry News &amp; Press Releases<a href="#top" class="icon-up back">Back to Top</a></h2>
        <ul class="spaced">
            <li>
                <a name="ceo" href="#ceo" class="toggle-link icon-down">iJet Onboard Names Aviation Veteran Steve Forte as CEO.</a>
                <div class="toggle-target">
                    "iJet Onboard, a privately held provider of platform-based software services enabling the intelligent aircraft, today announced thirty-year aviation andtechnology veteran Steve Forte will join the company as its Chief ExecutiveOfficer."
                    <p><a href="<?= BASE_URL ?>static/docs/Forte%20press%20release.pdf" target="_blank" class="button">
                        Read the full Article
                    </a></p>
                </div>
            </li>
            <li>
                <a name="tablets" href="#tablets" class="toggle-link icon-down">Here Come Tablets. Here come Problems</a>
                <div class="toggle-target">
                    "American Airlines was an early adopter of tablet computers. As a result, it learned a lot about how best to use tablets–and where it could go wrong."
                    <p><a href="<?= BASE_URL ?>static/docs/2012_04_02_WSJ.pdf" target="_blank" class="button">
                        Read the full Article
                    </a></p>
                </div>
            </li>
            <li>
                <a name="black-box" href="#black-box" class="toggle-link icon-down">In tech's golden age, why can't black boxes do more?</a>
                <div class="toggle-target">
                    "You wouldn't get a continuous data stream -- it would be activated by an automatic trigger -- but at least you would get the data when it counts," said Cash. The NTSB and France's BEA are asking the industry for data from past accidents to help design "trigger criteria" that would be used to activate the uplink system."
                    <p><a href="<?= BASE_URL ?>static/docs/2011_07_29_CNN.pdf" target="_blank" class="button">
                        Read the full Article
                    </a></p>
                </div>
            </li>
            <li>
                <a name="crash" href="#crash" class="toggle-link icon-down">Air France Crash Suggestion: Have Planes Send Black Box Data by Satellite</a>
                <div class="toggle-target">
                    "Now, some companies propose a way to prevent future accidents from becoming so mysterious. They suggest that overseas flights be equipped with transmitters so that planes automatically send information from their black boxes to satellites overhead if they get in trouble"
                    <p><a href="http://abcnews.go.com/Technology/air-france-crash-mystery-planes-send-black-box/story?id=13793676" target="_blank" class="button">
                        Read the full Article
                    </a></p>
                </div>
            </li>
            <li>
                <a name="eu" href="#eu" class="toggle-link icon-down">EU ETS and the avaiation industry: between a rock and a hard place</a>
                <div class="toggle-target">
                    In this exclusive CAPA interview, AVOCET Principal Barry Moss puts the European Union Emissions Trading Scheme (EU ETS) under the microscope to analyse its effects on airlines and lessors.
                    <p><a href= "http://centreforaviation.com/analysis/eu-ets-and-the-aviation-industry-between-a-rock-and-a-hard-place-52146" target="_blank" class="button">
                        Read the full Article
                    </a></p>
                </div>
            </li>
            <li>
                <a name="promise" href="#promise" class="toggle-link icon-down">Airlines Promise: It will Get Better</a>
                <div class="toggle-target">
                    "They say passengers can expect smoother check-ins and more comfortable flights. We'll have to see."
                    <p><a href="<?= BASE_URL ?>static/docs/2011_05_23_WSJ.pdf" target="_blank" class="button">
                        Read the full Article
                    </a></p>
                </div>
            </li>
            <li>
                <a name="#pilots" href="#pilots" class="toggle-link icon-down">Alaska Airlines Pilots Go Lean and Green with iPads</a>
                <div class="toggle-target">
                    First major domestic airline to use iPads to replace flight manuals.
                    <p><a href="<?= BASE_URL ?>static/docs/2011_07_29_CNN.pdf" target="_blank" class="button">
                        Read the full Article
                    </a></p>
                </div>
            </li>
        </ul>
    </section>
    <section>
        <a name="memberships"></a><h2 class="anchor-header">Memberships &amp; Affiliations<a href="#top" class="icon-up back">Back to Top</a></h2>
        <ul class="clearafter images">
        <?php
            $len = count($memberships);
            for($i = 0; $i < $len; $i++) {
                echo '<li class="float-left">'
                     . ($memberships[$i] !== '' ? '<a href="' . $memberships[$i] . '" target="_blank">' : '')
                     . '<img src="' . BASE_URL . 'static/images/affil/' . ($i + 1) . '.jpg">'
                     . ($memberships[$i] !== '' ? '</a>' : '')
                     . '</li>';
            }
        ?>
        </ul>
     </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';
