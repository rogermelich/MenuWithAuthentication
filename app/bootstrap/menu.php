<?php

//Name  or title
//URL links
//Icons
//It's Multilevel Menu


//Home Menu
MenuWithAuthentication::menu('home')
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->role('home')
    ->permission('home')
    ->user('rogermelich');

//Another link Menu
MenuWithAuthentication::menu('another')
    ->title('Another Link')
    ->user(5);

//Multilevel Menu
MenuWithAuthentication::menu('multiLevel')->title('Multilevel')->icon('fa-clone');
    MenuWithAuthentication::menu('multilevel1')->title('Multilevel 1')->icon('fa-hand-peace-o');
    MenuWithAuthentication::menu('multilevel2')->title('Multilevel 2')->icon('fa-hand-peace-o');

//Add últim menu to difrence to origin configuration
MenuWithAuthentication::menu('linked')
    ->title('Últim Fitxer')
    ->icon('fa-camera')
    ->url('http://www.google.com');