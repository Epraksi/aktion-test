<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\Setting::class => 'App\Http\Sections\Settings',
        \App\Banner::class => 'App\Http\Sections\Banners',
        \App\Choice::class => 'App\Http\Sections\Choices',
        \App\Advantage::class => 'App\Http\Sections\Advantages',
        \App\AdvantageItem::class => 'App\Http\Sections\AdvantageItems',
        \App\Promo::class => 'App\Http\Sections\Promos',
        \App\Partner::class => 'App\Http\Sections\Partners',
        \App\News::class => 'App\Http\Sections\Newses',
        \App\Contact::class => 'App\Http\Sections\Contacts',
        \App\Document::class => 'App\Http\Sections\Documents',
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
