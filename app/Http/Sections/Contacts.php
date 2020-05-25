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
 * Class Contacts
 *
 * @property \App\Contact $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Contacts extends Section implements Initializable
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
    protected $title = "Контакты";

    /**
     * @var string
     */
    protected $alias;


    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-phone')->setPriority(6);
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $contacts = \DB::table('contacts')->first();
        if(isset($contacts))
        {
            return $this->fireEdit($contacts->id);
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
            \AdminFormElement::text('address', 'Адрес'),
            \AdminFormElement::text('phone', 'Телефон'),
            \AdminFormElement::text('fax', 'Факс'),
            \AdminFormElement::text('email', 'Email'),
            \AdminFormElement::text('schedule', 'Расписание'),
            \AdminFormElement::text('map', 'Код карты')
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
