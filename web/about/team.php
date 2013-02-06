<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = $active_page_title = 'Team';
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


    include_once WEB_ROOT . '/templates/head.php';
?>
    <section>
        <h1>The iJet Team</h1>
        <p>
            iJet Onboard has assembled a world-class management team that includes industry veterans in aviation, telecommunications, finance, digital technology, enterprise architecture and data management. The team brings over 130 years of collective industry experience.
        </p>
    </section>
    <section>
        <h2>Executive Team</h2>
        <ul class="spaced">
            <li>
                <a name="steve-forte" href="#steve-forte" class="toggle-link icon-down">Steve Forte, Chief Executive Officer</a>
                <div class="toggle-target">
                    With more than thirty years of aviation experience and a passion for using technology to solve business problems, Steve Forte understands the importance of delivering strategic value to airline customers. Prior to joining iJet, Steve successfully delivered enhanced financial, operational and market driven results for Seattle-based Naverus, Inc., a global leader in Performance-based Navigation. His ability to inspire dramatic results for Naverus led to their eventual sale to GE Aviation. Steve is a seasoned senior executive who has held several leadership positions, including Senior Vice President of Flight Operations for United Airlines. In addition he is an experienced pilot with 14,000 flight hours in over 50 aircraft types.
                </div>
            </li>
            <li>
                <a name="mike-cary" href="#mike-cary" class="toggle-link icon-down">Mike Carey, Senior Vice President</a>
                <div class="toggle-target">
                    Mike is responsible for all aspects of legal, finance, HR and business operations functions, providing oversight, guidance and direction to facilitate the achievement of iJet Onboard's business goals. Mike brings a broad range of experience, having counseled large companies on a multitude of issues including commercial agreements, strategic initiatives, corporate finance, acquisitions and government affairs. Mike was most recently senior legal manager, products and technology at Nintendo, and prior to that was general counsel at Extend America. He also held the position of executive counsel at The Walt Disney Company and was in charge of global legal services for Dell.
                </div>
            </li>
            <li>
                <a name="reuven-carlyle" href="#reuven-carlyle" class="toggle-link icon-down">Reuven Carlyle, Vice President of Strategic Development</a>
                <div class="toggle-target">
                    Reuven leads the company's external affairs, public policy and government relations efforts. As a serial entrepreneur in the software, wireless and clean energy sectors, Reuven has helped to bring advanced technology solutions to the transportation, military and public safety industries. Reuven is also an elected official in Washington State, serving as a member of the state House of Representatives.
                </div>
            </li>
            <li>
                <a name="benson-miller" href="#bensor-miller" class="toggle-link icon-down">Benson Miller, Vice President of Engineering</a>
                <div class="toggle-target">
                    Benson Miller was on the founding team at iJet and currently serves as Vice President of Engineering. For the first two years of iJet's history, Benson served as Director of Technology, where he was responsible for the architecture and design of the iJet platform. Prior to iJet, Benson led complex architectural efforts for many of the Northwest's premier companies. He was infrastructure lead for the global redesign of data management systems at Frank Russell Company, lead billing architect at Safeco Insurance, member of architecture governance at Clearwire, and WAN optimization architect at Microsoft. Additionally, Benson led the systems team for Driveway, an online storage start-up, building a new data center and executing seamless migration to the new infrastructure.
                </div>
            </li>
            <li>
                <a name="michelle-saro" href="#michelle-saro" class="toggle-link icon-down">Michelle Saro, Vice President of Marketing &amp; Business Development</a>
                <div class="toggle-target">
                    Michelle heads the group responsible for marketing iJet Onboard including the conception, design, development, and production of iJet's brand. Additionally, she manages the iJet's business development team to negotiate partnerships with industry leading third party application developers and connectivity providers. Michelle was most recently in charge of digital media product development for SeaMobile. Saro has also directed marketing and business development efforts for several technology, data and telecommunications companies, including RealNetworks, AT&T, NextLink Interactive and Pacific Bell Information Services.
                </div>
            </li>
            <li>
                <a name="john-schramm" href="#john-schramm" class="toggle-link icon-down">John Schramm, Vice President of Product</a>
                <div class="toggle-target">
                    John leads the group responsible for product development. Most recently, he was a senior consultant with SeaTec, LLC, focused on the strategic and financial implications of aerospace investments. He is a former naval aviator with over 25 years of experience in both military and major airline flight operations, and is an active commercial pilot. John holds an MBA from Emory University and a BS in Electrical Engineering from the Georgia Institute of Technology.
                </div>
            </li>
            <li>
                <a name="steve-sybeldon" href="#steve-sybeldon" class="toggle-link icon-down">Steve Sybeldon, Vice President of Airline Solutions</a>
                <div class="toggle-target">
                    Steve brings over 25 years of satellite and wireless communications management experience to the iJet team. Prior to joining iJet, Sybeldon led worldwide sales for SeaMobile and MTN Satellite Communications. In this position, he was responsible for global satellite network sales and development of innovative products and services to the maritime segment servicing both cruise and commercial shipping customers in the US, Europe and Asia. Steve has held executive level positions with McCaw Cellular and AT&T Wireless Services, where he was regional vice president responsible for the management of sales, customer service, technical operations, and people development.
                </div>
            </li>
        </ul>
    </section>
    <section>
        <h2>Board of Directors</h2>
        <ul class="spaced">
            <li>
                <a name="wmj-marks" href="#wmj-marks" class="toggle-link icon-down">William J. Marks, Chairman & Co-Founder</a>
                <div class="toggle-target">
                Mr. Marks' began his career in the cable television industry when he co-founded Marks CableVision, American Cable and other cable systems. Mr. Marks was awarded exclusive telephony and cable agreements in the UK and France.  In 2004, he co-founded SeaMobile, the world.s leading provider of satellite connectivity to remote locations and on ships.  Marks is a member of the Cable TV Pioneers and has extensive background and contacts in the financial markets in both the U.S. and Europe.</div>
            </li>
            <li>
                <a name="jp-roed" href="#jp-roed" class="toggle-link icon-down">Jan Petter Roed, Co-Founder & Director</a>
                <div class="toggle-target">
Jan Petter (J.P.) Roed is a member of the American Bureau of Shipping, and has deep experience within the commercial and financial operations of the shipping industry.  He has owned and operated a mixed fleet of oil and chemical tankers, passenger ferries, container ships, and bulk carriers He attended the Norwegian Institute of Technology, attaining a Master of Science degree in Naval Architecture and Marine Engineering.  Amongst his other achievements, his commendations include the Order of the North Star, Sweden, and the Order of the Falcon, Iceland.  Other interests have ranged from geothermal power plants and windmills in the US and globally, to environmental and safety management in the oil and petrochemical industries.  He served as a member of the advisory committee of SeaMobile, Inc.
</div>
            </li>
            <li>
                <a name="thomas-rinderknecht" href="#thomas-rinderknecht" class="toggle-link icon-down">Dr. Thomas Rinderknecht, Director</a>
                <div class="toggle-target">
Dr. Thomas M. Rinderknecht, J.D., M.D., has been practicing commercial law in Europe since 1982. He is a senior partner with Badertscher Rechtsanw&#228lte AG Attorneys in Switzerland, specializing in pharmaceutical and biotech law. Dr. Rinderknecht founded one of the first Swiss venture capital companies  VECAP Venture Capital Partners AG, and has been actively involved in the start-up, development and exit of various successful biotech and pharmaceutical companies.  He has served on the boards of directors of several biotech, pharma and medtech companies including Speedel AG, Basel, Glycart Biotechnology AG, Schlieren, and Ganymed Pharmaceuticals. He currently serves as chairman of Canyon Pharmaceuticals AG, Zug, and vice-chairman of APR Applied Pharma Research SA, Balerna.
</div>
            </li>
        </ul>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';
