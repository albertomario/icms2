<?php

class formWidgetTextOptions extends cmsForm {

    public function init() {

        return array(

            array(
                'type' => 'fieldset',
                'title' => LANG_OPTIONS,
                'childs' => array(

                    new fieldHtml('options:content', array(
                        'title' => LANG_WD_TEXT_CONTENT,
                        'options' => array('editor' => cmsConfig::get('default_editor')),
                        'rules' => array(
                            array('required')
                        )
                    )),

                )
            ),

        );

    }

}
