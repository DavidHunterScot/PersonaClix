<?php

$page_title = "Not Found (404)";
$description = "Sorry, there is nothing found here.";

$friendly_urls = false;

$page_content = function()
{
?>

        <section class="section packages w3-flat-midnight-blue" style="padding-top: 8rem; padding-bottom: 8rem;">
            <div class="container w3-auto w3-padding w3-center">
                <h2 class="w3-xxxlarge"><b>Not Found (404)</b></h2>
                <p class="w3-xlarge">Sorry, there is nothing found here.</p>
                <p>Perhaps the <a href="/">homepage</a> can help you get back on track!</p>
            </div>
        </section>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
