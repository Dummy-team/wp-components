<?php
vc_map(
    array(
        "name" => __('Bloc actus', 'dummy-team'),
        "base" => "dt_news",
        "content_element" => true,
        "icon" => "thb_vc_ico_post",
        "class" => "thb_vc_sc_post",
        "category" => "Dummy",
        "description" => "Afficher les acticles en home",
        "params"  => array(
            array(
                "type" => "textfield",
                "heading" => __('Nombre de news', 'dummy-team'),
                "param_name" => "limit_show_news",
                "description" => __('Nombre de news à afficher', 'dummy-team'),
            ),
        ),
    )
);
