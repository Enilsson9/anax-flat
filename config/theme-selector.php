<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/style.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => ["css/light.min.css"]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => ["css/color.min.css"]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => ["css/dark.min.css"]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => ["css/colorful.min.css"]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "typography",
            "stylesheets" => ["css/typography.min.css"]
        ],

        "separator2" => "------------------------------------------------",

        "background" => [
            "title"      => "A theme where the background and opacity stand out",
            "class"      => "background",
            "stylesheets" => ["css/background.min.css"]
        ],
        "texture" => [
            "title"      => "A theme where texture and borders stand out",
            "class"      => "texture",
            "stylesheets" => ["css/texture.min.css"]
        ],
        "gradients" => [
            "title"      => "A theme where gradients and pictures stand out",
            "class"      => "gradients",
            "stylesheets" => ["css/gradients.min.css"]
        ],
        "separator3" => "------------------------------------------------",

        "unity" => [
            "title"      => "A theme where all elements are in agreement",
            "class"      => "unity",
            "stylesheets" => ["css/unity.min.css"]
        ],
        "movement" => [
            "title"      => "A theme where colors change",
            "class"      => "movement",
            "stylesheets" => ["css/movement.min.css"]
        ],

    ]
];
