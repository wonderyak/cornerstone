<div class="wrap container foot-container">
    <?php get_template_part('inc/templates/footer-widget-area'); ?>
</div>
<div class="wrap container after-foot-container">    
    <div class="row">
        <div class="small-12 medium-6 large-6 columns copyright-area">
            <p>Copyright &copy;<?php echo date("Y"); ?> <a href="<?php echo bloginfo( 'url' ); ?>"><?php echo bloginfo( 'name' ); ?></a></p>
        </div>
        <div class="small-12 medium-6 large-6 columns">
            <p><a href="http://www.westongraphicsinternet.com/web-design/sites-for-therapists" target="_blank" title="Professional Website Design for Therapists">Professional Website Design for Therapists</a> | Weston Graphics, Inc.</p>
        </div>
    </div>
</div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <?php wp_footer(); ?> 
        <!--
        <script>
            var _gaq=[['_setAccount', '<?php // this should be a variable UA-XXXXX-X?>'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        -->
    </body>
</html>