<?php

return [
    /**
     * SITE
     */
    "site_name" => "Mapeamento de Competências",
    "site_title" => "Hood Programmers - Desenvolvimento de Sites, Sistemas Web e Aplicativos.",
    "site_desc" => "A Hood Programmers é uma agência especializada em desenvolvimento de sites, sistemas web e aplicativos, utilizando tecnologias atuais e qualificadas do mercado. Nossa equipe de programadores experientes trabalha com as mais recentes tecnologias e linguagens de programação para criar soluções digitais sob medida para as necessidades dos nossos clientes. Além disso, nos mantemos atualizados sobre as tendências do mercado, para oferecer soluções inovadoras e de qualidade superior. Entre em contato conosco para saber como podemos ajudar a sua empresa a se destacar na era digital.",
    "site_keywords" => "desenvolvimento de sites, desenvolvimento de sistemas web, desenvolvimento de aplicativos, programação web, tecnologia da informação, linguagens de programação, soluções digitais, inovação tecnológica, tendências de tecnologia, experiência em programação, qualidade superior, personalização de soluções, desenvolvimento sob medida, equipe de programadores, compromisso com a excelência, atualização constante",
    "site_addr_street" => "Rua da Penha",
    "site_addr_number" => "58",
    "site_addr_complement" => "Sala 05",
    "site_addr_city" => "Araçariguama",
    "site_addr_state" => "SP",
    "site_addr_zipcode" => "18147-000",
    "site_phone_number" => "11910584136",
    "site_phone_number_fmt" => "(11) 91058-4136",
    "site_email_contact" => "contato@hoodprogrammers.com.br",

    /**
     * DINAMIC MENU
     */
    "admin_menus" => [
        (object)[
            "route" => "/admin/dash/home",
            "icon" => "fa-tachometer-alt",
            "name" => "Dashboard",
            "target" => "_self"
        ],
        (object)[
            "route" => "/admin/sectors/home",
            "icon" => "fa-times",
            "name" => "Setores",
            "target" => "_self"
        ],
        (object)[
            "route" => "/admin/users/home",
            "icon" => "fa-users",
            "name" => "Usuários",
            "target" => "_self"
        ],
        (object)[
            "route" => "/admin/competences/home",
            "icon" => "fa-times",
            "name" => "Competências",
            "target" => "_self"
        ],
        (object)[
            "route" => "/admin/questions/home",
            "icon" => "fa-times",
            "name" => "Questões",
            "target" => "_self"
        ],
        (object)[
            "route" => "/admin/logout",
            "icon" => "fa-sign-out-alt",
            "name" => "Sair",
            "target" => "_self"
        ]
    ]
];
