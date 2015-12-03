<?php
/********************************
********* LOGIN STYLES **********
*********************************/

function my_login_logo() { ?>
    <style type="text/css">
    	body.login {
    		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#e60054+0,9f2cc8+100 */
			background: #e60054; /* Old browsers */
			background: -moz-linear-gradient(-45deg, #e60054 0%, #9f2cc8 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#e60054), color-stop(100%,#9f2cc8)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(-45deg, #e60054 0%,#9f2cc8 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(-45deg, #e60054 0%,#9f2cc8 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(-45deg, #e60054 0%,#9f2cc8 100%); /* IE10+ */
			background: linear-gradient(135deg, #e60054 0%,#9f2cc8 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e60054', endColorstr='#9f2cc8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
    	}
        body.login div#login h1 a {
            background: url(http://projetos.studiospirit.com.br/maringa_park/homologacao/wp-content/themes/maginga-pk/images/logo.png) no-repeat scroll 0 32px rgba(0, 0, 0, 0);
		    padding: 0;
		    background-size: 320px !important;
		    height: 123px;
		    transition: all 0.2s ease-in-out 0s;
		    width: 319px;
		    display: block;
		    padding-top: 40px;
		    margin-top: 0;
        }
        .login h1 {
        	margin-bottom: 50px;
        }
        .login form {
        	background: #262626;
		    margin-top: -36px;
		    box-shadow: 0 0 13px #666;
        }
        .wp-core-ui .button-primary {
        	background: transparent;
        	border: 1px solid #666;
        	-webkit-box-shadow: none;
        	-moz-box-shadow: none;
        	color: #666;
        	box-shadow: none;
        	-webkit-border-radius: 0;
        	-moz-border-radius: 0;
        	border-radius: 0;
        	transition: all 0.2s ease-in-out 0s;
        }
        .login form input[type="checkbox"] {
        	background: url(<?php echo get_bloginfo( 'template_directory' ) ?>/img/check.png) no-repeat scroll 0 0px transparent !important;
        	background-size: ;
        }
        .wp-core-ui .button-primary:hover {
        	background: transparent;
        	border-color: #999999;
        	color: #999999;
        	transition: all 0.2s ease-in-out 0s;
        	box-shadow: none;
        }
        .wp-core-ui .button.button-large, .wp-core-ui .button-group.button-large .button {
		    font-size: 12px;
		    height: 38px;
		    line-height: 28px;
		    padding: 0 20px 2px;
		    text-transform: uppercase;
    	}
        .login #nav a, .login #backtoblog a {
		    color: #999999;
		    font-size: 10px;
		    position: relative;
		    text-decoration: none;
		    text-transform: uppercase;
		    top: -50px;
		}
		.login #nav a:hover, .login #backtoblog a:hover {
			color: #fff;
		}
        .login form .forgetmenot label {
		    font-size: 10px;
		    line-height: 19px;
		}
        .login label {
		    color: #ccc;
		    font-size: 10px;
		    font-weight: bold;
		    text-transform: uppercase;
		}
        .login form .input, .login input[type="text"], .login form input[type="checkbox"] {
        	background: none repeat scroll 0 0 #333;
		    color: #FFFFFF;
		    font-size: 14px;
		    font-weight: lighter;
		    padding: 8px;
		    border-color: #666;
        }
        .login form .input:focus {
        	border-color: #E92E3E;
        }
        body.login div#login h1 a:hover{
        	opacity: 0.8;
        }
        body.login div#login {
        	padding: 0;
        }
        body.login p#backtoblog { display: none;}
        body.login p.register { display: none;}
        #wp-auth-check-wrap #wp-auth-check {
        	padding: 0px;
        }
        div.updated, .login .message, .press-this #message{
        	margin-bottom: 0;
        	top: -55px;
        }



        .login form { 
        	position: relative;
        	overflow: visible;
        	height: 250px;
        	-webkit-box-sizing: border-box;
			  -moz-box-sizing: border-box;
			  box-sizing: border-box;
       	} 
        .login form:before, .login form:after { 
        	content: "";
			  position: absolute;
			  width: 100%;
			  height: 100%;
        }
        .login p {
        	position: relative;
        	z-index: 20;
        }
        .login form:before {
		    background-position: 0 0, 0 100%;
		    background-repeat: no-repeat;
		    -webkit-background-size: 100% 10px;
		    -moz-background-size: 100% 10px;
		    background-size: 100% 10px;
		    background-image: -webkit-linear-gradient(to right, #333 0%, #666 100%), -webkit-linear-gradient(right, #666 0%, #333 100%);
		    background-image: -moz-linear-gradient(to right, #333 0%, #666 100%), -moz-linear-gradient(right, #666 0%, #333 100%);
		    background-image: -o-linear-gradient(to right, #333 0%, #666 100%), -o-linear-gradient(right, #666 0%, #333 100%);
		    background-image: linear-gradient(to right, #333 0%, #666 100%), linear-gradient(to left, #333 0%, #666 100%);
		    height: 270px;
		    left: 0px;
		    width: 321px;
		    top: -10px;
		}
        .login form:after {
		    background-position: 0 0, 100% 0;
		    background-repeat: no-repeat;
		    -webkit-background-size: 10px 100%;
		    -moz-background-size: 10px 100%;
		    background-size: 10px 100%;
		    background-image: -webkit-linear-gradient(#333 0%, #666 100%), -webkit-linear-gradient(bottom, #666 0%, #333 100%);
		    background-image: -o-linear-gradient(#333 0%, #666 100%), -o-linear-gradient(bottom, #666 0%, #333 100%);
		    background-image: linear-gradient(#333 0%, #666 100%), linear-gradient(to top, #333 0%, #666 100%);
		    top: -10px;
		    height: 270px;
		    left: -10px;
		    width: 340px;
		}
        #wp-auth-check-wrap #wp-auth-check {
            padding:0 !important;
        }
    </style>
<?php } 
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'maringapk';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
?>