<?php declare(strict_types=1);

namespace App\GraphQL\Validators;

use Nuwave\Lighthouse\Validation\Validator;

final class ValidatePostCreate extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:1', 'max:255'],
            'content' => ['required', 'min:1', 'max:255'],
            'user_id' => ['required', 'exists:users,id'],
        ];
    }
}
