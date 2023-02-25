<?php

$page_title = "Contact Us";
$description = "No need to be shy, come and say hello.";

$hero['class'] = "contact";
$hero['title'] = "Contact Us";
$hero['description'] = "Get in touch today!";

$javascripts[] = "/assets/js/anti-email-harvesting.js";

$page_content = function()
{
    include __DIR__ . DIRECTORY_SEPARATOR . '_includes' . DIRECTORY_SEPARATOR . 'config.php';
?>

        <section class="contact section w3-padding-64">
            <div class="container w3-auto w3-padding">
                <div class="methods w3-row">
                    <div class="method w3-quarter w3-white w3-round-large w3-card w3-padding-large">
                        <div class="icon">
                            <img src="<?php echo $avatars_url; ?>/davidhunter_illustration_transparent_1.png" alt="David Hunter Illustration" class="w3-image">
                        </div>

                        <div class="button">
                            <a href="#" id="email_link" class="w3-button w3-amber w3-round-large w3-block email_link">David Hunter</a>
                        </div>

                        <p class="email_address" style="overflow-x: auto;">david [dot] hunter [at] personaclix [dot] com</p>
                    </div>
                </div>
            </div>
        </section>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
