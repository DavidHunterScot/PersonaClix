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

        <section class="contact section">
            <div class="container">
                <div class="methods">
                    <div class="method">
                        <div class="icon">
                            <img src="<?php echo $avatars_url; ?>/davidhunter_illustration_transparent_1.png" alt="David Hunter Illustration">
                        </div>

                        <div class="button">
                            <a href="#" id="email_link">David Hunter</a>
                        </div>

                        <p class="email_address">david [dot] hunter [at] personaclix [dot] com</p>
                    </div>
                </div>
            </div>
        </section>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
