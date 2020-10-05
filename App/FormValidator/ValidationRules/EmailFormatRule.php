<?php


namespace App\FormValidator\ValidationRules;


use App\FormInterface;

class EmailFormatRule extends ValidationRuleClass
{
    const ERROR = "Неправильно введен E-mail";

    public static function checkParameters(FormInterface $form): bool
    {
        if (!filter_var($form->getEmail(), FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    public static function getError(): string
    {
        return self::ERROR;
    }
}