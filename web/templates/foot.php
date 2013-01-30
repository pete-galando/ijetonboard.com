<footer>
    <ul class="clearafter float-left"><?php
        foreach($pages as $title => $page_info) {
            $is_active = $title === $active_page_title || $title === $active_parent;
            echo '<li><a href="' . $page_info['url'] . '"' . ($is_active ? ' class="active"' : '') . '>' . $title . '</a>';
        }
    ?></ul>
    &copy; 2013 iJet ONBOARD&trade;, Inc.
</footer>