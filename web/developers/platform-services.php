<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title             = 'Platform Services';
    $active_parent     = 'Developers';
    $active_page_title = 'Platform Services';

    include_once WEB_ROOT . '/templates/head.php';
?>
<section id="banner"></section>
<section>
    <h1>Platform Services</h1>
    <p>
        The iJet Platform provides three foundational capabilities: application hosting, data management, and systems
        management.
    </p>
    <p>
        Our Platform centralizes these common capabilities for reuse, eliminating the need for development
        of every new application or service.
    </p>
    <p>Core Platform Services consist of the following main capabilities:</p>
    <ul class="spaced">
        <li>
            <strong>Application hosting onboard and offboard the aircraft</strong><br>
            Whether an application resides on the aircraft or in a terrestrial data center, iJet provides OS and runtime capabilities to run lightweight Java, C, and C++ applications. Application deployment and management is handled by iJet. More complex enterprise applications, which are not hosted by iJet, can still access aircraft and airline data through iJet data services.
        </li>
        <li>
            <strong>Simplified air-to-ground communications</strong><br>
            The iJet Platform provides an abstract, message-based communications service to allow applications to communicate between onboard and offboard endpoints. iJet’s Multi-Link Communications Manager minimizes the complexity of mobile air/ground communications from application developers, while ensuring lowest cost, fastest possible communication across the entire landscape of aviation datalinks.
        </li>
        <li>
            <strong>Low-latency access to aircraft data</strong><br>
            The iJet Platform translates aircraft data from archaic, native formats to modern, self-describing formats that are easy for modern developers to consume. The Platform also transmits this data to the ground, so it is available onboard and offboard. For streaming updates of aircraft data, the Platform provides a message-centric pub/sub interface. Request/response services satisfy other specific needs, including current and historical data inquiries.
        </li>
        <li>
            <strong>Standardized health, status, and service management</strong><br>
            The iJet Platform centralizes all log events, applies filters, and notifies ground-based operators of the most urgent issues. Active monitoring functions on the iJet Platform integrate similarly with the central logging system to provide a robust external assessment of application health and status.
        <li>
        <li>
            <strong>Remote software update capabilities</strong>
            The iJet Platform implements policy-driven configuration management, both for onboard and offboard components. This configuration management function provides iJet operators the ability to safely and remotely update software and configurations on the airplane, with roll-back in case of failure.
        </li>
    </ul>
</section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';