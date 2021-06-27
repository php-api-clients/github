<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\Resource\Repository\Tag as BaseTag;
use Exception;

class Tag extends BaseTag
{
    public function refresh(): Tag
    {
        throw new Exception('TODO: create refresh method!');
    }
}
