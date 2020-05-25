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
 * Class Settings
 *
 * @property \App\Setting $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Settings extends Section implements Initializable
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
    protected $title = "Настройки";

    /**
     * @var string
     */
    protected $alias;

    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-gear');
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $settings = \DB::table('settings')->first();
        if(isset($settings))
        {
            return $this->fireEdit($settings->id);
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
            \AdminFormElement::image('logo', 'Логотип'),
            \AdminFormElement::wysiwyg('schedule', 'Режим работы', 'ckeditor'),
            \AdminFormElement::wysiwyg('route', 'Наш адрес', 'ckeditor'),
            \AdminFormElement::wysiwyg('phone', 'Наш телефон', 'ckeditor'),
            \AdminFormElement::wysiwyg('bottom_contacts', 'Контакты в футере', 'ckeditor')
        );

        // $form->getButtons()->setButtons([
        //     'save_and_close' => new SaveAndClose(),
        // ]);

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
