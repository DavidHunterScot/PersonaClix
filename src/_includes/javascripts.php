<?php if( isset( $metadata['javascripts'] ) ): ?>
    <?php foreach( explode( '::', $metadata['javascripts'] ) as $javascript ): ?>
        <script type="text/javascript" src="<?php echo $javascript; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
