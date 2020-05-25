<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Section;

/**
 * Class AdvantageItems
 *
 * @property \App\AdvantageItem $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class AdvantageItems extends Section implements Initializable
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
    protected $title = "Список товаров";

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
            \AdminFormElement::image('image', 'Фото')->setHelpText('<span style="color: black;">Рекомендуемый размер:</span> <span style="color: red; font-size: 16px;">560x245px</span>'),
            \AdminFormElement::select('advantage_id')->setLabel('Выбрать категорию')->setModelForOptions(\App\Advantage::class)->setDisplay('title'),
            \AdminFormElement::wysiwyg('description', 'Текст'),
            \AdminFormElement::html('
                        <div id="document-row" style="display: flex; width: 100%;">
                            <div id="document-list" style="width: 50%;">
                                <input type="file"  name="files" style="padding: 10px;"  class="webcampics">
                            </div>
                            
                            <div id="document-btn" style="width: 50%; height: auto; display: flex; align-items: center; justify-content: center;">
                                <a href="#/" class="btn btn-primary" id="add-doc"> Ещё один документ</a>

                                <script>
                                    window.onload = function(){
                                        var field = document.getElementById("add-doc");

                                        field.onclick = function () {
                                            var div = document.createElement("input");
                                            div.type = "file";
                                            div.name = "files";
                                            div.className = "webcampics"; 
                                            div.style.padding = "10px";
                                            document.getElementById("document-list").appendChild(div);
                                        };
                                    }
                                    var inputs = document.getElementsByClassName( "webcampics" ),
                                    names  = [].map.call(inputs, function( input ) { return input.value; }).join( "|" );
                                </script>
                            </div>
                        </div>
                       ')           
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
