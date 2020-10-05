<?php


namespace App\FormValidator\ValidationRules;


use App\FormInterface;

class PasswordValidationRule implements ValidationRuleInterface
{
    private FormInterface $form;

    public function __construct(FormInterface $form)
    {
        $this->form = $form;
    }

    public function checkParameters(): bool
    {

    }

    public function getLastError(): string
    {
        // TODO: Implement getLastError() method.
    }
}