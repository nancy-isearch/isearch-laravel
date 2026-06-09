<?php

namespace App\Helpers;

class DynamicFormRenderer
{
    public static function render(
        $field,
        $content=[]
    )
    {

        $value =
            data_get(
                $content,
                $field['name']
            );

        return view(

            'admin.fields.'.
            $field['type'],

            compact(
                'field',
                'value'
            )

        );

    }
}