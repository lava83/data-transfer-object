<?php

namespace Spatie\DataTransferObject;

use Spatie\DataTransferObject\Validation\ValidationResult;

interface Validator
{
    public function validate(mixed $value, array $context = []): ValidationResult;
}
