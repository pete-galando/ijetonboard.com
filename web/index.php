<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    $title = $active_page_title = 'Home';
    $base_href = BASE_URL;

    include_once WEB_ROOT . '/templates/head.php';

?>
    <section id="banner"></section>
    <section class="clearafter">
        <div class="float-left column one-half">
            <h2>Airlines</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla orci sit amet metus gravida gravida. Donec gravida tincidunt augue at commodo. Donec rhoncus, massa eget condimentum euismod, neque dolor venenatis purus, sed porttitor odio odio at nulla.</p>
            <p>Integer facilisis ipsum vitae felis lobortis id elementum quam.</p>
            <a href="" class="button icon-plane">Airlines</a>
        </div>
        <div class="float-left column one-half">
            <h2>Developers</h2>
            <p>Mauris auctor, nisi interdum consequat eleifend, est enim cursus tellus, ac dapibus orci velit eget metus. Praesent tempus semper felis eu blandit. Quisque imperdiet, tortor in gravida dictum, orci velit adipiscing odio, tristique volutpat enim dui non lectus. Nam eget luctus purus.</p>
            <p>Pellentesque at sollicitudin leo.</p>
            <a href="" class="button icon-gear">Developers</a>
        </div>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';