        <nav class="top-nav">
            <div class="container">
                <input type="checkbox" id="top-nav-toggle" class="nav-toggle">
                <ul>
                    <li><a href="/contact" class="button">Contact</a></li>
                </ul>
                <label for="top-nav-toggle" class="nav-toggle-label"><span></span></label>
            </div>
        </nav>

        <header class="site-header">
            <div class="container">
                <div class="logo">
                    <a href="/"><img src="<?php echo $logos_url; ?>/personaclix_pcdh_logo_dark.png" alt="Persona Clix Logo (Dark)"></a>
                </div>

                <div class="navbar">
                    <input type="checkbox" id="main-nav-toggle" class="nav-toggle">
                    <ul>
                        <li><a href="/"<?php if( isset( $current_page ) && $current_page == "home" ): ?> class="current"<?php endif; ?>>Home</a></li>
                    </ul>
                    <label for="main-nav-toggle" class="nav-toggle-label"><span></span></label>
                </div>
            </div>
        </header>

        <?php if( isset( $hero ) && is_array( $hero ) ): ?>
            <section class="hero<?php if( isset( $hero['class'] ) && $hero['class'] ) echo ' ' . $hero['class']; ?>">
                <div class="container"<?php if( isset( $hero['background_image'] ) && $hero['background_image'] ): ?> style="background-image: url( '<?php echo $hero['background_image']; ?>' );"<?php endif; ?>>
                    <div class="info">
                        <?php if( isset( $hero['title'] ) && $hero['title'] ): ?>
                            <h1><?php echo str_replace( '{{ site_title }}', $site_title, $hero['title'] ); ?></h1>
                        <?php endif; ?>

                        <?php if( isset( $hero['description'] ) && $hero['description'] ): ?>
                            <p><?php echo str_replace( '{{ site_tagline }}', $site_tagline, $hero['description'] ); ?></p>
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
                    </div>

                    <div class="promo-image">
                        <?php if( isset( $hero['promo_image'] ) && is_array( $hero['promo_image'] ) ): ?>
                            <img src="<?php echo $icons_url; ?>/<?php if( isset( $hero['promo_image']['filename'] ) ) echo $hero['promo_image']['filename']; ?>.svg" alt="<?php if( isset( $hero['promo_image']['alt'] ) ) echo $hero['promo_image']['alt']; ?> Icon">
                        <?php endif; ?>
                    </div>

                    <?php if( isset( $hero['recommendedby'] ) && is_array( $hero['recommendedby'] ) ): ?>
                        <div class="recommendedby">
                            Recommended by <b><a href="<?php if( isset( $hero['recommendedby']['url'] ) ) echo $hero['recommendedby']['url']; ?>" target="_blank" rel="nofollow"><?php if( isset( $hero['recommendedby']['name'] ) ) echo $hero['recommendedby']['name']; ?></a></b>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
