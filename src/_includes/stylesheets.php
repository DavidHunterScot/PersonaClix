<link rel="stylesheet" type="text/css" href="--- metadata.w3css_url ---/4.15/w3.css">
<link rel="stylesheet" type="text/css" href="--- metadata.w3css_url ---/w3-colors-flat.css">
<link rel="stylesheet" type="text/css" href="--- metadata.w3css_url ---/w3-colors-metro.css">
<link rel="stylesheet" type="text/css" href="--- metadata.webfonts_url ---/poppins/poppins.css">
<link rel="stylesheet" type="text/css" href="/assets/css/custom.css">

<?php if( isset( $metadata['stylesheets'] ) ): ?>
    <?php foreach( explode( '::', $metadata['stylesheets'] ) as $stylesheet ): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
    <?php endforeach; ?>
<?php endif; ?>
