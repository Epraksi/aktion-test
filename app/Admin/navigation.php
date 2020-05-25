<?php

use SleepingOwl\Admin\Navigation\Page;

AdminNavigation::setFromArray([
    [
        'title' => "Наши товары",
        'icon' => 'fa fa-star',
        'priority' =>'3',
        'pages' => [
            (new Page(\App\Advantage::class))
                ->setIcon('fa fa-bookmark-o'),
            (new Page(\App\AdvantageItem::class))
                ->setIcon('fa fa-bookmark-o'),
        ]
    ],
]);

return [
    [
        'title' => 'Выход',
        'icon'  => 'fa fa-power-off',
        'url'   =>  url('/logout'),
    ],
];