<?php

return array(
    'modules' => array(
        'Base',
        'Auth',
        'Administrador',
        'Home',
        'Aluno',
        'Empresa',
        'Vaga',
        'Relatorio',
        'DoctrineModule',
        'DoctrineORMModule',
    
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{{,*.}global,{,*.}local}.php',
        ),
    ),
    
);
