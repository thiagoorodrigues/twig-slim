<?php

namespace app\src;

use app\traits\Validations;

class Validate
{
    use Validations;

    public function validate(array $rules)
    {
        $errors = [];

        foreach ($rules as $field => $rule) {
            $rules = explode(':', $rule);

            foreach ($rules as $rule) {
                $this->$rule($field);
            }
        }
    }

    private function hasOneValidation($rule)
    {
        return substr_count($rule, ':') == 0;
    }

    private function hasTwoOrMoreValidation($rule)
    {
        return substr_count($rule, ':') >= 1;
    }
}
