<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class Newses
 *
 * @property \App\News $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Newses extends Section implements Initializable
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
    protected $title = "Новости";

    /**
     * @var string
     */
    protected $alias;


    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-newspaper-o')->setPriority(6);
    }
    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return \AdminDisplay::table()->setColumns([
            \AdminColumn::link('title')->setLabel('Заголовок новости'),
            \AdminColumn::image('image')->setLabel('Фото')
        ])->paginate(10);
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
            \AdminFormElement::image('image', 'Фото для превью')->setHelpText('<span style="color: black;">Рекомендуемый размер:</span> <span style="color: red; font-size: 16px;">560x315px</span>'),
            \AdminFormElement::wysiwyg('brief_description', 'Текст для предпросмотра новости'),
            \AdminFormElement::wysiwyg('full_description', 'Полный текст новости')
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
