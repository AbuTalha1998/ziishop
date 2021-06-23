<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ziishop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>




    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">

    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700ii%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">

</head>
<body>
<!-- Header - start -->
<header class="header">

    <!-- Topbar - start -->
    <div class="header_top">
        <div class="container">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <i class='fa fa-phone'></i> +7 777 123 1575
                </li>
                <li>
                    <i class="fa fa-envelope"></i> admin@real-web.pro
                </li>
            </ul>
            <!-- Social links -->
            <ul class="social-icons nav navbar-nav">
                <li>
                    <a href="http://facebook.com" rel="nofollow" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="http://google.com" rel="nofollow" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com" rel="nofollow" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="http://vk.com" rel="nofollow" target="_blank">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="http://instagram.com" rel="nofollow" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>		</div>
    </div>
    <!-- Topbar - end -->

    <!-- Logo, Shop-menu - start -->
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="index.html">
                    <img src="<?php echo get_template_directory_uri()?>./img/logo.png" alt="AllStore - MultiConcept eCommerce Template">
                </a>
            </div>
            <div class="shop-menu">
                <ul>

                    <li>
                        <a href="wishlist.html">
                            <i class="fa fa-heart"></i>
                            <span class="shop-menu-ttl">Wishlist</span>
                            (<span id="topbar-favorites">1</span>)
                        </a>
                    </li>

                    <li>
                        <a href="compare.html">
                            <i class="fa fa-bar-chart"></i>
                            <span class="shop-menu-ttl">Compare</span> (5)
                        </a>
                    </li>

                    <li class="topauth">
                        <a href="auth.html">
                            <i class="fa fa-lock"></i>
                            <span class="shop-menu-ttl">Registration</span>
                        </a>
                        <a href="auth.html">
                            <span class="shop-menu-ttl">Login</span>
                        </a>
                    </li>

                    <li>
                        <div class="h-cart">
                            <a href="cart.html">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="shop-menu-ttl">Cart</span>
                                (<b>0</b>)
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Logo, Shop-menu - end -->

    <!-- Topmenu - start -->
    <div class="header-bottom">
        <div class="container">
            <nav class="topmenu">

                <!-- Catalog menu - start -->
                <div class="topcatalog">
                    <a class="topcatalog-btn" href="catalog-list.html"><span>All</span> catalog</a>
                    <ul class="topcatalog-list">
                        <li>
                            <a href="catalog-list.html">
                                Women
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="catalog-list.html">
                                        Knitwear
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Dresses
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Bags
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Shoulder Bags
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Falabella
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Becks
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Clutches
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Travel Bags
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Accessories
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sunglasses
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Tech Cases
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Jewelry
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Stella
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Coats & Jackets
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="catalog-list.html">
                                Men
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="catalog-list.html">
                                        Jackets & Blazers
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Pants & Shorts
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Accessories
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Bags
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sunglasses
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Other Accessories
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Suiting
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Shirts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="catalog-list.html">
                                Kids
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="catalog-list.html">
                                        Girls
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Outerwear
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                T-Shirts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Blouses & Shirts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Pants & Shorts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sleepwear & Underwear
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Skirts
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Boys
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Shoes & Accessories
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Jumpers & Cardigans
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Shirts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Outerwear
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Swimwear
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Baby
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Baby Sets
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Dresses & All-In-One
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Pants & Shorts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Shoes & Accessories
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                T-shirts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Outerwear
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="catalog-list.html">
                                Shoes
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="catalog-list.html">
                                        Women
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Elyse
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Odette
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Brody
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Flats
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sandals
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Men
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Casual Shoes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sneakers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sandals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Boots
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Mules & Clogs
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Children's
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Girls
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Boys
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Baby Shoe
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                First Walkers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sneakers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Boots
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sandals & Clogs
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Catalog menu - end -->

                <!-- Main menu - start -->
                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li>
                        <a href="index.html" class="active">
                            Home
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="catalog-list.html">
                            Catalog <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="catalog-list.html">
                                    Catalog List - Style 1
                                </a>
                            </li>
                            <li>
                                <a href="catalog-list-2.html">
                                    Catalog List - Style 2
                                </a>
                            </li>
                            <li>
                                <a href="catalog-gallery.html">
                                    Catalog Gallery - Style 1
                                </a>
                            </li>
                            <li>
                                <a href="catalog-gallery-2.html">
                                    Catalog Gallery - Style 2
                                </a>
                            </li>
                            <li>
                                <a href="catalog-table.html">
                                    Catalog Table
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="product.html">
                            Product <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="product.html">
                                    Product - Style 1 (Slider)
                                </a>
                            </li>
                            <li>
                                <a href="product-2.html">
                                    Product - Style 2 (Scroll)
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="elements.html">
                            Elements
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="blog.html">
                            Blog <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="blog.html">
                                    Blog - Style 1
                                </a>
                            </li>
                            <li>
                                <a href="blog-2.html">
                                    Blog - Style 2
                                </a>
                            </li>
                            <li>
                                <a href="post.html">
                                    Single Post
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            Pages <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="contacts.html">
                                    Contacts
                                </a>
                            </li>
                            <li>
                                <a href="cart.html">
                                    Cart
                                </a>
                            </li>
                            <li>
                                <a href="auth.html">
                                    Authorization
                                </a>
                            </li>
                            <li>
                                <a href="compare.html">
                                    Compare
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    Wishlist
                                </a>
                            </li>
                            <li>
                                <a href="404.html">
                                    Error 404
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>
                <!-- Main menu - end -->

                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="#">
                        <input type="text" placeholder="Search products">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Search - end -->

            </nav>		</div>
    </div>
    <!-- Topmenu - end -->

</header>
<!-- Header - end -->
