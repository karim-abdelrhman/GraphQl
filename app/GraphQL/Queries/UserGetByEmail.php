<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\User;

final readonly class UserGetByEmail
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        return User::where('email', $args['email'])->first();
    }
}
