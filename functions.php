<?php
function aximo_theme_setup() {
    load_theme_textdomain("aximo");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("html5", ['search-form', 'comment-list']);
    add_theme_support("post-formats", ["image", "gallery", "quote", "audio", "video", "link"]);
    add_editor_style("/assets/css/editor-style.css");
}

add_action("after_setup_theme", "aximo_theme_setup");