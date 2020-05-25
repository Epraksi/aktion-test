<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class Advantages
 *
 * @property \App\Advantage $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Advantages extends Section implements Initializable
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
    protected $title = "Категории";

    /**
     * @var string
     */
    protected $alias;

    public function initialize(){}

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return \AdminDisplay::table()->setColumns([
            \AdminColumn::link('title')->setLabel('Заголовок')
        ]);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $form = \AdminForm::panel()->addBody(
            \AdminFormElement::text('title', 'Заголовок'),
            \AdminFormElement::text('icon', 'Код картинки')->setHelpText('Коды картинок можно взять по <a href="https://adminlte.io/themes/AdminLTE/pages/UI/icons.html" target="_blank">ссылке</a>'),
            \AdminFormElement::wysiwyg('brief_description', 'Текст для превью')
        );

        $form->getButtons()->setButtons([
            'save_and_close' => new SaveAndClose(),
        ]);

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
