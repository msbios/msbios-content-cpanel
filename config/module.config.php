<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Content\CPanel;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'router' => [
        'routes' => [
            'cpanel' => [
                'child_routes' => [
                    'static' => [
                        'type' => Segment::class,
                        'options' => [
                            'route' => 'static[/[:action[/[:id[/]]]]]',
                            'defaults' => [
                                'controller' => Controller\TextPageController::class,
                            ],
                            'constraints' => [
                                'action' => 'add|edit|drop',
                                'id' => '[0-9]+'
                            ]
                        ]
                    ],
                ]
            ]
        ]
    ],

    'controllers' => [
        'factories' => [
            Controller\TextPageController::class =>
                InvokableFactory::class,
        ]
    ],

    'navigation' => [
        \MSBios\CPanel\Navigation\Sidebar::class => [
            'content' => [
                'label' => _('Content'),
                'uri' => '#',
                'class' => 'icon-stack-text',
                'order' => 200,
                'pages' => [
                    'user' => [
                        'label' => _('Text Pages'),
                        'route' => 'cpanel/static',
                        'pages' => [
                            [
                                'label' => _('Create new text page'),
                                'route' => 'cpanel/static',
                                'action' => 'add'
                            ], [
                                'label' => _('Edit text page'),
                                'route' => 'cpanel/static',
                                'action' => 'edit'
                            ],
                        ]
                    ]
                ]
            ]
        ]
    ],

    'translator' => [
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language/',
                'pattern' => '%s.mo',
            ]
        ]
    ],

    'form_elements' => [
        'aliases' => [
            Controller\TextPageController::class =>
                \MSBios\Content\Resource\Form\TextPageForm::class
        ]
    ],

    \MSBios\Theme\Module::class => [
        'themes' => [
            'limitless' => [
                'template_path_stack' => [
                    __DIR__ . '/../themes/limitless/view/',
                ],
                'translation_file_patterns' => [
                    [
                        'type' => 'gettext',
                        'base_dir' => __DIR__ . '/../themes/limitless/language/',
                        'pattern' => '%s.mo',
                    ],
                ],
            ],
        ]
    ],

    \MSBios\Guard\Module::class => [
        'role_providers' => [
            \MSBios\Guard\Provider\RoleProvider::class => [
                // ...
            ]
        ],

        'resource_providers' => [
            \MSBios\Guard\Provider\ResourceProvider::class => [
                Controller\TextPageController::class => [
                    // ...
                ],
            ]
        ],

        'rule_providers' => [
            \MSBios\Guard\Provider\RuleProvider::class => [
                'allow' => [
                    [['DEVELOPER'], Controller\TextPageController::class],
                ],
                'deny' => [
                    // ...
                ]
            ]
        ]
    ]
];
