<?php
/**
 * If you need an environment-specific system or application configuration,
 * there is an example in the documentation
 * @see https://docs.zendframework.com/tutorials/advanced-config/#environment-specific-system-configuration
 * @see https://docs.zendframework.com/tutorials/advanced-config/#environment-specific-application-configuration
 */
return [
    // Retrieve list of modules used in this application.
    'modules' => [
        'MSBios\Hydrator',
        'Zend\Paginator',
        'Zend\Db',
        'Zend\Filter',
        'Zend\Session',
        'Zend\Validator',
        'Zend\Hydrator',
        'Zend\Cache',
        'Zend\Serializer',
        'Zend\InputFilter',
        'Zend\Mvc\Plugin\Prg',
        'Zend\Mvc\Plugin\Identity',
        'Zend\Mvc\Plugin\FilePrg',
        'Zend\Mvc\Plugin\FlashMessenger',
        'Zend\Navigation',
        'Zend\Router',
        'Zend\Form',
        'Zend\I18n',

        'MSBios\CPanel',
        'MSBios\Guard\CPanel',
        'MSBios\Authentication',
        'MSBios\Guard\Resource',
        'MSBios\Guard',
        'MSBios\Validator',
        'MSBios\Db',
        'MSBios\Form',
        'MSBios\View',
        'MSBios\Cache',
        'MSBios\Test',
        'MSBios\I18n',
        'MSBios\Assetic',
        'MSBios\Widget',
        'MSBios\Theme',
        'MSBios\Navigation',
        'MSBios\Application',
        'MSBios\Resource',

        'MSBios\Content',
        'MSBios\Content\CPanel',

        'MSBios\Guard\DeveloperTools',
        'ZendDeveloperTools',
    ],
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],
        'config_glob_paths' => [
            realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php',
        ],
        'config_cache_enabled' => false,
        // 'config_cache_key' => 'application.config.cache',
        'module_map_cache_enabled' => false,
        // 'module_map_cache_key' => 'application.module.cache',
        'cache_dir' => 'data/cache/',
    ],
];
