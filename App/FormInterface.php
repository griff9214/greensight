<?php

namespace App;

interface FormInterface
{
    public function getName(): string;

    public function getSecondName(): string;

    public function getEmail(): string;

    public function getPassword(): string;

    public function getConfirmation(): string;
}