<?php

namespace Spatie\DataTransferObject;

use Spatie\DataTransferObject\Reflection\DataTransferObjectProperty;
use Spatie\DataTransferObject\Validation\ValidationResult;

interface Validator
{
    public function validate(
        mixed $value,
        DataTransferObject $dataTransferObject,
        DataTransferObjectProperty $dataTransferObjectProperty,
    ): ValidationResult;
}
