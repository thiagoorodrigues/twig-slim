<?php

namespace app\traits;

trait Validations
{
    private $erros = [];

    protected function required($field)
    {
        if (empty($_POST[$field])) {
            $this->erros[$field][] = flash(
                $field,
                erro('*Esse campo é obrigatório.')
            );
        }
    }

    protected function email()
    {
    }

    protected function phone()
    {
    }

    protected function unique()
    {
    }

    protected function max()
    {
    }

    public function hasErros()
    {
        return !empty($this->erros);
    }
}
