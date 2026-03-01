<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'wp_body_open', 'custom_snippets_header' );

function custom_snippets_header() {
    ?>
    <header id="custom-header">
        <div class="custom-header__inner">
            <div class="custom-header__logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </div>
            <nav class="custom-header__nav">
                <?php
                wp_nav_menu( [
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'custom-header__menu',
                    'fallback_cb'    => function() {
                        echo '<ul class="custom-header__menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>';
                    },
                ] );
                ?>
            </nav>
        </div>
    </header>

    <style>
        #custom-header {
            position: sticky;
            top: 0;
            z-index: 9999;
            background: #fff;
            border-bottom: 2px solid #e00;
            padding: 0 24px;
        }
        .custom-header__inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            height: 60px;
        }
        .custom-header__logo a {
            font-size: 20px;
            font-weight: 700;
            text-decoration: none;
            color: #000;
        }
        .custom-header__menu {
            list-style: none;
            display: flex;
            gap: 24px;
            margin: 0;
            padding: 0;
        }
        .custom-header__menu a {
            text-decoration: none;
            color: #333;
            font-size: 15px;
        }
        .custom-header__menu a:hover {
            color: #e00;
        }
    </style>
    <?php
}
