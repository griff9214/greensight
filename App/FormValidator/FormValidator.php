<?php


namespace App\FormValidator;


use App\FormInterface;
use App\FormValidator\ValidationRules\EmailFormatRule;
use App\FormValidator\ValidationRules\EmptyFieldsRule;
use App\FormValidator\ValidationRules\PasswordLenghtRule;
use App\FormValidator\ValidationRules\PasswordsAreEqualRule;
use App\FormValidator\ValidationRules\ValidationRuleInterface;

class FormValidator implements FormValidatorInterface
{
    private FormInterface $form;
    /**
     * @var ValidationRuleInterface[]
     */
    private array $rules;
    private string $validateError;

    public function __construct(FormInterface $form)
    {
        $this->form = $form;
        /**
         * @var ValidationRuleInterface[]
         */
        $this->rules = [
            EmptyFieldsRule::class,
            PasswordLenghtRule::class,
            PasswordsAreEqualRule::class,
            EmailFormatRule::class
        ];
    }

    public function getError(): ?string
    {
        return $this->validateError ?? null;
    }

    public function validate(): bool
    {
        foreach ($this->rules as $rule) {
            if (!$rule::checkParameters($this->form)) {
                $this->validateError = $rule::getError();
                return false;
            }
        }
        return true;
    }
}