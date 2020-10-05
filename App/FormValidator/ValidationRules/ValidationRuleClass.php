<?php


namespace App\FormValidator\ValidationRules;


use App\FormInterface;

abstract class ValidationRuleClass implements ValidationRuleInterface
{
    const ERROR = "Ошибка при заполнении формы";

    abstract public static function checkParameters(FormInterface $form): bool;

    abstract public static function getError():string;
}