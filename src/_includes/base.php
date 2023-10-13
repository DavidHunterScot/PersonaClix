---
site_title: Persona Clix
site_tagline: Provider of Premium Website Solutions
site_owner: David Hunter
site_owner_url: https://www.dah5.com/davidhunter

launch_year: 2016

w3css_url: /assets/w3css
webfonts_url: /assets/webfonts
images_url: /assets/images

icons_uri: /icons
avatars_uri: /avatars
ui_uri: /ui
logos_uri: /logos

content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php if( isset( $page_description ) && $page_description ): ?><meta name="description" content="<?php echo str_replace( [ '{{ site_title }}', '{{ site_tagline }}' ], [ $site_title, $site_tagline ], $page_description ); ?>"><?php endif; ?>

        <title><?php if( isset( $metadata['page_title'] ) && $metadata['page_title'] ) echo $metadata['page_title'] . ' - '; ?><?php echo $metadata['site_title']; ?><?php if( ! isset( $metadata['page_title'] ) || ! $metadata['page_title'] ) echo ' - ' . $metadata['site_tagline']; ?></title>

        <link rel="icon" type="image/x-icon" href="/favicon.ico">

        <?php include 'stylesheets.php'; ?>
    </head>
    
    <body class="w3-light-gray">
        <?php include 'header.php'; ?>

        {{ content }}

        <?php include 'footer.php'; ?>

        <?php include 'javascripts.php'; ?>
    </body>
</html>
