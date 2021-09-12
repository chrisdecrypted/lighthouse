<?php

namespace App\GraphQL\Queries;

use App\Models\Post;
use Illuminate\Support\Str;
use GraphQl\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;


class LatestPost
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return Post::all()->first();
    }

}
