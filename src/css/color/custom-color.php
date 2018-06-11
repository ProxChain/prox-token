<?php
 $absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
 $wp_load = $absolute_path[0] . 'wp-load.php';
 require_once($wp_load);

  /*
  Do whatever here...
  */

  header('Content-type: text/css');
  header('Cache-control: must-revalidate');

global $mf_options;
$ad_skin = $mf_options['general-custom-web-color'];


?>
.woocommerce p.stars.selected a.active:before, .woocommerce p.stars:hover a:before {

    color: <?php echo $ad_skin ?>;

}

.woocommerce p.stars.selected a:not(.active):before {

    color: <?php echo $ad_skin ?>;

}


#header .opener-icons:hover {

  background: <?php echo $ad_skin ?>;

}

#header .header-top a:hover {

  color: <?php echo $ad_skin ?>;

}

#header .head-social a {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header .head-social a:hover {

  background: <?php echo $ad_skin ?>;

}

#header .head-socialnetworks a:hover {

  color: <?php echo $ad_skin ?>;

}


#header .cart-box .cart-drop .cart-holder:after {

  background: <?php echo $ad_skin ?>;

}

#header .cart-box .cart-drop a:hover {

  color: <?php echo $ad_skin ?>;

}

#header .cart-box .cart-drop .total-price-area .price {

  color: <?php echo $ad_skin ?>;

}

#header .cart-box .cart-drop .btn {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header .cart-box .cart-drop .btn.add:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header .cart-box .cart-list .product-name a:hover {

  color: <?php echo $ad_skin ?>;

}

#header .cart-box .cart-list .rating li .fa-star {

  color: <?php echo $ad_skin ?>;

}

#header .cart-box .cart-list .delete:hover {

  color: <?php echo $ad_skin ?>;

}

#header .lang-drop {

  border-bottom-color: <?php echo $ad_skin ?>;

}

#header .lang-drop a:hover {

  color: <?php echo $ad_skin ?>;

}

#header .leng-opener:hover {

  color: <?php echo $ad_skin ?>;

}

#header .cartopener-main .cart-num {

  background: <?php echo $ad_skin ?>;

}

#header.style3 .opener-icons:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style3 .cart-opener .arrow {

  background: <?php echo $ad_skin ?>;

}

#header.style4 .opener-icons:hover {

  color: <?php echo $ad_skin ?>;

}

#header.style4 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style4 #nav .nav-top > li.hover > a, #header.style4 #nav .nav-top > li:hover > a, #header.style4 #nav .nav-top > li.active > a {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style4 #nav .nav-opener:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style5 .opener-icons:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style5 #nav .nav-top > li:hover > a, #header.style5 #nav .nav-top > li.hover > a, #header.style5 #nav .nav-top > li.active > a {

  color: <?php echo $ad_skin ?>;

}

#header.style5 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

}

#header.style5 #nav .nav-opener:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style7 .opener-icons:hover {

  color: <?php echo $ad_skin ?>;

}

#header.style7 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style7 #nav .nav-top > li.hover > a, #header.style7 #nav .nav-top > li:hover > a, #header.style7 #nav .nav-top > li.active > a {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style7 #nav .nav-opener:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style8 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style8 #nav .nav-top > li:hover > a, #header.style8 #nav .nav-top > li.hover > a, #header.style8 #nav .nav-top > li.active > a {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style8 #nav .nav-opener:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style8 .opener-icons:hover {

  color: <?php echo $ad_skin ?>;

}

#header.style10 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style10 #nav .nav-top > li:hover > a, #header.style10 #nav .nav-top > li.hover > a, #header.style10 #nav .nav-top > li.active > a {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style11 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style11 #nav .nav-top > li.hover > a, #header.style11 #nav .nav-top > li:hover > a, #header.style11 #nav .nav-top > li.active > a {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style11 #nav .nav-opener:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style12 .info-list a:hover {

  color: <?php echo $ad_skin ?>;

}

#header.style12 .info-list .fa {

  color: <?php echo $ad_skin ?>;

}

#header.style12 .language-nav a:hover {

  color: <?php echo $ad_skin ?>;

}

#header.style12 #nav:after {

  background: <?php echo $ad_skin ?>;

}

#header.style12 #nav .quote-btn:hover {

  color: <?php echo $ad_skin ?>;

}

#header.style12 #nav .nav-opener:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style16 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style16 #nav .nav-top > li:hover > a, #header.style16 #nav .nav-top > li.hover > a, #header.style16 #nav .nav-top > li.active > a {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style16 .opener-icons:hover {

  color: <?php echo $ad_skin ?>;

}

#header.style16 #nav .nav-opener:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style17 #nav .nav-top > li > a:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style17 #nav .nav-top > li:hover > a, #header.style17 #nav .nav-top > li.hover > a, #header.style17 #nav .nav-top > li.active > a {

  border-color: <?php echo $ad_skin ?>;

}

#header.style18 .info-list a:hover {

  color: <?php echo $ad_skin ?>;

}

#header.style18 .info-list .fa {

  color: <?php echo $ad_skin ?>;

}

#header.style18 .head-socialnetworks a:hover {

  color: <?php echo $ad_skin ?>;

}

#header.style18 #nav .quote-btn {

  background: <?php echo $ad_skin ?>;

}

#header.style18 #nav .nav-top > li > a:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style18 #nav .nav-top > li:hover > a, #header.style18 #nav .nav-top > li.hover > a, #header.style18 #nav .nav-top > li.active > a {

  border-color: <?php echo $ad_skin ?>;

}

#header.style18 #nav .nav-opener:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style20 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style20 #nav .nav-top > li:hover > a, #header.style20 #nav .nav-top > li.hover > a, #header.style20 #nav .nav-top > li.active > a {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style20 #nav .nav-opener:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style20 .opener-icons:hover {

  color: <?php echo $ad_skin ?>;

}

#header.style21 .header-top:after {

  background: <?php echo $ad_skin ?>;

}

#header.style21 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style21 #nav .nav-top > li.hover > a, #header.style21 #nav .nav-top > li:hover > a, #header.style21 #nav .nav-top > li.active > a {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.style21 #nav .nav-opener:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style21 .opener-icons:hover {

  color: <?php echo $ad_skin ?>;

}

#header.style26 #nav .nav-top > li > a:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style26 #nav .nav-top > li:hover > a, #header.style26 #nav .nav-top > li.hover > a, #header.style26 #nav .nav-top > li.active > a {

  border-color: <?php echo $ad_skin ?>;

}

#header.style27 #nav .nav-top > li > a:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style27 #nav .nav-top > li:hover > a, #header.style27 #nav .nav-top > li.hover > a, #header.style27 #nav .nav-top > li.active > a {

  border-color: <?php echo $ad_skin ?>;

}

#header.style27 #nav .nav-opener:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.style27 .opener-icons:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.fixed-position #nav .nav-top > li:hover > a, #header.fixed-position #nav .nav-top > li.hover > a, #header.fixed-position #nav .nav-top > li.active > a {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position .opener-icons:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style4 .opener-icons:hover {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style7 .opener-icons:hover {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style8 .opener-icons:hover {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style9 #nav .nav-top > li > a:hover, #header.fixed-position.style9 #nav .nav-top > li:hover > a, #header.fixed-position.style9 #nav .nav-top > li.hover > a, #header.fixed-position.style9 #nav .nav-top > li.active > a {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style9 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style10 #nav .nav-top > li:hover > a, #header.fixed-position.style10 #nav .nav-top > li.hover > a, #header.fixed-position.style10 #nav .nav-top > li.active > a {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style10 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style10 .icon-list > li .opener-icons:hover {

  border-color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style10 .icon-list > li:hover .opener-icons {

  border-color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style16 .opener-icons:hover {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style17 #nav .nav-top > li.active > a,

#header.fixed-position.style17 #nav .nav-top > li:hover > a,

#header.fixed-position.style17 #nav .nav-top > li.hover > a,

#header.fixed-position.style17 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style17 .opener-icons:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style19 #nav .nav-top > li.active > a,

#header.fixed-position.style19 #nav .nav-top > li:hover > a,

#header.fixed-position.style19 #nav .nav-top > li.hover > a,

#header.fixed-position.style19 #nav .nav-top > li > a:hover {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style20 .opener-icons:hover {

  color: <?php echo $ad_skin ?>;

}

#header.fixed-position.style21 .opener-icons:hover {

  color: <?php echo $ad_skin ?>;

}



#nav a:hover {

  color: <?php echo $ad_skin ?>;

}

#nav li.hover > a,

#nav li:hover > a,

#nav li.active > a {

  color: <?php echo $ad_skin ?>;

}

#nav .drop ul:after {

  background: <?php echo $ad_skin ?>;

}

#nav .mega-drop .drop-holder:after {

  background: <?php echo $ad_skin ?>;

}

#nav .nav-opener:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.search-popup .close-btn:hover {

  background: <?php echo $ad_skin ?>;

}

.search-popup .submit:hover {

  color: <?php echo $ad_skin ?>;

}



.side-widget h2:after {

  background: <?php echo $ad_skin ?>;

}

.side-widget a:hover {

  color: <?php echo $ad_skin ?>;

}

.side-widget .btn {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.sidemenu-photo.v9 #nav7 ul a:hover, .sidemenu-photo.v11 #nav7 ul a:hover, .sidemenu-photo.v11 #nav7 ul li.active a, .sidemenu-photo.v9 #nav7 .nav-opener:hover, .sidemenu-photo.v10 #nav7 .nav-opener:hover, .sidemenu-photo.v10 #nav7 ul a:hover {

  color: <?php echo $ad_skin ?>;

}



#footer.style11 .btn-more:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#footer.style13 .f-info-box .tel {

  color: <?php echo $ad_skin ?>;

}

#footer.style15 .footer-bottom .footer-nav li a:hover {

  color: <?php echo $ad_skin ?>;

}

#footer.style17 .footer-bottom .footer-nav li a:hover {

  color: <?php echo $ad_skin ?>;

}

#footer.style19 .f-info-box .tel {

  color: <?php echo $ad_skin ?>;

}

#footer.style23 .f-info-box .tel {

  color: <?php echo $ad_skin ?>;

}

#footer.style25 .footer-social li a:hover {

  background: <?php echo $ad_skin ?>;

}

#footer.style26 .f-info-box .num {

  color: <?php echo $ad_skin ?>;

}

#footer.style27 .f-info-box .tel {

  color: <?php echo $ad_skin ?>;

}



.mailing-form2 .btn-submit {

  background: <?php echo $ad_skin ?>;

}

.mailing-form2 .btn-submit:hover {

  color: <?php echo $ad_skin ?>;

}



.bottom-box3 .footer-social a:hover {

  background: <?php echo $ad_skin ?>;

}



.f-our-mission .btn-more .fa {

  color: <?php echo $ad_skin ?>;

}

.f-our-mission .btn-more:hover {

  color: <?php echo $ad_skin ?>;

}



.newsletter-form button:hover {

  color: <?php echo $ad_skin ?>;

}



.time-nav .close-txt {

  background: <?php echo $ad_skin ?>;

}



#lancer-footer .f-social a:hover {

  background: <?php echo $ad_skin ?>;

}

#lancer-footer .footer-bottom ul a:hover {

  color: <?php echo $ad_skin ?>;

}



.wed-social .social a:hover {

  background: <?php echo $ad_skin ?>;

}



.socialize-holder .footer-social a:hover {

  background: <?php echo $ad_skin ?>;

}



.btn-f-default:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.btn-f-info {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.btn-history:before {

  background: <?php echo $ad_skin ?>;

}

.btn-history:hover {

  background: <?php echo $ad_skin ?>;

}

.btn-history:hover:after {

  color: <?php echo $ad_skin ?>;

}



.btn-more:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.btn-resume {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.know-more {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.portfolio-view:before, .portfolio-view:after {

  color: <?php echo $ad_skin ?>;

}

.portfolio-view:hover span {

  color: <?php echo $ad_skin ?>;

}



.page-heading .heading3:before {

  border-color: <?php echo $ad_skin ?> transparent transparent;

}



.page-banner .heading:before {

  background: <?php echo $ad_skin ?>;

}

.page-banner .breadcrumbs li.active a {

  color: <?php echo $ad_skin ?>;

}

.page-banner .breadcrumbs a:hover {

  color: <?php echo $ad_skin ?>;

}

.page-banner.grey .breadcrumbs a:hover {

  color: <?php echo $ad_skin ?>;

}



.main-slider .slick-dots .slick-active button,

.main-slider .slick-dots button:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.f-iconbox .icon {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.f-iconbox:hover .icon {

  background: <?php echo $ad_skin ?>;

}

.f-iconbox.light:hover .icon {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.team-block .over {

  background: <?php echo $ad_skin ?>;

}



.team-box .over {

  background: <?php echo $ad_skin ?>;

}

.team-box .subtitle a {

  color: <?php echo $ad_skin ?>;

}

.team-box .info-box .add-text a {

  color: <?php echo $ad_skin ?>;

}

.team-box:hover .social-network {

  background: <?php echo $ad_skin ?>;

}

.team-box.style3 .social-network {

  background: <?php echo $ad_skin ?>;

}



.testimon-section .icon {

  background: <?php echo $ad_skin ?>;

}

.testimon-section .slick-dots li.slick-active button {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.testimon-section .slick-dots button:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.testimon-section.alt-version blockquote .fa {

  color: <?php echo $ad_skin ?>;

}



.isotop-controls li.active a {

  background: <?php echo $ad_skin ?>;

}

.isotop-controls a:hover {

  background: <?php echo $ad_skin ?>;

}



.isotop-controls2 a:hover {

  background: none;

}

.isotop-controls2 a:hover:after {

  background: <?php echo $ad_skin ?>;

}

.isotop-controls2 li.active a:after {

  background: <?php echo $ad_skin ?>;

}



.isotop-controls3 a:hover:after {

  background: <?php echo $ad_skin ?>;

}

.isotop-controls3 li.active a:after {

  background: <?php echo $ad_skin ?>;

}



.isotop-controls4 a:hover:before {

  background: <?php echo $ad_skin ?>;

}

.isotop-controls4 li.active a:before {

  background: <?php echo $ad_skin ?>;

}

.isotop-controls4 .view-all:hover:before {

  background: <?php echo $ad_skin ?>;

}



.portfolio-block .over .plus {

  color: <?php echo $ad_skin ?>;

}

.portfolio-block .title:after {

  background: <?php echo $ad_skin ?>;

}

.portfolio-block .search {

  background: <?php echo $ad_skin ?>;

}

.portfolio-block .link:hover {

  background: <?php echo $ad_skin ?>;

}

.portfolio-block .portfolio-btn:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.portfolio-text .btn:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.work-slider .slick-arrow:hover {

  background: <?php echo $ad_skin ?>;

}



.price-section .box:hover .heading, .price-section .box.active .heading {

  background: <?php echo $ad_skin ?>;

}

.price-section .box:hover .btn, .price-section .box.active .btn {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.price-section .btn:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.price-section.style2 .box.active .btn:hover, .price-section.style2 .box:hover .btn:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.price-section.style3 .box.active .heading, .price-section.style3 .box:hover .heading {

  background: <?php echo $ad_skin ?>;

}

.price-section.style5 .box.active, .price-section.style5 .box:hover {

  border-color: <?php echo $ad_skin ?>;

}

.price-section.style5 .box.active .heading, .price-section.style5 .box:hover .heading {

  background: <?php echo $ad_skin ?>;

}

.price-section.style5 .box.active .btn-purchase, .price-section.style5 .box:hover .btn-purchase {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.blog-section .beans-stepslider .slick-dots li.slick-active button {

  border-color: <?php echo $ad_skin ?>;

}

.blog-section .beans-stepslider .slick-dots li.slick-active button:after {

  background: <?php echo $ad_skin ?>;

}

.blog-section .beans-stepslider .slick-dots button:hover {

  border-color: <?php echo $ad_skin ?>;

}

.blog-section .beans-stepslider .slick-dots button:after {

  background: <?php echo $ad_skin ?>;

}



.blog-m-post h3 a:hover {

  color: <?php echo $ad_skin ?>;

}

.blog-m-post .meta a:hover {

  color: <?php echo $ad_skin ?>;

}

.blog-m-post .icon {

  background: <?php echo $ad_skin ?>;

}

.blog-m-post.style2 .blog-txt {

  border-color: <?php echo $ad_skin ?>;

}



.facts-section .fa {

  color: <?php echo $ad_skin ?>;

}

.facts-section .num:after {

  background: <?php echo $ad_skin ?>;

}



.clients-section .beans-stepslider .slick-next:hover,

.clients-section .beans-stepslider .slick-prev:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.wedo-section .coll:hover .icon {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.wedo-section .coll:hover .btn {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.wedo-section .icon:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.counter-container .fa {

  color: <?php echo $ad_skin ?>;

}

.counter-container .num:after {

  background: <?php echo $ad_skin ?>;

}



.services-section h3 .fa {

  color: <?php echo $ad_skin ?>;

}



.video-section .play-icon {

  color: <?php echo $ad_skin ?>;

}



.process-section .icon .num {

  background: <?php echo $ad_skin ?>;

}



.progress-holder .progress-bar-outer {

  background: <?php echo $ad_skin ?>;

}



.features-section .fa {

  color: <?php echo $ad_skin ?>;

}



.core-section .list li:after {

  color: <?php echo $ad_skin ?>;

}



.twitter-section a {

  color: <?php echo $ad_skin ?>;

}



.appshowcase-banner .platform a:hover {

  color: <?php echo $ad_skin ?>;

}



.about-section .fa {

  color: <?php echo $ad_skin ?>;

}

.about-section .know-more {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.counter-section .num:after {

  background: <?php echo $ad_skin ?>;

}



.team-lightbox .socialnetworks a:hover {

  color: <?php echo $ad_skin ?>;

}



.app-mainbanner h1 .add {

  color: <?php echo $ad_skin ?>;

}

.app-mainbanner .btn {

  background: <?php echo $ad_skin ?>;

}



.get-app .platform a:hover {

  color: <?php echo $ad_skin ?>;

}



.appsub-section .input-box #mc_embed_signup input.button {

  background: <?php echo $ad_skin ?>;

}



.architecture-gallery .subtitle {

  background: <?php echo $ad_skin ?>;

}

.architecture-gallery .slick-arrow:hover {

  color: <?php echo $ad_skin ?>;

}

.architecture-gallery .slick-arrow:after {

  background: <?php echo $ad_skin ?>;

}



.archi-columns .coll:hover {

  background: <?php echo $ad_skin ?>;

}

.archi-columns h2:after {

  background: <?php echo $ad_skin ?>;

}



.archi-projects .heading-v2:after {

  background: <?php echo $ad_skin ?>;

}

.archi-projects h3:after {

  background: <?php echo $ad_skin ?>;

}

.archi-projects .beans-slider .slick-dots li button:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.archi-projects .beans-slider .slick-dots li.slick-active button {

  border-color: <?php echo $ad_skin ?>;

  background: <?php echo $ad_skin ?>;

}



.archi-whyus h2 .add {

  color: <?php echo $ad_skin ?>;

}



.blog-over h2 a:hover {

  color: <?php echo $ad_skin ?>;

}

.blog-over .author-info .txt a:hover {

  color: <?php echo $ad_skin ?>;

}

.blog-over .blog-nav li a:hover {

  color: <?php echo $ad_skin ?>;

}



.blog-post-v1 .more:hover {

  color: <?php echo $ad_skin ?>;

}

.blog-post-v1 h2 a:hover {

  color: <?php echo $ad_skin ?>;

}

.blog-post-v1 h3 {

  color: <?php echo $ad_skin ?>;

}

.blog-post-v1 h3 a {

  color: <?php echo $ad_skin ?>;

}

.blog-post-v1 .meta a:hover {

  color: <?php echo $ad_skin ?>;

}

.blog-post-v1 .icon {

  background: <?php echo $ad_skin ?>;

}

.blog-post-v1 .post-blockquote {

  border-color: <?php echo $ad_skin ?>;

}



.blog-footer .btn-box .btn:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.blog-footer .btn-load:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.blog-footer .b-pagination li.active a {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.blog-footer .b-pagination a:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.blog-post-v2 h2 a:hover {

  color: <?php echo $ad_skin ?>;

}

.blog-post-v2 .meta a:hover {

  color: <?php echo $ad_skin ?>;

}

.blog-post-v2 .icon {

  background: <?php echo $ad_skin ?>;

}



.widget .searchform button {

  background: <?php echo $ad_skin ?>;

}

.widget .tabset a:hover {

  background: <?php echo $ad_skin ?>;

}

.widget .tabset .active a {

  background: <?php echo $ad_skin ?>;

}

.widget.cate-widget a:hover {

  color: <?php echo $ad_skin ?>;

}

.widget.cate-widget a .fa {

  color: <?php echo $ad_skin ?>;

}

.widget.cate-widget ul li.active a {

  color: <?php echo $ad_skin ?>;

}



.comment-box .box.img-box .reply:hover {

  color: <?php echo $ad_skin ?>;

}



.comment-form .btn {

  background: <?php echo $ad_skin ?>;

}



.blog-isotop-nav li.active a {

  background: <?php echo $ad_skin ?>;

}

.blog-isotop-nav a:hover {

  background: <?php echo $ad_skin ?>;

}



.welcome-heading .main-text .rotate-text {

  background: <?php echo $ad_skin ?>;

}



.about-post h3 a:hover {

  color: <?php echo $ad_skin ?>;

}



.about-post .btn:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.nav-tabs > li > a:before {

  background: <?php echo $ad_skin ?>;

}

.nav-tabs > li > a:after {

  border-color: <?php echo $ad_skin ?> transparent transparent transparent;

}

.nav-tabs > li.active > a:before, .nav-tabs > li.active > a:hover:before, .nav-tabs > li.active > a:focus:before {

  background: <?php echo $ad_skin ?>;

}

.nav-tabs > li.active > a:after, .nav-tabs > li.active > a:hover:after, .nav-tabs > li.active > a:focus:after {

  border-color: <?php echo $ad_skin ?> transparent transparent transparent;

}



.panel-title a {

  background: <?php echo $ad_skin ?>;

}

.panel-title a:hover {

  background: <?php echo $ad_skin ?>;

}

.dark .panel-title a.collapsed:hover {

  background: <?php echo $ad_skin ?>;

}



.create-business h2 a {

  color: <?php echo $ad_skin ?>;

}

.create-business .btn-f-info:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.create-business .btn-f-default {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.construct-gallery .title {

  border-left-color: <?php echo $ad_skin ?>;

}

.construct-gallery .btn:before {

  background: <?php echo $ad_skin ?>;

}

.construct-gallery .btn:hover {

  background: <?php echo $ad_skin ?>;

}

.construct-gallery .slick-dots li button:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.construct-gallery .slick-dots li.slick-active button {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.safety-section h2 .add {

  color: <?php echo $ad_skin ?>;

}

.safety-section .btn:before {

  background: <?php echo $ad_skin ?>;

}

.safety-section .btn:hover {

  background: <?php echo $ad_skin ?>;

}

.safety-section .more:before {

  background: <?php echo $ad_skin ?>;

}



.const-services .icon {

  color: <?php echo $ad_skin ?>;

}

.const-services .slick-arrow:hover {

  background: <?php echo $ad_skin ?>;

}

.const-services.style2 .box .fa {

  color: <?php echo $ad_skin ?>;

}

.const-services.style2 .box:hover .over {

  background: rgba(249, 96, 21, 0.8);

}



.onepage-banner .down-arrow:hover {

  color: <?php echo $ad_skin ?>;

}



.about-aricle .img-box {

  background: <?php echo $ad_skin ?>;

}



.tabset-onepage li a:before {

  background: <?php echo $ad_skin ?>;

}

.tabset-onepage li a:hover .fa {

  color: <?php echo $ad_skin ?>;

}

.tabset-onepage li.active a .fa {

  color: <?php echo $ad_skin ?>;

}



.tab-content.onepage .btn {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.process-nav li .fa {

  color: <?php echo $ad_skin ?>;

}

.process-nav li:hover .process {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.recentblog-col h3 a:hover {

  color: <?php echo $ad_skin ?>;

}

.recentblog-col .meta-nav a:hover {

  color: <?php echo $ad_skin ?>;

}

.recentblog-col .date-holder a {

  background: <?php echo $ad_skin ?>;

}



.install-demos .btn {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.contact-form .btn-submit {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.lancer-do .fa {

  color: <?php echo $ad_skin ?>;

}

.lancer-do.style2 .fa {

  color: <?php echo $ad_skin ?>;

}

.lancer-do.style2 .list-do a:hover {

  background: <?php echo $ad_skin ?>;

}



.personal-process .beans-slider .slick-dots li.slick-active button {

  border-color: <?php echo $ad_skin ?>;

  background: <?php echo $ad_skin ?>;

}

.personal-process .beans-slider .slick-dots button:hover {

  border-color: <?php echo $ad_skin ?>;

  background: <?php echo $ad_skin ?>;

}

.personal-process .icon {

  background: <?php echo $ad_skin ?>;

}



.personal-exper .p-holder .icon {

  background: <?php echo $ad_skin ?>;

}

.personal-exper.style3 h2 a:hover {

  color: <?php echo $ad_skin ?>;

}



.p-skills .progress-holder .progress-bar-outer {

  background: <?php echo $ad_skin ?>;

}



.port-single ul a {

  color: <?php echo $ad_skin ?>;

}



.port-single .social-network a:hover {

  background: <?php echo $ad_skin ?>;

}



.portfolio-footer.style2 .btn {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.realestate-slider .slick-arrow:hover {

  color: <?php echo $ad_skin ?>;

}



.realestate-section .tabset li.active a {

  background: <?php echo $ad_skin ?>;

  border-left-color: <?php echo $ad_skin ?>;

}

.realestate-section .tabset li:hover a {

  background: <?php echo $ad_skin ?>;

  border-left-color: <?php echo $ad_skin ?>;

}

.realestate-section .tab-content {

  background: <?php echo $ad_skin ?>;

}



.realestate-services .img-box a:hover {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.realestate-services .star-list li.active a {

  color: <?php echo $ad_skin ?>;

}

.realestate-services .price {

  color: <?php echo $ad_skin ?>;

}

.realestate-services .slick-arrow:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.resturant-gallery .slick-arrow:hover {

  color: <?php echo $ad_skin ?>;

}



.menu-block .btn.view:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.our-menu-nav li a:before {

  background: <?php echo $ad_skin ?>;

}

.our-menu-nav li a:hover {

  color: <?php echo $ad_skin ?>;

}

.our-menu-nav li.active a {

  color: <?php echo $ad_skin ?>;

}



.slide-frame .slide-box h3 a:hover {

  color: <?php echo $ad_skin ?>;

}

.slide-frame .slide-box .slide-socials a:hover {

  color: <?php echo $ad_skin ?>;

}



.slide-socials a:hover {

  color: <?php echo $ad_skin ?>;

}



.menu-article h2 a:hover {

  color: <?php echo $ad_skin ?>;

}

.menu-article .rattings-nav li .fa {

  color: <?php echo $ad_skin ?>;

}



.shop-gallery .slick-dots li button:hover {

  border-color: <?php echo $ad_skin ?>;

  background: <?php echo $ad_skin ?>;

}

.shop-gallery .slick-dots li.slick-active button {

  border-color: <?php echo $ad_skin ?>;

  background: <?php echo $ad_skin ?>;

}



.btn-shop:hover {

  color: <?php echo $ad_skin ?>;

}



.btn-shop.add {

  color: <?php echo $ad_skin ?>;

}



.product-nav li.active a {

  background: <?php echo $ad_skin ?>;

}

.product-nav a:hover {

  background: <?php echo $ad_skin ?>;

}



.new-product h2 a:hover {

  color: <?php echo $ad_skin ?>;

}

.new-product .btn-cart:hover {

  color: <?php echo $ad_skin ?>;

}



.rattings-nav {

  color: <?php echo $ad_skin ?>;

}

.rattings-nav li .fa {

  color: <?php echo $ad_skin ?>;

}



.special-block .slick-arrow:hover {

  color: <?php echo $ad_skin ?>;

}

.special-block.style2 .btn-slider:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.special-box .btn:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.other-services:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.shop-features h2:before {

  background: <?php echo $ad_skin ?>;

}



.deal-gallery .name:hover {

  color: <?php echo $ad_skin ?>;

}

.deal-gallery .price {

  color: <?php echo $ad_skin ?>;

}

.deal-gallery .btn-sale {

  background: <?php echo $ad_skin ?>;

}

.deal-gallery .slick-arrow:hover {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.product-article h3 a:hover {

  color: <?php echo $ad_skin ?>;

}



.links-nav a:hover {

  color: <?php echo $ad_skin ?>;

}

.links-nav .fa {

  color: <?php echo $ad_skin ?>;

}



.social-block.style4 .social-container .footer-social a:hover {

  background: <?php echo $ad_skin ?>;

}



.shop-header p a {

  color: <?php echo $ad_skin ?>;

}



.shop-footer p a {

  color: <?php echo $ad_skin ?>;

}



.shop-next:hover,

.shop-prev:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.shop-pagination li a:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.shop-pagination li.active a {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.shop-widget ul li a:before {

  border-color: transparent transparent transparent <?php echo $ad_skin ?>;

}

.shop-widget ul li a:hover {

  color: <?php echo $ad_skin ?>;

}



.shop-product-info h2 a:hover {

  color: <?php echo $ad_skin ?>;

}

.shop-product-info .btn-cart:hover {

  color: <?php echo $ad_skin ?>;

}



.description-header .review:hover {

  color: <?php echo $ad_skin ?>;

}



.cart-form .btn:hover {

  background: <?php echo $ad_skin ?>;

}



.btn-add .fa {

  color: <?php echo $ad_skin ?>;

}

.btn-add:hover {

  color: <?php echo $ad_skin ?>;

}



.descriptio-tabs .nav-tabs > li > a:hover {

  background: <?php echo $ad_skin ?>;

}

.descriptio-tabs .nav-tabs > li.active > a,

.descriptio-tabs .nav-tabs > li.active > a:hover,

.descriptio-tabs .nav-tabs > li.active > a:focus {

  background: <?php echo $ad_skin ?>;

}



.related-shop .btn-prev:hover {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}



.reply-box:hover {

  color: <?php echo $ad_skin ?>;

}



.shop-table .btn-close:hover {

  color: <?php echo $ad_skin ?>;

}



.shop-apply .btn-slider:hover {

  background: <?php echo $ad_skin ?>;

}



.apply-form .btn-slider:hover {

  background: <?php echo $ad_skin ?>;

}



.shop-calculation.checkout .cart-table .col-2.add {

  color: <?php echo $ad_skin ?>;

}



.update-form .btn:hover {

  background: <?php echo $ad_skin ?>;

}



.rang-form .btn-form:hover {

  background: <?php echo $ad_skin ?>;

}



.travel-slider .slick-arrow:hover {

  color: <?php echo $ad_skin ?>;

}



.travel-section .btn-submit {

  background: <?php echo $ad_skin ?>;

}



.wedding-banner .slick-arrow:hover {

  color: <?php echo $ad_skin ?>;

}



.wedding-nav .countdown-section {

  background: <?php echo $ad_skin ?>;

}



.happy-couple h3 a:hover {

  color: <?php echo $ad_skin ?>;

}

.happy-couple .title {

  color: <?php echo $ad_skin ?>;

}

.happy-couple .social a:hover {

  color: <?php echo $ad_skin ?>;

}



.love-story .row-holder time {

  background: <?php echo $ad_skin ?>;

}

.love-story h3 a:hover {

  color: <?php echo $ad_skin ?>;

}



.wedding-photos .view:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.wedding-photos .over a:hover {

  color: <?php echo $ad_skin ?>;

}



.youga-slider .slick-dots li button:hover {

  border-color: <?php echo $ad_skin ?>;

  background: <?php echo $ad_skin ?>;

}

.youga-slider .slick-dots li.active button {

  border-color: <?php echo $ad_skin ?>;

  background: <?php echo $ad_skin ?>;

}



.login-form2 a:hover {

  color: <?php echo $ad_skin ?>;

}

.login-form2 .btn-info:hover {

  background: <?php echo $ad_skin ?>;

}



.contact-address h3 .fa {

  color: <?php echo $ad_skin ?>;

}

.contact-address a:hover {

  color: <?php echo $ad_skin ?>;

}



.faq-section .smoothanchor:hover,

.faq-section .opener:hover {

  color: <?php echo $ad_skin ?>;

}

.faq-section.style3 .divider-line2 .smoothanchor:hover {

  color: <?php echo $ad_skin ?>;

}



.parallax-section .next-section:hover {

  color: <?php echo $ad_skin ?>;

}

.parallax-section .scroll {

  background: <?php echo $ad_skin ?>;

}

.parallax-section .scroll:hover {

  background: <?php echo $ad_skin ?>;

}

.parallax-section .scroll.add:hover {

  background: <?php echo $ad_skin ?>;

}



.error-section h1 {

  color: <?php echo $ad_skin ?>;

}

.error-section .text a {

  color: <?php echo $ad_skin ?>;

}

.error-section .btn-down:hover {

  color: <?php echo $ad_skin ?>;

}

.error-section.style7 .wedding-nav .countdown-period {

  background: <?php echo $ad_skin ?>;

}



.btn-back {

  color: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

.btn-back:hover {

  background: <?php echo $ad_skin ?>;

}



#style-changer .list-style .btn2 {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#style-changer .list-style .btn2.add:hover {

  background: <?php echo $ad_skin ?>;

  border-color: <?php echo $ad_skin ?>;

}

#style-changer .changer-opener {

  color: <?php echo $ad_skin ?>;

}



#gotoTop:hover,

.page-heading .icon,

.events-icons .icon,

.footer-social a:hover,

.error-form .btn:hover,

.footer-form .btn-submit,

.mailing-form .btn-submit,

.events-mainbanner .subtitle,

.page-heading .heading:after,

.page-heading .heading2:after,

.page-heading .heading8:after,

.page-heading .heading9:after,

.page-heading .heading3:after,

.page-heading .heading5:after,

.page-heading .heading5:before,

.page-heading .heading2:before,

.page-heading .heading8:before,

.grey-contact-form .btn-submit,

.features-col.style4 .panel-title a.collapsed:hover,

.shop-gallery .slick-arrow:hover {

  background: <?php echo $ad_skin ?>;

}



.lost-block h2,

#nav7 ul a:hover,

.page-heading .dot,

.sidenav-port a:hover,

.shop-gallery .add-text,

.footer-social2 a:hover,

.contact-form2 .btn-f-info,

.services-section h3 .icon,

.page-heading .heading4:after,

.croporate-slider .slick-arrow,

.page-heading .heading4:before,

.main-slider .slick-arrow:hover,

.testimonials blockquote:before,

.welcom-banner .slick-arrow:hover,

.features-col.style4 .list-events .fa,

#footer.style15 .footer-cent h5 .add-color,

#footer.style15 .f-contact-info2 address .fa,

#footer.style15 .f-contact-info2 .tel-box .fa,

#footer.style15 .f-contact-info2 .mail-box .fa {

  color: <?php echo $ad_skin ?>;

}



.page-heading .heading7:after,

.page-heading .heading10:after,

.page-heading .heading7:before {

  border-color: <?php echo $ad_skin ?>;

}

.main-color{color: <?php echo $ad_skin ?> !important;}

