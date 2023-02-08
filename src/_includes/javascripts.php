<?php if( isset( $javascripts ) && is_array( $javascripts ) && count( $javascripts ) > 0 ): ?>
    <?php foreach( $javascripts as $javascript ): ?>
        <script type="text/javascript" src="<?php echo $javascript; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
