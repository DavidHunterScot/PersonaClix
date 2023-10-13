        <nav class="top-nav w3-flat-midnight-blue w3-small">
            <div class="w3-auto w3-padding w3-stretch container">
                <div class="w3-bar">
                    <a href="/contact" class="button w3-bar-item w3-button w3-right w3-flat-wet-asphalt w3-hover-flat-wet-asphalt w3-hover-text-white">Contact</a>
                </div>
            </div>
        </nav>

        <header class="site-header w3-flat-wet-asphalt">
            <div class="container w3-auto w3-padding w3-row">
                <div class="logo w3-col l3 m4">
                    <a href="/"><img src="<?php echo $metadata['images_url'] . $metadata['logos_uri']; ?>/personaclix_pcdh_logo_light.png" alt="Persona Clix Logo (Dark)" class="w3-image"></a>
                </div>

                <nav class="navbar w3-col l9 m8 w3-margin-top">
                    <div class="w3-bar">
                        <a href="/" class="w3-bar-item w3-button w3-hover-flat-midnight-blue w3-hover-text-white w3-right w3-mobile<?php if( isset( $metadata['current_page'] ) && $metadata['current_page'] == "home" ): ?> w3-flat-midnight-blue current<?php endif; ?>">Home</a>
                    </div>
                </nav>
            </div>
        </header>

        <?php if( isset( $metadata['hero'] ) ): ?>
            <section class="hero w3-flat-midnight-blue<?php if( isset( $metadata['hero_class'] ) && $metadata['hero_class'] ) echo ' ' . $metadata['hero_class']; ?>" style="clip-path: polygon(0 0,100% 0,100% calc(100% - 50px),50% 100%,0 calc(100% - 50px)); padding-bottom: 50px;">
                <div class="container w3-auto w3-row"<?php if( isset( $metadata['hero_background_image'] ) && $metadata['hero_background_image'] ): ?> style="min-height: 450px; background-repeat: no-repeat; background-position: top right; background-image: url( '<?php echo $metadata['hero_background_image']; ?>' );"<?php endif; ?>>
                    <div class="info w3-padding w3-padding-64 w3-center<?php if( isset( $metadata['hero_promo_image_url'] ) ) echo ' w3-col l8'; ?>">
                        <?php if( isset( $metadata['hero_title'] ) && $metadata['hero_title'] ): ?>
                            <h1 class="w3-xlarge w3-wide"><b><?php echo strtoupper( str_replace( '{{ site_title }}', $metadata['site_title'], $metadata['hero_title'] ) ); ?></b></h1>
                        <?php endif; ?>

                        <?php if( isset( $metadata['hero_description'] ) && $metadata['hero_description'] ): ?>
                            <div class="w3-xxxlarge w3-wide"><b><?php echo str_replace( '{{ site_tagline }}', $metadata['site_tagline'], $metadata['hero_description'] ); ?></b></div>
                        <?php endif; ?>

                        <?php if( isset( $metadata['hero_recommendedby_name'], $metadata['hero_recommendedby_url'] ) ): ?>
                            <div class="recommendedby w3-padding-16">
                                Recommended by <b><a href="<?php if( isset( $metadata['hero_recommendedby_url'] ) ) echo $metadata['hero_recommendedby_url']; ?>" target="_blank" rel="nofollow"><?php if( isset( $metadata['hero_recommendedby_name'] ) ) echo $metadata['hero_recommendedby_name']; ?></a></b>.
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if( isset( $metadata['hero_promo_image_url'], $metadata['hero_promo_image_alt'] ) ): ?>
                    <div class="promo-image w3-margin-top w3-col l4 w3-center" style="margin-bottom: -50px;">
                        <img style="max-width: 115%;" src="<?php if( isset( $metadata['hero_promo_image_url'] ) ) echo $metadata['hero_promo_image_url']; ?>" alt="<?php if( isset( $metadata['hero_promo_image_alt'] ) ) echo $metadata['hero_promo_image_alt']; ?>" class="w3-image">
                    </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
