<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Post;

final readonly class PostCreate
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        return Post::create([
            'title' => $args['title'],
            'content' => $args['content'],
            'user_id' => $args['user_id'],
        ]);
    }
}
