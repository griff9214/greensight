<?php


namespace App;


class FormData implements FormInterface
{
    private string $name;
    private string $secondName;
    private string $email;
    private string $password;
    private string $passwordConfirmation;

    public function __construct(string $name, string $secondName, string $email, string $password, string $passwordConfirmation)
    {
        $this->name = $name;
        $this->secondName = $secondName;
        $this->email = $email;
        $this->password = $password;
        $this->passwordConfirmation = $passwordConfirmation;
    }

    public function getAllFields(): array
    {
        return [
            $this->name,
            $this->secondName,
            $this->email,
            $this->password,
            $this->passwordConfirmation,
        ];
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getPasswordConfirmation(): string
    {
        return $this->passwordConfirmation;
    }

    public function getSecondName(): string
    {
        return $this->secondName;
    }
}