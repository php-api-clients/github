<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Git;

use ApiClients\Client\Github\Resource\Git\NamedBlog as BaseNamedBlog;

class NamedBlog extends BaseNamedBlog
{
    public function refresh(): NamedBlog
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
