<?php

namespace App\Helpers;

class DynamicValidation
{
    public static function generate(
        $schema
    ) {

        $rules = [];

        foreach (
            $schema as $field
        ) {

            $rule = [];

            if (
                ! empty(
                    $field['required']
                )
            ) {

                $rule[] = 'required';

            }

            switch (
                $field['type']
            ) {

                case 'text':

                    $rule[] = 'string';

                    break;

                case 'textarea':

                    $rule[] = 'string';

                    break;

                case 'image':

                    $rule[] = 'nullable';

                    $rule[] = 'image';

                    break;

            }

            $rules[
                $field['name']
            ] = implode(
                '|',
                $rule
            );

        }

        return $rules;

    }
}
