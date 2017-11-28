<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "index" => [
                "text"  => t("ME-sida"),
                "url"   => $this->di->get("url")->create(""),
                "title" => t("Startsida"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningssida"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("OM-sida"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om denna webbsida")
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Vertikalt grid")
            ],

            "typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typografiskt grid")
            ],

            "theme" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Teman")
            ],

            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analys.sida"),
                "mark-if-parent" => true,
            ],

        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "index" => [
                "text"  => t("Me-sida"),
                "url"   => $this->di->get("url")->create(""),
                "title" => t("Startsida"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningssida"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om-sida"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om denna webbsida")
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Vertikalt grid")
            ],

            "typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typografiskt grid")
            ],

            "theme" => [
                "text"  => t("Teman"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Teman")
            ],

            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analys.sida"),
                "mark-if-parent" => true,
            ],

            "theme-selector" => [
                "text"  => t("Theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Temaväljare")
            ],

        ],
    ],


    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
