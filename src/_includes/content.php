<?php if( isset( $page_content ) && is_callable( $page_content ) ): ?>
    <?php $page_content(); ?>
<?php endif; ?>
