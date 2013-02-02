<?php
/**
 * Base file to be included by all scripts which initializes a few environment variables.
 */

    define('WEB_ROOT', dirname(__FILE__));

    define('ENABLE_CUSTOM_FONT', true);

    define('BASE_URL', 'http://newwww.us.ijetonboard.com/');

    $pages = array(
        'Home'      => array( 'url' => '/' ),
        'About Us'  => array(
            'url'       => '/about/',
            'children'  => array(
                'Overview'  => array( 'url' => '/about/' ),
                'Team'      => array( 'url' => '/about/team.php' ),
                'Events'    => array( 'url' => '/about/events.php' ),
                'Press'     => array( 'url' => '/about/press.php' ),
                'Careers'   => array( 'url' => '/about/careers/' )
            )
        ),
        'Airlines'  => array(
            'url'       => '/airlines/',
            'children'  => array(
                'Overview'      => array( 'url' => '/airlines/' ),
                'Platform'      => array( 'url' => '/airlines/platform.php' ),
                'Applications'  => array( 'url' => '/airlines/applications.php' ),
                'Data Services' => array( 'url' => '/airlines/data-services.php' ),
                'Connectivity'  => array( 'url' => '/airlines/connectivity.php' )
            )
        ),
        'Developers'  => array(
            'url'       => '/developers/',
            'children'  => array(
                'Overview'                  => array( 'url' => '/developers/' ),
                'Application Development'   => array( 'url' => '/developers/application-development.php' ),
                'Platform Services'         => array( 'url' => '/developers/platform-services.php' )
            )
        ),
        'Contact Us'    => array( 'url' => '/contact-us.php' )
    );
