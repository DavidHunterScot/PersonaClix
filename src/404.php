<?php

$page_title = "Not Found (404)";
$description = "Sorry, there is nothing found here.";

$friendly_urls = false;

$page_content = function()
{
?>

        <section class="section packages" style="padding-top: 8rem; padding-bottom: 8rem;">
            <div class="container">
                <h2>Not Found (404)</h2>
                <p style="color: black;">Sorry, there is nothing found here.</p>
                <p style="text-align: center;">Perhaps the homepage can help you get back on track!</p>
                <div class="button" style="margin-top: 3rem; margin-bottom: 3rem;">
                    <a href="/" style="max-width: 400px; margin: auto;">Homepage</a>
                </div>
            </div>
        </section>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
