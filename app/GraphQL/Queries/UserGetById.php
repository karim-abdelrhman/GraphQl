<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\User;

final readonly class UserGetById
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        //get the user
//        return "true";
        return User::find($args['id']);
    }
}
