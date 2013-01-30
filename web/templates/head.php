<?php

    if(!isset($base_href)) {
        $base_href = $_SERVER['REQUEST_URL'];
    }

    if(!isset($active_page_title)) {
        $active_page_title = 'Home';
    }

?><!DOCTYPE html><html>
      <head>
          <title>iJet ONBOARD&trade; | <?= htmlspecialchars($title); ?></title>
          <base href="<?= $base_href; ?>">
          <meta name="description" content="iJet Onboard is a platform and services company with a passion to transform commercial aviation. We are enabling the intelligent aircraft by building an open and secure platform which provides three foundational capabilities: systems management, data management and application hosting.">
          <meta name="keywords" content="iJet Onboard,clean-tech, satellite, global satellite network, real-time, two-way, transportation industry, global satellite, coverage, aviation, connectivity, bandwidth, platform, black box streaming, weather information, voice communication, EFB enhancement, technology, software">
          <? if(ENABLE_CUSTOM_FONT): ?><link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300,600,700" rel="stylesheet" type="text/css"><?php endif; ?>
          <link href="/static/css/styles.css" rel="stylesheet" type="text/css">
          <!--[if lt IE 9]><script src="/static/js/html5shiv.js"></script><![endif]-->
      </head>
      <body>
          <header class="clearafter">
              <a href="/"><img alt="iJet ONBOARD" src="/static/images/logo.gif" width="243" height="53" border="0"></a>
              <nav>
                  <ul class="clearafter">
                    <?php
                        foreach($pages as $title => $page_info) {
                            $is_active = $title === $active_page_title || $title === $active_parent;
                            echo '<li><a href="' . $page_info['url'] . '"' . ($is_active ? ' class="active"' : '') . '>' . $title . '</a>';
                        }
                    ?>
                  </ul>
                  <?php
                    if(isset($pages[$active_parent]['children'])) {
                        $is_developers  = $active_page_title === 'Developers' || $active_parent === 'Developers';
                        $is_airlines    = $active_page_title === 'Airlines' || $active_parent === 'Airlines';
                        $special_class  = '';
                        if($is_developers) {
                            $special_class = ' developers';
                        } else if($is_airlines) {
                            $special_class = ' airlines';
                        }

                        echo '<ul class="clearafter subnav' . $special_class . '">';
                        foreach($pages[$active_parent]['children'] as $title => $page_info) {
                            $is_active = $title === $active_page_title;
                            echo '<li><a href="' . $page_info['url'] . '"' . ($is_active ? ' class="active"' : '') . '>' . $title . '</a>';
                        }
                        echo '</ul>';
                    }

                   ?>
              </nav>
          </header>