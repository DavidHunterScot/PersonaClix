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
                <div class="methods w3-row w3-white">
                <div class="method w3-col m3 w3-padding-large w3-center">
                        <div class="icon w3-bottombar w3-border-amber">
                            <img src="<?php echo $icons_url; ?>/person-crop-square-fill.svg" alt="Person Crop Square Icon" class="w3-image">
                        </div>

                        <p>
                            <div><b>General Enquiries</b></div>
                            <div style="overflow-x: auto; white-space: nowrap;"><span class="email_address">contact [at] personaclix [dot] com</span></div>
                        </p>
                    </div>

                    <div class="method w3-col m3 w3-padding-large w3-center">
                        <div class="icon w3-bottombar w3-border-amber">
                            <img src="<?php echo $avatars_url; ?>/davidhunter_illustration_transparent_1.png" alt="David Hunter Illustration" class="w3-image">
                        </div>

                        <p><b>David Hunter</b><br>Service Operator</p>

                        <p><a href="#" class="email_address" email-address="david [dot] hunter [at] personaclix [dot] com"></a> <a href="https://davidhunter.scot" target="_blank">Web</a></p>
                    </div>

                    <div class="method w3-col m3 w3-padding-large w3-center">
                        <div class="icon w3-bottombar w3-border-amber">
                            <img src="<?php echo $avatars_url; ?>/taramckale_personaclix_representitive.png" alt="Tara McKale Photo" class="w3-image">
                        </div>

                        <p><b>Tara McKale</b><br>Promotional Mascot</p>

                        <p><a href="#" class="email_address" email-address="tara [dot] mckale [at] personaclix [dot] com"></a> <a href="https://www.taramckale.ict.rocks" target="_blank">Web</a></p>
                    </div>
                </div>
            </div>
        </section>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
