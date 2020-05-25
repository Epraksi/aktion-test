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
 * Class Banners
 *
 * @property \App\Banner $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Banners extends Section implements Initializable
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
    protected $title = "Баннер";

    /**
     * @var string
     */
    protected $alias;

    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-tv')->setPriority(0);
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $banners = \DB::table('banners')->first();
        if(isset($banners))
        {
            return $this->fireEdit($banners->id);
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
            \AdminFormElement::image('image', 'Картинка')->setHelpText('1920x621px - самый лучший вариант для размера картинки'),
            \AdminFormElement::wysiwyg('information', 'Информация на баннере', 'ckeditor')
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
