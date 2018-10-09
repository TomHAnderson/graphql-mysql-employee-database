<?php
return [
    'zf-doctrine-graphql-hydrator' => [
        'ZF\\Doctrine\\GraphQL\\Hydrator\\Db_Entity_Department' => [
            'default' => [
                'entity_class' => \Db\Entity\Department::class,
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'by_value' => true,
                'use_generated_hydrator' => true,
                'hydrator' => null,
                'naming_strategy' => null,
                'strategies' => [
                    'id' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'name' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'departmentEmployee' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\AssociationDefault::class,
                    'departmentManager' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\AssociationDefault::class,
                ],
                'filters' => [
                    'default' => [
                        'condition' => 'and',
                        'filter' => \ZF\Doctrine\GraphQL\Hydrator\Filter\FilterDefault::class,
                    ],
                ],
                'documentation' => [
                    '_entity' => '',
                    'id' => '',
                    'name' => '',
                ],
            ],
        ],
        'ZF\\Doctrine\\GraphQL\\Hydrator\\Db_Entity_DepartmentEmployee' => [
            'default' => [
                'entity_class' => \Db\Entity\DepartmentEmployee::class,
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'by_value' => true,
                'use_generated_hydrator' => true,
                'hydrator' => null,
                'naming_strategy' => null,
                'strategies' => [
                    'fromDate' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'toDate' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'department' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\AssociationDefault::class,
                    'employee' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\AssociationDefault::class,
                ],
                'filters' => [
                    'default' => [
                        'condition' => 'and',
                        'filter' => \ZF\Doctrine\GraphQL\Hydrator\Filter\FilterDefault::class,
                    ],
                ],
                'documentation' => [
                    '_entity' => '',
                    'fromDate' => '',
                    'toDate' => '',
                ],
            ],
        ],
        'ZF\\Doctrine\\GraphQL\\Hydrator\\Db_Entity_DepartmentManager' => [
            'default' => [
                'entity_class' => \Db\Entity\DepartmentManager::class,
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'by_value' => true,
                'use_generated_hydrator' => true,
                'hydrator' => null,
                'naming_strategy' => null,
                'strategies' => [
                    'fromDate' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'toDate' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'department' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\AssociationDefault::class,
                    'employee' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\AssociationDefault::class,
                ],
                'filters' => [
                    'default' => [
                        'condition' => 'and',
                        'filter' => \ZF\Doctrine\GraphQL\Hydrator\Filter\FilterDefault::class,
                    ],
                ],
                'documentation' => [
                    '_entity' => '',
                    'fromDate' => '',
                    'toDate' => '',
                ],
            ],
        ],
        'ZF\\Doctrine\\GraphQL\\Hydrator\\Db_Entity_Employee' => [
            'default' => [
                'entity_class' => \Db\Entity\Employee::class,
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'by_value' => true,
                'use_generated_hydrator' => true,
                'hydrator' => null,
                'naming_strategy' => null,
                'strategies' => [
                    'id' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\ToInteger::class,
                    'birthDate' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'firstName' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'gender' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'hireDate' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'lastName' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'departmentEmployee' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\AssociationDefault::class,
                    'departmentManager' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\AssociationDefault::class,
                    'salary' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\AssociationDefault::class,
                    'title' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\AssociationDefault::class,
                ],
                'filters' => [
                    'default' => [
                        'condition' => 'and',
                        'filter' => \ZF\Doctrine\GraphQL\Hydrator\Filter\FilterDefault::class,
                    ],
                ],
                'documentation' => [
                    '_entity' => '',
                    'id' => '',
                    'birthDate' => '',
                    'firstName' => '',
                    'gender' => '',
                    'hireDate' => '',
                    'lastName' => '',
                ],
            ],
        ],
        'ZF\\Doctrine\\GraphQL\\Hydrator\\Db_Entity_Salary' => [
            'default' => [
                'entity_class' => \Db\Entity\Salary::class,
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'by_value' => true,
                'use_generated_hydrator' => true,
                'hydrator' => null,
                'naming_strategy' => null,
                'strategies' => [
                    'fromDate' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'salary' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\ToInteger::class,
                    'toDate' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'employee' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\AssociationDefault::class,
                ],
                'filters' => [
                    'default' => [
                        'condition' => 'and',
                        'filter' => \ZF\Doctrine\GraphQL\Hydrator\Filter\FilterDefault::class,
                    ],
                ],
                'documentation' => [
                    '_entity' => '',
                    'fromDate' => '',
                    'salary' => '',
                    'toDate' => '',
                ],
            ],
        ],
        'ZF\\Doctrine\\GraphQL\\Hydrator\\Db_Entity_Title' => [
            'default' => [
                'entity_class' => \Db\Entity\Title::class,
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'by_value' => true,
                'use_generated_hydrator' => true,
                'hydrator' => null,
                'naming_strategy' => null,
                'strategies' => [
                    'fromDate' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'title' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'toDate' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\FieldDefault::class,
                    'employee' => \ZF\Doctrine\GraphQL\Hydrator\Strategy\AssociationDefault::class,
                ],
                'filters' => [
                    'default' => [
                        'condition' => 'and',
                        'filter' => \ZF\Doctrine\GraphQL\Hydrator\Filter\FilterDefault::class,
                    ],
                ],
                'documentation' => [
                    '_entity' => '',
                    'fromDate' => '',
                    'title' => '',
                    'toDate' => '',
                ],
            ],
        ],
    ],
];
