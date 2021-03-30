        <footer class="site-footer contenedor">
            <div>
                <div>
                </div>
                <div class="contenido-footer">
                    <img class ="block-img" src="<?php echo get_template_directory_uri();?>/assets/logoreverse.png"/>
                    <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y'); ?>  </p>
                </div>
            </div>        
        </footer>

        <?php wp_footer(); ?>
        
        <script>
            $(function(){
                // this will get the full URL at the address bar
                var url = window.location.href; 

                // passes on every "a" tag 
                $("#menu-menu-1 li a").each(function() {
                        // checks if its the same on the address bar
                    if(url == (this.href)) { 
                        $(this).closest("li").addClass("active");
                    }
                });
            });
        </script>
    </body>
    
</html>