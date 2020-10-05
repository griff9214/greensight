<?php


namespace App\FormValidator;


interface FormValidatorInterface
{
    public function validate(): bool;

    public function getError(): ?string;
}