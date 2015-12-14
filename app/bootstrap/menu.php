<?php

//Name  or title
//URL links
//Icons
//It's Multilevel Menu


//Home Menu
MenuWithAuthentication::menu()
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('rogermelich');

//Another link Menu
MenuWithAuthentication::menu()
    ->title('Another Link')
    ->user(5);

//Multilevel Menu
MenuWithAuthentication::menu()->title('Multilevel')->icon('fa-clone');
    MenuWithAuthentication::menu()->title('Multilevel 1')->icon('fa-hand-peace-o');
    MenuWithAuthentication::menu()->title('Multilevel 2')->icon('fa-hand-peace-o');

//Add últim menu to difrence to origin configuration
MenuWithAuthentication::menu()
    ->title('Últim Fitxer')
    ->icon('fa-camera')
    ->url('http://www.google.com');