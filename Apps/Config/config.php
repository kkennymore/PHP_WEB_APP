<?php

Config::set('site_name', '&ENG;aijChin');
Config::set('author', 'This is Avetiz');
Config::set('keywords', 'Avetiz');
Config::set('description', 'This is avetiz');
Config::set('languages', array('en', 'cn', 'fr','edo','pidgin','yoruba','igbo','hausa','swahili'));
Config::set('activeUrlList', array('home', 'contact', 'about','gallery','news','entertainment','tutorials','products','services'));

//Routes, Route name=>method prefix
Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_',
));
Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'home');
Config::set('default_action','page');

//database settings

Config::set('DBHOST','localhost');
Config::set('DBUSER','kkennymore');
Config::set('DBPASS','kkennymore11//');
Config::set('DBNAME','kkennymore');
Config::set('DB_TYPE','mysql');
Config::set('DB_CHARSET','utf8');
