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
                    <a href="/"><img src="<?php echo $logos_url; ?>/personaclix_pcdh_logo_light.png" alt="Persona Clix Logo (Dark)" class="w3-image"></a>
                </div>

                <nav class="navbar w3-col l9 m8 w3-margin-top">
                    <div class="w3-bar">
                        <a href="/" class="w3-bar-item w3-button w3-hover-flat-midnight-blue w3-hover-text-white w3-right w3-mobile<?php if( isset( $current_page ) && $current_page == "home" ): ?> w3-flat-midnight-blue current<?php endif; ?>">Home</a>
                    </div>
                </nav>
            </div>
        </header>

        <?php if( isset( $hero ) && is_array( $hero ) ): ?>
            <section class="hero w3-flat-midnight-blue<?php if( isset( $hero['class'] ) && $hero['class'] ) echo ' ' . $hero['class']; ?>">
                <div class="container w3-auto w3-row"<?php if( isset( $hero['background_image'] ) && $hero['background_image'] ): ?> style="min-height: 450px; background-repeat: no-repeat; background-position: top right; background-image: url( '<?php echo $hero['background_image']; ?>' );"<?php endif; ?>>
                    <div class="info w3-padding w3-padding-64 w3-col l8">
                        <?php if( isset( $hero['title'] ) && $hero['title'] ): ?>
                            <h1 class="w3-xlarge"><b><?php echo str_replace( '{{ site_title }}', $site_title, $hero['title'] ); ?></b></h1>
                        <?php endif; ?>

                        <?php if( isset( $hero['description'] ) && $hero['description'] ): ?>
                            <div class="w3-xxxlarge"><b><?php echo str_replace( '{{ site_tagline }}', $site_tagline, $hero['description'] ); ?></b></div>
                        <?php endif; ?>

                        <?php if( isset( $hero['list'] ) && is_array( $hero['list'] ) && count( $hero['list'] ) > 0 ): ?>
                            <ul <?php if( isset( $hero['list_icon'] ) && $hero['list_icon'] ): ?>style="list-style-image: url('<?php echo $ui_url; ?>/<?php echo $hero['list_icon']; ?>.png')"<?php endif; ?>>
                                <?php foreach( $hero['list'] as $list_item ): ?>
                                    <li><?php echo $list_item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <?php if( isset( $hero['button'] ) && is_array( $hero['button'] ) ): ?>
                            <div class="button-price">
                                <div class="button">
                                    <a href="<?php if( isset( $hero['button']['href'] ) ) echo $hero['button']['href']; ?>"><?php if( isset( $hero['button']['text'] ) ) echo $hero['button']['text']; ?></a>
                                </div>

                                <?php if( isset( $hero['price'] ) && $hero['price'] ): ?>
                                <div class="price" style="background-image: url('{{ ui_url }}/swirl.png');">
                                    <?php if( isset( $hero['price']['text'] ) ) echo $hero['price']['text']; ?> <b><?php if( isset( $hero['price']['amount'] ) ) echo $hero['price']['amount']; ?></b>
                                </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if( isset( $hero['recommendedby'] ) && is_array( $hero['recommendedby'] ) ): ?>
                            <div class="recommendedby">
                                Recommended by <b><a href="<?php if( isset( $hero['recommendedby']['url'] ) ) echo $hero['recommendedby']['url']; ?>" target="_blank" rel="nofollow"><?php if( isset( $hero['recommendedby']['name'] ) ) echo $hero['recommendedby']['name']; ?></a></b>.
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="promo-image w3-col l4 w3-margin-top w3-center">
                        <?php if( isset( $hero['promo_image'] ) && is_array( $hero['promo_image'] ) ): ?>
                            <img src="<?php if( isset( $hero['promo_image']['url'] ) ) echo $hero['promo_image']['url']; ?>" alt="<?php if( isset( $hero['promo_image']['alt'] ) ) echo $hero['promo_image']['alt']; ?>" class="w3-image">
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
