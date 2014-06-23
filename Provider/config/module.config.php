<?php
/**
 * 
 * @package Provider
 * @author Jonathan Greco <jgreco@docsourcing.com>  
 * @author Bastien Hérault <bherault@docsourcing.com> 
 */
namespace Provider;
return array(
    'controllers' => array(
        'factories' => array(
            'Provider\Controller\Provider' => 'Provider\Factory\ProviderControllerFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'provider' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/provider',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'Provider\Controller\Provider',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'translator' => array(
        'locale' => 'fr_FR',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Provider\Service\Provider' => 'Provider\Factory\ProviderServiceFactory',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'provider' => __DIR__ . '/../view',
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            'Provider_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => __DIR__ . '/../src/'.__NAMESPACE__.'/Entity',
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__.'\Entity' => 'Provider_entity',
                )
            )
        )
    ),
);