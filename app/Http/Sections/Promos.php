<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\FormButton;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;


/**
 * Class Promos
 *
 * @property \App\Promo $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Promos extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Промо";

    /**
     * @var string
     */
    protected $alias;

    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-tags')->setPriority(4);
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $promos = \DB::table('promos')->first();
        if(isset($promos))
        {
            return $this->fireEdit($promos->id);
        }
        return $this->fireEdit(0);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $form = \AdminForm::panel()->addBody(
            \AdminFormElement::image('image', 'Картинка'),
            \AdminFormElement::text('title', 'Название'),
            \AdminFormElement::wysiwyg('information', 'Информация', 'ckeditor')
        );
        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
