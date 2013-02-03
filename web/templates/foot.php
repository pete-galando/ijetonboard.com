<?php

    if(!isset($include_jquery)) {
        $include_jquery = false;
    }

    if(isset($heroes) && count($heroes) > 1) {
        $include_jquery = true;
    }

?>
        <footer>
            <ul class="clearafter float-left"><?php
                foreach($pages as $title => $page_info) {
                    $is_active = $title === $active_page_title || $title === $active_parent;
                    echo '<li><a href="' . $page_info['url'] . '"' . ($is_active ? ' class="active"' : '') . '>' . $title . '</a>';
                }
            ?></ul>
            &copy; 2013 iJet ONBOARD&trade;, Inc.
        </footer>
        <?php if($include_jquery): ?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script><?php endif; ?>
        <?php if(isset($extra_scripts)): ?><script><?= $extra_scripts; ?></script><?php endif; ?>
        <?php if(isset($heroes) && count($heroes) > 1): ?>
            <script>
                $(window).load(function() {
                    var i = 0,
                        advance,
                        current,
                        startNext,
                        banner = $('#banner'),
                        heroes = [<?php
                        $len = count($heroes);
                        for($i = 0; $i < $len; $i++) {
                            echo '"' . BASE_URL . '/static/images/banners/' . $heroes[$i] . '"' . ($i !== $len - 1 ? ',' : '');
                        }
                        ?>];

                    advance = function() {
                        var next = heroes[++i],
                            image,
                            onLoad,
                            prev = prev = banner.find('img:first'),
                            img;
                        if(!next) {
                            i = 0;
                            next = heroes[i];
                        }
                        image = $(new Image());
                        onLoad = function() {
                            image.unbind('load', onLoad);
                            image.src = next;
                            img = $('<img>').attr('src', next).hide();
                            banner.append(img);
                            prev.fadeOut('slow', function() {
                                prev.remove();
                            });
                            img.fadeIn('slow', startNext);
                        };
                        image.bind('load', onLoad);
                        image[0].src = next;
                    };

                    startNext = function() {
                        clearTimeout(current);
                        current = setTimeout(function() {
                            advance();
                        }, 5000);
                    };

                    startNext();
                    banner.click(function() {
                        clearTimeout(current);
                        advance();
                    });
                });
            </script>
        <?php endif; ?>
        <script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-29165548-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>