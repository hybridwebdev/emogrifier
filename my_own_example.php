        
        $layout.="<div class='email_wrapper'>";
            
            include( plugin_dir_path( __FILE__ ) . '/templates/workout/full-post.php');
             
        $layout.="</div>";
        
        require( plugin_dir_path( __FILE__ ) . '/includes/css-inline-class/CssToInlineStyles.php');

        $css = file_get_contents(plugin_dir_path( __FILE__ ). 'assets/css/front_end.css');
          
        $emogrifier = new \Pelago\Emogrifier($layout, $css);

        $layout = $emogrifier->emogrify();
