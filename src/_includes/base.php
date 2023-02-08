<?php include __DIR__ . DIRECTORY_SEPARATOR . 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php if( isset( $page_description ) && $page_description ): ?><meta name="description" content="<?php echo str_replace( [ '{{ site_title }}', '{{ site_tagline }}' ], [ $site_title, $site_tagline ], $page_description ); ?>"><?php endif; ?>

        <title><?php if( isset( $page_title ) && $page_title ) echo $page_title . ' - '; ?><?php echo $site_title; ?><?php if( ! isset( $page_title ) || ! $page_title ) echo ' - ' . $site_tagline; ?></title>

        <link rel="icon" type="image/x-icon" href="/favicon.ico">

        <?php include 'stylesheets.php'; ?>
    </head>
    
    <body>
        <?php include 'header.php'; ?>

        <?php include 'content.php'; ?>

        <?php include 'footer.php'; ?>

        <?php include 'javascripts.php'; ?>
    </body>
</html>
