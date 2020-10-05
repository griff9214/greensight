<?php


namespace App\FormValidator\ValidationRules;


use App\FormInterface;

interface ValidationRuleInterface
{
    public static function checkParameters(FormInterface $form): bool;

    public static function getError():string;
}