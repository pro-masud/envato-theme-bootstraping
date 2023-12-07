<?php
// version checked 
define("VERSION", wp_get_theme()->get("Version"));
function aximo_theme_setup() {
    load_theme_textdomain("aximo");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("html5", ['search-form', 'comment-list']);
    add_theme_support("post-formats", ["image", "gallery", "quote", "audio", "video", "link"]);
    add_editor_style("/assets/css/editor-style.css");

    register_nav_menus([
        "top-menu" => __("Top Menu", "aximo"),
    ]);
}
add_action("after_setup_theme", "aximo_theme_setup");

function aximo_assets(){
    
    wp_enqueue_style("google-font", "https://fonts.googleapis.com/css2?family=Arimo:wght@600;700&family=Familjen+Grotesk:wght@600;700&family=Inter:wght@400;600&family=Libre+Baskerville:wght@700&family=Syne:wght@600;700&display=swap", null, "1.0.0");
    wp_enqueue_style("bootstrap-css", get_theme_file_uri("/assets/css/bootstrap.min.css"), null, "1.0.0");
    wp_enqueue_style("magnific-css", get_theme_file_uri("/assets/css/magnific-popup.css"), null, "1.0.0");
    wp_enqueue_style("swiper-css", get_theme_file_uri("/assets/css/swiper-bundle.min.css"), null, "1.0.0");
    wp_enqueue_style("animate-css", get_theme_file_uri("/assets/css/animate.css"), null, "1.0.0");
    wp_enqueue_style("custom-font-css", get_theme_file_uri("/assets/css/custom-font.css"), null, "1.0.0");
    wp_enqueue_style("fontawesome-css", get_theme_file_uri("/assets/css/fontawesome.css"), null, "1.0.0");
    wp_enqueue_style("aos-css", get_theme_file_uri("/assets/css/aos.css"), null, "1.0.0");
    wp_enqueue_style("icomoon-css", get_theme_file_uri("/assets/css/icomoon.css"), null, "1.0.0");
    wp_enqueue_style("main-css", get_theme_file_uri("/assets/css/main.css"), null, "1.0.0");
    wp_enqueue_style("app-css", get_theme_file_uri("/assets/css/app.min.css"), null, "1.0.0");
    wp_enqueue_style("aximo-main-css", get_stylesheet_uri(), null, VERSION);

    wp_enqueue_script("aximo-jquery", get_theme_file_uri("/assets/js/jquery-3.6.0.min.js"), [], null, true);
    wp_enqueue_script("aximo-bootstrap", get_theme_file_uri("/assets/js/bootstrap.bundle.min.js"), [], null, true);
    wp_enqueue_script("aximo-aos", get_theme_file_uri("/assets/js/aos.js"), [], null, true);
    wp_enqueue_script("aximo-menu", get_theme_file_uri("/assets/js/menu/menu.js"), [], null, true);
    wp_enqueue_script("aximo-gsap", get_theme_file_uri("/assets/js/gsap.min.js"), [], null, true);
    wp_enqueue_script("aximo-isotope", get_theme_file_uri("/assets/js/isotope.pkgd.min.js"), [], null, true);
    wp_enqueue_script("aximo-magnific", get_theme_file_uri("/assets/js/jquery.magnific-popup.min.js"), [], null, true);
    wp_enqueue_script("aximo-swiper", get_theme_file_uri("/assets/js/swiper-bundle.min.js"), [], null, true);
    wp_enqueue_script("aximo-countdown", get_theme_file_uri("/assets/js/countdown.js"), [], null, true);
    wp_enqueue_script("aximo-wow", get_theme_file_uri("/assets/js/wow.min.js"), [], null, true);
    wp_enqueue_script("aximo-splittext", get_theme_file_uri("/assets/js/SplitText.min.js"), [], null, true);
    wp_enqueue_script("aximo-scrolltrigger", get_theme_file_uri("/assets/js/ScrollTrigger.min.js"), [], null, true);
    wp_enqueue_script("aximo-skill", get_theme_file_uri("/assets/js/skill-bar.js"), [], null, true);
    wp_enqueue_script("aximo-faq", get_theme_file_uri("/assets/js/faq.js"), [], null, true);
    wp_enqueue_script("aximo-app", get_theme_file_uri("/assets/js/app.js"), [], null, true);


}
add_action("wp_enqueue_scripts", "aximo_assets");