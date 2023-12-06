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

    wp_enqueue_script("jquery");
    wp_enqueue_script("bootstrap-js", get_theme_file_uri("/assets/js/bootstrap.bundle.min.js"), null, "1.0.0", true );
    wp_enqueue_script("aos-js", get_theme_file_uri("/assets/js/aos.js"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("menu-js", get_theme_file_uri("/assets/js/menu.js"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("gsap-js", get_theme_file_uri("/assets/js/gsap.min.js"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("isotope-js", get_theme_file_uri("/assets/js/isotope.pkgd.min.js"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("swiper-js", get_theme_file_uri("/assets/js/swiper-bundle.min.js"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("jscountdown-js", get_theme_file_uri("/assets/jscountdown.js"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("wow-js", get_theme_file_uri("/assets/wow.min.js"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("splittext-js", get_theme_file_uri("/assets/SplitText.min.js"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("scrolltrigger-js", get_theme_file_uri("/assets/ScrollTrigger.min.js"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("scrollsmoother-js", get_theme_file_uri("/assets/ScrollSmoother.min.js"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("skill-bar-js", get_theme_file_uri("/assets/skill-bar.js"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("faq-js", get_theme_file_uri("/assets/faq.js"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("wow-js", get_theme_file_uri("//maps.googleapis.com/maps/api/js?v=3&key=AIzaSyArZVfNvjnLNwJZlLJKuOiWHZ6vtQzzb1Y"), ['jquery'], "1.0.0", true );
    wp_enqueue_script("faq-js", get_theme_file_uri("/assets/js/app.js"), ['jquery'], "1.0.0", true );
}
add_action("wp_enqueue_scripts", "aximo_assets");