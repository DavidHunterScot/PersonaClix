<?php

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "config.php";

$current_page = "home";

$description = "Welcome to {{ site_title }}, {{ site_tagline }}!";

$hero['class'] = "home";
$hero['title'] = "Welcome to {{ site_title }}";
$hero['description'] = "{{ site_tagline }}";
$hero['recommendedby']['name'] = "Tara McKale";
$hero['recommendedby']['url'] = "https://www.taramckale.ict.rocks";
$hero['promo_image']['url'] = $avatars_url . "/taramckale_personaclix_representitive.png";
$hero['promo_image']['alt'] = "Tara McKale Photo";

$page_content = function()
{
    include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "config.php";
?>

        <section class="section w3-text-dark-gray w3-padding-large">
            <div class="container w3-center">
                <div class="w3-auto w3-row-padding">
                    <div class="w3-quarter">
                        <p><img src="<?php echo $icons_url; ?>/quill.svg" alt="Quill Icon" style="max-width: 150px;"></p>
                        <p><b>Web Development</b></p>
                    </div>

                    <div class="w3-quarter">
                        <p><img src="<?php echo $icons_url; ?>/hosting.svg" alt="Hosting Icon" style="max-width: 150px;"></p>
                        <p><b>Web Hosting</b></p>
                    </div>

                    <div class="w3-quarter">
                        <p><img src="<?php echo $icons_url; ?>/dot-com.svg" alt="Dot Com Icon" style="max-width: 150px;"></p>
                        <p><b>Domains &amp; DNS</b></p>
                    </div>

                    <div class="w3-quarter">
                        <p><img src="<?php echo $icons_url; ?>/email.svg" alt="Email Icon" style="max-width: 150px;"></p>
                        <p><b>Email Hosting</b></p>
                    </div>
                </div>
            </div>
        </section>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
