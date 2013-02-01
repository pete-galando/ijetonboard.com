<?php

    if(!isset($active_page_title)) {
        $active_page_title = 'Home';
    }

    if(!isset($include_jquery)) {
        $include_jquery = false;
    }

?><!DOCTYPE html>
<html>
<head>
    <title>iJet ONBOARD&trade; | <?= htmlspecialchars($title); ?></title>
    <meta name="description"
          content="iJet Onboard is a platform and services company with a passion to transform commercial aviation. We are enabling the intelligent aircraft by building an open and secure platform which provides three foundational capabilities: systems management, data management and application hosting.">
    <meta name="keywords"
          content="iJet Onboard,clean-tech, satellite, global satellite network, real-time, two-way, transportation industry, global satellite, coverage, aviation, connectivity, bandwidth, platform, black box streaming, weather information, voice communication, EFB enhancement, technology, software">
    <? if (ENABLE_CUSTOM_FONT): ?>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300,600,700" rel="stylesheet"
          type="text/css"><?php endif; ?>
    <link href="/static/css/styles.css" rel="stylesheet" type="text/css">
    <? if(isset($extra_styles)): ?><style type="text/css"><?= $extra_styles ?></style><?php endif; ?>
    <!--[if lt IE 9]>
    <script src="/static/js/html5shiv.js"></script><![endif]-->
    <?php if($include_jquery): ?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script><?php endif; ?>
    <?php if(isset($extra_scripts)): ?><script><?= $extra_scripts; ?></script><?php endif; ?>
</head>
<body>
<div id="rail"></div>
<header class="clearafter">
    <a href="<?= BASE_URL; ?>"><img alt="iJet ONBOARD" src="/static/images/logo.gif" width="292" height="92" border="0"></a>
    <nav>
        <ul class="clearafter">
            <?php
                foreach ($pages as $title => $page_info) {
                    $is_active = $title === $active_page_title || $title === $active_parent;
                    echo '<li><a href="' . $page_info['url'] . '"' . ($is_active ? ' class="active"' : '') . '>' . $title . '</a>';
                }
            ?>
        </ul>
        <?php
            if (isset($pages[$active_parent]['children'])) {
                echo '<div class="subnav"><ul class="clearafter">';
                foreach ($pages[$active_parent]['children'] as $title => $page_info) {
                    $is_active = $title === $active_page_title;
                    echo '<li><a href="' . $page_info['url'] . '"' . ($is_active ? ' class="active"' : '') . '>' . $title . '</a>';
                }
                echo '</ul></div>';
            }
        ?>
    </nav>
</header>