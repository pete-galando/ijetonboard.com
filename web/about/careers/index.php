<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';

    include_once dirname(__FILE__) . '/openings.php';

    $title = $active_page_title = 'Careers';
    $active_parent = 'About Us';

    $include_jquery = true;

    $extra_styles = <<<EOF
    #jobslist > li {
        margin: 0;
        padding: 20px;
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

    .spaced li li {
        margin: 20px 40px;
        list-style: disc;
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

    var hidden,
        jobsList = $('#jobslist'),
        none = $('#none');
    $('#selFilter').change(function() {
        var filter = $(this).val();
        if(hidden && hidden.length > 0) {
            hidden.show();
        }
        none.show();
        if(filter !== '') {
            hidden = jobsList.children(':not(.' + filter + ')').hide();
        } else {
            hidden = undefined;
        }
        if(hidden && jobsList.children().length === hidden.length) {
            none.show();
        }
    });
});
EOF;

    include_once WEB_ROOT . '/templates/head.php';
?>
    <section>
        <a name="top"></a><h1>Careers</h1>
        <p>
            Whether we are collaborating with colleagues to solve problems or putting our individual expertise into action, we see, hear and feel the results of our work. We continue to build an outstanding team, where everyone makes a difference! Become a part of a culture where you will have an impact. We look forward to having you onboard.
        </p>
        <ul class="bulleted">
            <li><a href="#howto">How to Apply</a></li>
            <li><a href="#openings">Current Openings</a></li>
        </ul>
    </section>
    <section>
        <a name="howto"></a><h2 class="anchor-header">How to Apply<a href="#top" class="icon-up back">Back to Top</a></h2>
        <p>
            <strong>Please express your interest at:</strong><br>
            <a href="mailto:jobs@ijetonboard.com">jobs@ijetonboard.com</a>
        </p>
        <ul class="bulleted">
            <li>Please attach your resume</li>
            <li>Please provide both an e-mail address and a phone number where you may be reached</li>
            <li>No phone calls, please</li>
            <li>iJet is an Equal Opportunity Employer and does not discriminate on the basis of race, gender or religion</li>
            <li>No relocation allowance or B1 Visa managing</li>
            <li>iJet conducts pre-employment background screening on all of our candidates</li>
        </ul>
        <p><strong>Job Application and Consent for Background Check Form:</strong></p>
        <p>When asked to complete these, you may download them here:</p>
        <ul class="bulleted"><li>
            <a href="<?= BASE_URL ?>static/docs/Application_Background_Check.pdf">Job Application and Background Check Form</a>
        </li></ul>
    </section>
    <section>
        <a name="openings"></a><h2 class="anchor-header">Current Openings<a href="#top" class="icon-up back">Back to Top</a></h2>
        <p><strong>Filter by Job Function:</strong>
        <select id="selFilter">
            <option value="">All</option>
            <?php
                foreach($functions as $func) {
                    echo '<option value="' . $func->label . '">' . $func->name . '</option>';
                }
            ?>
        </select></p>
        <ul id="jobslist" class="spaced">
            <?php
                $i = 0;
                foreach($jobs as $job) {
                    $i++;
                    echo '<li class="' . $job->getFunctionsLabel() . '" >'
                            . '<a name="job-' . $i . '" href="#job-' . $i . '" class="toggle-link icon-down">' . $job->title . '</a>'
                            . '<div class="toggle-target">'
                            . $job->desc
                            . '<p style="text-align: center;"><strong>Interested candidates should send resume to: <a href="mailto:jobs@ijetonboard.com">jobs@ijetonboard.com</a></strong></p>'
                            . '<p style="text-align: center;"><strong>No calls please. No relocation expense and/or visa processing</strong></p>'
                            . '</div>'
                        .'</li>';
                }
            ?>
            <li id="none" style="display: none; text-align: center; font-style: italic;">( No openings at this time )</li>
        </ul>
    </section>
<?php

    include_once WEB_ROOT . '/templates/foot.php';