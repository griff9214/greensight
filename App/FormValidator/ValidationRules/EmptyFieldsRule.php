<?php


namespace App\FormValidator\ValidationRules;


use App\FormInterface;

class EmptyFieldsRule extends ValidationRuleClass
{

    const ERROR = "Все поля должны быть заполнены";

    public static function checkParameters(FormInterface $form): bool
    {
        return !in_array("", $form->getAllFields(), true);
    }

    public static function getError(): string
    {
        return self::ERROR;
    }
}