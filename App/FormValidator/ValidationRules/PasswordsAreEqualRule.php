<?php


namespace App\FormValidator\ValidationRules;


use App\FormInterface;

class PasswordsAreEqualRule extends ValidationRuleClass
{
    const ERROR = "Пароль и его подтверждение не совпадают";

    public static function checkParameters(FormInterface $form): bool
    {
        if ($form->getPassword() !== $form->getPasswordConfirmation()) {
            return false;
        }
        return true;
    }

    public static function getError(): string
    {
        return self::ERROR;
    }
}