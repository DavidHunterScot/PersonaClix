<?php

$current_page = "home";

$description = "Welcome to {{ site_title }}, {{ site_tagline }}!";

$hero['class'] = "home";
$hero['title'] = "Welcome to {{ site_title }}";
$hero['description'] = "{{ site_tagline }}";
$hero['list_icon'] = "cloud_white";
$hero['list'][] = "Under Construction";
$hero['recommendedby']['name'] = "Tara McKale";
$hero['recommendedby']['url'] = "https://www.taramckale.ict.rocks";
$hero['background_image'] = "https://images.staticly.ict.rocks/avatars/taramckale_personaclix_representitive.png";

$page_content = function()
{
?>

        <section class="section">
            <div class="container">
                <h2>Under Construction</h2>
                <p>Please check back later.</p>
            </div>
        </section>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
