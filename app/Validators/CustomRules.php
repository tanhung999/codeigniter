<?php
namespace App\Validators;

use CodeIgniter\Validation\Rules;

class CustomRules
{
    public function matchesPassword(string $passwordConfirm, string $field, array $data, string $error = null): bool
    {
        return isset($data['password']) && $passwordConfirm === $data['password'];
    }
}