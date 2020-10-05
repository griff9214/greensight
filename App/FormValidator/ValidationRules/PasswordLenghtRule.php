<?php


namespace App\FormValidator\ValidationRules;


use App\FormInterface;

class PasswordLenghtRule extends ValidationRuleClass
{
    const ERROR = "Пароль должен быть не менее 8 символов";

    public static function checkParameters(FormInterface $form): bool
    {
        if (strlen($form->getPassword()) < 8) {
            return false;
        }
        return true;
    }

    public static function getError(): string
    {
        return self::ERROR;
    }
}